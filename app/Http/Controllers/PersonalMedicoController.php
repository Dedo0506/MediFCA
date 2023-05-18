<?php

namespace App\Http\Controllers;

use App\Models\PersonalMedico;
use Illuminate\Http\Request;

class PersonalMedicoController extends Controller
{
    public function index()
    {
    $medicamentos['medicamentos']= Medicamento::all();
    return view('medicamentos.index', $medicamentos);
    }
    
    public function create(){
        return view('medicamentos.create'); 
    }

    public function store(Request $request){

        $datosMedicamentos = request()->except('_token');
        if($request->hasFile('Foto')){
            $datosMedicamentos['Foto']=$request->file('Foto')->store('uploads', 'public'); 
        }

        Medicamento::insert($datosMedicamentos);
        
        return redirect ('medicamentos/'); 
    }

    public function update(Request $request, $id)
    {
    
        $datosMedicamentos = request()->except(['_token', '_method']);
        Medicamento::where('id','=',$id)->update($datosMedicamentos);

        $medicamentos = Medicamento::findOrFail($id);
        return redirect ('medicamentos/');

    }

public function destroy($id)
{
    Medicamento::destroy($id);
    return redirect ('medicamentos/');
}

    
    public function edit($id)
    {
        $medicamentos = Medicamento::findOrFail($id);
        return view('medicamentos.edit', compact('medicamentos'));
    }
}
