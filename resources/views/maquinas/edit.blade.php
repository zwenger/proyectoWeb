@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Maquina
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($maquina, ['route' => ['maquinas.update', $maquina->id], 'method' => 'patch']) !!}

                        @include('maquinas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection