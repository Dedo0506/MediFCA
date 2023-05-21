@extends('principal')

@section('title', 'Paciente '. $paciente->nombre)

@section('menu')    
    
<link href="/resources/css/create.css" rel="stylesheet">
    <div>
        <nav>
            @include('layouts.partials.headerPacientes')
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Datos personales') }}</div>
              <div class="card-body">
                <div class="form-group">
                    <label class="form-label"><strong>N° cuenta:</strong></label>
                    <p style="display: inline;">{{$paciente->nocuenta}}</p> &nbsp; &nbsp;
                    <label class="form-label"><strong>Sexo:</strong></label>
                    <p style="display: inline;">{{ $paciente->sexo == 'M' ? 'Masculino' : 'Femenino' }}</p> &nbsp; &nbsp;
                    <label class="form-label"><strong>Fecha Nacimiento:</strong></label>
                    <p style="display: inline;">{{($date = DateTime::createFromFormat('Y-m-d', $paciente->fecNac))->format('d/m/Y')}}</p> &nbsp; &nbsp;
                </div>

                <div class="form-group">
                <label class="form-label"><strong>Carrera: </strong></label>
                <p style="display: inline;">{{$paciente->carrera}}</p> &nbsp; &nbsp;
                <label class="form-label"><strong>Semestre: </strong></label>
                <p style="display: inline;">{{$paciente->semestre}}</p> &nbsp; &nbsp;
                <label class="form-label"><strong>Grupo: </strong></label>
                <p style="display: inline;">{{$paciente->grupo}}</p> &nbsp; &nbsp;
                </div>

    <div style="display:flex; justify-content:space-evenly; align-items:flex-end">
        <a class="btn btn-primary" href="{{route('pacientes.edit', $paciente)}}">Editar info de paciente</a>
        <form action="{{route('pacientes.destroy', $paciente)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este paciente?')">Borrar Paciente</button>
        </form>
    </div>
    
    
@endsection

