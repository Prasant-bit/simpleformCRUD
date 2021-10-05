<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //reading the data
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //to open create.blade.php
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {

        //validation

        // $this->validate($request, [
        //     'title' => 'required | min:3',
        //     'content' => 'required | max:100'
        // ]);
        //
        //to show all the data at once
        // return $request->all();

        //to show or get the one data 
        // return $request->get('content');
        //or
        // return $request->title;

        //creating a new data
        // $post = new Post;

        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();

        //or
        // Post::create($request->all());

        //or

        $input = $request->all();
        $input['title'] = $request->title;
        $input['content'] = $request->content;
        Post::create($request->all());
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

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //to show the edit page
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


        //to update a data
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
        //to delete a data
        // $post = Post::findOrFail($id);
        // $post->delete();
        // $post = Post::whereId($id)->delete();



        // return view('posts.index', compact('$post'));


        Post::whereId($id)->delete();

        return redirect('/posts');
    }
}
