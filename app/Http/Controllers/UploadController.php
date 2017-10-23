<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challenge;
use App\Upload;

/**
 * Class UploadController
 * @package App\Http\Controllers
 */
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Challenge $challenge
     * @return \Illuminate\Http\Response
     */
    public function storefile($challengechannelId, $difficultyId, Challenge $challenge,Request $request)
    {
       $this->validate(request(),[
            'filenam' => 'required|max:10000|mimes:c,cpp,jpg,JAVA,py,rb'
        ]);
        $file = $request->file('filenam');
        $ext = $file->extension();
        $filename = auth()->user()->name."_solution.$ext";
        $path = $file->storeAs('public/challenges/'.$challenge->id,$filename);
        $title = $ext;

        $file = $challenge->addFile([
            'title'=> $title,
            'user_id' => auth()->id(),
            'filename' => $path
        ]);

        return back()->with('flash',"Your-reply-has-been-posted");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public
/**
 * @param int $id
 */
function show($id)
    {
        //
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
