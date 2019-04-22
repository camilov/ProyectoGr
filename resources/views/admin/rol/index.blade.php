@extends('admin.layouts.app')


@section('title','Lista de Roles del sistema')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('rol.create')}}" class="btn btn-info">Registrar nueva rol</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Descripcion</th>
        </thead>
        <tbody>
            @foreach($rol as $roles)
                <tr>
                    <td>{{$roles->descripcion}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$rol->render()!!}


@endsection