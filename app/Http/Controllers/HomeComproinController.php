<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;
// use App\Sliders;
use Auth;

class HomeComproinController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
    	Request $request
    )
    {
    	$dataItem = "";
        return view('comproin.main',
        	[
        		'dataItem' => $dataItem
        	]
    	);
    }

}
