@extends('admin.template.main')

@section('title','Analisis del riesgo')

@section('content')

	{!! Form::open(['route'=>'analisisRs.store','method'=>'POST']) !!}
          <div class="form-group">
            {!! Form::label('idRiesgo','Riesgo') !!}
            {!! Form::select('idRiesgo',$riesgo,null,['class'=>'form-control','placeholder'=>'Seleccione riesgo','required','style' => 'width:350px']) !!}
          </div>
         
          <div class="form-group">
            {!! Form::label('idImpacto','Impacto') !!}
            {!! Form::select('idImpacto',$impacto,null,['class'=>'form-control','placeholder'=>'Seleccione Impacto','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('idProbabilidad','Probabilidad') !!}
            {!! Form::select('idProbabilidad',$probabilidad,null,['class'=>'form-control','placeholder'=>'Seleccione probabilidad','required','style' => 'width:350px']) !!}
          </div>
          
          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}            
          </div>
  {!! Form::close() !!}

@endsection