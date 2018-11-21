<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Proyecto1\Http\Requests\ParticipanteFormRequest;
use DB;

class ParticipanteController extends Controller
{
    public function index(Request $request)
    {
        $usuario = \Session::get('usuario');
        $id_participante = $usuario[0];

        $puntos = DB::select('SELECT * FROM GET_PUNTOS('.$id_participante.')');

		$participantes = DB::select('SELECT * FROM GET_PARTICIPANTE1('.$id_participante.')');

		return view('bet.participante.index', ["puntos"=>$puntos, "participantes"=>$participantes]);
    }
    
    public function edit($id)
    {
        $participantes = DB::select('SELECT * FROM GET_PARTICIPANTE2('.$id.')');
    	$paises = DB::select('SELECT * FROM GET_PAISES()');

        return view("bet.participante.edit", ["participantes"=>$participantes, "paises"=>$paises]);
    }

    public function update(ParticipanteFormRequest $request, $id)
    {
        $nombre = $request->get('nombre');
        $edad = $request->get('edad');
        $monto = $request->get('monto');
        $id_pais = $request->get('id_pais');

        DB::select('SELECT UPDATE_PARTICIPANTE('.$id.',\''.$nombre.'\','.$edad.','.$monto.','.$id_pais.')');

        return Redirect::to('bet/participante');
    }

    public function destroy($id)
    {
        DB::select('SELECT DELETE_PARTICIPANTE('.$id.')');

        \Session::forget('usuario');
        \Session::flush();
        
        return Redirect::to('/');
    }
}
