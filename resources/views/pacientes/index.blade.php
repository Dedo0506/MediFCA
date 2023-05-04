
@extends('layouts.plantilla')

@section('title', 'MEDIFCA')

@section('content')
    <h2><br>Listado de pacientes</h2>
    <a href="{{route('pacientes.create')}}">Registrar paciente </a>

    <ul>
        @foreach ($pacientes as $paciente)
            <li>
                <a href="{{route('pacientes.show', $paciente->id)}}">{{$paciente->appaterno}} {{$paciente->apmaterno}} {{$paciente->nombre}}</a>
            </li>    
        @endforeach

    </ul>
    {{$pacientes->links()}}

@endsection

