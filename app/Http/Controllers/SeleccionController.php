<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Proyecto1\Http\Requests\SeleccionFormRequest;
use DB;

class SeleccionController extends Controller
{
    public function index(Request $request)
    {
		$selecciones = DB::select('SELECT * FROM GET_SELECCIONES()');

		return view('bet.seleccion.index', ["selecciones"=>$selecciones]);
    }

    public function create()
    {
    	$confederaciones = DB::select('SELECT * FROM GET_CONFEDERACIONES()');

        return view("bet.seleccion.create", ["confederaciones"=>$confederaciones]);
    }

    public function store(SeleccionFormRequest $request)
    {
        $nombre = $request->get('nombre');
        $grupo = $request->get('grupo');
        $id_confederacion = $request->get('id_confederacion');

        DB::select('SELECT INSERT_SELECCION(\''.$nombre.'\',\''.$grupo.'\','.$id_confederacion.')');

        return Redirect::to('bet/seleccion');
    }

    public function edit($id)
    {
        $selecciones = DB::select('SELECT * FROM GET_SELECCION('.$id.')');
    	$confederaciones = DB::select('SELECT * FROM GET_CONFEDERACIONES()');

        return view("bet.seleccion.edit", ["selecciones"=>$selecciones, "confederaciones"=>$confederaciones]);
    }

    public function update(SeleccionFormRequest $request, $id)
    {
        $nombre = $request->get('nombre');
        $grupo = $request->get('grupo');
        $id_confederacion = $request->get('id_confederacion');

        DB::select('SELECT UPDATE_SELECCION('.$id.',\''.$nombre.'\',\''.$grupo.'\','.$id_confederacion.')');

        return Redirect::to('bet/seleccion');
    }

    public function destroy($id)
    {
        DB::select('SELECT DELETE_SELECCION('.$id.')');

        return Redirect::to('bet/seleccion');
    }
}
