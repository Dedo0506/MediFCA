@extends('principal')

@section('title', 'Paciente '. $paciente->nombre)

@section('menu')    
    
<link href="/resources/css/create.css" rel="stylesheet">
    <div>
        <nav>
            @include('layouts.partials.headerPacienteShow')
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">{{ __('Datos personales') }}</div>
              <div class="card-body">
                <div class="form-group">
                <label class="form-label"><strong>N° cuenta: </strong></label><p class="form-control">{{$paciente->nocuenta}}</p>
                <p><strong>Carrera: </strong>{{$paciente->carrera}}</p>
                <p><strong>Sexo: </strong>{{ $paciente->sexo == 'M' ? 'Masculino' : 'Femenino' }}</p>
                <p><strong>Fecha Nacimiento: </strong>{{($date = DateTime::createFromFormat('Y-m-d', $paciente->fecNac))->format('d/m/Y')}}</p>
                <p><strong>Semestre: </strong>{{$paciente->semestre}}</p>
                <p><strong>Grupo: </strong>{{$paciente->grupo}}</p>
                <br>

    <a href="{{route('pacientes.edit', $paciente)}}">Editar info de paciente</a>
    <form action="{{route('pacientes.destroy', $paciente)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    
    
@endsection

