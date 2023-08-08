<?php

namespace App\Http\Livewire\Home;

use App\Mail\ForgotPassword as MailForgotPassword;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class ForgotPassword extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.home.forgot-password');
    }

    public function kirim_email()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $token = Str::random(64);

        $set_data = [
            'email' => $this->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ];

        if (DB::table('password_resets')->where('email', $this->email)->count() > 0) {
            DB::table('password_resets')->where('email', $this->email)->update($set_data);
        } else {
            DB::table('password_resets')->insert($set_data);
        }

        Mail::to($this->email)
            ->send(new MailForgotPassword($token));

        if (count(Mail::failures()) > 0) {
            session()->flash('msg-error', 'Email gagal dikirim ke ' . $this->email);
        } else {
            session()->flash('msg-success', 'Email Berhasil dikirim ke ' . $this->email);
        }

        $this->email = null;
    }
}
