<?php

namespace cms;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public function tags(){
        // get all the tags
        return $this->morphToMany('cms\Tag', 'taggable');
    }
}
