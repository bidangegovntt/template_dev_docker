<?php

namespace App\Http\Livewire\Home\ForumReplikasi;

use App\Helpers\Queries;
use App\Models\Innovation;
use App\Models\Notification;
use App\Models\ReplicationTopicDetail;
use App\Models\ReplicationTopic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ForumReplikasiShowTopic extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $innovation_id;
    public $topic_id;
    public $isi_baru;
    public $page_item = 5;

    public function render()
    {
        $this->updateReadNotification();

        $innovation = Queries::showInnovation($this->innovation_id);

        if (empty($innovation)) {
            return abort('404');
        }

        $topic = Queries::replicationTopicById($this->topic_id);
        $topicDetails = Queries::replicationTopicDetailList($this->page_item, $this->topic_id);

        return view('livewire.home.forum-replikasi.forum-replikasi-show-topic', [
            'innovation' => $innovation,
            'topic' => $topic,
            'topicDetails' => $topicDetails,
        ]);
    }

    public function mount()
    {
        if (request()->query('page') == "last") {
            $lastPage = Queries::replicationTopicDetailList($this->page_item, $this->topic_id)->lastPage();

            $this->gotoPage($lastPage);
        }

        if (request()->query('page') != "") {
            $lastPage = Queries::replicationTopicDetailList($this->page_item, $this->topic_id)->lastPage();

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

            ReplicationTopicDetail::create([
                'sender_id' => Auth::user()->id,
                'topic_id' => $this->topic_id,
                'content' => $this->isi_baru,
                'created_at' => $now,
            ]);

            $topic_maker = ReplicationTopic::find($this->topic_id)->sender_id;

            if ($topic_maker != Auth::user()->id) {
                $notification_item = Notification::where('notifable_type', 'App\Models\ReplicationTopic')
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
                        'notifable_type' => 'App\Models\ReplicationTopic',
                        'notifable_id' => $this->topic_id,
                    ]);
                }
            }

            $receiver = ReplicationTopicDetail::where('topic_id', $this->topic_id)
                ->whereNotIn('sender_id', [
                    Auth::user()->id,
                    $topic_maker,
                ])
                ->groupByRaw('sender_id')
                ->get();

            if (sizeof($receiver) > 0) {
                foreach ($receiver as $key => $value) {
                    $notification_item = Notification::where('notifable_type', 'App\Models\ReplicationTopic')
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
                            'notifable_type' => 'App\Models\ReplicationTopic',
                            'notifable_id' => $this->topic_id,
                        ]);
                    }
                }
            }

            $count = ReplicationTopicDetail::where("topic_id", $this->topic_id)->count();

            ReplicationTopic::where("id", $this->topic_id)
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
                ->where('notifable_type', 'App\Models\ReplicationTopic')
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
        $topic = ReplicationTopic::find($topic_id);

        $topic->delete();

        return redirect()->route('forum-replikasi-list-topic', ['innovation_id' => $this->innovation_id]);
    }

    public function deleteRespond($respon_id, $current_page)
    {
        $respon = ReplicationTopicDetail::find($respon_id);

        $respon->delete();

        return redirect()->route('forum-replikasi-show-topic', ['innovation_id' => $this->innovation_id, 'topic_id' => $this->topic_id, 'page' => $current_page]);
    }
}
