<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use Illuminate\View\ViewServiceProvider;

//rutas para las validaciones
//cuando son muchas se recomienda mandarlas en un solo archivo
use App\Http\Requests\StorePaciente;
use App\Http\Requests\UpdatePaciente;

class PacienteController extends Controller
{
     //pagina principal
     public function index(){

        $pacientes = Paciente::orderBy('id', 'desc')->paginate();

        return view('pacientes.index', compact('pacientes')); 
    }

    //formularios
    //metodo para mostrar la vista del fromulario para crear un nuevo registro
    public function create(){
        return view('pacientes.create');
    }

    //metodo store 
    //request para rescatar los datos del formulario debe ser una instacia de StoreCurso para que tome en cuenta las validaciones
    public function store(StorePaciente $request){
       // return $request;
        $paciente = new Paciente();//se crea el objeto (instancia)
        
        //Esta linea de codigo crea un nuevo registro pero sin la necesidad de se escriba cada propiedad 
        //pero necesita ayuda de la propiedad fillable para que no se agregen mas valores de los que se solicitan
        //ver App\Models\Paciente

        $paciente = Paciente::create([
        'nombre' => $request->nombre,
        'appaterno' => $request->appaterno,
        'apmaterno' => $request->apmaterno,
        'nocuenta' => $request->nocuenta,
        'carrera' => $request->carrera,
        'semestre' => $request->semestre,
        'grupo' => $request->grupo,
        ]);

        //redirecciona la vista del curso
        return redirect()->route('pacientes.show', $paciente->id);
        
    }

    //mostrar un elemento en particular
    public function show(Paciente $paciente){

        return view('pacientes.show', compact('paciente')); 
    }

    //metodo Update curso
    public function edit(Paciente $paciente){
        
        return view('pacientes.edit', compact('paciente'));

    }

    //request para rescatar los datos del formulario debe ser una instacia de UpdateCurso para que tome en cuenta las validaciones
    public function update(UpdatePaciente $request,Paciente $paciente){//la variable curso es el registro(objeto) que se quiere modificar 

         //como se menciona en el caso de CREATE en una sola linea se puede optimizar update
         $paciente->update($request->all());

         //redirecciona la vista del curso
         return redirect()->route('pacientes.show', $paciente->id);
    }


    public function destroy(Paciente $paciente){
        $paciente->delete();
        return redirect()->route('pacientes.index');
    }

}
