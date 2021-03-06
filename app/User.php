<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Trip;

class User extends Authenticatable
{
    use Notifiable;

    /*
     * The attributes that are mass assignable.
     * @var array
     */
     
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     *
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function trips(){
        return $this->hasMany('App\Trip');
    }

    public function socialProfile()
    {
        return $this->hasOne(SocialLoginProfile::class);
    }

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }


}
