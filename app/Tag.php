<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts(){
        // tag will be shared by many, shared from post and connecting table taggable
        // get all posts that for this tag
        return $this->morphedByMany('App\Post', 'taggable');
    }
    public function videos(){
        // get all videos that are assigned this tag
        return $this->morphedByMany('App\Video', 'taggable');
    }
}
