@extends('admin.layouts.app')


@section('title','Creacion de Control')


@section('content')

	{!! Form::open(['route'=>'control.store','method'=>'POST']) !!}
        
          <div class="form-group">
            {!! Form::label('id','Id') !!}
            {!! Form::text('idControlL',null,['class'=>'form-control','placeholder'=>'Ejemplo: A.5.1.1','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('objetivo','Objetivo') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre','required','style' => 'width:350px']) !!}
          </div>

		      <div class="form-group">
            {!! Form::label('control','Control') !!}
            {!! Form::textArea('descripcion',null,['class'=>'form-control','placeholder'=>'descripcion','required','style' => 'width:350px']) !!}
          </div>
          
          <div class="form-group">
            {!! Form::label('acciones','Acciones') !!}
            {!! Form::textArea('acciones',null,['class'=>'form-control','placeholder'=>'Acciones','style' => 'width:350px']) !!}
          </div>
  


          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
          </div>
   	{!! Form::close() !!}


@endsection