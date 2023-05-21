<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index($paciente_id)
    {
        $consultas = Consulta::latest()->take(2)->get();
        return view('consulta.index', compact('consultas'));
    }
    
    public function create()
    {
        return view('consulta.create'); 
    }

    public function store(Request $request)
{
    $datosConsulta = $request->except('_token');

    // Agregar la asignación de fecha y hora actual
    $datosConsulta['fecha_hora'] = date('Y-m-d H:i:s');
    
    if ($request->hasFile('Foto')) {
        $datosConsulta['Foto'] = $request->file('Foto')->store('uploads', 'public'); 
    }

    Consulta::create($datosConsulta);
    
    return redirect('consulta'); 
}


    public function update(Request $request, $id)
    {
        $datosConsulta = $request->except('_token', '_method');
        
        if ($request->hasFile('Foto')) {
            $datosConsulta['Foto'] = $request->file('Foto')->store('uploads', 'public'); 
        }

        Consulta::where('id', $id)->update($datosConsulta);

        return redirect('consulta');
    }

    public function destroy($id)
    {
        Consulta::destroy($id);
        return redirect('consulta');
    }
    
    public function edit($id)
    {
        $consulta = Consulta::findOrFail($id);
        return view('consulta.edit', compact('consulta'));
    }
}