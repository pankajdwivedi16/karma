<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests\Front\SignUpRequest;
use App\Http\Controllers\Controller;
use App\User;

class SignUpController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web');
    }

    /**
     * Display sign up view.
     *
     * @return view
     */
    public function index()
    {
        return view('frontend.signup.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Redirect
     */
    public function store(SignUpRequest $request)
    {

        User::signup( $request );

        return redirect('/');
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
                
                return $user ? 'false' : 'true';
        }     
    }

}
