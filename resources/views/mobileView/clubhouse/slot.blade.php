
@extends('clubhouse.layout')
  
@section('custom-styles')
@endsection
<style>	
	#slotsList{
		text-align: center;
	}

	#slotsList li{
		width:48%;
		    display: inline-block;
	}

	#slotsList li a img{
		width:100%;
		
	}
</style>
 @section('navbar-title', 'Slots')
@section('content')

  
   <div class="app-page" data-page="main">
<!--    <div class="app-topbar"></div> -->
  <div class="app-content" data-no-scroll>
        <ul id="slotsList">
        	@foreach($posts as $post)
					        <li>           
					            <a href="{{url('')}}/{{$post->slug}}">                  
					              <img src="{{ asset('uploads/66058_default.gif') }}" data-src="{{asset('uploads')}}/{{$post->thumb_feature_image}}">
					            </a>
					        </li>  
					 @endforeach
        </ul>
  </div>
  </div>
     

@endsection


@section('app-js')
<script src="{{ asset('js/jquery.unveil.js') }}"></script> 
  <script>
       $(document).on('ready', function(){

 
       			App.controller('main', function(page){

       				    $(page).find('#slotsList img').unveil(200);
       				    $(page).find('#slotsList img:lt(6)').trigger('unveil');
       			});
       

             App.load('main');

       });
  </script>

@endsection