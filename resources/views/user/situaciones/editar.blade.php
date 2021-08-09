<div class="modal fade" id="EditarSituacion{{ $situacion->id_situaciones }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Situacion {{ $situacion->titulo }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{ route('situaciones.update', $situacion->id_situaciones) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            {{ 'Hola' . $situacion->id_situaciones }}
                            <label>Titulo de la situacion</label>
                            <br>
                            <input name="titulosituacion" class="form-control input-sm" type="text"
                                placeholder="Ingresa el titulo de la situacion" value="{{ $situacion->titulo }}">
                            @error('titulosituacion')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>

                            <label>Descripcion de la situacion</label>
                            <br>
                            <textarea name="descripcionsituacion" class="form-control input-sm"
                                placeholder="Ingresa la descripcion de la situacion" id="" cols="30"
                                rows="10">{{ $situacion->descripcion }}</textarea>
                            @error('descripcionsituacion')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <br>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Editar situacion</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </form>

        </div>
    </div>
</div>
