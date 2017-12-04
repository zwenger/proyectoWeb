<table class="table table-responsive" id="maquinas-table">
    <thead>
        <tr>
            <th>Nroserie</th>
        <th>Tipo Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($maquinas as $maquina)
        <tr>
            <td>{!! $maquina->nroSerie !!}</td>
            <td>{!! $maquina->tipo_id !!}</td>
            <td>
                {!! Form::open(['route' => ['maquinas.destroy', $maquina->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('maquinas.show', [$maquina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('maquinas.edit', [$maquina->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>