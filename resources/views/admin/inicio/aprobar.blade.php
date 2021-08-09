<div class="modal fade" id="aprobar{{ $actividad->id_actividad }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aprobar actividad {{ $actividad->titulo }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{ route('admin.actividades.update', $actividad->id_actividad) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <input type="text" value="Aprobado" hidden="" name="input">
                    <label>Descripción:</label>
                    {{ $actividad->descripcion }}

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Aprobar situacion</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </form>

        </div>
    </div>
</div>
