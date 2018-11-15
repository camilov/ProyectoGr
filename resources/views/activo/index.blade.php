@extends('admin.layouts.app')


@section('title','Lista de Activos')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
	<a href="{{route('activo.create')}}" class="btn btn-info">Registrar nuevo Activo</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" align="center" style="width: 50%">
        <thead>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col">Responsable</th>
            <th scope="col">Tipo</th>
            <th scope="col">Usuario</th>
        </thead>
        <tbody>
            @foreach($activo as $activos)
                <tr>
                    <td>{{$activos->nombre}}</td>
                    <td>{{$activos->codigo}}</td>
                    <td>{{$activos->responsable}}</td>
                    <td>{{$activos->tipoActivo}}</td>
                    <td>{{$activos->user->name}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$activo->render()!!}


@endsection