@extends('home.layout')


@section('homecontentResposnive')



<div class="app-page" data-page="main">
    <div class="app-content" data-no-scroll>
      <style type="text/css">
  .round{
    height: 372px;
    border-radius: 92%/28%;
  }
  .round2{
    position: relative;
  }
  .round2 img{
    right: -62px;
    position: absolute;
    width: 210px;
    top: 36px;
  }
  #maincontainer{
    margin-top: 0;
  }
  .latestgamescontent p{
    font-family: 'Work Sans',Helvetica,Arial,sans-serif;
    color: #D8B472;
    font-size: 19px;
    text-align: center;
    font-weight: 700;
    margin-top: -10px;
    margin-bottom: 6px;
    text-shadow: 0px 1px 2px rgb(99, 66, 7);
  }
  .latestgamescontent .inner{
    padding:0;
  }
  .latestgamescontent .inner img{
        border-radius: 1px;
    margin-bottom: -6px;
  }
  @media(min-width: 360px){
  .round2 img{
    right: -69px;
    position: absolute;
    width: 230px;
    top: 19px;
  }
}

.carousel {
    overflow: hidden;
    position: relative;
    width: 100%;
    height: 281px;
    -webkit-perspective: 500px;
    perspective: 500px;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
}
 
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 110%;
      margin: auto;
  }
  </style>

 <div id="maincontainer">


<div class="container">

<div id="myCarousel" class="carousel slide">
    <div class="carousel-inner">
       {{ $isFirst=true }}
        @foreach($home_images_all as $image) 
            <div class="item{{ $isFirst ? ' active' : '' }}">
              <a href="{{ $image->link }}">
               <img src="{{ url('uploads').'/'.$image->image}} " />
               </a>
           </div>
        {{ $isFirst=false }}
        @endforeach
    </div>
    <!-- Carousel nav --> 
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
 <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

  
    </div>

    
  </div>
</div>


<!-- 
  <div class="carousel carousel-slider" id="myCarousel" >

   @foreach($home_images_all as $images) 
   <div class="carousel-item"><img src="{{ url('uploads').'/'.$images->image}} "  > <a class="testingBtn" href="{{ $images->link }}" style="position: absolute;z-index:100;top:0;pointer-events: all;">TEst </a> </div>

   <a class="carousel-item" href="#one!"><img src="http://susanwins.com/uploads/86112_foxycasino01_763x364.jpg"></a>
   <a class="carousel-item" href="#two!"><img src="http://susanwins.com/uploads/60362_ladbrokes_763x364_uk.jpg"></a>
   <a class="carousel-item" href="#three!"><img src="http://susanwins.com/uploads/83381_mrgreen_763x364.jpg"></a>
   <a class="carousel-item" href="#four!"><img src="http://susanwins.com/uploads/57363_foxycasino02_763x364.jpg"></a>


   @endforeach 
  </div> -->
      



      <div class="innerfirst"> 

  
             
   
       <div id="playbig">
            
             @if(isset($user))
                <a class="button pink glass test"> Welcome! </a>
             @else
               <a href="{{ url('/why') }}" class="button pink glass"> Join my Clubhouse! </a>
             @endif             
            
          </div>     
   
        <div class="thickgolddivider">
          <p> Whatever your mood, there's a game for you...  </p>
        </div>

          <div id="categoryContainer">
         
            <div class="categories">
              <div class="row no-gutters">

              <ul class="row gameList">
                 @foreach($category_randomizer as $key => $value)

                    @if(($key) % 5 == 0)

                      <div class="col s4" style="padding:0;">
                    @endif
                    {!! $value !!}
                    @if(($key+1) % 5 == 0)
                      </div>
                    @endif
                    @endforeach
              </ul>            
              </div>
            </div>
          </div>    

        <div class="bottomads">
          <img src="http://susanwins.com/uploads/60664_mrgreen_743x448_czech.jpg" alt="">
        </div>    
<!--         <div class="biggestwins">
            <div class="inner">
              <h2> My Biggest Wins </h2>
            </div>
        </div>              
        <div class="biggestwinscontent">
          <img src="http://susanwins.com/uploads/98317_starscape.jpg" />
        </div> -->
        <div class="latestgames"></div>
        <div class="latestgamescontent">
        <p> Top Rated Games </p>
          <div class="inner">              
              <div class="row">

                 
                  @foreach($posts as $k=> $post)
                   {{--  @if(($k) % 5 == 0) --}}

                      <div class="col s4" style="padding:1px;">
                      {{--   @endif --}}

                          <a href="{{url('')}}/{{$post->slug}}">                  
                            <img src="{{url('uploads')}}/{{$post->thumb_feature_image}}">
                          </a>

                          {{-- @if(($k+1) % 5 == 0) --}} 
                      </div>
                            {{-- @endif --}}
                       @endforeach                     
              </div>
          </div>
        </div>
        <div class="bottomads">
          <img src="http://susanwins.com/uploads/60362_ladbrokes_763x364_uk.jpg" alt="">
        </div>
       
      </div>

          <p class="terms">
            <a href="#">Terms &amp; Conditions</a> <a href="#"> Privacy Policy </a> Gambling is for over 
            <br /> <img src="http://susanwins.com/uploads/48153_18-logo.gif" class="eighteen">  <a href="#"> <img src="http://susanwins.com/uploads/63793_gambleaware.gif" class="gambleaware"> </a> <br> 
            <br /><b>Copyright © 2016 SusanWins</b>
          </p>
     

</div>
    </div>
</div>

@endsection

@section('app-js')


  <script>
       $(document).on('ready', function(){


            $('.app-page').css({ 'display' : 'block' });
            $('#mainLoading').remove();



            App.controller('main', function (page) {


              // this runs whenever a 'home' page is loaded
              // 'page' is the HTML app-page element

              $(page).on('appShow', function(){
              /* $(page).find('.carousel').carousel({
                   
                  });*/


               $(page).find('#myCarousel').bind('click.bs.carousel', function (e) {
                  console.log('slide event!');
              });
               /*
                $(page).find('#testingBtn').on('click', function(){
                  alert("Hello World");
                });
              $(page).find('#myCarousel').on('slid', function(){alert("fdsaf");});

                console.log($(page).find('#maincontainer'));

                $(page).on('click', '#maincontainer', function(){
                  alert('ye');
                });*/
              });

            });

             App.load('main');

     
               

       });
  </script>

@endsection

