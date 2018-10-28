@extends('admin.layouts.app')


@section('title','Creacion de  Usuario')


@section('content')

	{!! Form::open(['route'=>'user.store','method'=>'POST']) !!}
        
         
          <div class="form-group">
            {!! Form::label('nombre','Nombre') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required','style' => 'width:350px']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('apellido','Apellido') !!}
            {!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido','required','style' => 'width:350px']) !!}
          </div>

		  <div class="form-group">
            {!! Form::label('edad','Edad') !!}
            {!! Form::text('edad',null,['class'=>'form-control','placeholder'=>'Nombre','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('nick','Nick') !!}
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'NickName','required','style' => 'width:350px']) !!}
          </div>

		  <div class="form-group">
            {!! Form::label('telefono','Telefono') !!}
            {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Telefono','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
                {!! Form::label('idRol','Rol',['font-style'=>'italic'])!!}
                {!! Form::select('idRol',$rol,null,['class'=>'form-control','placeholder'=>'Seleccione Rol','required','style' => 'width:350px'])!!}
          </div>

          <div class="form-group">
                {!! Form::label('email','Correo')!!}
                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Seleccione e','required','style' => 'width:350px'])!!}
         </div>

         <div class="form-group">
       		 	{!! Form::label('password','Contraseña') !!}
       		 	{!! Form::password('password',null,['class'=>'form-control','placeholder'=>'Constraseña','required','style' => 'width:350px']) !!}
         </div>

          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
   	{!! Form::close() !!}


@endsection