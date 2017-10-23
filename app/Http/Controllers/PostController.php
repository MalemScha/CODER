<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Post;
use App\User;
use App\Filters\PostFilters;

use Illuminate\Http\Request;

class PostController extends Controller
{


    //constructor
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     *@param Channel $channel
     * @return \Illuminate\Http\Response
     */
    //guest cannot post a post


    
    public function index(Channel $channel,PostFilters $filters)
    {
        $posts= Post::with('channel')->latest()->filter($filters);
        if ($channel->exists){
            $posts->where('channel_id' , $channel->id);
        }

    $posts = $posts->paginate(15)->appends([
                                        'by' => request('by'),
                                        'popular' => request('popular')
                                        ]);

     
        return view('posts.index',compact('posts'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //form control to create a new post
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
      //validate a Post
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'channel_id' => 'required|exists:channels,id'

        ]);
        //store a post
        $post = Post::create([
            'user_id' => auth()->id(),
            'channel_id' =>request('channel_id'),
            'title' => request('title'),
            'body' => request('body')
        ]);
        return redirect($post->path())
            ->with('flash','Your post has been published');
    }

    /**
     * Display the specified resource.
     * @param  $channel
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($channel, Post $post)
    {
        //show a single post 

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($channel,Post $post)
    {
        $this->authorize('update', $post);
        return view('posts.edit',compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($channel,Request $request, Post $post)
    {
        //validate it
         $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'channel_id' => 'required|exists:channels,id'

        ]);
          //update the post
        $post->update([
            'user_id' => auth()->id(),
            'channel_id' =>request('channel_id'),
            'title' => request('title'),
            'body' => request('body')
        ]);
        return redirect($post->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($channel,Post $post)
    {
        //
        $this->authorize('update', $post);
        $post->delete();
        return redirect ('/forum');
    }
}
