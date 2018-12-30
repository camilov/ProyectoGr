@extends('admin.layouts.app')


@section('title','Lista de Impactos')


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

   
	<a href="{{route('impacto.create')}}" class="btn btn-info glyphicon glyphicon-plus">Registrar</a><hr>
    <table class="table table-hover table-condensed table-striped table-bordered" id="exTable">
        <thead class="tableThead">
            <th scope="col">ID</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Editar</th>
        </thead>
        <tbody>
            @foreach($impacto as $impactos)
                <tr>
                    <td>{{$impactos->idImpacto}}</td>
                    <td>{{$impactos->descripcion}}</td>
                    <td>
                    <a href="{{route('impacto.edit',$impactos->idImpacto)}}" class="btn btn-warning glyphicon glyphicon-pencil"></a>
                </tr>
                @endforeach
        </tbody>
    </table>
    {!!$impacto->render()!!}


@endsection