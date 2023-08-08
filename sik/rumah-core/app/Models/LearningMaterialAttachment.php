<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class LearningMaterialAttachment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $filePath = "learning_material_files";

    public function learningMaterial()
    {
        return $this->belongsTo(LearningMaterial::class);
    }

    public function setFileFromBasename($filename)
    {
        $this->file_name = $filename;
        $this->file_name_hash = $this->filePath. '/' . $filename;

        return $this;
    }

    public function getFilePath()
    {
        return $this->filePath;
    }

    public function __toString()
    {
        return $this->file_name;
    }
}
