<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte3Controller extends Controller
{
    public function index(Request $request)
    {
        $goleadores = DB::select('SELECT * FROM GET_GOLEADORES()');

    	return view('bet.reporte.reporte3.index', ["goleadores"=>$goleadores]);
    }

}
