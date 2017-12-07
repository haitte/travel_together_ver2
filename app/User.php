<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

<<<<<<< HEAD
    
=======


    public function socialProfile()
    {
        return $this->hasOne(SocialLoginProfile::class);
    }

        public function PostPlan()
    {
        return $this->hasMany(PostPlan::class);
    }

>>>>>>> 49f9a35f255adf0d184cb6353d29c21437784d33
}
