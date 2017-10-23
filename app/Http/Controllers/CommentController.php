<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{

    /**
     * CommentController constructor.
     */
    public function __construct()
	{
        $this->middleware('auth', ['except' => 'index']);
	}

    public function index($channelId, Post $post)
     {
         return $post->comments()->paginate(25);
      }
    //storing comments

    /**
     * @param $channelId
     * @param Post $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($channelId, Post $post)
    {
        //validate
        $this->validate(request(),[
            'body' => 'required'
        ]);

    	$comment = $post->addComment([
    		'body'=> request('body'),
    		'user_id' => auth()->id()
    	]);

        if (request()->expectsJson()) {
            return $comment->load('owner');
        }
    	return back();
    }

    /**
     * @param Comment $comment
     */
    public function update(Comment $comment)
    {
        $this->authorize('update', $comment);
        $comment->update(request(['body']));
    }

    /**
     * @param Comment $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Comment $comment)
    {
        $this->authorize('update',$comment);
        $comment->delete();
        if (request()->expectsJson()) {
            return response(['status' => 'Reply Deleted']);
        }
        return back();
    }
}
