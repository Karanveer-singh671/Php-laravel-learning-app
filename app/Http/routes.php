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

// post end point will hit PostsController controller and looks for index method inside controller and execute it
//Route::get('/post/{id}', 'PostsController@index');

// will create special route for endpoints will create all CRUD methods and URI assoicated with where to see and what controller action will be called at a specific URI
Route::resource('posts', 'PostsController');