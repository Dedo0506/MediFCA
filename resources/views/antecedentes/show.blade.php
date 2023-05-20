@extends('layouts.plantilla')

@section('title', 'Paciente ')

@section('content')

    <br>
    <div>
        <nav>
        <!--include('layouts.partials.headerPacienteShow')-->
        </nav>
    </div>

    <!--a href="{route('antecedentes.edit', $paciente->id)}}">Editar antecedentes del paciente</a>-->
    <br> 
    
    <h1>Antecedentes patológicos</h1>
        <p><strong>Aplica:</strong> {{$paciente->ante_patologicos()->first()->aplica}}</p>
        <p><strong>Descripción:</strong> {{$paciente->ante_patologicos()->first()->descripcion}}</p>
    

    <h1>Antecedentes no patológicos</h1>
        <p><strong>Vacunas:</strong> {{$paciente->ante_no_patologicos()->first()->vacunas}}</p>     
        <p><strong>Alimentación:</strong> {{ $paciente->ante_no_patologicos()->first()->alimentacion }}</p>
        <p><strong>Horas de sueño:</strong>{{$paciente->ante_no_patologicos()->first()->hrs_sueno }}</p>

    <h1>Antecedentes heredo familiares</h1>
        <p><strong>Enfermedad:</strong> {{ $paciente->ante_familiares()->first()->enfermedad}}</p>
        <p><strong>Familiar:</strong> {{ $paciente->ante_familiares()->first()->familiar}}</p>
        
    <h1>Antecedentes ginecológicos</h1>
        <p><strong>Aplica:</strong> {{$paciente->ante_ginecologicos()->first()->aplica}}</p>    
        <p><strong>Especificacion: </strong>{{$paciente->ante_ginecologicos()->first()->especificacion}}</p>    
        
    <!--form action="{route('pacientes.destroy', $paciente)}}" method="POST">
        csrf
        method('delete')
        <button type="submit">Eliminar</button>
    </form-->
    
    
@endsection

