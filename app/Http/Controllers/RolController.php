<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin', ['only' => 'index']); //AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL ADMIN

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $rol = Rol::get();
        $rolcito = $request->get('rol_buscado');
        $rol = Rol::where('rol', 'like', "%$rolcito%")->orderBy('rol')->paginate();


        //return view('admin.roles.index');
        return view('admin.roles.index', compact('rol'));
    }

    // public function roles(){
    //     return view('admin.roles.index');
    // }
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
            'agregarrol' => 'required',
        ]);
        $rol = new Rol;
        $rol->rol = $request->agregarrol;

        $rol->save();
        return redirect()->route('rol.index')->with('resultado', 'Se realizó correctamente el registro del nuevo rol.');



        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function edit(Rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        //return $request;

        $request->validate([
            'editarrol' => 'required',
        ]);
        $rol = Rol::findOrFail($id);
        $rol->rol = $request->editarrol;

        $rol->save();
        return redirect()->route('rol.index')->with('resultado', 'Se actualizo correctamente el rol.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Rol::destroy($id);
        return redirect()->route('rol.index')->with('resultado', 'El rol se elimino correctamente.');
    }
}
