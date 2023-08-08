<?php

namespace App\Http\Livewire\Home\ForumReplikasi;

use App\Helpers\Queries;
use App\Models\Innovation;
use App\Models\Notification;
use App\Models\ReplicationTopic;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ForumReplikasiListTopic extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $innovation_id;
    public $judul_baru;
    public $isi_baru;

    protected $validationAttributes = [
        'judul_baru' => 'Judul Topik',
    ];

    public function render()
    {
        // dd(Notification::where('receiver_id', '1')
        //         ->where('notification_type', 'replication')
        //         ->where('notification_id', '1')
        //         ->get()->id);

        $innovation = Queries::showInnovation($this->innovation_id);

        if (empty($innovation)) {
            return abort('404');
        }

        $topics = Queries::replicationTopicListByInnovation(5, $this->innovation_id);

        return view('livewire.home.forum-replikasi.forum-replikasi-list-topic', [
            'innovation' => $innovation,
            'topics' => $topics,
        ]);
    }

    public function saveNewTopic()
    {
        // dd($this->judul_baru, $this->isi_baru);

        $this->validate([
            'judul_baru' => 'required|max:255',
            // 'isi_baru' => 'required',
        ]);

        if ($this->isi_baru == '<p><br></p>' or $this->isi_baru == null) {
            session()->flash('error-isi-topik-baru', 'Isi topik tidak boleh kosong');
        } else {
            $rep_baru = ReplicationTopic::create([
                'sender_id' => Auth::user()->id,
                'innovation_id' => $this->innovation_id,
                'title' => $this->judul_baru,
                'content' => $this->isi_baru,
                'reply_count' => 0,
                'last_post_at' => date('Y-m-d H:i:s'),
                'last_post_by' => Auth::user()->id,
            ]);

            $innovator_id = Innovation::find($this->innovation_id)->innovator_id;

            $notification_item = Notification::where('receiver_id', $innovator_id)
                ->where('notifable_type', 'App\Models\ReplicationTopic')
                ->where('notifable_id', $rep_baru->id)
                ->get();

            if (sizeof($notification_item) > 0) {
                $notification = Notification::find($notification_item[0]->id);

                $notification->unread_counter = 1;

                $notification->save();
            } else {
                $rep_baru->notifable()->create([
                    'sender_id' => Auth::user()->id,
                    'receiver_id' => $innovator_id,
                ]);
            }

            $this->resetNewTopics();
        }
    }

    public function resetNewTopics()
    {
        $this->judul_baru = null;
        $this->isi_baru = null;

        $this->dispatchBrowserEvent('clear-isi-topik');

        $this->gotoPage('1');
    }
}
