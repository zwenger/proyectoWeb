<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechaemision Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaEmision', 'Fechaemision:') !!}
    {!! Form::date('fechaEmision', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechavencimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaVencimiento', 'Fechavencimiento:') !!}
    {!! Form::date('fechaVencimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Maquina Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('maquina_id', 'Maquina:') !!}
    {!! Form::select('maquina_id',$maquinas, null, ['class' => 'form-control']) !!}
</div>

<!-- Empleado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empleado_id', 'Empleado Id:') !!}
    {!! Form::select('empleado_id',$empleados, null, ['class' => 'form-control']) !!}
</div>

<!-- Tarea Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tarea_id', 'Tarea Id:') !!}
    {!! Form::select('tarea_id',$tareas, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ordens.index') !!}" class="btn btn-default">Cancel</a>
</div>
