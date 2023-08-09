<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function innovations()
    {
        return $this->hasMany(Innovation::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
