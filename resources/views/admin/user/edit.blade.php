@extends('admin.layouts.app')
@section('title','Editar Usuario ' . $user->name)
@section('content')
   
    {!! Form::open(['route'=>['user.update',$user],'method'=>'PUT']) !!}
        
        <div class="form-group">
            {!! Form::label('name','name')!!}
            {!! Form::text('name',$user->name,['class'=>'form-control','placeholder'=>'Nombre completo','required','style' => 'width:350px'])!!}
        </div>
        
        <div class="form-group">
            {!! Form::label('email','email')!!}
            {!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'Example@gmail.com','required','style' => 'width:350px'])!!}
        </div>
        
        
        <div class="form-group">
            {!! Form::submit('Editar',['class'=>'btn btn-primary'])!!}
            
        </div>
    {!! Form::close() !!}

@endsection