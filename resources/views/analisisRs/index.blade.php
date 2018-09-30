@extends('admin.template.main')
@section('title','Analisis del riesgo')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>

	<a href="{{route('analisisRs.create')}}" class="btn btn-info">Registrar</a><hr>
    <table class="table table-striped">
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