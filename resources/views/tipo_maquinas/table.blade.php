<table class="table table-responsive" id="tipoMaquinas-table">
    <thead>
        <tr>
            <th>Tipo</th>
        <th>Descripcion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoMaquinas as $tipoMaquina)
        <tr>
            <td>{!! $tipoMaquina->tipo !!}</td>
            <td>{!! $tipoMaquina->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoMaquinas.destroy', $tipoMaquina->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoMaquinas.show', [$tipoMaquina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoMaquinas.edit', [$tipoMaquina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>