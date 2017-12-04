<!-- Nroserie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nroSerie', 'Nroserie:') !!}
    {!! Form::text('nroSerie', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_id', 'Tipo:') !!}
    {!! Form::select('tipo_id',$tipos, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('maquinas.index') !!}" class="btn btn-default">Cancel</a>
</div>
