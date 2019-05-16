<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // if have totally different name for table e.g class is PostAdmin then have to say protected $table = 'posts' to refer to table
    // if primary key isn't 'id' then need to go into model and change it using protected $primaryKey = 'post_id' to tell eloquent what exactly referring to

}
