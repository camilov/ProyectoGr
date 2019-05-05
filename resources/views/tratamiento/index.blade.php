@extends('admin.layouts.app')
@section('title','Controles')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
    
	<table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Opcion de tratamiento</th>
            <th scope="col">Riesgo</th>
            <th scope="col">plan</th>
        </thead>
        <tbody>
            @foreach($tratamiento as $tratamientos)
                <tr>
                    <td>{{$tratamientos->riesgo}}</td>
                    <td>{{$tratamientos->opcion_tratamiento}}</td>
                    <td><a href="{{route('controles.create',[$tratamientos->idRiesgo,$tratamientos->idOpcionTratamiento])}}" class="btn btn-warning"> Controles</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
        

@endsection