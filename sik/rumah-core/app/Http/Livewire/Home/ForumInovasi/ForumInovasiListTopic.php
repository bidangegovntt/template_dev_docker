<?php

namespace App\Http\Livewire\Home\ForumInovasi;

use App\Helpers\Queries;
use App\Models\InnovationTopic;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ForumInovasiListTopic extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    // public $innovation_id;
    public $judul_baru;
    public $isi_baru;

    protected $validationAttributes = [
        'judul_baru' => 'Judul Topik',
    ];

    public function render()
    {
        $topics = Queries::innovationTopicList(5);

        return view('livewire.home.forum-inovasi.forum-inovasi-list-topic', [
            'topics' => $topics,
        ]);
    }

    public function saveNewTopic()
    {
        $this->validate([
            'judul_baru' => 'required|max:255',
            // 'isi_baru' => 'required',
        ]);

        if ($this->isi_baru == '<p><br></p>' or $this->isi_baru == null) {
            session()->flash('error-isi-topik-baru', 'Isi topik tidak boleh kosong');
        } else {
            $topic = InnovationTopic::create([
                'sender_id' => Auth::user()->id,
                // 'innovation_id' => $this->innovation_id,
                'title' => $this->judul_baru,
                'content' => $this->isi_baru,
                'reply_count' => 0,
                'last_post_at' => date('Y-m-d H:i:s'),
                'last_post_by' => Auth::user()->id,
            ]);

            $innovationDoctor = User::role('dokter inovasi')->get();

            foreach ($innovationDoctor as $key => $value) {
                if ($value->id != Auth::user()->id) {
                    $notification_item = Notification::where('receiver_id', $value->id)
                        ->where('notifable_type', 'App\Models\InnovationTopic')
                        ->where('notifable_id', $topic->id)
                        ->get();

                    if (sizeof($notification_item) > 0) {
                        $notification = Notification::find($notification_item[0]->id);

                        $notification->unread_counter = 1;

                        $notification->save();
                    } else {
                        $topic->notifable()->create([
                            'sender_id' => Auth::user()->id,
                            'receiver_id' => $value->id,
                        ]);
                    }
                }
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
