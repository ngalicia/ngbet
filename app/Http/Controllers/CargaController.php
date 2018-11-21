<?php

namespace Proyecto1\Http\Controllers;

use Illuminate\Http\Request;

use Proyecto1\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Proyecto1\Http\Requests\CargaFormRequest;
use DB;
use Illuminate\Support\Facades\Input;

class CargaController extends Controller
{
    public function index(Request $request)
    {
		return view('bet.carga.index');
    }

    public function store(CargaFormRequest $request)
    {
        $opcion = $request->get('opcion');
        $documento = $request->file('documento');
        
        if($opcion == 'TMP_PAISES')
        {
            $file = '/home/user/Documents/'.$documento->getClientOriginalName();
            $tabla = 'TMP_PAISES';

            DB::select('SELECT CARGAR(\''.$tabla.'\',\''.$file.'\')');
            DB::select('SELECT CARGAR_PAIS()');
        }
        elseif($opcion == 'TMP_USUARIOS')
        {
            $file = '/home/user/Documents/'.$documento->getClientOriginalName();
            $tabla = 'TMP_USUARIOS';

            DB::select('SELECT CARGAR(\''.$tabla.'\',\''.$file.'\')');
            DB::select('SELECT CARGAR_PARTICIPANTE()');
        }
        elseif($opcion == 'TMP_EQUIPOS')
        {
            $file = '/home/user/Documents/'.$documento->getClientOriginalName();
            $tabla = 'TMP_EQUIPOS';

            DB::select('SELECT CARGAR(\''.$tabla.'\',\''.$file.'\')');
            DB::select('SELECT CARGAR_CONFEDERACION()');
            DB::select('SELECT CARGAR_SELECCION()');
        }
        elseif($opcion == 'TMP_JUEGOS')
        {
            $file = '/home/user/Documents/'.$documento->getClientOriginalName();
            $tabla = 'TMP_JUEGOS';

            DB::select('SELECT CARGAR(\''.$tabla.'\',\''.$file.'\')');
            DB::select('SELECT CARGAR_CIUDAD()');
            DB::select('SELECT CARGAR_ARBITRO()');
            DB::select('SELECT CARGAR_PARTIDO()');
        }
        elseif($opcion == 'TMP_RPONOSTICOS')
        {
            $file = '/home/user/Documents/'.$documento->getClientOriginalName();
            $tabla = 'TMP_PRONOSTICOS';

            DB::select('SELECT CARGAR(\''.$tabla.'\',\''.$file.'\')');
            DB::select('SELECT CARGAR_PRONOSTICO()');
        }
        elseif($opcion == 'TMP_MARCADORES')
        {
            $file = '/home/user/Documents/'.$documento->getClientOriginalName();
            $tabla = 'TMP_MARCADORES';

            DB::select('SELECT CARGAR(\''.$tabla.'\',\''.$file.'\')');
            DB::select('SELECT CARGAR_MARCADOR()');
        }
        elseif($opcion == 'TMP_JUGADORES')
        {
            $file = '/home/user/Documents/'.$documento->getClientOriginalName();
            $tabla = 'TMP_JUGADORES';

            DB::select('SELECT CARGAR(\''.$tabla.'\',\''.$file.'\')');
            DB::select('SELECT CARGAR_JUGADOR()');
        }

        return Redirect::to('bet/carga');
    }
}
