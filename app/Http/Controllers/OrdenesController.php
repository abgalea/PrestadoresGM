<?php

namespace App\Http\Controllers;

use App\Afiliados;
use App\Ordenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

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

    public function control(Request $request)
    {
        $id_orden = Crypt::decryptString($request->input('id_orden'));
        try {
            $orden = Ordenes::findOrFail($id_orden);
            $orden->fechaPrestador  = $request->input('fechaPrestador');
            $orden->nombrePrestador = $request->input('nombrePrestador');
            $orden->prestador = Auth::user()->id;
            $orden->update();

            return redirect('/home');
        } catch (\Throwable $th) {
            $error = 'No se encontró ese Nro de Orden. Detalle del error:'.$th->getMessage();
            return view('errors.error', ['error'=>$error]);
        }
        return $request->all();
    }
}
