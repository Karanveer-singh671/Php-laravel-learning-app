<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // return owner of this specific role
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
