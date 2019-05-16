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
use App\User;
use App\Country;

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
//    $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//    return $posts;
//});
//
//Route::get('/findmore', function(){
////    $posts = Post::findOrFail(1);
////    return $posts;
//    // take first or fail otherwise
//    $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//});

//Route::get('/basicinsert', function(){
//    // create a new Post from the Post model
//    $post = new Post;
//    // add necessary values for columns
//    $post->title = 'New Eloquent title insert';
//    $post->body = "wow this is the content";
//    // save the record
//    $post->save();
//
//});
//
//Route::get('/basicinsertfind', function(){
//    // create a new Post from the Post model
//    $post = Post::find(2);
//    // add necessary values for columns
//    $post->title = 'New Eloquent title insert 2';
//    $post->body = "wow this is the content 2";
//    // update the record when saving
//    $post->save();
//
//});

//Route::get('/create', function(){
//
//    Post::create(['title'=>'the create method', 'body'=> 'Wow crazy stuff']);
//});

//Route::get('/update', function(){
//   Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'New php title', 'body'=> 'WOW love it']);
//});

//Route::get('/delete', function(){
//   $post = Post::find(2);
//   // once find call the delete method to
//   $post->delete();
//});

//Route::get('/delete2', function(){
////   Post::destroy(3);
//    // instead of find if know the key can use destroy
//     Post::destroy([4,5]);
//
////     Post::where('is_admin', 0)->delete();
//});

//Route::get('/softdelete', function(){
//   Post::find(1)->delete();
//});

//Route::get('/readsoftdelete', function(){
////    $post = Post::find(1);
////    return $post;
//    // by default the find will not return something that was soft delete so need to use withTrashed to check if id is there
////    $post = Post::withTrashed()->where('id', 1)->get();
////    return $post;
//
////    $post = Post::onlyTrashed()->where('id', 1)->get();
////    return $post;
//    $post = Post::onlyTrashed()->where('is_admin', 0)->get();
//    return $post;
//});

//Route::get('/restore', function(){
//  Post::withTrashed()->where('is_admin', 0)->restore();
//});
//
//// need to use forceDelete for permanent deletion
//Route::get('/forcedelete', function(){
//   Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
//});

/*
|--------------------------------------------------------------------------
| Eloquent Relationships
|--------------------------------------------------------------------------
*/

// One to One relationship
//Route::get('/user/{id}/post', function($id){
//    return User::find($id)->post;
//
//    // could also pull out title of post after finding by
////    return User::find($id)->post->title;
//});
//
//Route::get('/post/{id}/user', function($id){
//   return Post::find($id)->user->name;
//});

//One to Many relationship
//Route::get('/posts', function(){
//    // find 1 user and get all the posts titles of that user
//    $user = User::find(1);
//    // will look in users model and look for posts method
//    foreach ($user->posts as $post) {
//        echo $post->title . "<br>";
//    }
//});

// make pivot table (connecting table) singular and in order i.e lower alphabet first word then next

//Route::get('/user/{id}/role', function($id){
//   $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//   // return all the roles in descending order
//   return $user;
//
////   foreach ($user->roles as $role) {
////       return $role->name;
////   }
//});
//
//// Accessing intermediate (pivot table)
//
//Route::get('/user/pivot', function(){
//   $user = User::find(1);
//   foreach ($user->roles as $role) {
//       // access the pivot table and the created at column from the pivot table
//       echo $role->pivot->created_at;
//   }
//});
//
//Route::get('/user/country', function(){
//    $country = Country::find(1);
//    // goes to Country model then to posts method in the Country model represent as a $post then return the title for each
//    foreach ($country->posts as $post) {
//      return $post->title;
//    }
//});

// Polymorphic relations

Route::get('user/photos', function($id){
    $user = User::find($id);
    foreach ($user->photos as $photo) {
        echo $photo->path;
    }
});