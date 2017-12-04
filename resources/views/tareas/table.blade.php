<table class="table table-responsive" id="tareas-table">
    <thead>
        <tr>
            <th>Titulo</th>
        <th>Descripcion</th>
        <th>Periodo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tareas as $tarea)
        <tr>
            <td>{!! $tarea->titulo !!}</td>
            <td>{!! $tarea->descripcion !!}</td>
            <td>{!! $tarea->periodo !!}</td>
            <td>
                {!! Form::open(['route' => ['tareas.destroy', $tarea->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tareas.show', [$tarea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tareas.edit', [$tarea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>