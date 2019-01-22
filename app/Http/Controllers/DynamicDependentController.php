<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Adress;

class DynamicDependentController extends Controller
{
    
	function index()
	{
		return view('dynamicdependant')->with('adress_list', Adress::All());
	}

	function fetch(Request $request)
	{
		$select = $request->get('select');
	    $value = $request->get('value');
	    $dependent = "city";

	    $data = DB::table('adresses')->select('city')->where('city', '!=', $value)->get();

	    $output = '<option value="">Select Destiny City</option>';
	     foreach($data as $row)
	     {
	      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
	     }
	     echo $output;


	}



}
