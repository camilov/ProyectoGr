@extends('admin.template.main')


@section('title','Creacion de  Responsabilidad')


@section('content')

	{!! Form::open(['route'=>'responsabilidad.store','method'=>'POST']) !!}
        
          
	      <div class="form-group">
            {!! Form::label('rol','Rol') !!}
            {!! Form::select('rol',$rol,null,['class'=>'form-control','placeholder'=>'Descripcion','required','style' => 'width:350px']) !!}
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