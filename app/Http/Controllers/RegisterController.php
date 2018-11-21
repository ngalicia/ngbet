<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Proyecto1\Http\Requests\ParticipanteFormRequest;
use DB;

class RegisterController extends Controller
{
	public function create()
    {
    	$paises = DB::select('SELECT * FROM GET_PAISES()');

        return view("layouts.register", ["paises"=>$paises]);
    }

    public function store(ParticipanteFormRequest $request)
    {
        $nombre = $request->get('nombre');
        $edad = $request->get('edad');
        $monto = $request->get('monto');
        $id_pais = $request->get('id_pais');

        DB::select('SELECT INSERT_PARTICIPANTE(\''.$nombre.'\','.$edad.','.$monto.','.$id_pais.')');

        return Redirect::to('/');
    }

}
