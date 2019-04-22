@extends('admin.layouts.app')
@section('title','Lista de controles')
@section('content')

    @php
    $a =0;
    $b =0;
    $c =0;
    @endphp

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

    

	<table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Control</th>
            <th scope="col">Accion</th>
        </thead>
        <tbody>
            @foreach($controles as $control1)
                <tr>
                    <td>{{$control1->nombre}}</td>
                    <td>{{$control1->accion}}</td>
                    @php
                    $a = $control1->idRiesgo;
                    $b = $control1->idOpcionTratamiento;
                    $c = $control1->idControlL;
                    @endphp;
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('controles.create',[$a,$b])}}" class="btn btn-info glyphicon glyphicon-plus">Registrar</a>
    <a href="{{route('plan.create',[$a,$b,$c])}}" class="btn btn-warning"> Plan</a>
        

@endsection