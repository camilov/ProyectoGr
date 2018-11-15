@extends('admin.layouts.app')
@section('title','Controles')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
    
	<table class="table table-hover table-condensed table-striped table-bordered" align="center" style="width: 50%">
        <thead>
            <th scope="col">Opcio de tratamiento</th>
            <th scope="col">Riesgo</th>
            <th scope="col">plan</th>
        </thead>
        <tbody>
            @foreach($tratamiento as $tratamientos)
                <tr>
                    <td>{{$tratamientos->OpcionTratamiento->nombre}}</td>
                    <td>{{$tratamientos->Riesgo->nombre}}</td>
                    <td><a href="{{route('controles.create',[$tratamientos->idRiesgo,$tratamientos->idOpcionTratamiento])}}" class="btn btn-warning"> Controles</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!!$tratamiento->render()!!}
        

@endsection