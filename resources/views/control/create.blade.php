@extends('admin.layouts.app')


@section('title','Creacion de Control')


@section('content')

	{!! Form::open(['route'=>'control.store','method'=>'POST']) !!}
        
          

          <div class="form-group">
            {!! Form::label('id','Id') !!}
            {!! Form::text('idControlL',null,['id'=>'idControlL','class'=>'form-control','placeholder'=>'Ejemplo: A.5.1.1','required','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            {!! Form::label('objetivo','Objetivo')!!}
            {!! Form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'nombre','required','style' => 'width:350px']) !!}
          </div>

		      <div class="form-group">
            {!! Form::label('control','Control') !!}
            {!! Form::textArea('descripcion',null,['id'=>'descripcion','class'=>'form-control','placeholder'=>'descripcion','required','style' => 'width:350px']) !!}
          </div>
          
          <div class="form-group">
            {!! Form::label('acciones','Acciones') !!}
            {!! Form::textArea('acciones',null,['class'=>'form-control','placeholder'=>'Acciones','style' => 'width:350px']) !!}
          </div>

          <div class="form-group">
            <textarea name="idAccion" id="idAccion" class="form-control" style="display:none"></textarea>
          </div>

  
          <div class="form-group">
                {!! Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
          </div>

   	{!! Form::close() !!}

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script>

      $("#idControlL").change(function(){
          var valor = $(this).val();
          obtenerid(valor);
      }); 


      function obtenerid(valor,callback){

        var id = valor;

        $.ajax({
          type:'GET',
          url:'{{url('obtenerid')}}'+'/'+id,
          beforeSend: function () {},
          success: function(data){
            var controlL = ' ';
            var suma  = 0;
            var ultimo  =' ';

            for (var i=0; i<data.length;i++)
              controlL+= data[i].idAccion;
              ultimo = parseInt(controlL.charAt(controlL.length-1));
              if (ultimo>0){
                suma += ultimo+1;
              }else{
                suma = 1;
              }
             // console.log(suma);
             var sum = id+'.'+suma;
              $("#idAccion").html(sum);
          }
        });

     };
    </script>

@endsection