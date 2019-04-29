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
}
