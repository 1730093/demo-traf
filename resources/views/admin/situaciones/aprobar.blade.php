<div class="modal fade" id="aprobar{{ $situacion->id_situaciones }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aprobar situacion {{ $situacion->titulo }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{ route('admin.situaciones.update', $situacion->id_situaciones) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <input type="text" value="Aprobado" hidden="" name="input">
                    <label>Descripción:</label>
                    {{ $situacion->descripcion }}

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Aprobar situacion</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </form>

        </div>
    </div>
</div>
