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
    public function create(Paciente $paciente){
        return view('antecedentes.create',compact('paciente'));
    }
    
    public function store(Request $request){

        $paciente_id = $request->input('paciente_id');
        $paciente = Paciente::find($paciente_id);
        
        //registrar antecedentes patologicos
        $ante_patologicos = new ante_patologicos();
        $ante_patologicos->paciente_id = $paciente_id;
        $ante_patologicos->aplica = $request->input('antP_aplica', 'N'); // valor predeterminado es "N"
        $ante_patologicos->descripcion = $request->input('antP_descripcion');

        $ante_patologicos->save();

        //contar si las vacunas estan completas o no
            $selectedCount = count($request->input('vacunas'));

                if ($selectedCount == 3) {
                    $vacunas = 'completo';
                } else {
                    $vacunas = 'incompleto';
                }
        //registrar antecedentes no patologicos                
        $ante_no_patologicos = new ante_no_patologicos();

        $ante_no_patologicos->paciente_id = $paciente_id;
        $ante_no_patologicos->vacunas = $vacunas;
        $ante_no_patologicos->alimentacion = $request->input('alimentacion');
        $ante_no_patologicos->hrs_sueno =$request->input('hrs_sueno');
        $ante_no_patologicos->save();

        //registrar antecedentes familiares
        $ante_familiares = new ante_familiares();
        $ante_familiares->paciente_id = $paciente_id;
        $ante_familiares->enfermedad =$request->input('enfermedad');
        $ante_familiares->familiar =$request->input('familiar');
        $ante_familiares->save();
            
        //registrar antecedentes ginecologhicos
        $ante_ginecologicos = new ante_ginecologicos();

        $ante_ginecologicos->paciente_id = $paciente_id;
        $ante_ginecologicos->aplica = $request->input('antG_aplica','N'); // valor predeterminado es "N"
        $ante_ginecologicos->especificacion = $request->input('especificacion');
        $ante_ginecologicos->save();

        return view('consultas.create');
    
    }


    //mostrar antecedentes de un paciente en particular
    
    public function show(Paciente $paciente, ante_patologicos $ante_patologicos, ante_no_patologicos $ante_no_patologicos,
                         ante_familiares $ante_familiares, ante_ginecologicos $ante_ginecologicos)
    {
        $ante_patologicos = ante_patologicos::where('paciente_id', $paciente->id)->first();
        $ante_no_patologicos = ante_no_patologicos::where('paciente_id', $paciente->id)->first();
        $ante_familiares = ante_familiares::where('paciente_id', $paciente->id)->first();
        $ante_ginecologicos = Ante_ginecologicos::where('paciente_id', $paciente->id)->first();

        return view('antecedentes.show', compact('paciente', 'ante_patologicos', 'ante_no_patologicos', 'ante_familiares', 'ante_ginecologicos'));
    }

    //metodo para llamar la vista para editar unpaciente
    public function edit(Paciente $paciente){
        
        return view('antecedentes.edit', compact('paciente'));

    }

    
}