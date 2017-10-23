<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Difficulty;
use App\ChallengeChannel;
use Illuminate\Http\Request;
use App\Filters\PostFilters;

class ChallengeController extends Controller
{

    /**
     * ChallengeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create a challenge
        return view('challenges.create');
    }

    /**
     * Display a listing of the resource.
     *@param ChallengeChannel $channel
     * @param PostFilters $filters
     * @param Difficulty $difficulty
     * @return \Illuminate\Http\Response
     */
    public function index(Difficulty $difficulty,ChallengeChannel $channel,PostFilters $filters)
    {
        $challenges= Challenge::with('challengechannel','difficulty')->latest()->filter($filters);
        if ($channel->exists){
            $challenges->where('challengechannel_id' , $channel->id);
        }
        if ($difficulty->exists){
            $challenges->where('difficulty_id' , $difficulty->id);
        }

        $challenges = $challenges->paginate(15)->appends([
            'by' => request('by')
        ]);


        return view('challenges.index',compact('challenges'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store
         //validate a challenge
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'challengechannel_id' => 'required|exists:challenge_channels,id',
            'difficulty_id' => 'required|exists:difficulties,id',
            'sample_input' => 'required',
            'sample_output' => 'required'

        ]);
        //store a challenge
        $challenge = Challenge::create([
            'user_id' => auth()->id(),
            'difficulty_id' =>request('difficulty_id'),
            'challengechannel_id' =>request('challengechannel_id'),
            'title' => request('title'),
            'body' => request('body'),
            'sample_input' => request('sample_input'),
            'sample_output' => request('sample_output')
        ]);
        return redirect($challenge->path());
    }

    /**
     * Display the specified resource.
     *
     * @param difficultyId
     * @param challenge_channelId
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show($challengechannelId,$difficultyId,Challenge $challenge)
    {
        //challenge
        return view('challenges.show', compact('challenge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param 
     * @param 
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(Challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy($challengechannelId,$difficultyId,Challenge $challenge)
    {
        //
        $this->authorize('update', $challenge);
        $challenge->delete();
        return redirect ('/challenges');
    }
}
