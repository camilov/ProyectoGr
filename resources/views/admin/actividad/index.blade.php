@extends('admin.layouts.app')


@section('title','Lista de Actividades')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('actividad.create')}}" class="btn btn-info">Registrar nueva actividad</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Rol</th>
            <th scope="col">Descripcion</th>
        </thead>
        <tbody>
            @foreach($actividad as $actividades)
                <tr>
                    <td>{{$actividades->rol->descripcion}}</td>
                    <td>{{$actividades->descripcion}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$actividad->render()!!}


@endsection