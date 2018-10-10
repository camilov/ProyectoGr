@extends('admin.template.main')
@section('title','Controles')
@section('content')

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
    <a href="#" class="btn btn-info">Controles</a><hr>

@endsection