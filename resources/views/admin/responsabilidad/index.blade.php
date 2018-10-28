@extends('admin.layouts.app')


@section('title','Lista de Responsabilidades')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('responsabilidad.create')}}" class="btn btn-info">Registrar nueva responsabilidad</a><hr>
    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Rol</th>
        </thead>
        <tbody>
            @foreach($responsabilidad as $responsabilidades)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$responsabilidades->idActivdad}}</td>
                    <td>{{$responsabilidades->descripcion}}</td>
                    <td>{{$responsabilidades->rol->descripcion}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$responsabilidad->render()!!}


@endsection