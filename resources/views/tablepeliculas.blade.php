<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Duraci&oacute;n</th>
            <th>Resumen</th>
            <th>Director</th>
            <th>A&ntilde;o Estreno</th>
            <th>Calificaci&oacute;n</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($peliculas as $p)
            <tr>
                <td>{{ $p->titulo }}</td>
                <td>{{ $p->genero }}</td>
                <td>{{ $p->duracion }}</td>
                <td>{{ $p->resumen }}</td>
                <td>{{ empty($p->director) ? 'No Registra' : $p->director }}</td>
                <td>{{ empty($p->anioestreno) ? 'No Registra' : $p->anioestreno }}</td>
                <td class="text-right">
                    @if (is_null($p->calificacion))
                        <button idpelicula="{{ $p->idpelicula }}"
                            class="button btn btn-primary font13 float-right calificarPelicula">Calificar</button>
                    @else
                        {{ $p->calificacion }}
                    @endif
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
