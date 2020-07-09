<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = ['parent_id', 'name'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function children()
    {
        return $this->hasMany('App\Category', 'parent_id');
    }
}
