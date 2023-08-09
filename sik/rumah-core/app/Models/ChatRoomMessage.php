<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoomMessage extends Model
{
    use HasFactory;

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['room'];

    public function room()
    {
        return $this->belongsTo(ChatRoom::class);
    }

    public function sender()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function countUnread()
    {
        return rand(5, 25);
    }

    public function __toString()
    {
        return $this->message;
    }
}
