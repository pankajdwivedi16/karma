<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\SignInRequest;
use Hash; use App\User; use \Auth;

class SignInController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }

    /**
     * Display view for sign in.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.signin.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SignInRequest $request)
    {

        if ( Auth::attempt( $request->only('email', 'password') ) )

            return redirect()->intended('dashboard');

    }

    /**
     * Only validate from frontend JS
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return String
     */
    public function update(Request $request, $id)
    {

        $user  = User::where( 'email', '=', $request->email )->first( );

        switch ($id) 
        {
            case '-1':
                
                return $user ? 'true' : 'false';
            
            case '-2':
                
                return $user && Hash::check($request->password, $user->password) ? 'true' : 'false';

        }

    }

    /**
     * Logout.
     *
     * @param  null
     * @return Redirect
     */
    public function logout()
    {

        Auth::logout();

        return redirect()->intended('/');

    }
    
}
