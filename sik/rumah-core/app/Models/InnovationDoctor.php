<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnovationDoctor extends Model
{
    use HasFactory;

    public function innovations()
    {
        return $this->hasMany(Innovation::class);
    }

    /**
     * Get innovation doctor's user
     */
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function myDummyUser()
    {
        $doctorUser = User::where('role', 'doctor')->first();

        return $doctorUser;
    }
}
