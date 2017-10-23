<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use RecordsActivity;
    /**
     * @var array
     */
    protected $guarded = [];
    /**
     * @var array
     */
    protected $with = ['owner','favorites'];
    /**
     * @var array
     */
    protected $appends = ['favoritesCount','isFavorited'];

    /**
     *
     */
    protected static function boot()
{
    parent::boot();
    static::deleting(function($comment){
        $comment->favorites->each->delete();
    });
}
	
    //relationship with user

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function favorites()
    {
    	return $this->morphMany(Favorite::class, 'favorited');
    }

    /**
     * @return Model
     */
    public function favorite()
    {
    	$attributes = ['user_id' => auth()->id()];
    	if (! $this->favorites()->where($attributes)->exists())
    	{
    		return $this->favorites()->create($attributes);
    	}
    }

    public function unfavorite()
    {
        $attributes = ['user_id' => auth()->id()];
        $this->favorites()->where($attributes)->get()->each(function ($favorite){
                $favorite->delete();
        });
    }
    /**
     * @return bool
     */
    public function isFavorited()
    {
    	return !! $this->favorites->where('user_id', auth()->id())->count();
    }

    /**
     * @return bool
     */
    public function getIsFavoritedAttribute()
    {
        return $this->isFavorited();
    }

    /**
     * @return mixed
     */
    public function getFavoritesCountAttribute()
    {
        return $this->favorites->count();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * @return string
     */
    public function path()
    {
        return $this->post->path() . "#comment-{$this->id}";
    }
}
