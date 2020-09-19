<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

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
}