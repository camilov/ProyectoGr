@extends('admin.layouts.app')


@section('title','Creacion de  Riesgo')


@section('content')

	{!! Form::open(['route'=>'riesgo.store','method'=>'POST']) !!}
        

          <div class="form-group">
            {!! Form::label('idActivo','Activo') !!}
            {!! Form::select('idActivo',$activo,null,['class'=>'form-control','placeholder'=>'Seleccione activo','required','style' => 'width:350px']) !!}
          </div>
         

         <!-- <div class="form-group">
            {!! Form::label('tipoRiesgo','Tipo de riesgo') !!}
            {!! Form::text('tipoRiesgo',null,['class'=>'form-control','placeholder'=>'Tipo de riesgo','required','style' => 'width:350px']) !!}
          </div>-->

          <div class="form-group">
            {!! Form::label('proceso','Proceso') !!}
            {!! Form::text('proceso',null,['class'=>'form-control','placeholder'=>'Proceso','required','style' => 'width:350px']) !!}
          </div>

		      <div class="form-group">
            {!! Form::label('nombre','Nombre') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required','style' => 'width:350px']) !!}
          </div>


          <div class="form-group">
            {!! Form::label('descripcion','Descripcion') !!}
            {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required','style' => 'width:350px']) !!}
          </div>
          
          <div class="form-group">
            {!! Form::label('causa','Causa') !!}
            {!! Form::text('causa',null,['class'=>'form-control','placeholder'=>'Causa','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('efecto','Efecto') !!}
            {!! Form::text('efecto',null,['class'=>'form-control','placeholder'=>'Efecto','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('fuente','Fuente') !!}
            {!! Form::text('fuente',null,['class'=>'form-control','placeholder'=>'Fuente','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('propietario','Propietario') !!}
            {!! Form::text('propietario',null,['class'=>'form-control','placeholder'=>'Fuente','required','style' => 'width:350px']) !!}
          </div>
          
          
          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
   	{!! Form::close() !!}


@endsection