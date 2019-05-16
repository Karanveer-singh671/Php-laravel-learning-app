<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return 'its working' . $id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // custom method not added with command php artisan make:controller --resource CONTROLLER_NAME
    public function contact() {
        //will look for a contact.blade.php file inside the views folder and display when controller method is fired
        $people = ['Karan', 'Gowtham', 'Sarah', 'Chelsea'];
        return view('contact', compact('people'));
    }

    public function show_post($id, $name){
        // arrow used to chain method (instead of a dot) with uses name of variable and variable itself
        // id will be availabe in the post view since opening view with that data
//        return view('post')->with('id', $id);
            // will grab parameter that has the same name as variable param can pass as many params in compact as you want
        return view('post', compact('id', 'name'));
    }
}
