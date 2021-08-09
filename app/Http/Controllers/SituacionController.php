<?php

namespace App\Http\Controllers;

use App\Models\Situacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SituacionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('soloadmin',['only' => 'index']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL ADMIN
        $this->middleware('soloempleado',['only' => 'store','update','destroy']);//AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL EMPLEADO

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //     
        //return view('admin.situaciones.index');
        // if(Auth::user()->id_rol == 1){
        //     return view('admin.situaciones.index');
        // }else{
        //     $id_usuario = Auth::user()->id;
        //     $situaciones = Situacion::where('id_user','=',$id_usuario)->paginate();
        //     //return $situaciones;
        //     return view('user.situaciones.index',compact('situaciones'));
        // }

        switch(Auth::user()->id_rol){
            case ('1'):
                //$situaciones = Situacion::get();
                $situaciones = Situacion::get();
                $users = User::get();

                //return view('admin.situaciones.index',compact('situaciones','users'));
                return view('admin.situaciones.index',compact('situaciones','users'));

                break;
            default:
                $id_usuario = Auth::user()->id;
                $situaciones = Situacion::where('id_user','=',$id_usuario)->paginate();
                //return $situaciones;
                return view('user.situaciones.index',compact('situaciones'));
                break;
        }
    }

    // public function situaciones()
    // {
    // }

    public function situacion()
    {

       
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
        $id = Auth::user()->id;
        $date = date('Y-m-d');
        //return $date;
        

        $situacion = new Situacion();
        $situacion->titulo = $request->titulosituacion;
        $situacion->descripcion = $request->descripcionsituacion;
        $situacion->fecha_peticion= $date;
        $situacion->estado = 'pendiente';
        $situacion->id_user = $id;
        $situacion->save();
        return redirect()->route('situaciones.index')->with('resultado', 'Se realizó correctamente el registro de la situacion.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Situacion  $situacion
     * @return \Illuminate\Http\Response
     */
    public function show(Situacion $situacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Situacion  $situacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Situacion $situacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Situacion  $situacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //return $request;
        
        $request->validate([
            'titulosituacion' => 'required',
            'descripcionsituacion' => 'required'
        ]);
        $situacion = Situacion::findOrFail($id);
        $situacion->titulo = $request->titulosituacion;
        $situacion->descripcion = $request->descripcionsituacion;


        $situacion->save();
        return redirect()->route('situaciones.index')->with('resultado', 'Se actualizo correctamente la situacion.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Situacion  $situacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        //
        Situacion::destroy($id);
        return redirect()->route('situaciones.index')->with('resultado', 'La situacion se elimino correctamente.');
        
    }
}
