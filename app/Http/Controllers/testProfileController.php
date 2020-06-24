<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function profile()
    {
    	$member = Member::find(Auth::user()->id);
    	return view('profiletemplate',compact('member'));
    }

}
