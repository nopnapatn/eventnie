<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    
    use HasApiTokens, HasFactory, Notifiable;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'faculty',
        'profile_picture',
        'college_year',
        'studentID',
        'pictureProfile',
        'phoneNumber',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function ownedEvents() {
        return $this->hasMany(Event::class, 'creator_id');
    }

    public function attendedEvents() : BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'attendees');
    }

    public function memberEvents() : BelongsToMany
    {
        return $this->belongsToMany(Event::class, 'members');
    }

    public function certification() : HasMany
    {
        return $this->hasMany(Certification::class, 'user_id');
    }

    // public function events() : BelongsToMany
    // {
    //     return $this->belongsToMany(Event::class)
    //     ->withPivot('description', 'img_url', 'video_url')
    //     ->withTimestamps();
    // }
}
