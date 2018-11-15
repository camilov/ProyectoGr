@extends('admin.layouts.app')


@section('title','Lista de Controles')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>


	<a href="{{route('control.create')}}" class="btn btn-info">Registrar nuevo control</a><hr>


    <div class="container">
        <strong>Controles ISO 27001</strong>
    </div>

    <table class="table table-hover table-condensed table-striped table-bordered" align="center" style="width: 50%">
        <thead>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
        </thead>
        <tbody>
            @foreach($control as $controles)
                <tr>
                    <td>{{$controles->idControlL}}</td>
                    <td>{{$controles->nombre}}</td>
                    <td>{{$controles->descripcion}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$control->render()!!}


@endsection