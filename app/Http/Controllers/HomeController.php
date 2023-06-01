<?php

namespace App\Http\Controllers;

use App\Ordenes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $desde = $request->get('desde');
        $hasta = $request->get('hasta');

        if ($desde == null) {
            $desde = date('Y-m-01');
        }
        if ($hasta == null) {
            $hasta = date('Y-m-30');
        }

        $ordenes = Ordenes::whereBetween('fechaPrestador', [$desde, $hasta])
        ->where('prestador', '=', Auth::id())
        ->get();
        $ordenesAgrupadas = Ordenes::whereBetween('fechaPrestador', [$desde, $hasta])
        ->where('prestador', '=', Auth::id())
        ->groupBy('nro_doc')
        ->pluck('nro_doc');

        $cantidad = $ordenes->count();


        return view('home', [
            'ordenes'=>$ordenes,
            'cantidad'=>$cantidad,
            'desde'=>$desde,
            'hasta'=>$hasta,
            'ordenesAgrupadas'=>$ordenesAgrupadas->count()
        ]);
    }
}
