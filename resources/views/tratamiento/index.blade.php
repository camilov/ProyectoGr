@extends('admin.template.main')
@section('title','Controles')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
	<table class="table table-striped">
        <thead>
            <th scope="col">Opcio de tratamiento</th>
            <th scope="col">Riesgo</th>
            <th scope="col">Control</th>
            <th scope="col">Plan</th>
        </thead>
        <tbody>
            @foreach($tratamiento as $tratamientos)
                <tr>
                    <td>{{$tratamientos->OpcionTratamiento->nombre}}</td>
                    <td>{{$tratamientos->Riesgo->nombre}}</td>
                    <td><a href="#" class="btn btn-warning"> Controles</a></td>
                    <td><a href="#" class="btn btn-primary"> Planes</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection