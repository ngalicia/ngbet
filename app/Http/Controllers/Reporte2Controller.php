<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;

class Reporte2Controller extends Controller
{
    public function index(Request $request)
    {
        $selecciones = DB::select('SELECT * FROM GET_SELECCIONES()');

        $id_seleccion = $request->get('id_seleccion');

        if($id_seleccion != null)
        {
            $resultados = DB::select('SELECT * FROM GET_RESULTADOS('.$id_seleccion.')');
        }
        else
        {
            $resultados = DB::select('SELECT * FROM GET_RESULTADOS('.$selecciones[0]->id_.')');
        }

    	return view('bet.reporte.reporte2.index', ["selecciones"=>$selecciones, "resultados"=>$resultados]);
    }

}
