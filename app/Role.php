<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Role extends Model
{
	protected $rules=[
		'name'=>['required']
	];

	public function users()
	{
		return $this->belongsToMany('App\User', 'user_roles');
	}
}