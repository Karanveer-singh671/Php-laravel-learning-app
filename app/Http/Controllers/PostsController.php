<?php

namespace cms\Http\Controllers;

use Illuminate\Http\Request;
use cms\Http\Controllers\Controller;

use cms\Http\Requests;
use cms\Post;

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
        //brings data down to use in view need to use compact and have same name as variable
//        $posts = Post::all();
        $posts = Post::scopeLatest();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
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
//        return $request->all(); // returns all properties of the request sent

        // will create an errors object of having these fields required if not filled in on request
        $this->validate($request, [
           'title'=>'required',
            'body'=> 'required',
        ]);
        //       persists data to application using this
        Post::create($request->all());

        return redirect('/posts');

//        $input = $request->all();
//        $input['title'] = $request->title;
//        Post::create($request->all());

//        $post = new Post;
//        $post->title = $request->title;
//        $post->save();
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
        $post = Post::findOrFail($id);
        // now displays view and have access to $post variable in view!
        return view('posts.show', compact(post));
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
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
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
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect('/posts');
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
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/posts');
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
