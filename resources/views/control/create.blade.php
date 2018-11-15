@extends('admin.layouts.app')


@section('title','Creacion de Control')


@section('content')

	{!! Form::open(['route'=>'control.store','method'=>'POST']) !!}
        
          <div class="form-group">
            {!! Form::label('id','Id') !!}
            {!! Form::text('idControlL',null,['class'=>'form-control','placeholder'=>'Ejemplo: A.5.1.1','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('nombre','Nombre') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'nombre','required','style' => 'width:350px']) !!}
          </div>

		      <div class="form-group">
            {!! Form::label('descripcion','Descripcion') !!}
            {!! Form::textArea('descripcion',null,['class'=>'form-control','placeholder'=>'descripcion','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
   	{!! Form::close() !!}


@endsection