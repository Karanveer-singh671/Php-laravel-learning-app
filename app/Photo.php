<?php

namespace cms;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //get all the owning imageable models for this photo returns the model associated with the image e.g User owner of this photo or Post owner for this photo
    public function imageable(){
        return $this->morphTo();
    }
}
