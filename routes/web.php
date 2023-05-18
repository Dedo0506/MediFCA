<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AntecedentesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicamentosController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PersonalMedicoController;
use App\Http\Controllers\SignosVitalesController;
use App\Http\Controllers\TratamientoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',HomeController::class)->name('home');
Route::resource('pacientes', PacienteController::class);
Route::resource('antecedentes', AntecedentesController::class);
Route::get('antecedentes/{paciente}', [AntecedentesControlle::class, 'show'])->name('antecedentes.show');
Route::get('antecedentes/{paciente}/edit',[AntecedentesControlle::class,'edit'])->name('antecedentes.edit');
Route::resource('medicamentos', MedicamentosController::class);
Route::resource('consulta', ConsultaController::class);
Route::resource('personalMedico', PersonalMedicoController::class);
Route::resource('signosVitales', SignosVitalesController::class);
Route::resource('tratamiento', TratamientoController::class);
/*

//Route::post('pacientes/{paciente}/antecedentes',[PacienteController::class,'storeAntecedentes'])->name('paciente.storeAntecedentes');
//Route::post('pacientes/{paciente}/antecedentes', 'AntecedentesController@store');
Route::get('pacientes', [PacienteController::class, 'index'])->name('pacientes.index'); 

Route::get('pacientes/create',[PacienteController::class,'create'])->name('pacientes.create');

//metodo post para formularios a diferencia de get este no muestra los datos en la url
Route::post('pacientes',[PacienteController::class,'store'])->name('pacientes.store');

Route::get('pacientes/{paciente}', [PacienteController::class, 'show'])->name('pacientes.show');

Route::get('pacientes/{paciente}/edit',[PacienteController::class,'edit'])->name('pacientes.edit');

//cuando es update laravel recomienda usar el metodo put y no post aunque sea un formulario
Route::put('pacientes/{paciente}',[PacienteController::class,'update'])->name('pacientes.update');

//cuando se necesita elimar un registro a laravel identificar el metodo delete
Route::delete('pacientes/{paciente}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');
*/