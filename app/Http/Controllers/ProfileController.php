<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function profile()
	{
		$user=Auth::user();
		$questions=$user->questions;
		$comments=$user->comments;
		return view('profile/profile', ['questions'=>$questions, 'comments'=>$comments]);
	}
}