<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challenge;
use App\Reply;

/**
 * Class ReplyController
 * @package App\Http\Controllers
 */
class ReplyController extends Controller
{
    //constructor
    /**
     * ReplyController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index($challengechannelId, $difficultyId, Challenge $challenge)
    {
        return $challenge->replies()->paginate(25);
    }
    //storing comments

    /**
     * @param $challengechannelId
     * @param $difficultyId
     * @param Challenge $challenge
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store($challengechannelId, $difficultyId, Challenge $challenge)
    {
        //validate
        $this->validate(request(),[
            'body' => 'required'
        ]);

        $reply = $challenge->addReply([
            'body'=> request('body'),
            'user_id' => auth()->id()
        ]);

        if (request()->expectsJson()) {
            return $reply->load('owner');
        }
        return back()->with('flash',"Your reply-has-been-posted");
    }

    /**
     * @param Reply $reply
     */
    public function update(Reply $reply)
    {
        $this->authorize('update', $reply);
        $reply->update(request(['body']));
    }

    /**
     * @param Reply $reply
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Reply $reply)
    {
        $this->authorize('update',$reply);
        $reply->delete();
        if (request()->expectsJson()) {
            return response(['status' => 'Reply Deleted']);
        }
        return back();
    }
}
