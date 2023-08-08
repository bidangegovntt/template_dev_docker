<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['sender_id', 'receiver_id', 'notifable_type', 'notifable_id', 'unread_counter'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }

    public function notifable()
    {
        return $this->morphTo();
    }

    public function notifiable()
    {
        return $this->morphTo();
    }

    public function scopeUnread($qb)
    {
        $qb->where('unread_counter', '>', 0);
    }
}
