<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Esensi\Model\Model;

class Comments extends Model
{
    //	
    protected $rules=[
    	'question_id'=>['required'],
    	'comment'=>['required']
    ];
}
