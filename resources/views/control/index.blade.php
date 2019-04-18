@extends('admin.layouts.app')


@section('title','Lista de Controles')


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

    <a href="{{route('control.create')}}" class="btn btn-info glyphicon glyphicon-plus">Registrar</a><hr>

    <div class="form-group">
            {!! Form::label('control','Control') !!}
            {!! Form::select('control2',$control2,null,['id'=> 'idControl','class'=>'form-control','placeholder'=>'Seleccione control','required','style' => 'width:350px']) !!}
    </div>


    <div id="list-product"></div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
     
    <script>
        
     $(document).ready(function(){
            $("#idControl").change(function(){
                var valor = $(this).val();
                console.log(valor);
                listTar(valor);
                }); 
      });


     function  listTar(valor){

        var valor1 = valor;

        $.ajax({
          type:'GET',
          url:'{{url('listcont')}}'+'/'+valor1,
          beforeSend: function () {
                        $("#list-product").html("Procesando, espere por favor...");
                },
          success: function(data){
            console.log(data);
            $('#list-product').empty().html(data);
          }
        });

     }

    </script>

@endsection