<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    //relacion One to Many
    public function comments()
    {
        return $this->hasMany('App\Comment')->orderBy('id','desc');
    }

    //Relacion de Mucos a Uno
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
