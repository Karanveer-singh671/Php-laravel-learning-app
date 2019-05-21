<?php

namespace cms;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // return owner of this specific role
    public function users(){
        return $this->belongsToMany('cms\User');
    }
}
