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
            {!! Form::select('idControl',$control,null,['class'=>'form-control','placeholder'=>'Seleccione control','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('accion','Accion') !!}
            {!! Form::select('acciones',['class'=>'form-control','placeholder'=>'Seleccione control','required','style' => 'width:350px']) !!}
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
         
          <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
          <script>
          
          $(document).ready(function(){
            $("#idControl").change(function(){
                var valor = $(this).val();
                console.log(valor):
               // acciones(valor);
                }); 
           });


           /* function  acciones(valor){

              var valor1 = valor;

              $.ajax({
                type:'GET',
                url:'{{url('acciones')}}'+'/'+valor1,
                beforeSend: function () {
                          $("#Acciones").html("Procesando, espere por favor...");
                    },
                success: function(data){
                $('#Acciones').empty().html(data);
                }
              });
            }*/
           /* $(document).ready(function(event){
              $("#idControl").change(function(){
                $.get("acciones/"+event.target.value+"",function(response,state){
                  console.log(reponse);
                });
                /* $.get('controlAccion/'+valor, function(data){
                    //esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
                    console.log(data);
                    var acciones_select = '<option value="">Seleccione Accion</option>'
                    for (var i=0; i<data.length;i++)
                        acciones_select+='<option value="'+data[i].id+'">'+data[i].accion+'</option>';

                          $("#campanas").html(acciones_select);
              });
            });*/
          </script>
   	{!! Form::close() !!}


@endsection