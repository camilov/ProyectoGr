@extends('admin.layouts.app')
@section('title','Lista de Riesgos')
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

	<a href="{{route('riesgo.create')}}" class="btn btn-info glyphicon glyphicon-plus">Registrar</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">Activo</th>
            <!--<th scope="col">Tipo de riesgo</th>-->
            <th scope="col">Proceso</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Causa</th>
            <th scope="col">Efecto</th>
            <th scope="col">Fuente</th>
            <th scope="col">Propietario</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($riesgo as $riesgos)
                <tr>
                    <td>{{$riesgos->activo->nombre}}</td>
                    <!--<td>{{$riesgos->tipoRiesgo}}</td>-->
                    <td>{{$riesgos->proceso}}</td>
                    <td>{{$riesgos->nombre}}</td>
                    <td>{{$riesgos->descripcion}}</td>
                    <td>{{$riesgos->causa}}</td>
                    <td>{{$riesgos->efecto}}</td>
                    <td>{{$riesgos->fuente}}</td>
                    <td>{{$riesgos->propietario}}</td>
                    <td>
                    <a href="{{route('riesgo.edit',$riesgos->idRiesgo)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a href="{{route('riesgo.destroy',$riesgos->idRiesgo)}}" onclick="return confirm('¿Seguro que deseas eliminar el riesgo?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$riesgo->render()!!}


@endsection