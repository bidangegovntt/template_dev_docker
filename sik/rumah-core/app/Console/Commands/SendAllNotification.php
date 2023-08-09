<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\NotificationSummary;
use App\Models\Notification;
use App\Models\NotificationEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

// use Mail;

class SendAllNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email-notification:sendall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send all unnotificable user notification';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $notifications = Notification::unread(['unread_counter' => '> 0'])
            ->groupBy('receiver_id')
            ->get();

        $notifications->each(function ($notif) {
            if ($notif->receiver->email) {
                $check_sent_email = DB::table('notification_emails')->where('email', $notif->receiver->email);

                if ($check_sent_email->count() > 0) {
                    /* jika selisih log email lebih dari sama dengan 1 hari maka kirim email */
                    $data_sent_mail = $check_sent_email->first();

                    $updated_at = date_create($data_sent_mail->updated_at);

                    $hari_ini = date_create(date('Y-m-d H:i:s'));

                    $interval = date_diff($updated_at, $hari_ini);

                    $selisih_hari = $interval->format('%a');

                    if ($selisih_hari > 0) {
                        $this->info("Sending email to {$notif->receiver->email} ...");

                        Mail::to($notif->receiver)->send(new NotificationSummary($notif));

                        if (count(Mail::failures()) < 1) {
                            $this->info("email telah dikirim ke {$notif->receiver->email}");

                            DB::table('notification_emails')
                                ->where('id', $data_sent_mail->id)
                                ->update(
                                    ['updated_at' => date('Y-m-d H:i:s'),]
                                );
                        } else {
                            $this->error("email gagal dikirim ke {$notif->receiver->email}");
                        }
                    }
                } else {
                    /* jika belum ada data di log maka kirim email */
                    $this->info("Sending email to {$notif->receiver->email} ...");

                    Mail::to($notif->receiver)->send(new NotificationSummary($notif));

                    if (count(Mail::failures()) < 1) {
                        $this->info("email telah dikirim ke {$notif->receiver->email}");

                        $notification_email = new NotificationEmail();

                        $notification_email->email = $notif->receiver->email;

                        $notification_email->save();
                    } else {
                        $this->error("email gagal dikirim ke {$notif->receiver->email}");
                    }
                }
            }
        });

        return Command::SUCCESS;
    }
}
