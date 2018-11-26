@extends('admin.layouts.app')


@section('title','Lista de Activos')


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


	<a href="{{route('activo.create')}}" class="btn btn-info glyphicon glyphicon-plus">Registrar</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col">Responsable</th>
            <th scope="col">Tipo</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($activo as $activos)
                <tr>
                    <td>{{$activos->nombre}}</td>
                    <td>{{$activos->codigo}}</td>
                    <td>{{$activos->responsable}}</td>
                    <td>{{$activos->tipoActivo}}</td>
                    <th><img src="images/{{$activos->imagen}}" alt="" height="42" width="42"></th>
                    <td>
                    <a href="{{route('activo.edit',$activos->idActivo)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a href="{{route('activo.destroy',$activos->idActivo)}}" onclick="return confirm('¿Seguro que deseas eliminar el activo?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$activo->render()!!}


@endsection