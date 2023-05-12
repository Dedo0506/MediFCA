@extends('layouts.plantilla')

@section('title', 'Paciente '. $paciente->nombre)

@section('content')


    <a href="{{route('pacientes.index')}}">Volver al listado de pacientes </a>
    <br>

    <h1>"Paciente {{$paciente->nombre}} {{$paciente->appaterno}} {{$paciente->apmaterno}} "</h1>
    <div>
        <nav>
            @include('layouts.partials.headerPaciente')
        </nav>
    </div>

    <a href="{{route('pacientes.edit', $paciente)}}">Editar info de paciente</a>
    <br> 
    
    <p><strong>N° cuenta: </strong>{{$paciente->nocuenta}}</p>
    <p><strong>Carrera: </strong>{{$paciente->carrera}}</p>
    <p><strong>Sexo: </strong>{{ $paciente->sexo == 'M' ? 'Masculino' : 'Femenino' }}</p>
    <p><strong>Fecha Nacimiento: </strong>{{($date = DateTime::createFromFormat('Y-m-d', $paciente->fecNac))->format('d/m/Y')}}</p>
    <p><strong>Semestre: </strong>{{$paciente->semestre}}</p>
    <p><strong>Grupo: </strong>{{$paciente->grupo}}</p>
    <br>

    <form action="{{route('pacientes.destroy', $paciente)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    
    
@endsection

