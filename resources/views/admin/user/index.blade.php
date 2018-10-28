@extends('admin.layouts.app')


@section('title','Lista de Usuarios')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('user.create')}}" class="btn btn-info">Registrar nueva usuario</a><hr>
    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">NickName</th>
            <th scope="col">Telefono</th>
            <th scope="col">Rol</th>
            <th scope="col">Email</th>
        </thead>
        <tbody>
            @foreach($user as $users)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$users->nombre}}</td>
                    <td>{{$users->apellido}}</td>
                    <td>{{$users->edad}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->telefono}}</td>
                    <td>{{$users->rol->descripcion}}</td>
                    <td>{{$users->email}}</td>
                </tr>
                @endforeach

        </tbody>
    </table>
    {!!$user->render()!!}


@endsection