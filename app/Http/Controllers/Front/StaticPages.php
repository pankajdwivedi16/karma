<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPages extends Controller
{

	/**
     * Display view for Static.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $main , $slug )
    {
    	try 
		{

			return view( 'frontend.static-pages.'. $main . '.' . $slug );
		
		}

		catch( \Exception $e)
		{

			return view( 'frontend.404.index' );
 
		}
    	
    }

}
