@extends('layouts.app')

@section('content')

    @if (session('resultado'))
        <div class="alert alert-success" role="alert">
            {{ session('resultado') }}
        </div>
    @else

    @endif
    <!-- Dentro de FOR -->
    <div class="row">

        <div class="col-lg-12 ">

            <div class="container">
                <h1>Empleados</h1>
                <br>
                <div class="row">
                    <div class="col-lg-7">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#AgregarUsuario">Nuevo
                            empleado</button>
                    </div>

                    <div class="col-lg-5">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" name="nombre" type="search" placeholder="Buscar."
                                aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>

                    </div>

                </div>
                <div class="row">

                </div>
                <br>
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Edad</th>
                            <th scope="col" colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($usuarios as $user)
                            <tr>
                                <td></td>
                                <td>{{ $user->name . ' ' . $user->apellido_pat . ' ' . $user->apellido_mat }}</td>
                                <td>{{ $user->rol->rol }}</td>
                                {{-- @foreach($roles as $r)
									@if($r->id_rol == $user->id_rol)
									<td>{{$r->rol}}</td>
									@endif
									@endforeach --}}
                                <td>{{ $user->genero->genero }}</td>

                                {{-- <td>{{ $user->fecha_nac }}</td> --}}
                                <td>{{-- $user->age() --}}</td>
                                <td><button class="btn btn-outline-success" data-toggle="modal"
                                        data-target="#masinformacion{{ $user->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                            height="32" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z" />
                                        </svg></button>
                                        @include('admin.usuarios.masinformacion')
                                    </td>
                                <td><button class="btn btn-outline-warning" data-toggle="modal"
                                        data-target="#editar{{ $user->id }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="32" height="32" fill="currentColor" class="bi bi-pencil-square"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></button>
                                        @include('admin.usuarios.editar')
                                </td>
                                <td><button class="btn btn-outline-danger" data-toggle="modal"
                                        data-target="#eliminar{{ $user->id }}"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="32" height="32" fill="currentColor" class="bi bi-trash"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></button>
                                         @include('admin.usuarios.eliminar')
                                    </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Fin -->
    @include('admin.usuarios.agregar')

@endsection
