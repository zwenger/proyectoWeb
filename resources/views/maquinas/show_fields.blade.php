<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $maquina->id !!}</p>
</div>

<!-- Nroserie Field -->
<div class="form-group">
    {!! Form::label('nroSerie', 'Nroserie:') !!}
    <p>{!! $maquina->nroSerie !!}</p>
</div>

<!-- Tipo Id Field -->
<div class="form-group">
    {!! Form::label('tipo_id', 'Tipo Id:') !!}
    <p>{!! $maquina->tipo_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $maquina->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $maquina->updated_at !!}</p>
</div>

