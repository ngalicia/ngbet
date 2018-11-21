<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Proyecto1\Http\Requests\PartidoFormRequest;
use DB;

class PartidoController extends Controller
{
    public function index(Request $request)
    {
    	$selecciones = DB::select('SELECT * FROM GET_SELECCIONES()');
    	$arbitros = DB::select('SELECT * FROM GET_ARBITROS()');
    	$ciudades = DB::select('SELECT * FROM GET_CIUDADES()');
		$partidos = DB::select('SELECT * FROM GET_PARTIDOS()');

		return view('bet.partido.index', ["selecciones" => $selecciones,"ciudades" => $ciudades, "partidos"=>$partidos]);
    }

    public function create()
    {
    	$selecciones = DB::select('SELECT * FROM GET_SELECCIONES()');
    	$arbitros = DB::select('SELECT * FROM GET_ARBITROS()');
    	$ciudades = DB::select('SELECT * FROM GET_CIUDADES()');

        return view("bet.partido.create", ["selecciones" => $selecciones, "arbitros" => $arbitros, "ciudades" => $ciudades]);
    }

    public function store(PartidoFormRequest $request)
    {
        $fecha = $request->get('fecha');
        $hora = $request->get('hora');
        $goles_1 = $request->get('goles_1');
        $goles_2 = $request->get('goles_2');
        $id_seleccion_1 = $request->get('id_seleccion_1');
        $id_seleccion_2 = $request->get('id_seleccion_2');
        $id_arbitro_1 = $request->get('id_arbitro_1');
        $id_arbitro_2 = $request->get('id_arbitro_2');
        $id_arbitro_3 = $request->get('id_arbitro_3');
        $id_ciudad = $request->get('id_ciudad');

        if($goles_1 == null or $goles_2 == null)
        {
        	DB::select('SELECT INSERT_PARTIDO(\''.$fecha.'\',\''.$hora.'\','.$id_seleccion_1.','.$id_seleccion_2.','.$id_arbitro_1.','.$id_arbitro_2.','.$id_arbitro_3.','.$id_ciudad.')');
        }
        else
        {
        	DB::select('SELECT INSERT_PARTIDO(\''.$fecha.'\',\''.$hora.'\','.$id_seleccion_1.','.$id_seleccion_2.','.$id_arbitro_1.','.$id_arbitro_2.','.$id_arbitro_3.','.$id_ciudad.','.$goles_1.','.$goles_2.')');
        }

        return Redirect::to('bet/partido');
    }

    public function edit($id)
    {
    	$selecciones = DB::select('SELECT * FROM GET_SELECCIONES()');
    	$arbitros = DB::select('SELECT * FROM GET_ARBITROS()');
    	$ciudades = DB::select('SELECT * FROM GET_CIUDADES()');
        $partidos = DB::select('SELECT * FROM GET_PARTIDO('.$id.')');

        return view("bet.partido.edit", ["selecciones"=>$selecciones, "arbitros"=>$arbitros, "ciudades"=>$ciudades, "partidos"=>$partidos]);
    }

    public function update(PartidoFormRequest $request, $id)
    {
        $fecha = $request->get('fecha');
        $hora = $request->get('hora');
        $goles_1 = $request->get('goles_1');
        $goles_2 = $request->get('goles_2');
        $id_seleccion_1 = $request->get('id_seleccion_1');
        $id_seleccion_2 = $request->get('id_seleccion_2');
        $id_arbitro_1 = $request->get('id_arbitro_1');
        $id_arbitro_2 = $request->get('id_arbitro_2');
        $id_arbitro_3 = $request->get('id_arbitro_3');
        $id_ciudad = $request->get('id_ciudad');

        if($goles_1 == null or $goles_2 == null)
        {
        	DB::select('SELECT UPDATE_PARTIDO('.$id.',\''.$fecha.'\',\''.$hora.'\','.$id_seleccion_1.','.$id_seleccion_2.','.$id_arbitro_1.','.$id_arbitro_2.','.$id_arbitro_3.','.$id_ciudad.')');
        }
        else
        {
        	DB::select('SELECT UPDATE_PARTIDO('.$id.',\''.$fecha.'\',\''.$hora.'\','.$id_seleccion_1.','.$id_seleccion_2.','.$id_arbitro_1.','.$id_arbitro_2.','.$id_arbitro_3.','.$id_ciudad.','.$goles_1.','.$goles_2.')');
        }

        return Redirect::to('bet/partido');
    }

    public function destroy($id)
    {
        DB::select('SELECT DELETE_PARTIDO('.$id.')');

        return Redirect::to('bet/partido');
    }
}
