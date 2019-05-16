@extends('admin.layouts.app')
@section('title','Editar Control')
@section('content')
   
    {!! Form::open(['route'=>['control.update',$control],'method'=>'PUT']) !!}
        
    	<div class="form-group">
            {!! Form::hidden('idControlL',$control->idControlL,['id'=>'idControlL','class'=>'form-control','required','style' => 'width:350px']) !!}
        </div>

        <div class="form-group">
            {!! Form::hidden('idAccion',$control->idAccion,['id'=>'idAccion','class'=>'form-control','required','style' => 'width:350px']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('acciones','Acciones')!!}
            {!! Form::textArea('acciones',$control->acciones,['class'=>'form-control','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script>


    	


    </script>
@endsection