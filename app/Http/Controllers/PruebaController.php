<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PruebaController extends Controller
{
	public function prueba()
	{
		$query = DB::select('SELECT * FROM CONFEDERACION');
    	dd($query);
	}
}
