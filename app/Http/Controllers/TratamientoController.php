<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use App\Models\Medicamento;
use Illuminate\Http\Request;

class TratamientoController extends Controller
{
    public function index()
    {
        $medicamentos = Medicamento::all();
        return view('tratamientos.index', compact('medicamentos'));
    }

    public function create()
    {
        $medicamentos = Medicamento::pluck('nombre', 'id');
        return view('tratamientos.create', compact('medicamentos'));
    }

    public function store(Request $request)
    {
        $datosTratamiento = $request->except('_token');
        Tratamiento::create($datosTratamiento);
        return redirect('tratamientos');
    }

    public function update(Request $request, $id)
    {
        $datosTratamiento = $request->except('_token', '_method');
        Tratamiento::where('id', $id)->update($datosTratamiento);
        $tratamiento = Tratamiento::findOrFail($id);
        return redirect('tratamientos');
    }

    public function destroy($id)
    {
        Tratamiento::destroy($id);
        return redirect('tratamientos');
    }

    public function edit($id)
    {
        $tratamiento = Tratamiento::findOrFail($id);
        $medicamentos = Medicamento::pluck('nombre', 'id');
        return view('tratamientos.edit', compact('tratamiento', 'medicamentos'));
    }
}
