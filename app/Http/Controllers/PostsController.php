<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //[9]
use DB; // in order to be able to use the sql querries

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return Post::all(); // [10]

        $posts = Post::orderBy('created_at','desc')->paginate(2); //[11], [13] for pgination
        //$posts = Post::orderBy('created_at','desc')->take(1)->get();
        // $post = Post::where('title','Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        return view('posts/index')->with('posts',$posts); //[11]
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    //[15]
    public function create()
    {
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //[17]
    public function store(Request $request)
    {
        //Validate
        $this->validate($request, [
            'title'=>'required',
            'body'=>'required'
            ]);
        //Create post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id; //[23]
        $post->save();
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //[12]
       // return Post::find($id); // thid returns the json of the post with the specific id
        $post = Post::find($id);
        return view('posts/show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //[19] when click edit it redirects to the posts/edit.php
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts/edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //[19]b in posts/edit.php when submit the editted post it runs the update function
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);


        $post = Post::find($id);
        $post->title = $request->input('title');//gets the title submitted into the form
        $post->body= $request->input('body');

        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //[20] Delete a function
    public function destroy($id)
    {
        //to delete a post
        $post = Post::find($id);

        $post->delete();
        return redirect('/posts');
    }
}
