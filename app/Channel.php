<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //route key
    public function getRouteKeyName()
    {
    	return 'slug';
    }
    //get all post
    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
