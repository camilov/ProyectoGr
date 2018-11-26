@extends('admin.layouts.app')
@section('title','Editar Control')
@section('content')
   
    {!! Form::open(['route'=>['control.update',$control],'method'=>'PUT']) !!}
        
        <div class="form-group">
            {!! Form::label('descripcion','Descripcion')!!}
            {!! Form::textArea('descripcion',$control->descripcion,['class'=>'form-control','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection