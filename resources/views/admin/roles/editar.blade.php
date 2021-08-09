<div class="modal fade" id="EditarRol{{ $r->id_rol }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar rol {{$r->rol}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form method="POST" action="{{ route('rol.update', $r->id_rol) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <label>Nombre del rol</label>
                            <br>
                            <input name="editarrol" class="form-control input-sm" type="text"
                                placeholder="Ingresa el nombre del rol" value="{{ $r->rol }}">
                            @error('agregarrol')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Actualizar rol</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </form>
        </div>
    </div>
</div>
