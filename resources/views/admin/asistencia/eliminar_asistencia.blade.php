<div class="modal fade" id="eliminarasistencia{{ $asistencia->id_asistencia }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar asistencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.asistencia.destroy',$asistencia->id_asistencia) }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <label>¿Está seguro de eliminar la asistencia?</label>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Eliminar</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </form>

        </div>
    </div>
</div>
