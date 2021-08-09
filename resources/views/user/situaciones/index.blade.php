@extends('layouts.appuser')
@section('content')
    <!-- Dentro de FOR -->
    @if (session('resultado'))
        <div class="alert alert-success" role="alert">
            {{ session('resultado') }}
        </div>
    @else

    @endif
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <h3>Situaciones</h3>
                <button class="btn btn-primary" data-toggle="modal" data-target="#AgregarSituacion">Agregar
                    situacion</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Fecha inicio</th>
                            <th scope="col">Fecha fin</th>
                            <th scope="col">Evidencia</th>
                            {{-- <th scope="col" colspan="3">Acciones</th> --}}

                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($situaciones as $situacion)
                        @if($situacion->estado!=="Concluido")
                            <tr>
                                <td>{{ $situacion->titulo }}</td>
                                <td>{{ $situacion->descripcion }}</td>
                                <td>{{ $situacion->fecha_peticion }}</td>
                                <td>{{ $situacion->estado }}</td>

                                {{-- <td>{{ $situacion->estado }}</td> --}}

                                <td><button class="btn btn-danger"  data-toggle="modal"
                                    data-target="#eliminar{{ $situacion->id_situacion }}"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg></button>
                                   @include('user.situaciones.eliminar')
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="col-lg-4">
                <div class="card text-white  mb-3" style=" width: 100%; height: 200; background-color: #6261B1;">
                    <div class="card-header">Buscar</div>
                    <div class="card-body">

                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <!<h5 class="card-title">Dark card title</h5>
                                                <p class="card-text"> content.</p>>
                    </div>
                    <div class="card-header">Filtros</div>
                    <div class="card-body">
                        <h7>Filtro 1</h7><input type="checkbox" class="checkbox" name="">
                        <br>
                        <h7>Filtro 2</h7><input type="checkbox" class="checkbox" name="">
                        <br>
                        <h7>Filtro 3</h7><input type="checkbox" class="checkbox" name="">
                    </div>
                </div>
            </div> --}}

           {{--  <div class="col-lg-12">
                <div class="row">
                    @foreach ($situaciones as $situacion)
                        < dentro del for >
                        <div class="card mb-3" style=" width: 800px; height: 300px; background-color: #E7DDD5;">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h2>{{ $situacion->titulo }}</h2>
                                    </div>
                                    <div class="col-lg-4">
                                        <button data-toggle="modal" data-target="#EditarSituacion{{ $situacion->id_situaciones }}" class="btn btn-warning">Editar</button>
                                        <button data-toggle="modal" data-target="#EliminarSituacion{{ $situacion->id_situaciones }}" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                            <div class=" card-body">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h4>Descripcion de la situacion</h4>
                                        {{ $situacion->descripcion }}<br>
                                        <h4>Fecha de la situacion</h4>
                                        {{ $situacion->fecha_peticion }}
                                    </div>
                                </div>
                            </div>

                        </div>
                                                  
                        @include('user.situaciones.editar')
                        @include('user.situaciones.eliminar')
                       

                    @endforeach
                </div>
            </div> --}}
        </div>
    </div>
    @include('user.situaciones.agregar')
@endsection
