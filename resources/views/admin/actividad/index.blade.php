@extends('admin.layouts.app')


@section('title','Lista de Actividades')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('actividad.create')}}" class="btn btn-info">Registrar nueva actividad</a><hr>
    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Rol</th>
        </thead>
        <tbody>
            @foreach($actividad as $actividades)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$actividades->idActivdad}}</td>
                    <td>{{$actividades->descripcion}}</td>
                    <td>{{$actividades->rol->descripcion}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$actividad->render()!!}


@endsection