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

    <div class="form-group">
        <label for="" class="control-label">Tratamiento</label>
        <select name="productos" id="productos" class="form-control" style="width:350px">
               <option value="" selected="selected">Seleccione tratamiento</option>
        </select>
    </div>

    <div class="form-group">
            <textarea name="idRiesgo1" id="idRiesgo1" class="form-control" style="display:none"
></textarea>
    </div>

    <div id="list-product"></div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
     
    <script>
        
     $(document).ready(function(){
            $("#idRiesgo").change(function(){
                var valor = $(this).val();

                obtenertratamiento(valor,function(resultado){
                //console.log(resultado.trim());
               // listTar(resultado.trim());
             });
        }); 
      });

     $(document).on('change','#productos',function(){

            var producto = $("#productos").val();
            console.log(producto);
            
             listTar($("#idRiesgo1").val(),producto);

      });

      function obtenertratamiento(valor,callback){

          var valor1 = valor;
          $.ajax({
          type:'GET',
          url:'{{url('obtenertratamiento')}}'+'/'+valor1,
          beforeSend: function () {
                        $("#productos").html("Procesando, espere por favor...");
                },
          success: function(data){
            var producto_select ='<option value="">Seleccione Accion</option>';
            for (var i=0; i<data.length;i++)
              producto_select+='<option value="'+data[i].idOpcionTratamiento+'">'+data[i].nombre+'</option>';
            $("#productos").html(producto_select);

            $("#idRiesgo1").html(valor1);

          }
        });

     };

     function  listTar(valor,valor3){

        var valor1 = valor;
        var valor2 = valor3;
        console.log(valor1);

        $.ajax({
          type:'GET',
          url:'{{url('listar')}}'+'/'+valor1+','+valor2,
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