<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function image(){
        return $this->morphOne('App\Image','imageable');
    }
    public function comments(){
        return $this->morphMany('App\Comment','commentable');
    }
    public function tags()
    {
        return $this->morphToMany('App\Tag','taggable');
    }
}
