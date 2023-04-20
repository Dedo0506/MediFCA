@extends('layouts.plantilla')

@section('title', 'Paciente '. $paciente->nombre)

@section('content')
    
    <h1>"Paciente {{$paciente->nombre}} {{$paciente->appaterno}} {{$paciente->apmaterno}} "</h1>
    <a href="{{route('pacientes.index')}}">Volver al listado de pacientes </a>
    <br>
    <a href="{{route('pacientes.edit', $paciente)}}">Editar info de paciente</a>
    <br>    
    
    <p><strong>N° cuenta: </strong>{{$paciente->nocuenta}}</p>
    <p><strong>Carrera: </strong>{{$paciente->carrera}}</p>
    <p><strong>Semestre: </strong>{{$paciente->semestre}}</p>
    <p><strong>Grupo: </strong>{{$paciente->grupo}}</p>
    <br>

    <form action="{{route('pacientes.destroy', $paciente)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    
    
@endsection

