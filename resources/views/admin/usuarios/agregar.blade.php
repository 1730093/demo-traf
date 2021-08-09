<div class="modal fade" id="AgregarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('usuarios.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-2">

                        </div>
                        <div class="col-lg-8">
                            <label>Nombre del empleado</label>
                            <br>
                            <input name="name" class="form-control input-sm" type="text"
                                placeholder="Ingresa el nombre del empleado">
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
                                placeholder="Apellido paterno del empleado">
                            @error('apellido_pat')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Apellido materno del empleado</label>
                            <input name="apellido_mat" class="form-control input-sm" type="text"
                                placeholder="Apellido materno del empleado">
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
                                <option value="{{ $rol->id_rol}}">{{$rol->rol}}</option>
                                @endforeach
                            </select>
                         </div>
                         <div class="col-lg-4">
                            <label>Genero:</label>
                             <select name="id_genero" class="form-control" aria-label="Default select example">
                                @foreach ($generos as $genero)
                                <option value="{{ $genero->id_genero}}">{{$genero->genero}}</option>
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
                                placeholder="Ingresa la fecha de nacimiento del empleado">
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
                                placeholder="Correo electronico del empleado">
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-4">
                            <label>Contraseña del empleado</label>
                            <input name="password" class="form-control input-sm" type="password"
                                placeholder="Contraseña del empleado">
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
