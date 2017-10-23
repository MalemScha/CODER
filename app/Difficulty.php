<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Difficulty extends Model
{
    //
	 public function getRouteKeyName()
    {
    	return 'slug';
    }
    
        public function challenges()
    {
    	return $this->hasMany(Challenge::class);
    }
}
