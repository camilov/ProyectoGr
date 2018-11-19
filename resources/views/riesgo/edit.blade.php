@extends('admin.layouts.app')
@section('title','Editar Riesgo')
@section('content')
   
    {!! Form::open(['route'=>['riesgo.update',$riesgo],'method'=>'PUT']) !!}
        
        <div class="form-group">
            {!! Form::label('proceso','proceso')!!}
            {!! Form::text('proceso',$riesgo->proceso,['class'=>'form-control','placeholder'=>'Proceso','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('nombre','nombre')!!}
            {!! Form::text('nombre',$riesgo->nombre,['class'=>'form-control','placeholder'=>'Nombre','required','style' => 'width:350px'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('descripcion','descripcion')!!}
            {!! Form::text('descripcion',$riesgo->descripcion,['class'=>'form-control','placeholder'=>'Descripcion','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('causa','causa')!!}
            {!! Form::text('causa',$riesgo->causa,['class'=>'form-control','placeholder'=>'Causa','required','style' => 'width:350px'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('efecto','efecto')!!}
            {!! Form::text('efecto',$riesgo->efecto,['class'=>'form-control','placeholder'=>'Efecto','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('fuente','fuente')!!}
            {!! Form::text('fuente',$riesgo->fuente,['class'=>'form-control','placeholder'=>'Fuente','required','style' => 'width:350px'])!!}
        </div>


        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection