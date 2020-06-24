<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class BackendController extends Controller
{
	// public function __construct()
 //    {
 //        $this->middleware('auth')->only('dashboard'); //except('index');
 //    }
    public function dashboard($value='')
    {
    	$members = Member::all();
    	return view('backend.dashboard',compact('members'));
    }
}
