<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte4Controller extends Controller
{
    public function index(Request $request)
    {
        $ganadores = DB::select('SELECT * FROM GET_GANADORES()');

    	return view('bet.reporte.reporte4.index', ["ganadores"=>$ganadores]);
    }

}
