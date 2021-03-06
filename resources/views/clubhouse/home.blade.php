@extends('clubhouse.layout')




@section('page-title', 'Home')


 @section('switch-button')
 	  <button class="categ-button"> <a href="{{ url('logout') }}">Logout</a></button>
@endsection

@section('background-content')

<style type="text/css">

.as ul li a {
    display: block;
    width: 190px;
    height: 190px;
    overflow: hidden;
    border-radius: 50%;
    border: 3px solid #F3F3F3;
	-moz-box-shadow: 0 0 19px 0 #000;
	-webkit-box-shadow: 0 0 19px 0 #000;
	box-shadow: 0 0 19px 0 #000;
}
.as ul li{
	position: absolute;
}
.as ul li p{
	background: rgb(207,11,11);
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2NmMGIwYiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNhNTA2MDYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  rgba(207,11,11,0.96) 0%, rgba(165,6,6,0.96) 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(207,11,11,1)), color-stop(100%,rgba(165,6,6,0.96)));
	background: -webkit-linear-gradient(top,  rgba(207,11,11,0.96) 0%,rgba(165,6,6,0.96) 100%);
	background: -o-linear-gradient(top,  rgba(207,11,11,0.96) 0%,rgba(165,6,6,0.96) 100%);
	background: -ms-linear-gradient(top,  rgba(207,11,11,0.96) 0%,rgba(165,6,6,0.96) 100%);
	background: linear-gradient(to bottom,  rgba(207,11,11,0.96) 0%,rgba(165,6,6,0.96) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cf0b0b', endColorstr='#a50606',GradientType=0 );

	position: absolute;
    z-index: 2;
    color: #fff;
    font-family: 'Work Sans';
    font-weight: 500;
    font-size: 18px;
    padding: 9px 20px;
    border-radius: 30px;
	top: 145px;
    left: 100px;
    width: 170px;
    text-align: center;

    -moz-box-shadow: 0 0 11px -5px #000;
	-webkit-box-shadow: 0 0 11px -5px #000;
	box-shadow: 0 0 11px -5px #000;

}
.as ul li p a{
	border: none;
  border-radius: 0;
  width: auto;
  height: auto;
  box-shadow: 0 0 0 0;
  text-decoration: none;
  color: #fff;
  overflow: initial;
}
.as ul li.profile{
	left: 500px;
    top: 60px;
}
.as ul li.chat{
	top: 360px;
    left: 480px;
}
.as ul li.slot{
	top: 330px;
    left: -60px;
}
.as ul li.prize{
    left: 990px;
    top: 285px;
}
.as ul li a{
	position: relative;
}
.arrowselection img{
	position: absolute;
    right: 26px;
    bottom: 0px;
    width: auto!important;
}


@media(max-width: 1366px){
  #roombg{
     top: -30px;
      left: -100px;
      width: 110%;
  }
  
  .as ul li p{
    top: 110px;
    left: 90px;
  }
  .as ul li a{
  	width: 150px;
    height: 150px;
  }
  .as ul li a img{
  	 width: 150px;
  }
  .arrowselection img{
  	right: 22px;
    bottom: -1px;
    width: 25px!important;
  }
  .as ul li.slot {
    top: 220px;
    left: -148px;
  }
  .as ul li.profile {
    left: 238px;
    top: -20px;
  }
  .as ul li.chat {
    top: 220px;
    left: 240px;
  }
  .as ul li.prize {
    left: 680px;
    top: 200px;
 }
}




</style>
  
 

		<div class="bgwrapper">
        
       @if(!$user->completed_home_tour)

        @section('guide-susan')
          <div class="guideSusanContainer">
          <img src="{{url('images')}}/guide-susan.png" class="guide-susan">
      </div>
        @endsection

        <ul class="cd-tour-wrapper homePage">
          <li class="cd-single-step no-pulse">

            <div class="cd-more-info">
              <h2> Welcome to my house! </h2>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi alias animi molestias in, aperiam.</p>
              <img src="img/step-1.png" alt="step 1">
            </div>
          </li> <!-- .cd-single-step -->
          <li class="cd-single-step">
            <span>Step 1</span>

            <div class="cd-more-info top">
              <h2> The Slots Room</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi alias animi molestias in, aperiam.</p>
              <img src="img/step-1.png" alt="step 1">
            </div>
          </li> <!-- .cd-single-step -->

          <li class="cd-single-step">
            <span> Your Profile Room </span>

            <div class="cd-more-info left">
              <h2>Step Number 2</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quasi in quisquam.</p>
              <img src="img/step-2.png" alt="step 2">
            </div>
          </li> <!-- .cd-single-step -->

          <li class="cd-single-step">
            <span> The Chatroom</span>

            <div class="cd-more-info left">
              <h2>Step Number 3</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio illo non enim ut necessitatibus perspiciatis, dignissimos.</p>
              <img src="img/step-3.png" alt="step 3">
            </div>
          </li> <!-- .cd-single-step -->

          <li class="cd-single-step">
            <span> The Prize Room </span>

            <div class="cd-more-info left">
              <h2>Step Number 3</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio illo non enim ut necessitatibus perspiciatis, dignissimos.</p>
              <img src="img/step-3.png" alt="step 3">
            </div>
          </li> <!-- .cd-single-step -->

        </ul> <!-- .cd-tour-wrapper -->

  @endif

			<img id="roombg" src="{{url('images/clubhouse')}}/front-house.png" alt="">		      		   
		  
			<div class="as" style="position:absolute;top:150px;left:220px;">
				<ul>
					<li class="profile">
						<a href="{{ url('clubhouse/profile') }}">
							<img src="http://susanwins.com/images/clubhouse/profileroom-thumb.gif" alt="">
						</a>
						<p> <a href="{{ url('clubhouse/profile') }}"> Profile Room </a> </p>
						<div class="arrowselection"><img src="http://susanwins.com/images/clubhouse/arrow-selection.gif"></div> 	
					 </li>
					 <li class="chat">
						<a href="{{ url('clubhouse/chatroom') }}">
						
							<img src="http://susanwins.com/images/clubhouse/chatroom-thumb.gif" alt="">							
						</a>
						<p> <a href="{{ url('clubhouse/chatroom') }}">Chatroom </a></p>
						<div class="arrowselection"><img src="http://susanwins.com/images/clubhouse/arrow-selection.gif"></div> 	
					 </li>
					 <li class="prize">
						<a href="{{ url('clubhouse/prizeroom') }}">
							<img src="http://susanwins.com/images/clubhouse/prizeround.png" alt="">							
						</a>
						<p> <a href="{{ url('clubhouse/prizeroom') }}">Prize Room </a></p>
						<div class="arrowselection"><img src="http://susanwins.com/images/clubhouse/arrow-selection.gif"></div> 	
					 </li>
					 <li class="slot">
						<a href="{{ url('clubhouse/slotsroom') }}">
							<img src="http://susanwins.com/images/clubhouse/slotsroom-thumb.gif" alt="" >							
						</a>
						<p> <a href="{{ url('clubhouse/slotsroom') }}">Slots Room </a></p>
						<div class="arrowselection"><img src="http://susanwins.com/images/clubhouse/arrow-selection.gif"></div> 	
					 </li>
				</ul>
			</div>

		</div>
    


@endsection