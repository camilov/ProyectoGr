@extends('admin.layouts.app')
@section('title','Editar Plan')
@section('content')
   
    {!! Form::open(['route'=>['plan.update',$plan],'method'=>'PUT']) !!}
        
        
        <div class="form-group">
            {!! Form::label('responsable','responsable')!!}
            {!! Form::text('responsable',$plan->responsable,['class'=>'form-control','placeholder'=>'Responsable','required','style' => 'width:350px'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('duracion','duracion')!!}
            {!! Form::text('duracion',$plan->duracion,['class'=>'form-control','placeholder'=>'Duracion','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('criterio','criterio de exito')!!}
            {!! Form::text('criterio',$plan->criterio,['class'=>'form-control','placeholder'=>'Criterio','required','style' => 'width:350px'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection