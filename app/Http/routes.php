<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//// post end point will hit PostsController controller and looks for index method inside controller and execute it
//Route::get('/post/{id}', 'PostsController@index');

// will create special route for endpoints will create all CRUD methods and URI assoicated with where to see and what controller action will be called at a specific URI
//Route::resource('/posts', 'PostsController');
//
//Route::get('/contact', 'PostsController@contact');
//
//Route::get('/post/{id}/{name}', 'PostsController@show_post');


//Route::get('/insert', function() {
//
//    DB::insert('insert into posts(title, body) values(?,?)', ['Php with Laravel', 'Best thing ever']);
//});
//
//Route::get('/read', function() {
//
//    $result = DB::select('select * from posts where id=?', [1]);
//
//    foreach ($result as $post) {
//        // no dollar sign on title since just a property of the post variable created use arrows to access properties
//        return $post->title;
//    }
//});

//Route::get('/update', function() {
//   $updated = DB::update('update posts set title = "Update Title" where id=?', [1]);
//   return $updated;
//});
//
//Route::get('/delete', function() {
//    $deleted = DB::delete('delete from posts where id=?', [1]);
//    return $deleted;
//});