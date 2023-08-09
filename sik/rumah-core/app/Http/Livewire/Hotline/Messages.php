<?php

namespace App\Http\Livewire\Hotline;

use App\Models\ChatRoom;
use App\Models\ChatRoomMessage;
use App\Models\ChatRoomUser;
use App\Models\Notification;
use App\Models\User;
use Auth;
use Livewire\Component;

class Messages extends Component
{
    public $message;

    public $allMessages;

    public $sender;

    public $chatRoomData;

    public function mount(ChatRoom $chatRoom)
    {
        $this->chatRoomData = $chatRoom->only(['id', 'name']);
    }

    public function render()
    {
        $this->updateReadNotification();

        $chatRoom = ChatRoom::find($this->chatRoomData['id']);

        return view('livewire.hotline.messages', compact('chatRoom'));
    }

    public function mountdata()
    {
        $chatRoom = ChatRoom::find($this->chatRoomData['id']);
        $chatRoom->load('messages.sender');

        $this->allMessages = $chatRoom->messages;

        $this->dispatchBrowserEvent('goto-last-chat');
    }

    public function SendMessage()
    {
        $chatRoom = ChatRoom::find($this->chatRoomData['id']);

        $user = Auth::user();
        // $user = User::find(1);

        $chatRoom->addUserMessage($user, $this->message);
        $chatRoom->save();

        $receiver = ChatRoomUser::where('chat_room_id', $this->chatRoomData['id'])
            ->whereNotIn('user_id', [
                Auth::user()->id
            ])
            ->groupByRaw('user_id')
            ->get();

        if (sizeof($receiver) > 0) {
            foreach ($receiver as $key => $value) {
                $notification_item = Notification::where('notifable_type', 'App\Models\ChatRoomUser')
                    ->where('notifable_id', $this->chatRoomData['id'])
                    ->where('receiver_id', $value->user_id)
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
                        'receiver_id' => $value->user_id,
                        'notifable_type' => 'App\Models\ChatRoomUser',
                        'notifable_id' => $this->chatRoomData['id'],
                    ]);
                }
            }
        }

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->message = '';
    }

    public function updateReadNotification()
    {
        if (Auth::check()) {
            $notif = Notification::where('receiver_id', Auth::user()->id)
                ->where('notifable_type', 'App\Models\ChatRoomUser')
                ->where('notifable_id', $this->chatRoomData['id'])
                ->where('unread_counter', '>', '0')
                ->get();

            if (sizeof($notif) > 0) {
                $itemNotif = Notification::find($notif[0]->id);

                $itemNotif->unread_counter = 0;

                $itemNotif->save();
            }
        }
    }
}
