<?php
//AGREGAR LOS CONTROLLERS
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SituacionController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//EJEMPLOS
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/inicio', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');
//Route::get('/actividades', [App\Http\Controllers\HomeController::class, 'getuser'])->name('actividades');
//Route::get('/home', [HomeController::class, 'home']);
//FIN EJEMPLOS

//RUTAS DE EMPLEADOS
//Route::get('/actividades', [HomeController::class, 'index'])->name('actividades');
//Route::get('/situacion/situacion', [SituacionController::class, 'situacion'])->name('situacion.situacion');
// Route::get('/asistencia', [AsistenciaController::class, 'asistencia'])->name('asistencia');


//RUTAS DE ADMINISTRADOR
Route::get('/inicio', [HomeController::class, 'index'])->name('inicio');
// Route::get('/situaciones', [SituacionController::class, 'situaciones'])->name('situaciones');
//Route::get('/asistencias', [AsistenciaController::class, 'asistencias'])->name('asistencias');
//Route::get('/usuarios', [UserController::class, 'usuarios'])->name('usuarios');
Route::resource('/usuarios','App\Http\Controllers\UserController')->names('usuarios');

//Route::get('/roles', [RolController::class, 'roles'])->name('roles');
Route::resource('/rol','App\Http\Controllers\RolController')->names('rol');

Route::resource('/situaciones','App\Http\Controllers\SituacionController')->names('situaciones');
Route::resource('admin/situaciones','App\Http\Controllers\SituacionAdminController')->names('admin.situaciones');


Route::resource('/actividades','App\Http\Controllers\ActividadController')->names('actividades');
Route::resource('admin/actividades','App\Http\Controllers\ActividadAdminController')->names('admin.actividades');
Route::resource('admin/asistencia','App\Http\Controllers\AsistenciaAdminController')->names('admin.asistencia');
Route::resource('/reporte','App\Http\Controllers\ReporteAsistenciaController')->names('reporte.asistencia');
