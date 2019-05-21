<?php

namespace cms;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{

    public $directory = "/images/";
    use SoftDeletes;
    // if have totally different name for table e.g class is PostAdmin then have to say protected $table = 'posts' to refer to table
    // if primary key isn't 'id' then need to go into model and change it using protected $primaryKey = 'post_id' to tell eloquent what exactly referring to
    // whatever write here will overwrite what the parent will default do

    // this tells that the create method in routes is allowed to do Post::create and it is safe to manipulate these columns
    protected $fillable = [
        'title',
        'body',
        'path'
    ];

    protected $dates = ['deleted_at'];

    public function user(){
        // this user belongs to this post
        return $this->belongsTo('cms\User');
    }

    public function photos(){
        return $this->morphMany('cms\Photo', 'imageable');
    }

    public function tags(){
        // get all the tags
        return $this->morphToMany('cms\Tag', 'taggable');
    }
    // create a query scope
    public static function scopeLatest($query){
        return $query->orderBy('id', 'asc')->get();
    }
    // have to write in this way or else will not work for function name
    public function getPathAttribute($value) {
        // access $directory variable in class using $this->>directory
        return $this->directory . $value;
    }
}
