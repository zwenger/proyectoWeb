<li class="{{ Request::is('tipoEmpleados*') ? 'active' : '' }}">
    <a href="{!! route('tipoEmpleados.index') !!}"><i class="fa fa-edit"></i><span>Tipo Empleados</span></a>
</li>

<li class="{{ Request::is('empleados*') ? 'active' : '' }}">
    <a href="{!! route('empleados.index') !!}"><i class="fa fa-edit"></i><span>Empleados</span></a>
</li>

<li class="{{ Request::is('tipoMaquinas*') ? 'active' : '' }}">
    <a href="{!! route('tipoMaquinas.index') !!}"><i class="fa fa-edit"></i><span>Tipo Maquinas</span></a>
</li>

<li class="{{ Request::is('maquinas*') ? 'active' : '' }}">
    <a href="{!! route('maquinas.index') !!}"><i class="fa fa-edit"></i><span>Maquinas</span></a>
</li>

<li class="{{ Request::is('tareas*') ? 'active' : '' }}">
    <a href="{!! route('tareas.index') !!}"><i class="fa fa-edit"></i><span>Tareas</span></a>
</li>

<li class="{{ Request::is('ordens*') ? 'active' : '' }}">
    <a href="{!! route('ordens.index') !!}"><i class="fa fa-edit"></i><span>Ordens</span></a>
</li>

