<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Activity;
use Auth;
use Image;

class ProfileController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    //profile index page.....
    public function index(){

    	return view('profile.index', array('profileUser' => Auth::User())) ;
    }
    public function update_avatar(Request $request){
        $this->validate(request(),[
            'avatar' => 'required|max:10000|mimes:jpg,png,gif,jpeg'
        ]);
        $file = $request->file('avatar');
        $ext = $file->extension();
        $filename = "avatar.$ext";
        $path= $file->storeAs('public/avatars/'.auth()->user()->name,$filename);
        Auth::user()->update([
                'avatar' => $path,
                'dp' => $path
            ]);
        return back()->with('flash',"Profle-Picture-Changed");

    }
    //activity feed
    public function show(User $user){

        return view('profile.show', [
    			'profileUser' => $user,
    			'activities' => Activity::feed($user)
    		]) ;

    }

}
