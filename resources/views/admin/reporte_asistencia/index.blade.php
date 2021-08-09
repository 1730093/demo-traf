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
                {{--  <form method="POST" action="{{ route('admin.asistencia.store') }}">
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
                </form> --}}
                <div class="row">

                </div>
                <br>
                <table class="table table-bordered table-hover">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col"></th>
                      @foreach($dateArr as $d)
                      <th scope="col">{{ $d }}</th>
                      @endforeach
                    </tr>
                  </thead>
                  <tbody class="table-light">
                    @foreach($user as $u)
                        <tr>
                        <td>{{ $u->name }}</td>
                        <?php $cont = 0 ?>
                            @foreach($asistencia as $a)
                                @if($u->id == $a->user_id AND $a->fecha == $dateArr[0])
                                    <td>Si tiene asistencia</td>
                                    <?php $cont = 1 ?>
                                @endif
                            @endforeach
                            @if($cont == 0)
                                <td></td>
                            @endif
                            <?php $cont = 0 ?>
                            @foreach($asistencia as $a)
                                @if($u->id == $a->user_id AND $a->fecha == $dateArr[1])
                                    <td>Si tiene asistencia</td>
                                    <?php $cont = 1 ?>
                                @endif
                            @endforeach
                            @if($cont == 0)
                                <td></td>
                            @endif
                            <?php $cont = 0 ?>
                            @foreach($asistencia as $a)
                                @if($u->id == $a->user_id AND $a->fecha == $dateArr[2])
                                    <td>Si tiene asistencia</td>
                                    <?php $cont = 1 ?>
                                @endif
                            @endforeach
                            @if($cont == 0)
                                <td></td>
                            @endif
                            <?php $cont = 0 ?>
                            @foreach($asistencia as $a)
                                @if($u->id == $a->user_id AND $a->fecha == $dateArr[3])
                                    <td>Si tiene asistencia</td>
                                    <?php $cont = 1 ?>
                                @endif
                            @endforeach
                            @if($cont == 0)
                                <td></td>
                            @endif
                            <?php $cont = 0 ?>
                            @foreach($asistencia as $a)
                                @if($u->id == $a->user_id AND $a->fecha == $dateArr[4])
                                    <td>Si tiene asistencia</td>
                                    <?php $cont = 1 ?>
                                @endif
                            @endforeach
                            @if($cont == 0)
                                <td></td>
                            @endif
                            <?php $cont = 0 ?>
                        </tr>
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
