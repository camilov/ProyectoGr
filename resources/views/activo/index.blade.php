@extends('admin.template.main')


@section('title','Lista de Activos')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('activo.create')}}" class="btn btn-info">Registrar nuevo Activo</a><hr>
    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col">Responsable</th>
            <th scope="col">Tipo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Usuario</th>
        </thead>
        <tbody>
            @foreach($activo as $activos)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$activos->idActivo}}</td>
                    <td>{{$activos->nombre}}</td>
                    <td>{{$activos->codigo}}</td>
                    <td>{{$activos->responsable}}</td>
                    <td>{{$activos->tipoActivo}}</td>
                    <td>{{$activos->fechaAlta}}</td>
                    <td>{{$activos->user->name}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$activo->render()!!}


@endsection