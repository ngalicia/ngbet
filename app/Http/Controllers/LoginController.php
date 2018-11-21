<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Proyecto1\Http\Requests\SeleccionFormRequest;
use DB;

class LoginController extends Controller
{
    public function index(Request $request)
    {
		$participantes = DB::select('SELECT * FROM GET_PARTICIPANTES()');

		return view('layouts.login', ["participantes"=>$participantes]);
    }

    public function login(Request $request)
    {
        $usuario = $request->get('id_participante');

        \Session::push('usuario',$usuario);

        return Redirect::to('bet/participante');
    }

    public function logout(Request $request)
    {
        \Session::forget('usuario');
        \Session::flush();

        return Redirect::to('/');
    }

}
