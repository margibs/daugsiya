@extends('clubhouse.layout')




@section('page-title', 'Slots Room')


@section('scripts_here')

<link rel="stylesheet" href="{{ asset('css/rateit.css') }}">

@endsection

 @section('switch-button')
 	  <button class="categ-button"> <a href="{{ url('logout') }}">Logout</a></button>
@endsection

@section('background-content')

<style type="text/css">
	#roombg{
		top: -5px;
    	left: -11px;
		width: 106%;
	}
	.gamelist{
	  width: 680px;
	  height: 390px;
	  position: absolute;  
	  top: 226px;
      left: 657px;
	  z-index: 2;  
	  overflow: hidden;
	}
	.gamelist ul li, .gamelist ul li a{
	  display: inline-block;
	}
	.gamelist ul li{
	  width: 167px;
	}
	.gamelist ul li a img{
	  width: 100%;
	  border-radius: 3px;
	  margin: 3px;
	}
	.guideSusanContainer{
		left: 0;
	}
	@media(min-width: 1440px){
	  #roombg{
	     top: 0;
	  }	
	 
	}

	@media(max-width: 1366px){
	  #roombg{
	     top: -20px;
	     left: -40px;
	     width: 110%;
	  }	  
	  .gamelist{
	    top: 143px;
	    left: 438px;
	    height: 293px;	    
	    width: 518px;
	  }
	  .gamelist ul li {
		    width: 126px;
	  }
	  .slotsroomPage .cd-single-step:nth-of-type(1) {
		    left: 27%;
		}
	}	
	

</style>

<div class="roomNavIcons">
  <ul>
    <li> <a href="{{ url('/clubhouse/profile')}}"> <img src="http://susanwins.com/images/clubhouse/profileroom-thumb.gif" alt="" title="Profile Room">  </a> </li>
    <li> <a href="{{ url('/clubhouse/slotsroom')}}"> <img src="http://susanwins.com/images/clubhouse/slotsroom-thumb.gif" alt="" title="Slots Room">  </a> </li>
    <li> <a href="{{ url('/clubhouse/chatroom')}}"> <img src="http://susanwins.com/images/clubhouse/chatroom-thumb.gif" alt="" title="Chatroom Room">  </a> </li>
    <li> <a href="{{ url('/clubhouse/prizeroom')}}"> <img src="http://susanwins.com/images/clubhouse/prizeround.png" alt="" title="Prize Room">  </a> </li>
  </ul>
</div>

	@if(!$user->completed_slotsroom_tour)

  @section('guide-susan')
    <div class="guideSusanContainer">
    <img src="{{url('images')}}/guide-susan-left.png" class="guide-susan">
</div>
  @endsection

  <ul class="cd-tour-wrapper slotsroomPage">
    <li class="cd-single-step no-pulse">

      <div class="cd-more-info">
        <h2> Slotsroom page </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi alias animi molestias in, aperiam.</p>
        <img src="img/step-1.png" alt="step 1">
      </div>
    </li> <!-- .cd-single-step -->
    <li class="cd-single-step">
      <span>Step 1</span>

      <div class="cd-more-info left">
        <h2> Your Diary </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi alias animi molestias in, aperiam.</p>
        <img src="img/step-1.png" alt="step 1">
      </div>
    </li> <!-- .cd-single-step -->

  </ul> <!-- .cd-tour-wrapper -->

  @endif

	<div class="bgwrapper">
			<img id="roombg" src="{{url('images/clubhouse')}}/slotroom.jpg" alt="">		

			<div class="gamelist">
			  <ul>
					@foreach($posts as $post)
					        <li>           
					            <a href="{{url('')}}/{{$post->slug}}">                  
					              <img src="{{url('uploads')}}/{{$post->thumb_feature_image}}">
					            </a>
					        </li>  
					 @endforeach

			    </ul>
			</div>

	</div>

@endsection

@section('custom_scripts')

<script type="text/javascript">
	$('.gamelist ul').slimScroll({
        height: '388px'
    });
</script>

@endsection