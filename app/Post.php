<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected  $fillable = [
        'title', 'feature_img', 'body'
    ];


}
