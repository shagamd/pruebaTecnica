<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $idUser = Auth::user()->id;
        $peliculas = Pelicula::leftJoin('relusuariopelicula', function ($join) {
            $join->on('pelicula.idpelicula', '=', 'relusuariopelicula.idpelicula');
            $join->on(DB::raw("'" . Auth::user()->id . "'"), '=', 'relusuariopelicula.idusuario');
        })->where("idusuario", $idUser)->orWhereNull("idusuario")->get(['pelicula.*', 'calificacion']);
        return view('home', compact('peliculas'));
    }
}
