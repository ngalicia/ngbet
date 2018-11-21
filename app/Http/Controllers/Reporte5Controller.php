<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte5Controller extends Controller
{
    public function index(Request $request)
    {
        $posiciones = DB::select('SELECT * FROM GET_POSICIONES_PRONOSTICADAS()');

    	return view('bet.reporte.reporte5.index', ["posiciones"=>$posiciones]);
    }

}
