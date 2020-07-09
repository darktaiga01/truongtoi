<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected  $fillable = [
        'title', 'feature_img', 'body', 'major_id', 'avg_mark', 'location_id'
    ];

    public function major()
    {
        return $this->belongsTo('App\Major');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
