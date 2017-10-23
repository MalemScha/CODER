<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use RecordsActivity;
    /**
     * @var array
     */
    protected $guarded = [];
    protected $with = ['creator','channel'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('commentCount', function($builder){
            $builder->withCount('comments');
        });
        static::deleting(function($post){
           $post->comments->each->delete();
        });
    }

    //single post path
    public function path()
    {
    	return "/forum/{$this->channel->slug}/{$this->id}";
    }
    //relationship with comments
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    //relationship with user
    public function creator()
    {
    	return $this->belongsTo(User::class,'user_id');
    }


    //channel and post relationship
    public function channel()
    {

    	return $this->belongsTo(Channel::class);

    }


    public function addComment($comment)
    {

    	return $this->comments()->create($comment);

    }


    public function scopeFilter($query, $filters){

        return $filters->apply($query);

    }
}
