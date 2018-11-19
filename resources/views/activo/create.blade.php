@extends('admin.layouts.app')


@section('title','Creacion de  Activo')


@section('content')

	{!! Form::open(['route'=>'activo.store','method'=>'POST','files'=>true,'enctype'=>'multipart/form-data']) !!}
          
          <div class="form-group" >
            {!! Form::label('nombre','Nombre') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('codigo','Codigo') !!}
            {!! Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Codigo','required','style' => 'width:350px']) !!}
          </div>

		      <div class="form-group">
            {!! Form::label('responsable','Responsable') !!}
            {!! Form::text('responsable',null,['class'=>'form-control','placeholder'=>'Responsable','required','style' => 'width:350px']) !!}
          </div>


          <div class="form-group">
            {!! Form::label('tipoActivo','Tipo de activo' ) !!}
            {!! Form::text('tipoActivo',null,['class'=>'form-control','placeholder'=>'Tipo de activo','required','style' => 'width:350px']) !!}
          </div>
          
          <div class="form-group">
            {!! Form::label('idUsuario','Usuario') !!}
            {!! Form::select('idUsuario',$user,null,['class'=>'form-control','placeholder'=>'Seleccione usuario','required','style' => 'width:350px']) !!}
          </div>
          
          <div class="form-group">
            {!! Form::label('imagen','Imagen') !!}
            {!! Form::file('imagen') !!}
          </div>

         
          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
          </div>
   	{!! Form::close() !!}


@endsection