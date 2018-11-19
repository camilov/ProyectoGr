@extends('admin.layouts.app')
@section('title','Editar Activo ' . $activo->nombre)
@section('content')
   
    {!! Form::open(['route'=>['activo.update',$activo],'method'=>'PUT']) !!}
        
        <div class="form-group">
            {!! Form::label('codigo','codigo')!!}
            {!! Form::text('codigo',$activo->codigo,['class'=>'form-control','placeholder'=>'Codigo','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('responsable','responsable')!!}
            {!! Form::text('responsable',$activo->responsable,['class'=>'form-control','placeholder'=>'Responsable','required','style' => 'width:350px'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('tipoActivo','tipo de activo')!!}
            {!! Form::text('tipoActivo',$activo->tipoActivo,['class'=>'form-control','placeholder'=>'Hardware,software etc..','required','style' => 'width:350px'])!!}
        </div>
        
        
        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection