<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password','username','stream','year','studentid'
    ];

    public function getavatarattribute($avatar){
        return asset($avatar);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reply(){
        return $this->hasMany('App\reply');
    }

    public function discuss(){
        return $this->hasMany('App\discussion');
    }

    public function like(){
        return $this->hasMany('App\like');
    }

    public function message(){
        return $this->hasMany('App\message');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
