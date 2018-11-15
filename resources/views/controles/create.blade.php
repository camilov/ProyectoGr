@extends('admin.layouts.app')
@section('title','Controles')
@section('content')

	{!! Form::open(['route'=>'controles.store','method'=>'POST']) !!}
        

          <div class="form-group">
            {!! Form::label('control','Control') !!}
            {!! Form::select('idControl',$control,null,['class'=>'form-control','placeholder'=>'Seleccione control','required','style' => 'width:350px']) !!}
          </div>
          <div class="form-group">
            {!! Form::hidden('idRiesgo',$idRiesgo,null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>
          <div class="form-group">
            {!! Form::hidden('idOpcionTratamiento',$idOpcionTratamiento,null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
   	{!! Form::close() !!}


@endsection