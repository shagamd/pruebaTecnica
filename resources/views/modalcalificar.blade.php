<!-- Modal -->
<div class="modal fade" id="modalCalificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('pelicula.calificar') }}" method="post">
                @csrf
                <input type="hidden" id="idpelicula" name="idpelicula"/>
                <div class="modal-header">
                    <h5 class="modal-title">Calificar Pelicula</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="calificacion"
                                    class="col-md-2 col-form-label text-md-left">{{ __('Calificacion') }} </label>
                                <div class="col-md-10">
                                    <input id="calificacion" type="number" min="1" max="5" 
                                        class="form-control @error('calificacion') is-invalid @enderror" name="calificacion"
                                        value="{{ old('calificacion') }}" required autofocus>
                                    @error('calificacion')
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
                    <button type="button" class="btn btn-secondary" id="btnCerrarCalificacion">Cerrar</button>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
