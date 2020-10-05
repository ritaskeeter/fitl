<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

use Auth;

class Question extends Model
{
	protected $rules=[
		'title'=> ['required'],
		'description'=> ['required'],
	];

	//Added by me-To establish the relationship between the 2 Models
	public function comments(){
		return $this->hasMany('App\Comments')->orderBy('created_at', 'desc');
	}
	//End of addition-$this references the Question object and App\Comment references the Comment model

	//Added by me
	public function languages(){
		return $this->belongsToMany('App\Language', 'questions_languages');
	}

	//Added by me
	public function user()
	{
		return $this->belongsToMany('App\User');
	}

	//Check if user is logged in and whether it is their question to allow them to edit/delete
	public function canEdit()
	{
		if(!Auth::check())
		{
			return false;
		}
		//If the user is active/logged in, return true so that we can display user's specific objects
		if(Auth::user()->id===$this->user_id)
		{
			return true;
		}
		//By default
		return false;
	}

	public function comment()
	{
		return $this->belongsToMany('App\Comments');
	}
}