<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelUsuarioPelicula extends Model
{
    use HasFactory;

    protected $table = 'relusuariopelicula';

    protected $fillable = ['idusuario', 'idpelicula', 'calificacion'];

    /**
     * Obtener la pelicula.
     */
    public function pelicula()
    {
        return $this->belongTo(Pelicula::class, 'idpelicula', 'idpelicula');
    }

    /**
     * Obtener el usuario.
     */
    public function usuario()
    {
        return $this->belongTo(User::class, 'idusuario', 'id');
    }
}
