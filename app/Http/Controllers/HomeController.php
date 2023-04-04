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
    public function index()
    {
        $cantidad = Ordenes::where('prestador', '=', Auth::id())->count();
        $ordenes = Ordenes::where('prestador', '=', Auth::id())->get();

        return view('home', ['ordenes'=>$ordenes, 'cantidad'=>$cantidad]);
    }
}
