@extends('admin.layouts.app')
@section('title','Editar Probabilidad' )
@section('content')
   
    {!! Form::open(['route'=>['probabilidad.update',$probabilidad],'method'=>'PUT']) !!}
        
        <div class="form-group">
            {!! Form::label('descripcion','Descripcion')!!}
            {!! Form::text('descripcion',$probabilidad->descripcion,['class'=>'form-control','placeholder'=>'descripcion','required','style' => 'width:350px'])!!}
        </div>
        
        
        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection