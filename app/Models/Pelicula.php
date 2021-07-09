<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'pelicula';

    protected $primaryKey = 'idpelicula';

    protected $fillable = ['titulo', 'genero', 'duracion', 'resumen', 'director', 'urlubicacion', 'clasificacion', 'anioestreno'];

    /**
     * Obtener la relacion asociada a la pelicula.
     */
    public function relUsuarioPelicula()
    {
        return $this->hasMany(RelUsuarioPelicula::class, 'idpelicula', 'idpelicula');
    }
}
