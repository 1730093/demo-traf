<div class="modal fade" id="evidencia{{ $actividad->id_actividad }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aprobar actividad {{ $actividad->titulo }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="filter-container p-0 row">
                        @foreach($actividad->images as $image)
                            <div id="idimagen-{{ $image->id }}" class="col-sm-4">
                              {{-- <a href="{{ $image->url }}" data-toggle="lightbox" data-gallery="gallery" data-title="ID: {{ $image->id }}" > --}}
                                <img style="width:230px; height: 230px;" src="{{ $image->url }}" class="img-fluid mb-2" />
                              {{-- </a> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
        </div>
    </div>
</div>
