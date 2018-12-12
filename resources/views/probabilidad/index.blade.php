@extends('admin.layouts.app')


@section('title','Lista de Probabilidades')


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

   
	<a href="{{route('probabilidad.create')}}" class="btn btn-info glyphicon glyphicon-plus">Registrar</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">ID</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Editar</th>
        </thead>
        <tbody>
            @foreach($probabilidad as $probabilidades)
                <tr>
                    <td>{{$probabilidades->idProbabilidad}}</td>
                    <td>{{$probabilidades->descripcion}}</td>
                    <td>
                    <a href="{{route('probabilidad.edit',$probabilidades->idProbabilidad)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$probabilidad->render()!!}


@endsection