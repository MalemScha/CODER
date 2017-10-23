<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reply;

class LikeController extends Controller
{
    //
    /**
     * LikeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Reply $reply
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Reply $reply)
    {
        $reply->like();
        return back();
    }

    /**
     * @param Reply $reply
     */
    public function destroy(Reply $reply)
    {
        $reply->unlike();
    }

}
