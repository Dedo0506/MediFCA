<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\ante_patologicos;
use App\Models\ante_familiares;
use App\Models\ante_ginecologicos;
use App\Models\ante_no_patologicos;
use Illuminate\View\ViewServiceProvider;

//rutas para las validaciones
//cuando son muchas se recomienda mandarlas en un solo archivo
use App\Http\Controllers\AntecedentesController;
use App\Http\Requests\StorePaciente;
use App\Http\Requests\UpdatePaciente;

class PacienteController extends Controller
{
     //pagina principal de listar los pacientes
     public function index(){
        //se agrega el ordenamiento en descremento para que se vean los nuevos registros
        $pacientes = Paciente::orderBy('id', 'desc')->paginate();

        return view('pacientes.index', compact('pacientes')); 
    }

    //metodo para mostrar la vista del fromulario para crear un nuevo registro de paciente
    public function create(){
        return view('pacientes.create');
    }

    //metodo store para crear el registro en la base de datos 
    //request para rescatar los datos del formulario debe ser una instacia de StorePaciente para que tome en cuenta las validaciones
    public function store(StorePaciente $request){
       // return $request;
        $paciente = new Paciente();//se crea el objeto (instancia)
        
        //Esta linea de codigo crea un nuevo registro pero sin la necesidad de se escriba cada propiedad 
        //pero necesita ayuda de la propiedad fillable para que no se agregen mas valores de los que se solicitan
        //ver App\Models\Paciente

        $paciente = Paciente::create($request->all());
    
        return view('antecedentes.create', compact('paciente'));
    }

    
    /*mostrar un paciente en particular
    public function show(Paciente $paciente){
        return view('pacientes.show', compact('paciente')); 
    }*/
    public function show($id)
{
    $paciente = Paciente::findOrFail($id);
    return view('pacientes.show', compact('paciente'));
}

    //metodo para llamar la vista para editar unpaciente
    public function edit(Paciente $paciente){
        
        return view('pacientes.edit', compact('paciente'));

    }

    //metodo Update de un paciente y guardar los cambios en la base de datos
    //request para rescatar los datos del formulario debe ser una instacia de UpdatePaciente para que tome en cuenta las validaciones
    public function update(UpdatePaciente $request,Paciente $paciente){//la variable paciente es el registro(objeto) que se quiere modificar 

         //como se menciona en el caso de CREATE en una sola linea se puede optimizar update
         $paciente->update($request->all());

         //redirecciona la vista del paciente para mostrar los datos ya actualizados
         return redirect()->route('pacientes.show', $paciente->id);
    }

    //metodo delete paciente
    public function destroy(Paciente $paciente){
        $paciente->delete();
        return redirect()->route('pacientes.index');
    }

}
