@extends('layouts.plantilla')

@section('title', 'Paciente ')

@section('content')

    <br>
    <div>
        <nav>
            @include('layouts.partials.headerPacienteShow')
        </nav>
    </div>

    <!--a href="{route('antecedentes.edit', $paciente->id)}}">Editar antecedentes del paciente</a>-->
    <br> 
    <h1>Antecedentes patológicos</h1>
        
        <p><strong>Aplica:</strong> {{$ante_patologicos->aplica}}</p>
        <p><strong>Descripción:</strong> {{ $ante_patologicos->descripcion}}</p>

    <h1>Antecedentes no patológicos</h1>
        
        <p><strong>Vacunas:</strong> {{ $ante_no_patologicos->vacunas }}</p>
        <p><strong>Alimentación:</strong> {{ $ante_no_patologicos->alimentacion }}</p>
        <p><strong>Horas de sueño:</strong>{{ $ante_no_patologicos->hrs_sueno}}</p>

    <h1>Antecedentes heredo familiares</h1>
        <p><strong>Enfermedad:</strong> {{ $ante_familiares->enfermedad}}</p>
        <p><strong>Familiar:</strong> {{ $ante_familiares->familiar}}</p>

    <h1>Antecedentes ginecológicos</h1>
        <p><strong>Aplica:</strong> {{$ante_ginecologicos->aplica}}</p>
        <p><strong>Descripción: </strong>{{$ante_ginecologicos->descripcion }}</p>

    <form action="{route('pacientes.destroy', $paciente)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    
    
@endsection

