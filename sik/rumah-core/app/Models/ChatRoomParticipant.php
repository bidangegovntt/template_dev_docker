<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoomParticipant extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->belogsTo(ChatRoom::class);
    }
}
