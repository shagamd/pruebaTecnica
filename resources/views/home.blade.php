@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Peliculas') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <button id="btnCrearPelicula" class="button btn btn-success font13 float-left">Crear
                            Pelicula</button>
                        @if (count($peliculas))
                            @include('tablepeliculas')
                        @else
                            <br /><br />
                            <div class="alert alert-info">
                                No hay Peliculas registradas.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @include('modalpelicula')
        @include('modalcalificar')
    </div>
@endsection
