<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Display view for advocate dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.dashboard.index');
    }

    /**
     * Display view for advocate profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('frontend.user.profile-update' , [ 'user' => auth()->user() ]);
    }
}
