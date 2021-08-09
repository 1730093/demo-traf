@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 20px;">
@if (session('datos'))
    <div class="alert alert-success" role="alert">
        {{ session('datos') }}
    </div>
@else

@endif
    <div class="row">
        <div class="col-lg-6">
          <h2>Situaciones</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
        <div class="col-lg-12">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Creada por</th>
                            <th scope="col">Estado</th>
                            <th scope="col" colspan="3">Acciones</th>
                            {{-- <th scope="col" colspan="3">Acciones</th> --}}

                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($situaciones as $situacion)

                            <tr>
                                <td>{{ $situacion->titulo }}</td>
                                <td>{{ $situacion->descripcion }}</td>
                                <td>{{ $situacion->fecha_peticion }}</td>
                                <td>{{ $situacion->estado }}</td>
                                @foreach($users as $user)
                                @if($user->id==$situacion->id_user)
                                <td>{{ $user->name }} {{ $user->apellido_pat }} {{ $user->apellido_mat }}</td>
                                @endif
                                @endforeach
                                <td><button class="btn btn-success"  data-toggle="modal"
                                    data-target="#aprobar{{ $situacion->id_situaciones }}">Aprobar</button>
                                   @include('admin.situaciones.aprobar')
                                </td>
                                <td><button class="btn btn-danger"  data-toggle="modal"
                                    data-target="#desaprobar{{ $situacion->id_situaciones }}">Desaprobar</button>
                                   @include('admin.situaciones.desaprobar')
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
        </div>
    </div>

</div>
@endsection
