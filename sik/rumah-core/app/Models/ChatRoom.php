<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ChatRoom extends Model
{
    use HasFactory;

    public function generateName($prefix = '')
    {
        $this->name = $prefix . uniqid() . date('YmdHis');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function messages()
    {
        return $this->hasMany(ChatRoomMessage::class, 'room_id');
    }

    public function addUser(User $user)
    {
        if (! $this->users->contains($user))
        {
            $this->users()->attach($user);
        }
    }

    public function addUserMessage(User $user, $message)
    {
        $chatRoomMessage = ChatRoomMessage::make();
        $chatRoomMessage->message = $message;
        $chatRoomMessage->user_id = $user->id;
        // $chatRoomMessage->room_id = $this->id;
        // $chatRoomMessage->save();

        $this->messages()->save($chatRoomMessage);
    }

    public function room_users()
    {
        return $this->hasMany(ChatRoomUser::class, 'chat_room_id');
    }

    public function __toString()
    {
        return $this->name;
    }
}
