<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Innovator extends Model
{
    use HasFactory;

    public function innovations()
    {
        return $this->belogsTo(Innovation::class);
    }

    /**
     * Get innovator's user
     */
    public function user()
    {
        return $this->morphOne(User::class, 'userable');

    }

    public function scopeFromLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
