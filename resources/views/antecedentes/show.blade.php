@extends('principal')

@section('title', 'Paciente ')

@section('menu')

<link href="/sources/css/app.css" rel="stylesheet">
    <div>
        <nav>
            @include('layouts.partials.headerAntecedentes')
        </nav>
    </div>
    
    <br> 

        <h2>Antecedentes Patológicos</h2>
        @if($ante_patologicos)
            <p>Descripción: {{$ante_patologicos->descripcion}}</p>
        @else
            <p>No se encontraron antecedentes patológicos.</p>
        @endif

        <h2>Antecedentes No Patológicos</h2>
        @if($ante_no_patologicos)
            <p>Vacunas: {{$ante_no_patologicos->vacunas}}</p>
            <p>Alimentación: {{$ante_no_patologicos->alimentacion}}</p>
            <p>Horas de Sueño: {{$ante_no_patologicos->hrs_sueno}}</p>
        @else
            <p>No se encontraron antecedentes no patológicos.</p>
        @endif

        <h2>Antecedentes Familiares</h2>
        @if($ante_familiares)
            <p>Enfermedad: {{$ante_familiares->enfermedad}}</p>
            <p>Familiar: {{$ante_familiares->familiar}}</p>
        @else
            <p>No se encontraron antecedentes familiares.</p>
        @endif

        <h2>Antecedentes Ginecológicos</h2>
        @if($ante_ginecologicos)
            <p>Aplica: {{$ante_ginecologicos->aplica}}</p>
            <p>Especificación: {{$ante_ginecologicos->especificacion}}</p>
        @else
            <p>No se encontraron antecedentes ginecológicos.</p>
        @endif

<!--a href="{route('antecedentes.edit', $paciente->id)}}">Editar antecedentes del paciente</a>-->
    
    
@endsection

