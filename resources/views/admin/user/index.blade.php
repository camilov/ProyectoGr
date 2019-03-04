@extends('admin.layouts.app')
@section('title','Lista de Usuarios')
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

	<a href="{{route('user.create')}}" class="btn btn-info glyphicon glyphicon-plus
"   >Registrar</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">NickName</th>
            <th scope="col">Telefono</th>
            <th scope="col">Rol</th>
            <th scope="col">Email</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($user as $users)
                <tr>
                    <td>{{$users->nombre}}</td>
                    <td>{{$users->apellido}}</td>
                    <td>{{$users->edad}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->telefono}}</td>
                    <td>{{$users->rol->descripcion}}</td>
                    <td>{{$users->email}}</td>
                    <td>
                    <a href="{{route('user.edit',$users->id)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a href="{{route('user.destroy',$users->id)}}" onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
                @endforeach

        </tbody>
    </table>
    {!!$user->render()!!}


@endsection