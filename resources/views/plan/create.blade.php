@extends('admin.layouts.app')


@section('title','Plan')


@section('content')

	{!! Form::open(['route'=>'plan.store','method'=>'POST']) !!}
          @php
            $id = 1;
          @endphp
          <div class="form-group">
            {!! Form::hidden('idRiesgo',$idRiesgo,null,['class'=>'form-control','required','style' => 'width:350px'])!!}
          </div>
		      <div class="form-group">
            {!! Form::hidden('idOpcionTratamiento',$idOpcionTratamiento,null,['class'=>'form-control','required','style' => 'width:350px'])!!}
          </div>
          
          {!! Form::label('accion','Accion/es') !!}
		      <div class="form-group">
            <textarea class="form-control" name='accion' rows=10 cols=50>  
                @foreach($accion as $acciones)
                    {{$acciones->accion}}
                @endforeach
            </textarea>
          </div>


          <div class="form-group">
            <textarea name="idControlL" id="idControlL" class="form-control" style="visibility:hidden;">
              @foreach($accion as $acciones)
                    {{$acciones->idControlL}}
                @endforeach
            </textarea>
          </div>

          <div class="form-group">
            <textarea name="nombre" id="nombre" class="form-control" style="visibility:hidden;">
              @foreach($accion as $acciones)
                    {{$acciones->nombre}}
                @endforeach
            </textarea>
          </div>

          <div class="form-group">
            <textarea name="descripcion" id="descripcion" class="form-control" style="visibility:hidden;">
              @foreach($accion as $acciones)
                    {{$acciones->descripcion}}
                @endforeach
            </textarea>
          </div>

		      <div class="form-group">
            {!! Form::label('responsable','Responsable') !!}
            {!! Form::text('responsable',null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>
	
		      <div class="form-group">
            {!! Form::label('duracion','Duracion') !!}
            {!! Form::text('duracion',null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('criterio','Criterio de exito') !!}
            {!! Form::text('criterio',null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>


          <div class="form-group">
            {!! Form::hidden('idRiesgo',$idRiesgo,null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>
          

          <div class="form-group">
            {!! Form::hidden('idOpcionTratamiento',$idOpcionTratamiento,null,['class'=>'form-control','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
            
          </div>
   	{!! Form::close() !!}

@endsection