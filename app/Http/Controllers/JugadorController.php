<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Proyecto1\Http\Requests\JugadorFormRequest;
use DB;

class JugadorController extends Controller
{
    public function index(Request $request)
    {
        $selecciones = DB::select('SELECT * FROM GET_SELECCIONES()');

        $id_seleccion = $request->get('id_seleccion');

        if($id_seleccion != null)
        {
            $jugadores = DB::select('SELECT * FROM GET_JUGADORES('.$id_seleccion.')');
        }
        else
        {
            $jugadores = DB::select('SELECT * FROM GET_JUGADORES('.$selecciones[0]->id_.')');
        }

		return view('bet.jugador.index', ["selecciones"=>$selecciones, "jugadores"=>$jugadores]);
    }

    public function create()
    {
    	$selecciones = DB::select('SELECT * FROM GET_SELECCIONES()');

        return view("bet.jugador.create", ["selecciones"=>$selecciones]);
    }

    public function store(JugadorFormRequest $request)
    {
        $nombre = $request->get('nombre');
        $fecha_nacimiento = $request->get('fecha_nacimiento');
        $altura = $request->get('altura');
        $peso = $request->get('peso');
        $camisola = $request->get('camisola');
        $posicion = $request->get('posicion');
        $goles = $request->get('goles');
        $id_seleccion = $request->get('id_seleccion');

        DB::select('SELECT INSERT_JUGADOR(\''.$nombre.'\',\''.$fecha_nacimiento.'\','.$altura.','.$peso.','.$camisola.',\''.$posicion.'\','.$goles.','.$id_seleccion.')');

        return Redirect::to('bet/jugador');
    }

    public function edit($id)
    {
        $jugadores = DB::select('SELECT * FROM GET_JUGADOR('.$id.')');
    	$selecciones = DB::select('SELECT * FROM GET_SELECCIONES()');

        return view("bet.jugador.edit", ["jugadores"=>$jugadores, "selecciones"=>$selecciones]);
    }

    public function update(JugadorFormRequest $request, $id)
    {
        $nombre = $request->get('nombre');
        $fecha_nacimiento = $request->get('fecha_nacimiento');
        $altura = $request->get('altura');
        $peso = $request->get('peso');
        $camisola = $request->get('camisola');
        $posicion = $request->get('posicion');
        $goles = $request->get('goles');
        $id_seleccion = $request->get('id_seleccion');

        DB::select('SELECT UPDATE_JUGADOR('.$id.',\''.$nombre.'\',\''.$fecha_nacimiento.'\','.$altura.','.$peso.','.$camisola.',\''.$posicion.'\','.$goles.','.$id_seleccion.')');

        return Redirect::to('bet/jugador');
    }

    public function destroy($id)
    {
        DB::select('SELECT DELETE_JUGADOR('.$id.')');

        return Redirect::to('bet/jugador');
    }
}
