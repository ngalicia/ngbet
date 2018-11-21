<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte1Controller extends Controller
{
    public function index(Request $request)
    {
        $posiciones = DB::select('SELECT * FROM GET_POSICIONES_REALES()');

    	return view('bet.reporte.reporte1.index', ["posiciones"=>$posiciones]);
    }

}
