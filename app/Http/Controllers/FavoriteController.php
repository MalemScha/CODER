<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class FavoriteController extends Controller
{
    //
    /**
     * FavoriteController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Comment $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Comment $comment)
    {
    	$comment->favorite();
    	return back();
    }

    /**
     * @param Comment $comment
     */
    public function destroy(Comment $comment)
    {
        $comment->unfavorite();
    }
}
