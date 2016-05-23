@extends('home.layout')


@section('homecontentResposnive')

<div class="app-page" data-page="main">
    <div class="app-content" data-no-scroll>
      <style type="text/css">
  #planeMachine1, #planeMachine2, #planeMachine3{
        height: 116px;
  }
  .round{
    height: 372px;
    border-radius: 92%/28%;
  }
  .round2{
    position: relative;
  }
  .round2 img{
    right: -50px;
    position: absolute;
    width: 210px;
  }
  #maincontainer{
    margin-top: 55px;
  }
  </style>


<div class="round ellipse">
  <div class="round2 ellipse">
    <h1> Hi! I'm Susan and I LOVE playing slots! </h1>
    <img src="http://susanwins.com/images/single-susan.png">
    <ul>
      <li> Find Amazing Slot Games </li>
      <li> Join my FREE members club </li>
      <li> Win Fantastic Prizes! </li>
    </ul>
  </div>  
</div>

<div id="maincontainer">

      <div class="innerfirst"> 

  
             
   
       <div id="playbig">
            <a id="winwinwin3" class="button pink glass"> Join my Clubhouse! </a>         
          </div>     
   
        <div class="thickgolddivider">
          <p> Know what you like? Check the categories below! </p>
        </div>

          <div id="categoryContainer">
            <div class="goldborder g1"></div>
            <div class="goldborder g2"></div>
            <div class="categories">
              <div class="row no-gutters">

              <ul class="row gameList">
                 @foreach($category_randomizer as $key => $value)

                    @if(($key) % 5 == 0)

                      <div class="col s4">
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
          <img src="http://a1.mzstatic.com/us/r30/Purple/v4/e1/e7/c6/e1e7c6c5-8ce5-9a7b-8236-695ac0eb0168/screen520x924.jpeg" alt="">
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
          <div class="inner">
              <div class="row">

               @foreach($posts as $k=> $post)
                    @if(($k) % 5 == 0)

                      <div class="col s6">
                        @endif

                          <a href="{{url('')}}/{{$post->slug}}">                  
                                        <img src="{{url('uploads')}}/{{$post->thumb_feature_image}}">
                                      </a>

                  @if(($k+1) % 5 == 0)
                      </div>
                    @endif
               @endforeach
               <!--  <div class="col s6">
                             <img src="http://susanwins.com/uploads/31332_sunset-beach.jpg" alt="">
                             <img src="http://susanwins.com/uploads/21698_ice-hokey.jpg" alt="">
                             <img src="http://susanwins.com/uploads/30686_hot-gems.jpg" alt="">
                             <img src="http://susanwins.com/uploads/95958_la-chatte-rouge.jpg" alt="">
                             <img src="http://susanwins.com/uploads/92183_jungle-boogie.jpg" alt="">
                           </div>     
                           <div class="col s6">
                             <img src="http://susanwins.com/uploads/80031_azteca.jpg" alt="">
                             <img src="http://susanwins.com/uploads/40393_monroe.jpg" alt="">
                             <img src="http://susanwins.com/uploads/22611_spamalot.jpg" alt="">
                             <img src="http://susanwins.com/uploads/57127_luckypanda.jpg" alt="">
                             <img src="http://susanwins.com/uploads/11356_neptunes-kingdom.jpg" alt="">
                           </div> -->            
              </div>
          </div>
        </div>
        <div class="bottomads">
          <img src="http://a1.mzstatic.com/us/r30/Purple/v4/e1/e7/c6/e1e7c6c5-8ce5-9a7b-8236-695ac0eb0168/screen520x924.jpeg" alt="">
        </div>
        <div class="footer"></div>
      </div>
</div>
    </div>
</div>

@endsection

@section('app-js')
  <script>
       $(document).on('ready', function(){

             App.load('main');

       });
  </script>

@endsection

