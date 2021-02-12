<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;
use App\Models\Tutor;
use App\Models\Curso;

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
    return view('principal');
});

Route::get('/todos', function () {
	$texto = "";
	$ar = Alumno::all();
    $c = Curso::first();
    $c->alumnos();
	$texto .= "<h2>".json_decode($ar[0]->curso['id'])."</h2>";
	foreach($ar as $reg){
		$texto .= "<p>$reg->Nombre</p>";
	}
	return $texto;
});



Route::resource('alumno', AlumnoController::class);
Route::resource('curso', CursoController::class);
Route::resource('tutor', TutorController::class);
