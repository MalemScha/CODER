<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use RecordsActivity;
    //mass assignment
	protected $guarded = [];
    protected $with = ['maker','challengechannel','difficulty'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('replyCount', function($builder){
            $builder->withCount('replies');
        });
        static::deleting(function($challenge){
            $challenge->replies->each->delete();
        });
    }
    public function path()
    {
    	return "/challenges/{$this->challengechannel->slug}/{$this->difficulty->slug}/{$this->id}";

    }

	public function maker()
	    {
	    	return $this->belongsTo(User::class,'user_id');
	    }

    public function challengechannel(){

 		return $this->belongsTo(ChallengeChannel::class);

 	}

    public function difficulty(){

        return $this->belongsTo(Difficulty::class);

    }
    public function replies(){

        return $this->hasMany(Reply::class);
    }
    public function uploads(){

        return $this->hasMany(Upload::class);
    }
    public function addReply($reply)
    {

        return $this->replies()->create($reply);

    }
    public function addFile($file)
    {

        return $this->uploads()->create($file);

    }
    public function scopeFilter($query, $filters){

        return $filters->apply($query);

    }
}
