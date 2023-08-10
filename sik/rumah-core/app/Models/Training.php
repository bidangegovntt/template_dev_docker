<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use HasFactory, SoftDeletes;

    private $photoPath = 'training_files';

    public function __toString()
    {
        return $this->title;
    }

	public function getPhotoPath()
	{
		return $this->photoPath;
	}

    public function setPhotoFromBasename($filename)
    {
        if ($filename) {
            $this->photo = $this->getPhotoPath() . '/' . $filename;
        }

        return $this;
    }
}
