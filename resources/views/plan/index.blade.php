@extends('admin.layouts.app')
@section('title','Planes')
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

	<table class="table table-hover table-condensed table-striped table-bordered" id="exTable"">
        <thead class="tableThead">
            <th scope="col">Riesgo</th>
            <th scope="col">Opcion</th>
            <th scope="col">Accion</th>
            <th scope="col">Responsable</th>
            <th scope="col">Duracion</th>
            <th scope="col">Criterio</th>
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($plan as $planes)
                <tr>
                    <td>{{$planes->riesgo}}</td>
                    <td>{{$planes->opcion}}</td>
                    <td>-{{$planes->accion}}</td>
                    <td>{{$planes->responsable}}</td>
                    <td>{{$planes->duracion}}</td>
                    <td>{{$planes->criterio}}</td>
                    <td>
                    <a href="{{route('plan.edit',$planes->idPlan)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                    <a href="{{route('plan.destroy',$planes->idPlan)}}" onclick="return confirm('¿Seguro que deseas eliminar el usuario?')" class="btn btn-danger glyphicon glyphicon-trash"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        

@endsection