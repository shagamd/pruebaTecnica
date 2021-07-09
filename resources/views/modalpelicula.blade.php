<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modalPelicula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('pelicula.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Crear Pelicula</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="titulo"
                                    class="col-md-2 col-form-label text-md-left">{{ __('Titulo') }} </label>
                                <div class="col-md-10">
                                    <input id="titulo" type="text"
                                        class="form-control @error('titulo') is-invalid @enderror" name="titulo"
                                        value="{{ old('titulo') }}" required autofocus>

                                    @error('titulo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="resumen"
                                    class="col-md-2 col-form-label text-md-left">{{ __('Resumen') }} </label>
                                <div class="col-md-10">
                                    <textarea id="resumen"
                                        class="form-control @error('resumen') is-invalid @enderror" name="resumen"
                                        value="{{ old('resumen') }}" required autofocus></textarea>

                                    @error('resumen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="genero"
                                    class="col-md-3 col-form-label text-md-left">{{ __('Genero') }} </label>
                                <div class="col-md-9">
                                    <input id="genero" type="text"
                                        class="form-control @error('genero') is-invalid @enderror" name="genero"
                                        value="{{ old('genero') }}" required autofocus>

                                    @error('genero')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="duracion"
                                    class="col-md-3 col-form-label text-md-left">{{ __('Duración') }} </label>
                                <div class="col-md-9">
                                    <input id="duracion" type="text"
                                        class="form-control @error('duracion') is-invalid @enderror" name="duracion"
                                        value="{{ old('duracion') }}" required autofocus>

                                    @error('duracion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="director"
                                    class="col-md-3 col-form-label text-md-left">{{ __('Director') }} </label>
                                <div class="col-md-9">
                                    <input id="director" type="text"
                                        class="form-control @error('director') is-invalid @enderror" name="director"
                                        value="{{ old('director') }}" required autofocus>

                                    @error('director')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="urlubicacion"
                                    class="col-md-3 col-form-label text-md-left">{{ __('Url Ubicación') }} </label>
                                <div class="col-md-9">
                                    <input id="urlubicacion" type="text"
                                        class="form-control @error('urlubicacion') is-invalid @enderror" name="urlubicacion"
                                        value="{{ old('urlubicacion') }}" required autofocus>

                                    @error('urlubicacion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="clasificacion"
                                    class="col-md-3 col-form-label text-md-left">{{ __('Clasificación') }} </label>
                                <div class="col-md-9">
                                    <input id="clasificacion" type="text"
                                        class="form-control @error('clasificacion') is-invalid @enderror" name="clasificacion"
                                        value="{{ old('clasificacion') }}" required autofocus>

                                    @error('clasificacion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="anioestreno"
                                    class="col-md-3 col-form-label text-md-left">{{ __('Año Estreno') }} </label>
                                <div class="col-md-9">
                                    <input id="anioestreno" type="text"
                                        class="form-control @error('anioestreno') is-invalid @enderror" name="anioestreno"
                                        value="{{ old('anioestreno') }}" required autofocus>

                                    @error('anioestreno')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="btnCerrarModalPelicula">Cerrar</button>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
