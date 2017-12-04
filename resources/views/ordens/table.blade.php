<table class="table table-responsive" id="ordens-table">
    <thead>
        <tr>
            <th>Titulo</th>
        <th>Descripcion</th>
        <th>Fechaemision</th>
        <th>Fechavencimiento</th>
        <th>Maquina Id</th>
        <th>Empleado Id</th>
        <th>Tarea Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ordens as $orden)
        <tr>
            <td>{!! $orden->titulo !!}</td>
            <td>{!! $orden->descripcion !!}</td>
            <td>{!! $orden->fechaEmision !!}</td>
            <td>{!! $orden->fechaVencimiento !!}</td>
            <td>{!! $orden->maquina_id !!}</td>
            <td>{!! $orden->empleado_id !!}</td>
            <td>{!! $orden->tarea_id !!}</td>
            <td>
                {!! Form::open(['route' => ['ordens.destroy', $orden->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ordens.show', [$orden->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ordens.edit', [$orden->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>