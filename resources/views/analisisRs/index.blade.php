@extends('admin.layouts.app')
@section('title','Analisis del riesgo')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
    
    @if ($flash = session('messag')) 
        <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ $flash }}
     </div>
    @endif
    @if ($flash = session('message')) 
        <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ $flash }}
     </div>
    @endif
    @if(!session('mensaje')==null)
     <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         {{session('mensaje')}}
     </div>
    @endif


	<a href="{{route('analisisRs.create')}}" class="btn btn-info glyphicon glyphicon-plus">Registrar</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Riesgo</th>
            <th scope="col">Impacto</th>
            <th scope="col">Probabilidad</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($analisisRs as $analisisRsS)
                <tr>
                    <td>{{$analisisRsS->riesgo->nombre}}</td>
                    <td>{{$analisisRsS->impacto->descripcion}}</td>
                    <td>{{$analisisRsS->probabilidad->descripcion}}</td>
                    <td>
                    <a href="{{route('analisisRs.edit',$analisisRsS->idAnalisisRs)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a href="{{route('analisisRs.destroy',$analisisRsS->idAnalisisRs)}}" onclick="return confirm('¿Seguro que deseas eliminar el registro')" class="btn btn-danger glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$analisisRs->render()!!}
@endsection