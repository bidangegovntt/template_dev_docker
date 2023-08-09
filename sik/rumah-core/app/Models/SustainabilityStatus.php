<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\Slugger;

class SustainabilityStatus extends Model
{
    use HasFactory;

    public function innovations()
    {
        return $this->hasMany(Innovation::class);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Slugger::slug($value);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Slugger::slug($value);
    }

    public function __toString()
    {
        return $this->name;
    }
}
