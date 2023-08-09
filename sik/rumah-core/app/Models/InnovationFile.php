<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;

class InnovationFile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $touches = ['innovation'];

    private $innovationFilePath = 'innovations_files';

    public function innovation()
    {
        return $this->belongsTo(Innovation::class, 'innovations_id', 'id');
    }

    public function attachmentType()
    {
        return $this->belongsTo(AttachmentType::class);
    }

    public function getInnovationFilePath()
    {
        return $this->innovationFilePath;
    }

    public function setFileFromBasename($filename)
    {
        $this->file_name = $filename;
        $this->file_name_hash = $this->innovationFilePath . '/' . $filename;

        return $this;
    }

    public function __toString()
    {
        return $this->file_name;
    }
}
