<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actividad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Image;
class ActividadAdminController extends Controller
{
    public function index(){
        $actividades = Actividad::with('images')->get();
        return view('admin.inicio.inicio',compact('actividades'));
    }
    public function update(Request $request,$id){

        $actividad = Actividad::findOrFail($id);
        $actividad->estado= $request->input;
        $actividad->save();
        if($request->input=="Aprobado"){
            return redirect()->route('admin.actividades.index')->with('datos','Actividad aprobada.');
        }else{
            return redirect()->route('admin.actividades.index')->with('datos','Actividad desaprobada.');
        }

    }
}
