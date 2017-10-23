<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use RecordsActivity;
    /**
     * @var array
     */
    protected $guarded = [];
    /**
     * @var array
     */
    protected $with = ['owner','likes'];

    protected $appends = ['likesCount','isLiked'];

    /**
     *
     */
    protected static function boot()
    {
        parent::boot();
        static::deleting(function($reply){
            $reply->likes->each->delete();
        });
    }


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
    public function likes()
    {
        return $this->morphMany(Like::class, 'liked');
    }

    /**
     * @return Model
     */
    public function like()
    {
        $attributes = ['user_id' => auth()->id()];
        if (!$this->likes()->where($attributes)->exists()) {
            return $this->likes()->create($attributes);
        }
    }
    public function unlike()
    {
        $attributes = ['user_id' => auth()->id()];
        $this->likes()->where($attributes)->get()->each(function ($like) {
            $like->delete();
        });
    }

    /**
     * @return bool
     */
    public function isLiked()
    {
        return !!$this->likes->where('user_id', auth()->id())->count();
    }

    /**
     * @return bool
     */
    public function getIsLikedAttribute()
    {
        return $this->isLiked();
    }

    /**
     * @return mixed
     */
    public function getLikesCountAttribute()
    {
        return $this->likes->count();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }

    /**
     * @return string
     */
    public function path()
    {
        return $this->challenge->path() . "#reply-{$this->id}";
    }
}
