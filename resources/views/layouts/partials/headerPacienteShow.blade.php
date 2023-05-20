<link href="/resources/css/app.css" rel="stylesheet">

<div class="navbar-nav">
    <nav>
        <ul>
            <h1>Paciente {{$paciente->nombre}} {{$paciente->appaterno}} {{$paciente->apmaterno}} </h1>
            <li><a class="nav-link" href="{{route('pacientes.show', ['paciente', $paciente->id]) }}" class="{{request()->routeIs('pacientes.*') ? 'active' : ''}}">Datos personales</a></li>
            <li><a class="nav-link" href="{{route('antecedentes.show', ['paciente',$paciente->id])}} " class="{{request()->routeIs('antecedentes.*') ? 'active' : ''}}">Antecedentes</a></li>
        </ul>
    </nav>
</div>
