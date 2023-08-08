<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Innovation extends Model
{
    use HasFactory;
    use SoftDeletes;

    private $photoFile;

    private $infographicsPath = 'innovation_pictures';

    private $photoPath = 'innovation_pictures';

    private $innovationFilesPath = 'innovation_files';

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function innovator()
    {
        return $this->belongsTo(User::class);
    }

    public function doctor()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'innovation_admin_id');
    }

    public function creator_id()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater_id()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function sustainabilityStatus()
    {
        return $this->belongsTo(SustainabilityStatus::class);
    }

    public function category()
    {
        return $this->belongsTo(InnovationCategory::class, 'category_id');
    }

    public function innovationFiles()
    {
        return $this->hasMany(InnovationFile::class, 'innovations_id');
    }

    public function replicationTopics()
    {
        return $this->hasMany(ReplicationTopic::class);
    }

    public function fieldTrips()
    {
        return $this->hasMany(FieldTrip::class);
    }

    public function scopePublished($query)
    {
        return $query->where('published_status', 'published');
    }

    public function scopeDraft($query)
    {
        return $query->where('published_status', 'draft');
    }

    public function scopeFromLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function getInfographicsPath()
    {
        return $this->infographicsPath;
    }

    public function setInfographicsFromBasename($filename)
    {
        if ($filename) {
            $this->infographics = $this->getInfographicsPath() . '/' . $filename;
        }

        return $this;
    }

    public function getPhotoPath()
    {
        return $this->photoPath;
    }

    public function getInnovationFilesPath()
    {
        return $this->innovationFilesPath;
    }

    public function setPhotoFromBasename($filename)
    {
        if ($filename) {
            $this->photo = $this->getPhotoPath() . '/' . $filename;
        }

        return $this;
    }

    public function __toString()
    {
        return $this->title;
    }

    public function geoloc()
    {
        return $this->latitude . "," . $this->longitude;
    }
}
