<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function subject()
    {
        return $this->morphTo();
    }

    /**
     * @param $user
     * @return mixed
     */
    public static function feed($user)
    {
        return static::where('user_id', $user->id )
            ->latest()
            ->with('subject')
            ->get();
    }
}
