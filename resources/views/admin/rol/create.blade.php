@extends('admin.layouts.app')


@section('title','Creacion de  Rol')


@section('content')

	{!! Form::open(['route'=>'rol.store','method'=>'POST']) !!}
        
         
          <div class="form-group">
            {!! Form::label('descripcion','descripcion') !!}
            {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
   	{!! Form::close() !!}


@endsection