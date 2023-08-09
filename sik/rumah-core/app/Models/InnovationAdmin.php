<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnovationAdmin extends Model
{
    use HasFactory;

    public function innovations()
    {
        return $this->hasMany(Innovation::class);
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
