<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReplicationTopic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'sender_id',
        'innovation_id',
        'title',
        'content',
        'reply_count',
        'last_post_at',
        'last_post_by',
    ];

    public function innovation()
    {
        return $this->belongsTo(Innovation::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }

    public function detailTopic()
    {
        return $this->hasMany(ReplicationTopicDetail::class, 'topic_id', 'id');
    }

    public function notifable()
    {
        return $this->morphOne(Notification::class, 'notifable');
    }
}
