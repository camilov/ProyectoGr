@extends('admin.layouts.app')
@section('title','Controles')
@section('content')

  @if(count($errors) >0)
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach($errors->all() as $error)
              <li>
                {{$error}}
              </li>
          @endforeach
        </ul>
      </div>
  @endif 


	{!! Form::open(['route'=>'controles.store','method'=>'POST']) !!}
        



          <div class="form-group">
            {!! Form::label('control','Control') !!}
            {!! Form::select('idControl',$control,null,['id'=> 'idControl','class'=>'form-control','placeholder'=>'Seleccione control','required','style' => 'width:350px']) !!}
          </div>


          <div class="form-group">
            <label for="" class="control-label">Acciones</label>
            <select name="productos" id="productos" class="form-control" style="width:350px">
                     <option value="" selected="selected">Seleccione Accion</option>
            </select>
          </div>

          <div class="form-group">
            <text name="idControlL" id="idControlL" class="form-control" style="visibility:hidden">
            </text>
          </div>
          
          <div class="form-group">
            {!! Form::text('idControlL2',null,['id'=>'idControlL2','class'=>'form-control','required','style' => 'width:350px']) !!}
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

      <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
      <script>

      $(document).on('change','#idControl',function(){
             var valor = $(this).val();
            
             sacarid(valor,function(resultado){

                console.log(resultado.trim());
                acciones(resultado.trim());
             });
      });

      $(document).on('change','#productos',function(){
             $('#idControlL2').val($("#productos option:selected").text()); 
             console.log($("#productos option:selected").text());
      });


      function sacarid(valor,callback){

        var id = valor;

        $.ajax({
          type:'GET',
          url:'{{url('sacarid')}}'+'/'+id,
          beforeSend: function () {

                },
          success: function(data){
            var controlL = ' ';
            for (var i=0; i<data.length;i++)
              controlL+= data[i].idControlL;
          $("#idControlL").html(controlL);
          var campo = $('#idControlL').text();
          callback(controlL); 
          }
        });

     };

     function valorid(valor){

          acciones(valor);
     };

      function acciones(valor){

          var valor1 = valor;
          console.log(valor1);
          $.ajax({
          type:'GET',
          url:'{{url('acciones')}}'+'/'+valor1,
          beforeSend: function () {
                        $("#productos").html("Procesando, espere por favor...");
                },
          success: function(data){
            console.log(data);
            var producto_select ='<option value="">Seleccione Accion</option>';
            for (var i=0; i<data.length;i++)
              producto_select+='<option value="'+i+'">'+data[i].acciones+'</option>';
            $("#productos").html(producto_select);
            console.log(producto_select);

          }
        });

      };
      </script>

@endsection