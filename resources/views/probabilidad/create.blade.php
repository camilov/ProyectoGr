@extends('admin.layouts.app')


@section('title','Creacion de  Probabilidad')


@section('content')

	{!! Form::open(['route'=>'probabilidad.store','method'=>'POST','files'=>true,'enctype'=>'multipart/form-data']) !!}
          
          <div class="form-group" >
            {!! Form::label('descripcion','Descripcion') !!}
            {!! Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Descripcion','required','style' => 'width:350px']) !!}
          </div>

         
          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
          </div>
   	{!! Form::close() !!}


@endsection