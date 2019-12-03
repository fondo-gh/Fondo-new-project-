<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_image', 'contact_number', 'account_number', 'residence'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * A user has many professional skills
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_skills() {
        return $this->hasMany(UserSkill::class);
    }

    /**
     * User has many startups
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function startups() {
        return $this->hasMany(Startup::class);
    }
}
