<?php

namespace cms;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts(){
        // tag will be shared by many, shared from post and connecting table taggable
        // get all posts that for this tag
        return $this->morphedByMany('cms\Post', 'taggable');
    }
    public function videos(){
        // get all videos that are assigned this tag
        return $this->morphedByMany('cms\Video', 'taggable');
    }
}
