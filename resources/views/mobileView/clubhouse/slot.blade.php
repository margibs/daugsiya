
@extends('clubhouse.layout')
  
@section('custom-styles')
@endsection
<style>	
body{
  background: #FBF4EC;
}
	#slotsList{
	    text-align: center;
    margin: 0;
    padding-bottom: 67px;
	}

	#slotsList li{
		width:48%;
		    display: inline-block;
	}

	#slotsList li a img{
		width:100%;
		border-radius: 5px;
        -moz-box-shadow: 0 0 10px -3px #000;
    -webkit-box-shadow: 0 0 10px -3px #000;
    box-shadow: 0 0 10px -3px #000;
	}
  footer ul {
    padding: 33px 0 0 0!important;
  }
  footer ul li span{
    position: static!important;
  }
</style>
 @section('navbar-title', 'Slots')
@section('content')

    @section('content-menu')
       <a href="#" class="waves-effect back_button button-collapse" data-activates="slide-out" ><i class="ion-navicon"></i>  </a>
@endsection


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

        $('.app-page').css({ 'display' : 'block' });
        $('#mainLoading').remove();

       			App.controller('main', function(page){

       				    $(page).find('#slotsList img').unveil(200);
       				    $(page).find('#slotsList img:lt(6)').trigger('unveil');
       			});
       

             App.load('main');

       });
  </script>

@endsection