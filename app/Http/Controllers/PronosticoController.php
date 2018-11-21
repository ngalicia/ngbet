<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Proyecto1\Http\Requests\PronosticoFormRequest;
use DB;

class PronosticoController extends Controller
{
    public function index(Request $request)
    {
        $usuario = \Session::get('usuario');
        $id_participante = $usuario[0];

    	$participantes = DB::select('SELECT * FROM GET_PARTICIPANTES()');
		$partidos = DB::select('SELECT * FROM GET_PARTIDOS()');
    	$pronosticos = DB::select('SELECT * FROM GET_PRONOSTICOS('.$id_participante.')');

		return view('bet.pronostico.index', ["participantes" => $participantes,"pronosticos" => $pronosticos, "partidos"=>$partidos]);
    }

    public function create()
    {
    	$participantes = DB::select('SELECT * FROM GET_PARTICIPANTES()');
		$partidos = DB::select('SELECT * FROM GET_PARTIDOS()');

        return view("bet.pronostico.create", ["participantes" => $participantes, "partidos" => $partidos]);
    }

    public function store(PronosticoFormRequest $request)
    {
        $usuario = \Session::get('usuario');
        
        $goles_1 = $request->get('goles_1');
        $goles_2 = $request->get('goles_2');
        $id_participante = $usuario[0];
        $id_partido = $request->get('id_partido');

        DB::select('SELECT INSERT_PRONOSTICO('.$goles_1.','.$goles_2.','.$id_participante.','.$id_partido.')');

        return Redirect::to('bet/pronostico');
    }

    public function edit($id)
    {
    	$participantes = DB::select('SELECT * FROM GET_PARTICIPANTES()');
		$partidos = DB::select('SELECT * FROM GET_PARTIDOS()');
        $pronosticos = DB::select('SELECT * FROM GET_PRONOSTICO('.$id.')');

        return view("bet.pronostico.edit", ["participantes"=>$participantes, "partidos"=>$partidos, "pronosticos"=>$pronosticos]);
    }

    public function update(PronosticoFormRequest $request, $id)
    {
        $usuario = \Session::get('usuario');
        
        $goles_1 = $request->get('goles_1');
        $goles_2 = $request->get('goles_2');
        $id_participante = $usuario[0];
        $id_partido = $request->get('id_partido');

        DB::select('SELECT UPDATE_PRONOSTICO('.$id.','.$goles_1.','.$goles_2.','.$id_participante.','.$id_partido.')');

        return Redirect::to('bet/pronostico');
    }

    public function destroy($id)
    {
        DB::select('SELECT DELETE_PRONOSTICO('.$id.')');

        return Redirect::to('bet/pronostico');
    }
}
