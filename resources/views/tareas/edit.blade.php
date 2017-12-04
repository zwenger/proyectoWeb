@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tarea
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tarea, ['route' => ['tareas.update', $tarea->id], 'method' => 'patch']) !!}

                        @include('tareas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection