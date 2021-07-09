@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registro') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nombreusuario"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nombre Usuario') }}</label>

                                <div class="col-md-6">
                                    <input id="nombreusuario" type="text"
                                        class="form-control @error('nombreusuario') is-invalid @enderror"
                                        name="nombreusuario" value="{{ old('nombreusuario') }}" required
                                        autocomplete="name" autofocus>

                                    @error('nombreusuario')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fechanacimiento"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Fecha Nacimiento') }}</label>

                                <div class="col-md-6">
                                    <input id="fechanacimiento" type="text" class="form-control datepicker @error('fechanacimiento') is-invalid @enderror"
                                        name="fechanacimiento" value="{{ old('fechanacimiento') }}" required autocomplete="fechanacimiento">

                                    @error('fechanacimiento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="paisresidencia"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Pais Residencia') }}</label>

                                <div class="col-md-6">
                                    <input id="paisresidencia" type="text" class="form-control @error('paisresidencia') is-invalid @enderror"
                                        name="paisresidencia" value="{{ old('paisresidencia') }}" required autocomplete="paisresidencia">

                                    @error('paisresidencia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tiposuscripcion"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tipo Suscripcion') }}</label>

                                <div class="col-md-6">
                                    <input id="tiposuscripcion" type="text" class="form-control @error('tiposuscripcion') is-invalid @enderror"
                                        name="tiposuscripcion" value="{{ old('tiposuscripcion') }}" required autocomplete="tiposuscripcion">

                                    @error('tiposuscripcion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
