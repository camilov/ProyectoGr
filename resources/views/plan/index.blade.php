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

	<div id="list-product">
        
    </div>
        
    <script type="text/javascript">
        
        $(document).ready(function(){
            listProduct();
        });



        $("#nuevo").click(function(event){

            document.location.href="{{route('plan.listall')}}";

        });


        var listProduct = function(){

            $.ajax({
                type:'get',
                url:'{{url('listall')}}',
                success: function(data){
                    $('#list-product').empty().html(data);
                }
            });
        }
    </script>



@endsection