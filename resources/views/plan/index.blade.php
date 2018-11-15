@extends('admin.layouts.app')
@section('title','Planes')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
    <p><strong>PLANES DE MITIGACION DEL RIESGO</strong></p>

	<table class="table table-hover table-condensed table-striped table-bordered" align="center" style="width: 75%">
        <thead>
            <th scope="col">Riesgo</th>
            <th scope="col">Opcion</th>
            <th scope="col">Accion</th>
            <th scope="col">Responsable</th>
            <th scope="col">Duracion</th>
            <th scope="col">Criterio</th>
        </thead>
        <tbody>
            @foreach($plan as $planes)
                <tr>
                    <td>{{$planes->riesgo}}</td>
                    <td>{{$planes->opcion}}</td>
                    <td>{{$planes->accion}}</td>
                    <td>{{$planes->responsable}}</td>
                    <td>{{$planes->duracion}}</td>
                    <td>{{$planes->criterio}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        

@endsection