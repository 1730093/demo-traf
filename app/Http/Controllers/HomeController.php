<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('soloadmin', ['only' => 'inicio']); //AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL ADMIN
        //$this->middleware('soloempleado', ['only' => 'getuser']); //AQUI SE DECLARAN LAS RUTAS QUE UTILIZA EL EMPLEADO

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        switch (Auth::user()->id_rol) {
            case ('1'):
                $actividades = Actividad::get();
                return view('admin.inicio.inicio',compact('actividades'));
            default:
            $actividades = Actividad::get();
            //$users = User::get();

                return view('user.inicio.inicio', compact('actividades'));

                //return view('home');
                //return view('admin.inicio.inicio');
        }
    }
    
        
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $urlimagenes = [];
        if($request->hasFile('imagenes')){
            $imagenes = $request->file('imagenes');
            foreach($imagenes as $imagen){
                $nombre = time().'_'.$imagen->getClientOriginalName();

                $ruta = public_path().'/imagenes';

                $imagen->move($ruta,$nombre);

                $urlimagenes[]['url'] = '/imagenes/'.$nombre;
            }
        }
        // $producto = new Producto;
        // $producto->nombre=$request->nombre;
        // $producto->slug=$request->slug;
        // $producto->categoria_id=$request->categoria_id;
        // $producto->cantidad=$request->cantidad;
        // $producto->precio_anterior=$request->precio_anterior;
        // $producto->precio_actual=$request->precio_actual;
        // $producto->porcentaje_descuento=$request->porcentaje_descuento;
        // $producto->descripcion_corta=$request->descripcion_corta;
        // $producto->descripcion_larga=$request->descripcion_larga;
        // $producto->descripcion_especificaciones=$request->descripcion_especificaciones;
        // $producto->datos_de_interes=$request->datos_de_interes;
        // $producto->estado=$request->estado;
        // if($request->activo){
        //     $producto->activo='Si';
        // }else{
        //     $producto->activo='No';
        // }

        // if($request->sliderprincipal){
        //     $producto->sliderprincipal='Si';
        // }else{
        //     $producto->sliderprincipal='No';
        // }
        // $producto->save();
        // $producto->images()->createMany($urlimagenes);
        return redirect()->route('user.inicio.index')->with('datos','Registro creado correctamente.');

    }
}
