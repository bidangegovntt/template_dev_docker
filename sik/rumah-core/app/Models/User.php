<?php

namespace App\Models;

use Auth;
use App\Constants\DefaultRole;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Traits\UploadFormFile;
use Storage;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use UploadFormFile;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $superAdminRoleName = DefaultRole::SUPER_ADMIN;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected $profilePhotoPathBasedir = 'profile_pictures';

    /**
     * Get parent userable model
     */
    public function userable()
    {
        return $this->morphTo();
    }

    public function replicationTopics()
    {
        return $this->hasMany(ReplicationTopic::class, 'sender_id', 'id');
    }

    public function replicationTopicDetails()
    {
        return $this->hasMany(ReplicationTopicDetail::class, 'sender_id', 'id');
    }

    public function innovationTopics()
    {
        return $this->hasMany(InnovationTopic::class, 'sender_id', 'id');
    }

    public function innovationTopicDetails()
    {
        return $this->hasMany(InnovationTopicDetail::class, 'sender_id', 'id');
    }

    public function innovatorOf()
    {
        return $this->hasMany(Innovation::class, 'innovator_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function setPasswordFromPlain($password)
    {
        $this->password = Hash::make($password);
    }

    public function isMe(User $user = null)
    {
        if (! $user) return false;

        return $user->id === $this->id;
    }

    public function nameOrMe()
    {
        $user = Auth::user();

        if (! $user)
        {
            return '';
        }

        if ($this->isMe($user))
        {
            return __('me');
        }


        return $this->name;
    }

    /**
     * TODO use storage path best practice
     */
    public function photoOrDefault()
    {
        $photo_path = 'home/img/people-no-face.svg';
        if ($this->profile_photo_path)
        {
            $photo_path = 'storage/' . $this->profile_photo_path;
        }

        return $photo_path;
    }

    public function getSuperAdminRoleName()
    {
        return $this->superAdminRoleName;
    }

    public function isSuperAdmin()
    {
        return $this->hasRole($this->getSuperAdminRoleName()) === true;
    }

    public function isAdmin()
    {
        return $this->isSuperAdmin();
    }

    public function scopeInnovationAdmin($query)
    {
        return $query->whereHas('roles', function($builder) {
            return $builder;
        });
    }

    public function scopeActive($query)
    {
        return $query->whereNotNull('email_verified_at');
    }

    public function getProfilePhotoPathBasedir()
    {
        return $this->profilePhotoPathBasedir;
    }

    public function setProfilePhotoPathFromBasename($filename)
    {
        $this->profile_photo_path = $this->getProfilePhotoPathBasedir() . '/' . $filename;
    }

    public function uploadPhotoProfileForm($form)
    {
        $profile_photo_path = $this->uploadFileFormTo(
            $form,
            Storage::disk('public')->path($this->getProfilePhotoPathBasedir())
        );

        if ($profile_photo_path) {
            $this->setProfilePhotoPathFromBasename($profile_photo_path);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

	public function markNonActive()
	{
		$this->disabled_at = new \DateTimeImmutable;
		$this->disabled_by = Auth::user()->id;
	}

	public function markActive()
	{
		$this->disabled_at = null;
		$this->disabled_by = null;
	}

	public function isActive()
	{
		return empty($this->disabled_at);
	}

}
