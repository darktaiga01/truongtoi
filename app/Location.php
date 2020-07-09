<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $table = 'location';

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
