@extends('admin.layouts.app')
@section('title','Lista de controles')
@section('content')

    @php
    $a =0;
    $b =0;
    @endphp

	<ul>
    	@foreach ($errors->all() as $error)
        	<li>{{ $error }}</li>
    	@endforeach
	</ul>
    
	<table class="table table-hover table-condensed table-striped table-bordered" align="center" style="width: 50%">
        <thead>
            <th scope="col">Control</th>
        </thead>
        <tbody>
            @foreach($controles as $control1)
                <tr>
                    <td>{{$control1->control->nombre}}</td>
                    @php
                    $a = $control1->idRiesgo;
                    $b = $control1->idOpcionTratamiento;
                    @endphp;
                </tr>
            @endforeach
        </tbody>
    </table>
    {!!$controles->render()!!}

    <a href="{{route('plan.create',[$a,$b])}}" class="btn btn-warning"> Plan</a>
        

@endsection