@extends('admin.layouts.app')
@section('title','Editar Registro')
@section('content')
   
    {!! Form::open(['route'=>['analisisRs.update',$analisisRs],'method'=>'PUT']) !!}
        
        <div class="form-group">
            {!! Form::label('idProbabilidad','Probabilidad')!!}
            {!! Form::select('idProbabilidad',$probabilidad,null,['class'=>'form-control','placeholder'=>'Probabilidad','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('idImpacto','Impacto')!!}
            {!! Form::select('idImpacto',$impacto,null,['class'=>'form-control','placeholder'=>'Impacto','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection