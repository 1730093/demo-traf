<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AsistenciaAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $users= User::get();

        $asistencias=Asistencia::get();

        return view('admin.asistencia.index', compact('users','asistencias'));
    }
    public function store(Request $request)
    {
        $validaciondeasistencia=0;
        $id = $request->AsignarAsistenciaSelect2;
        $verasistencia = Asistencia::where('user_id','=',$id)->where('hora_salida','=',NULL)->get();
        foreach($verasistencia as $va){
            $validaciondeasistencia = $va->id_asistencia;
        }
        if($validaciondeasistencia==null){
            $fechaInicio = date('Y-m-d');
            $horaInicio = date('H:i');

            $asistencia = new Asistencia;
            $asistencia->fecha = $fechaInicio;
            $asistencia->hora_entrada = $horaInicio;
            $asistencia->user_id = $id;
            $asistencia->tomo_asistencia = $request->idta;
            $asistencia->save();

            return redirect()->route('admin.asistencia.index')->with('resultado', 'Se asignó correctamente la asistencia.');
        }else{
            return redirect()->route('admin.asistencia.index')->with('error', 'El empleado seleccionado ya tiene una asistencia en curso.');
        }

    }
    public function update(Request $request, $id)
    {
        $empleado = User::where('id','=',$request->idUser)->get();
        foreach($empleado as $emp){
            $name = $emp->name;
            $ape = $emp->apellido_pat;
        }
        $horaSalida = date('H:i');
        $asistencia = Asistencia::findOrFail($id);

        $asistencia->hora_salida = $horaSalida;

        $asistencia->save();

        return redirect()->route('admin.asistencia.index')->with('resultado', 'Se finalizó correctamente la asistencia a '.$name.' '.$ape.'.');
    }
    public function destroy($id)
    {
        //
        Asistencia::destroy($id);
        return redirect()->route('admin.asistencia.index')->with('resultado', 'La asistencia se eliminó correctamente.');
    }
}
