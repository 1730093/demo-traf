<div class="modal fade" id="editar{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('usuarios.update',$user->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">
                            <label>Nombre del empleado</label>
                            <br>
                            <input name="name" class="form-control input-sm" type="text"
                                placeholder="Ingresa el nombre del empleado" value="{{ $user->name }}" >
                            @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                    <br>
                     <div class="row">
                        <div class="col-lg-2">
                        </div>
                         <div class="col-lg-4">
                            <label>Apellido paterno del empleado</label>
                            <input name="apellido_pat" class="form-control input-sm" type="text"
                                placeholder="Apellido paterno del empleado" value="{{ $user->apellido_pat }}">
                            @error('apellido_pat')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Apellido materno del empleado</label>
                            <input name="apellido_mat" class="form-control input-sm" type="text"
                                placeholder="Apellido materno del empleado" value="{{ $user->apellido_mat }}">
                            @error('apellido_mat')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-2">

                        </div>
                     </div>
                     <br>
                     <div class="row">
                        <div class="col-lg-2"></div>
                         <div class="col-lg-4">
                            <label>Rol:</label>
                             <select name="id_rol" class="form-control" aria-label="Default select example">
                                @foreach ($roles as $rol)
                                @if($rol->id_rol == $user->id_rol)
                                <option value="{{ $rol->id_rol}}">{{$rol->rol}}</option>
                                @endif
                                @endforeach
                                @foreach ($roles as $rol)
                                @if($rol->id_rol !== $user->id_rol)
                                <option value="{{ $rol->id_rol}}">{{$rol->rol}}</option>
                                @endif
                                @endforeach
                            </select>
                         </div>
                         <div class="col-lg-4">
                            <label>Genero:</label>
                             <select name="id_genero" class="form-control" aria-label="Default select example">
                                @foreach ($generos as $genero)
                                @if($genero->id_genero == $user->id_genero)
                                <option value="{{ $genero->id_genero}}">{{$genero->genero}}</option>
                                @endif
                                @endforeach
                                @foreach ($generos as $genero)
                                @if($genero->id_genero !== $user->id_genero)
                                <option value="{{ $genero->id_genero}}">{{$genero->genero}}</option>
                                @endif
                                @endforeach
                            </select>
                         </div>
                         <div class="col-lg-2"></div>
                     </div>
                     <br>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <label>Fecha de nacimiento del empleado</label>
                            <input name="fecha_nac" class="form-control input-sm" type="date"
                                value="{{ $user->fecha_nac }}">
                            @error('fecha_nac')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-6"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <label>Correo electronico del empleado</label>
                            <input name="email" class="form-control input-sm" type="email"
                                placeholder="Correo electronico del empleado" value="{{ $user->email }}">
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Contraseña del empleado</label>


                            <input name="password" class="form-control input-sm" type="text"
                                placeholder="Contraseña del empleado" value="">
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Agregar usuario</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
