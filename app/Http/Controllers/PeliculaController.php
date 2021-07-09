<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use App\Models\RelUsuarioPelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevaPelicula = new Pelicula();
        $nuevaPelicula->titulo = $request->titulo;
        $nuevaPelicula->genero = $request->genero;
        $nuevaPelicula->duracion = $request->duracion;
        $nuevaPelicula->resumen = $request->resumen;
        $nuevaPelicula->director = $request->director;
        $nuevaPelicula->urlubicacion = $request->urlubicacion;
        $nuevaPelicula->clasificacion = $request->clasificacion;
        $nuevaPelicula->anioestreno = $request->anioestreno;
        $nuevaPelicula->save();

        return redirect()->route('home');
    }

    public function calificar(Request $request)
    {
        $idUser = Auth::user()->id;

        $nuevaCalificacion = new RelUsuarioPelicula();
        $nuevaCalificacion->idpelicula = $request->idpelicula;
        $nuevaCalificacion->idusuario = $idUser;
        $nuevaCalificacion->calificacion = $request->calificacion;
        $nuevaCalificacion->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
