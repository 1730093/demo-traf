<div class="modal fade" id="EliminarRol{{ $r->id_rol }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar {{$r->rol}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><form method="POST" action="{{ route('rol.destroy', $r->id_rol) }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">¿Desea eliminar el registro?</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Elimar rol</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </form>
            </div>
        </div>
    </div>
</div>
