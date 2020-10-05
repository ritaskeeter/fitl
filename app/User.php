<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function getFirstNameAttribute()
    {
        $name=$this->name;
        $name_parts=explode(' ', $name);
        $first_name=$name_parts[0];
        return $first_name;
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_roles');
    }

    public function hasRole($role)
    {
        //Get the name of the role(name alone) from the user's roles
        $roleNames=$this->roles->pluck('name')->toArray();
        //Check if role is in array of all roles and then return it
        return in_array($role, $roleNames);
    }

    public function isAdmin()
    {
        return $this->hasRole('Admin');
    }
}
