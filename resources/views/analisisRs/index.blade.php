@extends('admin.layouts.app')
@section('title','Analisis del riesgo')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('analisisRs.create')}}" class="btn btn-info">Registrar</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" align="center" style="width: 50%">
        <thead>
            <th scope="col">Riesgo</th>
            <th scope="col">Impacto</th>
            <th scope="col">Probabilidad</th>
        </thead>
        <tbody>
            @foreach($analisisRs as $analisisRsS)
                <tr>
                    <td>{{$analisisRsS->riesgo->nombre}}</td>
                    <td>{{$analisisRsS->impacto->descripcion}}</td>
                    <td>{{$analisisRsS->probabilidad->descripcion}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$analisisRs->render()!!}
@endsection