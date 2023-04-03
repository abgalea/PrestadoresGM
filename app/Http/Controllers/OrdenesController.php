<?php

namespace App\Http\Controllers;

use App\Afiliados;
use App\Ordenes;
use Illuminate\Http\Request;

class OrdenesController extends Controller
{
    public function buscar(Request $request)
    {
        try {
            $resultado = Ordenes::findOrFail($request->orden);
            $afiliado = Afiliados::find($resultado->nro_doc);
            return view('resultados.index',['orden'=>$resultado, 'afiliado'=>$afiliado]);
            return $resultado;
        } catch (\Throwable $th) {
            $error = 'No se encontró ese Nro de Orden. Detalle del error:'.$th->getMessage();
            return view('errors.error', ['error'=>$error]);
        }

        return $request->all();
    }
}
