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
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','email',
    ];

    function socialProviders(){
        return $this->hasMany(socialProvider::class) ;
    }

      public function getRouteKeyName()
    {
        return 'name';
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->latest() ;
    }
    public function challenges()
    {
        return $this->hasMany(Challenge::class)->latest() ;
    }
    public function activity()
    {
        return $this->hasMany(Activity::class);
    }
}
