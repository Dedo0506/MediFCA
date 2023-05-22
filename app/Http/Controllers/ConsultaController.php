<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Medicamento;
use App\Models\SignosVitales;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index()
    {
        $consultas = Consulta::all();
        return view('consulta.index', compact('consultas'));
    }
    
    public function create(Paciente $paciente)
    {
        $medicamentos = Medicamento::pluck('id', 'nombre');
        return view('consulta.create',compact('paciente','medicamentos')); 
    }

    public function store(Request $request)
    {
        $paciente_id = $request->input('paciente_id');
        $paciente = Paciente::find($paciente_id);
        $datosConsulta = $request->except('_token');

        // Agregar la asignación de fecha y hora actual
        $datosConsulta['fecha_hora'] = date('Y-m-d H:i:s');
        
        if ($request->hasFile('Foto')) {
            $datosConsulta['Foto'] = $request->file('Foto')->store('uploads', 'public'); 
        }

        $consulta = Consulta::create($datosConsulta);
        
        return redirect('consulta'); 
    }

    public function show($id)
    {
        $consulta = Consulta::findOrFail($id);
        return view('consulta.show', compact('consulta'));
    }

    public function update(Request $request, $id)
    {
        $datosConsulta = $request->except('_token', '_method');
        
        if ($request->hasFile('Foto')) {
            $datosConsulta['Foto'] = $request->file('Foto')->store('uploads', 'public'); 
        }

        $consulta = Consulta::findOrFail($id);
        $consulta->update($datosConsulta);

        return redirect('consulta');
    }

    public function destroy($id)
    {
        $consulta = Consulta::findOrFail($id);
        $consulta->delete();
        return redirect('consulta');
    }
    
    public function edit($id)
    {
        $consulta = Consulta::findOrFail($id);
        return view('consulta.edit', compact('consulta'));
    }
}