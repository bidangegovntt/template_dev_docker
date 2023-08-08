<?php

namespace App\Http\Livewire\Home\ForumInovasi;

use App\Helpers\Queries;
use App\Models\InnovationTopic;
use App\Models\InnovationTopicDetail;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ForumInovasiShowTopic extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $topic_id;
    public $isi_baru;
    public $page_item = 5;

    public function render()
    {
        $this->updateReadNotification();

        $topic = InnovationTopic::find($this->topic_id);
        $topicDetails = Queries::innovationTopicDetailList($this->page_item, $this->topic_id);

        return view('livewire.home.forum-inovasi.forum-inovasi-show-topic', [
            'topic' => $topic,
            'topicDetails' => $topicDetails,
        ]);
    }

    public function mount()
    {
        if (request()->query('page') == "last") {
            $lastPage = Queries::innovationTopicDetailList($this->page_item, $this->topic_id)->lastPage();

            $this->gotoPage($lastPage);
        }

        if (request()->query('page') != "") {
            $lastPage = Queries::innovationTopicDetailList($this->page_item, $this->topic_id)->lastPage();

            if (request()->query('page') > $lastPage) {
                $this->gotoPage($lastPage);
            }
        }
    }

    public function saveNewTopic()
    {
        if ($this->isi_baru == '<p><br></p>' or $this->isi_baru == null) {
            session()->flash('error-isi-topik-baru', 'Isi topik tidak boleh kosong');
        } else {
            $now = Date('Y-m-d H:i:s');

            InnovationTopicDetail::create([
                'sender_id' => Auth::user()->id,
                'topic_id' => $this->topic_id,
                'content' => $this->isi_baru,
                'created_at' => $now,
            ]);

            $topic_maker = InnovationTopic::find($this->topic_id)->sender_id;

            if ($topic_maker != Auth::user()->id) {
                $notification_item = Notification::where('notifable_type', 'App\Models\InnovationTopic')
                    ->where('notifable_id', $this->topic_id)
                    ->where('receiver_id', $topic_maker)
                    ->get();

                if (sizeof($notification_item) > 0) {
                    foreach ($notification_item as $key => $value) {
                        $notification = Notification::find($value->id);

                        $notification->unread_counter = 1;

                        $notification->save();
                    }
                } else {
                    Notification::create([
                        'sender_id' => Auth::user()->id,
                        'receiver_id' => $topic_maker,
                        'notifable_type' => 'App\Models\InnovationTopic',
                        'notifable_id' => $this->topic_id,
                    ]);
                }
            }

            $receiver = InnovationTopicDetail::where('topic_id', $this->topic_id)
                ->whereNotIn('sender_id', [
                    Auth::user()->id,
                    $topic_maker,
                ])
                ->groupByRaw('sender_id')
                ->get();

            if (sizeof($receiver) > 0) {
                foreach ($receiver as $key => $value) {
                    $notification_item = Notification::where('notifable_type', 'App\Models\InnovationTopic')
                        ->where('notifable_id', $this->topic_id)
                        ->where('receiver_id', $value->sender_id)
                        ->get();

                    if (sizeof($notification_item) > 0) {
                        foreach ($notification_item as $key => $value) {
                            $notification = Notification::find($value->id);

                            $notification->unread_counter = 1;

                            $notification->save();
                        }
                    } else {
                        Notification::create([
                            'sender_id' => Auth::user()->id,
                            'receiver_id' => $value->sender_id,
                            'notifable_type' => 'App\Models\InnovationTopic',
                            'notifable_id' => $this->topic_id,
                        ]);
                    }
                }
            }

            $count = InnovationTopicDetail::where("topic_id", $this->topic_id)->count();

            InnovationTopic::where("id", $this->topic_id)
                ->update([
                    'reply_count' => $count,
                    'last_post_at' => $now,
                    'last_post_by' => Auth::user()->id,
                ]);

            $this->resetNewTopics();
        }
    }

    public function resetNewTopics()
    {
        $this->isi_baru = null;

        $this->dispatchBrowserEvent('clear-isi-topik');

        $this->gotoPage('1');
    }

    public function updateReadNotification()
    {
        if (Auth::check()) {
            $notif = Notification::where('receiver_id', Auth::user()->id)
                ->where('notifable_type', 'App\Models\InnovationTopic')
                ->where('notifable_id', $this->topic_id)
                ->where('unread_counter', '>', '0')
                ->get();

            if (sizeof($notif) > 0) {
                $itemNotif = Notification::find($notif[0]->id);

                $itemNotif->unread_counter = 0;

                $itemNotif->save();
            }
        }
    }

    public function deleteTopic($topic_id)
    {
        $topic = InnovationTopic::find($topic_id);

        $topic->delete();

        return redirect()->route('forum-inovasi');
    }

    public function deleteRespond($respon_id, $current_page)
    {
        $respon = InnovationTopicDetail::find($respon_id);

        $respon->delete();

        return redirect()->route('forum-inovasi-show-topic', ['topic_id' => $this->topic_id, 'page' => $current_page]);
    }
}
