<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Situacion;
use App\Models\User;
class SituacionAdminController extends Controller
{
    public function index(){
        $situaciones = Situacion::get();
        $users = User::get();
        return view('admin.situaciones.index',compact('situaciones','users'));
    }
    public function update(Request $request,$id){

        $situacion = Situacion::findOrFail($id);
        $situacion->estado= $request->input;
        $situacion->save();
        if($request->input=="Aprobado"){
            return redirect()->route('admin.situaciones.index')->with('datos','Situacion aprobada.');
        }else{
            return redirect()->route('admin.situaciones.index')->with('datos','Situacion desaprobada.');
        }

    }
}
