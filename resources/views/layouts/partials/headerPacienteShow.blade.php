<div>
    <nav>
        <ul>
            <h1>Paciente {{$paciente->nombre}} {{$paciente->appaterno}} {{$paciente->apmaterno}} </h1>
            <li><a href="{{route('pacientes.show', ['paciente', $paciente]) }}" class="{{request()->routeIs('pacientes.*') ? 'active' : ''}}">Datos personales</a></li>
            <li><a href="{{route('antecedentes.show', ['paciente',$paciente->id])}} " class="{{request()->routeIs('antecedentes.*') ? 'active' : ''}}">Antecedentes</a></li>
        </ul>
    </nav>
</div>