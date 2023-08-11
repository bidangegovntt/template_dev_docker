<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Helpers\Slugger;

class TrainingCategory extends Model
{
    use HasFactory, SoftDeletes;

	public function training()
	{
		return $this->hasMany(Training::class);
	}

    public function __toString()
    {
        return $this->name;
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
}
