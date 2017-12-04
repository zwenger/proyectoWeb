<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipoEmpleado->id !!}</p>
</div>

<!-- Especialidad Field -->
<div class="form-group">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    <p>{!! $tipoEmpleado->especialidad !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $tipoEmpleado->descripcion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tipoEmpleado->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tipoEmpleado->updated_at !!}</p>
</div>

