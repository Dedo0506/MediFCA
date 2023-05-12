<div>
    <nav>
        <ul>
            <li><a href="{{ route('pacientes.edit', ['paciente' => 1]) }}" class="{{request()->routeIs('pacientes.*') ? 'active' : ''}}">Datos personales</a></li>
            <li><a href="{{route('antecedentes.create')}} " class="{{request()->routeIs('antecedentes.*') ? 'active' : ''}}">Antecedentes</a></li>
        </ul>
    </nav>
</div>