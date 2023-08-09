<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ChatRoomUser extends Model
{
    use HasFactory;

    // TODO rename table to chat_room_users
    protected $table = 'chat_room_user';

    public function rooms()
    {
        return $this->belongsTo(ChatRoom::class);
    }

    public function scopeOfUser(Builder $builder, User $user)
    {
        return $builder->where('user_id', $user->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function notifable()
    {
        return $this->morphOne(Notification::class, 'notifable');
    }
}
