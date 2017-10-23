<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use RecordsActivity;

    protected $guarded = [];
    protected $with = ['owner'];
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }
    //
}
