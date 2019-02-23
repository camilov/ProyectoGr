@extends('admin.layouts.app')


@section('title','Creacion de  Actividad')


@section('content')

	{!! Form::open(['route'=>'actividad.store','method'=>'POST']) !!}
        
          
	      <div class="form-group">
            {!! Form::label('idRol','Rol') !!}
            {!! Form::select('idRol',$rol,null,['class'=>'form-control','placeholder'=>'Descripcion','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('descripcion','Descripcion') !!}
            {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
   	{!! Form::close() !!}


@endsection