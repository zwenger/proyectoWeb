<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $orden->id !!}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{!! $orden->titulo !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $orden->descripcion !!}</p>
</div>

<!-- Fechaemision Field -->
<div class="form-group">
    {!! Form::label('fechaEmision', 'Fechaemision:') !!}
    <p>{!! $orden->fechaEmision !!}</p>
</div>

<!-- Fechavencimiento Field -->
<div class="form-group">
    {!! Form::label('fechaVencimiento', 'Fechavencimiento:') !!}
    <p>{!! $orden->fechaVencimiento !!}</p>
</div>

<!-- Maquina Id Field -->
<div class="form-group">
    {!! Form::label('maquina_id', 'Maquina Id:') !!}
    <p>{!! $orden->maquina_id !!}</p>
</div>

<!-- Empleado Id Field -->
<div class="form-group">
    {!! Form::label('empleado_id', 'Empleado Id:') !!}
    <p>{!! $orden->empleado_id !!}</p>
</div>

<!-- Tarea Id Field -->
<div class="form-group">
    {!! Form::label('tarea_id', 'Tarea Id:') !!}
    <p>{!! $orden->tarea_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $orden->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $orden->updated_at !!}</p>
</div>

