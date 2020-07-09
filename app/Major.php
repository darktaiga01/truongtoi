<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //
    protected $table = 'majors';

    public function universities()
    {
        return $this->hasMany('App\University');
    }
}
