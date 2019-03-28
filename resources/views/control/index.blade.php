@extends('admin.layouts.app')


@section('title','Lista de Controles')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

    @if ($flash = session('messag')) 
        <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ $flash }}
     </div>
    @endif
    @if ($flash = session('message')) 
        <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ $flash }}
     </div>
    @endif
    @if(!session('mensaje')==null)
     <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         {{session('mensaje')}}
     </div>
    @endif
    
    {!! Form::open(['route' => 'control.index','method' => 'GET','class' => 'navbar-form pull-right'])!!}
        <div class = "input-group">
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder' => 'Buscar control..','aria-describedby'=>'search'])!!}
            <!--<span class ="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>-->
        </div>
    {!! Form::close()!!}

	<a href="{{route('control.create')}}" class="btn btn-info glyphicon glyphicon-plus">Registrar</a><hr>
    

    <div class="container">
        <strong>Controles ISO 27001</strong>
    </div>

    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Id</th>
            <th scope="col">Objetivo</th>
            <th scope="col">Control</th>
            <th scope="col">Acciones de control</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($control as $controles)
                <tr>
                    <td>{{$controles->idControlL}}</td>
                    <td>{{$controles->nombre}}</td>
                    <td>{{$controles->descripcion}}</td>
                    <td>{{$controles->acciones}}</td>
                    <td>
                    <a href="{{route('control.edit',$controles->idControl)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a href="{{route('control.destroy',$controles->idControl)}}" onclick="return confirm('¿Seguro que deseas eliminar el control?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$control->render()!!}


@endsection