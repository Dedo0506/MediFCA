
@extends('principal')

@section('title', 'Pacientes')

@section('menu')
<link href="/resources/css/index.css" rel="stylesheet">
<div class="form-group">
    <h2><br>Listado de pacientes</h2>
        <form action="{{route('pacientes.buscarPorNoCuenta') }}" method="POST">
            @csrf
            <label class="form-label">Buscar Paciente</label>
            <input type="text" name="nocuenta" placeholder="Numero de cuenta" id="busqueda">

            <button type="submit" class="btn btn-outline-info" id="btn-buscar">Buscar</button>
        </form>
        <a href="{{ url('/pacientes/create') }}" class="btn btn-primary">Registrar nuevo paciente</a>
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        <!-- Código JavaScript -->
        <script>
            // Esperar un tiempo determinado (en milisegundos) antes de ocultar el mensaje de error
            setTimeout(function() {
                document.getElementById('mensaje-error').style.display = 'none';
            }, 3000); // Aquí se establece un tiempo de 5000 milisegundos (5 segundos)
        </script>
    @endif
</div>
<table class="table table-striped">
           
    <thead>
        <tr>
            <th scope="col">Hora</th>
            <th scope="col">Nombre</th>
            <th scope="col">No de cuenta</th>
            <th scope="col">Diagnóstico</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($pacientes as $paciente)
        
            <tr>
                <td>{{$paciente->updated_at->format('H:i')}}</td>
                <td><a href="{{route('pacientes.show', $paciente->id)}}">{{$paciente->appaterno}} {{$paciente->apmaterno}} {{$paciente->nombre}}</a></td>
                <td>{{$paciente->nocuenta}}</td>
                <td>Fiebre</td>
            </tr>
        
        @endforeach
     <!--Agrega más filas según sea necesario--> 
    </tbody-->
</table>
{{$pacientes->links()}}

@endsection