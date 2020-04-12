<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use \Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','mobile', 'password','mobile_verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    * store new user 
    * @param Illuminate\Http\Reques $request
    * @return User model
    */
    static function signup(Request $request)
    {
        return self::create([
                'name'   => $request->name,    'email'    => $request->email,
                'mobile' => $request->mobile,  'password' => Hash::make($request->password)
        ]);
    }

}
