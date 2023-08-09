<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class AttachmentType extends Model
{
    use HasFactory;

    public function innovationFiles()
    {
        return $this->hasMany(InnovationFile::class);
    }

    public function setNameAttribute($name)
    {
        $this->attributes['slug'] = Str::slug($name);
        $this->attributes['name'] = $name;
    }

    public function __toString()
    {
        return $this->name;
    }
}
