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


    <div class="form-group">
        {!! Form::label('riesgo','Riesgo') !!}
        {!! Form::select('idRiesgo',$riesgo,null,['class'=>'form-control','placeholder'=>'Seleccione riesgo','required','style' => 'width:350px','id'=>'idRiesgo']) !!}
    </div>

    <div id="list-product"></div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
     
    <script>
        
     $(document).ready(function(){
            $("#idRiesgo").change(function(){
                var valor = $(this).val();
                listTar(valor);
                }); 
      });


     function  listTar(valor){

        var valor1 = valor;

        $.ajax({
          type:'GET',
          url:'{{url('listar')}}'+'/'+valor1,
          beforeSend: function () {
                        $("#list-product").html("Procesando, espere por favor...");
                },
          success: function(data){
            $('#list-product').empty().html(data);
          }
        });

     }

    </script>
       
       
@endsection