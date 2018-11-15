@extends('admin.layouts.app')


@section('title','Plan')


@section('content')

	{!! Form::open(['route'=>'plan.store','method'=>'POST']) !!}


          <div class="form-group">
            {!! Form::hidden('idRiesgo',$idRiesgo,null,['class'=>'form-control','required','style' => 'width:350px'])!!}
          </div>
          
		  <div class="form-group">
            {!! Form::hidden('idOpcionTratamiento',$idOpcionTratamiento,null,['class'=>'form-control','required','style' => 'width:350px'])!!}
          </div>
          {!! Form::label('accion','Accion/es') !!}
		  <div class="form-group">
            
            {!! Form::textArea('accion',$accion,null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>
		  
		  <div class="form-group">
            {!! Form::label('responsable','Responsable') !!}
            {!! Form::text('responsable',null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>
	
		  <div class="form-group">
            {!! Form::label('duracion','Duracion') !!}
            {!! Form::text('duracion',null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('criterio','Criterio') !!}
            {!! Form::text('criterio',null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>


          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
   	{!! Form::close() !!}

@endsection