@extends('layouts.app')
@section('content')

<div class="container">
    @if (session('datos'))
        <div class="alert alert-success" role="alert">
            {{ session('datos') }}
        </div>
    @else

    @endif
    <div class="row">
        <div class="col-lg-6">
              <h2>Actividades de administrador</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Fecha inicio</th>
                            <th scope="col">Estado</th>
                            <th scope="col" colspan="3">Acciones</th>
                            {{-- <th scope="col" colspan="3">Acciones</th> --}}

                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($actividades as $actividad)

                            <tr>
                                <td>{{ $actividad->titulo }}</td>
                                <td>{{ $actividad->descripcion }}</td>
                                <td>{{ $actividad->fecha_inicio }}</td>
                                <td>{{ $actividad->estado }}</td>
                                <td><button class="btn btn-primary"  data-toggle="modal"
                                    data-target="#evidencia{{ $actividad->id_actividad }}">Ver</button>
                                   @include('admin.inicio.evidencia')
                                </td>
                                <td><button class="btn btn-success"  data-toggle="modal"
                                    data-target="#aprobar{{ $actividad->id_actividad }}">Aprobar</button>
                                   @include('admin.inicio.aprobar')
                                </td>
                                <td><button class="btn btn-danger"  data-toggle="modal"
                                    data-target="#desaprobar{{ $actividad->id_actividad }}">Desaprobar</button>
                                   @include('admin.inicio.desaprobar')
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>




@endsection
