<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChallengeChannel extends Model
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
