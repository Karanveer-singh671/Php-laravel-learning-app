<?php

namespace cms;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    public function posts(){
        // first table is going to use the post table and the second is where will get country id from User table, if named country column in User differently then
        // would need to specify column name
//        return $this->hasManyThrough('cms\Post', 'cms\User', 'country_id')
        // since name is correct just need
        // first param is where get user_id and the User table is where get country_id relates the two to be used since A Country can have many users
        return $this->hasManyThrough('cms\Post', 'cms\User');
    }
}
