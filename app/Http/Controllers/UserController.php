<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rol;
use App\Models\Genero;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only' => 'index']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL ADMIN
//      $this->middleware('soloempleado',['only' => 'asistencia']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL EMPLEADO
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $roles = Rol::get();
        $generos = Genero::get();

        $userb = $request->get('nombre');
        $usuarios = User::where('name', 'like', "%$userb%")->orderBy('name')->paginate();

        return view('admin.usuarios.index',compact('roles','generos','usuarios'));

    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required',
            'apellido_pat' => 'required',
            'apellido_mat' => 'required',
            'id_rol' => 'required',
            'id_genero' => 'required',
            'fecha_nac' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        // $data = array(
        //     'name'  =>  $request->name,
        //     'apellido_pat' => $request->apellido_pat,
        //     'apellido_mat' => $request->apellido_mat,
        //     'fecha_nac' => $request->fecha_nac,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'id_genero' => $request->id_genero,
        //     'id_rol' => $request->id_rol,

        // );
        
        //PARA HACER HASH A LA CONTRASEÑA
        $pass=Hash::make($request->password);


        $user = new User;
        $user->name = $request->name;
        $user->apellido_pat = $request->apellido_pat;
        $user->apellido_mat = $request->apellido_mat;
        $user->fecha_nac = $request->fecha_nac;
        $user->email = $request->email;
        $user->password = $pass;
        $user->id_genero = $request->id_genero;
        $user->id_rol = $request->id_rol;
        $user->save();
        return redirect()->route('usuarios.index')->with('resultado', 'Se realizó correctamente el registro del nuevo usuario.');

        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show(User $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(User $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $request->validate([
            'name' => 'required',
            'apellido_pat' => 'required',
            'apellido_mat' => 'required',
            'id_rol' => 'required',
            'id_genero' => 'required',
            'fecha_nac' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        // $data = array(
        //     'name'  =>  $request->name,
        //     'apellido_pat' => $request->apellido_pat,
        //     'apellido_mat' => $request->apellido_mat,
        //     'fecha_nac' => $request->fecha_nac,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'id_genero' => $request->id_genero,
        //     'id_rol' => $request->id_rol,

        // );

        //PARA HACER HASH A LA CONTRASEÑA
        $pass=Hash::make($request->password);


        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->apellido_pat = $request->apellido_pat;
        $user->apellido_mat = $request->apellido_mat;
        $user->fecha_nac = $request->fecha_nac;
        $user->email = $request->email;
        $user->password = $pass;
        $user->id_genero = $request->id_genero;
        $user->id_rol = $request->id_rol;
        $user->save();
        return redirect()->route('usuarios.index')->with('resultado', 'Se realizó correctamente el registro del nuevo usuario.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('usuarios.index')->with('resultado', 'El usuario se elimino correctamente.');
    }


}
