@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@if (session('resultado'))
        <div class="alert alert-success" role="alert">
            {{ session('resultado') }}
        </div>
    @else

    @endif
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @else

    @endif
<div class="container" style="margin-top: 20px;" >

    <!-- Dentro de FOR -->
    <div class="row">

        <div class="col-lg-12 ">

            <div class="container">
                <h2>Asistencia</h2>
                 <form method="POST" action="{{ route('admin.asistencia.store') }}">
                    @csrf

                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-5">
                        <select id="buscador" name="AsignarAsistenciaSelect2" class="js-example-responsive" style="width:100%">
                            @foreach($users as $user)

                            <option value="{{ $user->id }}">{{ $user->name }} {{ $user->apellid_pat }} {{ $user->apellido_mat }}</option>

                            @endforeach
                        </select>
                        <input type="hidden" name="idta" value="{{ Auth::user()->id }}">
                    </div>
                    <div class="col-lg-3">
                        <button class="btn btn-primary" type="submit" >Asignar asistencia</button>

                    </div>
                </div>
                </form>
                <div class="row">

                </div>
                <br>
                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>

                      <th scope="col">Nombre</th>
                      <th scope="col">Entrada</th>
                      <th scope="col" colspan="2">Acciones</th>
                    </tr>
                  </thead>
                  <tbody class="table-light">
                    @foreach($asistencias as $asistencia)
                    @if($asistencia->hora_salida==null)
                    <tr>
                      @foreach($users as $user)
                      @if($user->id == $asistencia->user_id )
                      <td>{{ $user->name }} {{ $user->apellid_pat }} {{ $user->apellido_mat }}</td>
                      @endif
                      @endforeach
                      <td>{{ $asistencia->hora_entrada }}</td>
                      <td><button data-toggle="modal" data-target="#finalizarasistencia{{ $asistencia->id_asistencia }}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                      <path d="M13.485 1.431a1.473 1.473 0 0 1 2.104 2.062l-7.84 9.801a1.473 1.473 0 0 1-2.12.04L.431 8.138a1.473 1.473 0 0 1 2.084-2.083l4.111 4.112 6.82-8.69a.486.486 0 0 1 .04-.045z"/>
                    </svg></button>
                        @include('admin.asistencia.finalizar_asistencia')
                    </td>
                      <td><button data-toggle="modal" data-target="#eliminarasistencia{{ $asistencia->id_asistencia }}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                      <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
                    </svg></button>
                        @include('admin.asistencia.eliminar_asistencia')
                    </td>
                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                </table>


            </div>
        </div>

    <!-- Fin -->
</div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
{{-- <script src="sweetalert2.min.js"></script> --}}

<script type="text/javascript">
$('#buscador').select2();
$(".js-example-responsive").select2({
    width: 'resolve' // need to override the changed default
});


</script>
@endsection
