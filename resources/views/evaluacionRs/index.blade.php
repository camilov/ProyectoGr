@extends('admin.template.main')
@section('title','Evaluacion del Riesgo')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
    <table class="table table-striped">
        <thead>
            <th scope="col">Activo</th>
            <th scope="col">Riesgo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Probabilidad</th>
            <th scope="col">Impacto</th>
            <th scope="col">Nivel</th>
        </thead>
        <tbody>
            @foreach($riesgo as $riesgos)
                <tr>
                    <td>{{$riesgos->idActivo}}</td>
                    <td>{{$riesgos->nombre}}</td>
                    <td>{{$riesgos->riesgoDes}}</td>
                    <td>{{$riesgos->probabilidadDes}}</td>
                    <td>{{$riesgos->impactoDes}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection