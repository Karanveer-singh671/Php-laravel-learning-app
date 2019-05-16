<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post(){
        // this says a user will own 1 of the Post model
        // will go to post table and look for user_id automatically if want to specify different column then can specify as a second param in hasOne
        return $this->hasOne('App\Post');
    }

    public function posts(){
        // this says the User model owns any amount of the Post model
        return $this->hasMany('App\Post');
    }

    public function roles(){
        return $this->belongsToMany('App\Role')->withPivot('created_at');
        // if not follow naming convention then would need to add extra parameters like so
        // to customize tables and columns follow this format
        // return $this->>belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id);
        // if named pivot table user_roles would need to specify these extra FKs since laravel won't know but since we did we don't need to

    }

    public function photos(){
        // we are morphing photo model and
        return $this->morphMany('App\Photo', 'imageable');
    }
}
