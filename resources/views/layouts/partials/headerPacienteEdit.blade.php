<div>
    <nav>
        <ul>
            <li><a href="{{ route('pacientes.edit', ['paciente', $paciente->id]) }}" class="{{request()->routeIs('pacientes.*') ? 'active' : ''}}">Datos personales</a></li>
            <li><a href="{{route('antecedentes.edit', ['paciente', $paciente->id])}} " class="{{request()->routeIs('antecedentes.*') ? 'active' : ''}}">Antecedentes</a></li>
        </ul>
    </nav>
</div>