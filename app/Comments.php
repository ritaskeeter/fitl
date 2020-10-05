<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Esensi\Model\Model;

use Auth;

class Comments extends Model
{
    //	
    protected $rules=[
    	'question_id'=>['required'],
    	'comment'=>['required']
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    //To check if user is logged in and then display their own comments
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
}
