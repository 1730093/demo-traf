@extends('layouts.appuser')

@section('content')

    @if (session('datos'))
        <div class="alert alert-success" role="alert">
            {{ session('datos') }}
        </div>
    @else

    @endif
    <!-- Dentro de FOR -->
    <div class="row">

        <div class="col-lg-12 ">

            <div class="container">
                <h1>Actividades</h1>
                <br>
                <div class="row">

                    <div class="col-lg-7">
                        {{--
                        <button class="btn btn-primary" data-toggle="modal" data-target="#AgregarUsuario">Nuevo
                            actividad</button> --}}
                    </div>

                    {{-- <div class="col-lg-5">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" name="nombre" type="search" placeholder="Buscar."
                                aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>

                    </div> --}}

                </div>
                <div class="row">

                </div>
                <br>
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
                        @foreach ($actividades as $actividad)
                        @if($actividad->estado!=="Concluido")
                            <tr>
                                <td>{{ $actividad->titulo }}</td>
                                <td>{{ $actividad->descripcion }}</td>
                                <td>{{ $actividad->fecha_inicio }}</td>
                                <td>{{ $actividad->fecha_fin }}</td>
                                
                                {{-- <td>{{ $actividad->estado }}</td> --}}
                                
                                <td><button class="btn btn-primary"  data-toggle="modal"
                                    data-target="#enviarEvidencia{{ $actividad->id_actividad }}"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                                  </svg></button>
                                   @include('user.inicio.agregar')
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Fin -->


@endsection
