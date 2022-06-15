<?php

namespace App\Http\Controllers\gestion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/* Usamos DB para las consultas de l base de datos */
use DB;

class CargosController extends Controller
{
    /* Esta funcion se encarga de llamar todos los registros de la tabla CARGOS */
    public function get_cargos()
    {
        $cargos = DB::table('cargos')->select('*')->get();
        return response()->json($cargos);
    }

    /* Request $reuqest es implementado cuando se esta enviando informacion, esta recibiendo */
    public function create_cargo(Request $request)
    {
        /* Validamos que el cliente no este creado con una consulta*/
        $validar = DB::table('cargos')->select('*')->where('cargo', $request->cargo)->get();
        
        if (count($validar) > 0) {
            $no = array(0 => 'El cargo ya existe');
            return response()->json($no);
        }else{
            DB::insert('insert into cargos (cargo, estado) values (? ,?)', [$request->cargo, true]);
            $si = array(0 => 'El cargo se creo');
            return response()->json($si);
        }
    }
}
