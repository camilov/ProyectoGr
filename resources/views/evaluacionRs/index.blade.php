@extends('admin.layouts.app')
@section('title','Evaluacion del Riesgo')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Activo</th>
            <th scope="col">Riesgo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">%Probabilidad</th>
            <th scope="col">%Impacto</th>
            <th scope="col">Nivel de riesgo</th>
            <th scope="col">Accion</th>
        </thead>
        <tbody>
            @foreach($riesgo as $riesgos)
                <tr>
                    <td>{{$riesgos->nomactivo}}</td>
                    <td>{{$riesgos->nombre}}</td>
                    <td>{{$riesgos->riesgoDes}}</td>
                    <td>{{$riesgos->probabilidadDes}}</td>
                    <td>{{$riesgos->impactoDes}}</td>
                    <td>{{$riesgos->nivel}}</td>
                    <td><a href="{{route('tratamiento.create',[$riesgos->idRiesgo])}}" class="btn btn-warning"> Opcion tratamiento</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection