<?php

namespace App\Http\Controllers;

use App\Models\ante_patologicos;
use App\Models\ante_familiares;
use App\Models\ante_ginecologicos;
use App\Models\ante_no_patologicos;
use App\Models\Paciente;
use Illuminate\Http\Request;

class AntecedentesController extends Controller
{
    //metodo para mostrar la vista del fromulario para crear un nuevo registro de paciente
    public function create(){
        return view('antecedentes.create');
    }
    public function store(Request $request, Paciente $paciente){//StoreAntecedentes falta crear ese archivo para validaciones
        // crea un nuevo registro en la tabla 'ante_patologicos'
        $antecedentes = ante_patologicos::create([
            'anteP_aplica' => $request->input('antP_aplica', 'N'), // valor predeterminado es "N"
            'anteP_descripcion' => $request->input('antP_descripcion'),
            'paciente_id' => $paciente->id,
        ]);
    
    }

    //mostrar antecedentes de un paciente en particular
    public function show(AntecedentesController $antecedentes){
        return view('antecedentes.show', compact('antecedentes')); 
    }

    //metodo para llamar la vista para editar unpaciente
    public function edit(AntecedentesController $antecedentes){
        
        return view('antecedentes.edit', compact('antecedentes'));

    }
}