<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\HomeController;

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

Route::get('/',HomeController::class);
/*
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
Route::resource('pacientes', PacienteController::class);