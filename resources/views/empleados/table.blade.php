<table class="table table-responsive" id="empleados-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Cuit</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Domicilio</th>
        <th>Tipo Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{!! $empleado->nombre !!}</td>
            <td>{!! $empleado->cuit !!}</td>
            <td>{!! $empleado->telefono !!}</td>
            <td>{!! $empleado->email !!}</td>
            <td>{!! $empleado->domicilio !!}</td>
            <td>{!! $empleado->tipo_id !!}</td>
            <td>
                {!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empleados.show', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empleados.edit', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>