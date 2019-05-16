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
// import Post model then can just refer to Post model as Post instead of App\Post each time
use App\Post;

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

/*
|--------------------------------------------------------------------------
| Eloquent (Object Relational Model) ORM
|--------------------------------------------------------------------------
*/

//Route::get('/find', function(){
//   $posts = Post::all();
//
//   foreach ($posts as $post) {
//       return $post->title;
//   }
//
//});

//Route::get('/find', function(){
//    $post = Post::find(2);
//
////    foreach ($posts as $post) {
////        return $post->title;
////    }
//    return $post->title;
//
//});


//Route::get('/findwhere', function(){
////    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
////    return $posts;
////});
////
////Route::get('/findmore', function(){
//////    $posts = Post::findOrFail(1);
//////    return $posts;
////    // take first or fail otherwise
////    $posts = Post::where('users_count', '<', 50)->firstOrFail();
////
////});