@extends('admin.layouts.app')


@section('title','Lista de Riesgos')


@section('content')

	

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('riesgo.create')}}" class="btn btn-info">Registrar nuevo Riesgo</a><hr>
    <table class="table table-striped">
        <thead>
            <th scope="col">Activo</th>
            <th scope="col">Tipo de riesgo</th>
            <th scope="col">Proceso</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Causa</th>
            <th scope="col">Efecto</th>
            <th scope="col">Fuente</th>
            <th scope="col">Propietario</th>
        </thead>
        <tbody>
            @foreach($riesgo as $riesgos)
                <tr>
                    <td>{{$riesgos->activo->nombre}}</td>
                    <td>{{$riesgos->tipoRiesgo}}</td>
                    <td>{{$riesgos->proceso}}</td>
                    <td>{{$riesgos->nombre}}</td>
                    <td>{{$riesgos->descripcion}}</td>
                    <td>{{$riesgos->causa}}</td>
                    <td>{{$riesgos->efecto}}</td>
                    <td>{{$riesgos->fuente}}</td>
                    <td>{{$riesgos->propietario}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$riesgo->render()!!}


@endsection