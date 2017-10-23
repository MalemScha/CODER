<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GateController extends Controller
{
    //gate index 
    public function index()
    {
    	return view('gate.index');
    }
}
