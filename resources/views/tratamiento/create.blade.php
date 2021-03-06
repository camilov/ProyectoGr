@extends('admin.layouts.app')


@section('title','Opcion de tratamiento')


@section('content')

  @if(count($errors) >0)
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach($errors->all() as $error)
              <li>
                {{$error}}
              </li>
          @endforeach
        </ul>
      </div>
  @endif 

	{!! Form::open(['route'=>'tratamiento.store','method'=>'POST']) !!}
        

          <div class="form-group">
            {!! Form::label('idOpcionTratamiento','Opcion de tratamiento') !!}
            {!! Form::select('idOpcionTratamiento',$opcion,null,['class'=>'form-control','placeholder'=>'Seleccione opcion de tratamiento','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::hidden('idRiesgo',$idRiesgo,null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
   	{!! Form::close() !!}


@endsection