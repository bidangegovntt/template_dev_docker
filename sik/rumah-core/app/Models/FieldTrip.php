<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FieldTrip extends Model
{
    use HasFactory, SoftDeletes;

    public function innovation()
    {
        return $this->belongsTo(Innovation::class);
    }
}
