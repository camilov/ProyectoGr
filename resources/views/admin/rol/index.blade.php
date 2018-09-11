@extends('admin.template.main')


@section('title','Lista de Roles del sistema')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('rol.create')}}" class="btn btn-info">Registrar nueva rol</a><hr>
    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Descripcion</th>
        </thead>
        <tbody>
            @foreach($rol as $roles)
                <tr>
                    <td>{{$roles->idRol}}</td>
                    <td>{{$roles->descripcion}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$rol->render()!!}


@endsection