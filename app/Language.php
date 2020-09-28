<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Language extends Model
{
    //Added by me
    protected $rules=[
		'name'=> ['required']
	];

    public function questions(){
    	return $this->belongsToMany('App\Question', 'questions_languages');
    }
}
