@extends('home.layout')

@section('homecontentResposnive')

<style type="text/css">
  body {
        margin-top: 100px;
    }
  img{width: 100%;}
  .container_24{display: none;}

  .homepageReel{
    margin-top: 0;
    background: none;
  }
 
   #playbig {
    position: absolute;
    right: 125px;
    top: 540px;
    margin-left: 0;
  }
  @media(max-width: 1366px){
    .container {
        width: 1085px;
    }

    .topReel{
      width: 100%;
    }
    .categoryReel{
      top: 643px;
      width: 1106px;
    }
    .homepageReel .headText2{
      font-size: 60px;
      padding-top: 47px;
    }
    .headText span, .headText2 span{
      font-size: 107px;
      margin-right: 90px;
    }
    .homepageReel .susan{
      width: 273px;
      z-index: 2;
      right: 67px;
      top: -7px;
    }
    .homeText{
      margin-top: 88px;
      margin-bottom: 8px;
    }
    .homeText2{
      top: 646px;
      left: 221px;
    }
    .categoryMain{
      padding: 35px 52px 0px 49px;
    }
    .categories{
      padding:10px 10px 57px 10px;
    }
    .reels {
        padding: 0 80px 0 84px;
        margin-top: 53px;
        height: 259px;
    }
    #playbig{
        top: 510px;
    }
    .categAds1366{
      padding-right: 0;
    }

    .bigwinsMainReel{
      top: 1658px;
      left: 1px;
      width: 1108px;
    }
    .bigwinsMain {
      padding: 102px 0px 0 58px;
    }
    .bigwinsMain ul li a {
        height: 253px;
    }
    .latestMain{
      margin: 68px 0px 0 9px;
    }
    .latestMain ul li a{
      height: 127px;
    }
    .footerReel{
          width: 101%;
    }
  }
  @media(max-width: 1199px){
     #playbig a {
        width: 140px;
        height: 77px;
    }
    #playbig .button {
        font: 37px/1em 'Work Sans',sans-serif;
        padding: .4em .6em;
         font-weight: 600;
    }
    #playbig {
        right: 95px;
        top: 482px;
    }
    .homepageReel{
      height: auto;
    }
  }
  @media(max-width: 991px){
    #playbig {
        right: 51px;
        top: 362px;
    }
    #playbig a {
        width: 120px;
        height: 65px;
    }
    #playbig .button {
        font: 33px/1em 'Work Sans',sans-serif;
        font-weight: 600;
    }
  }

</style>

<div class="container-fluid">
  <div class="container"  style="position:relative;">
    <div class="row">
      <div class="col-lg-24">

        <img src="{{ asset('images/responsive/smallerHomepageReel.jpg')}}" class="topReel" />
        <img src="{{ asset('images/responsive/categoryReel4.jpg')}}"  class="categoryReel"/>
        <img src="{{ asset('images/responsive/bigwinsReel.png')}}" class="bigwinsMainReel">        
        <img src="{{ asset('images/responsive/footerReel.png')}}" class="footerReel">

         <div class="col-lg-24">
              <div class="homepageReel">
                 <img src="{{ asset('images/responsive/withtdog.png') }}" class="susan">
                <h1 class="headText2"> Hi! I'm Susan 
                  <span> Let's Play </span> 
                </h1>  
                <div class="reels">
                  <div class="row no-gutter">

                    <?php 
                      $counter = 1;
                      $segment = ceil($reel_posts_count) / 4;
                      $counter1 = 0;
                      $counter2 = 0;
                      $counter3 = 0;
                      $counter4 = 0;
                    ?>

                    @foreach($reel_posts as $reel_post)

                      @if($counter == 1)
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div id="planeMachine2">
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter1++; ?>
                      @elseif($counter < $segment)
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter1++; ?>
                      @elseif($counter == $segment)
                          </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div id="planeMachine3">
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter2++; ?>
                      @elseif($counter < $segment*2 && $counter > $segment)
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter2++; ?>
                      @elseif($counter == $segment*2)
                          </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div id="planeMachine4">
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter3++; ?>
                      @elseif($counter < $segment*3 && $counter > $segment && $counter > $segment*2)
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter3++; ?>
                      @elseif($counter == $segment*3)
                          </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                          <div id="planeMachine5">
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div>
                            <?php $counter4++; ?>
                      @elseif($counter < $segment*4 && $counter > $segment && $counter > $segment*2 && $counter > $segment*3)
                            <div class="text-center">
                              <img src="{{url('')}}/uploads/{{$reel_post->reels_image}}">                              
                            </div> 
                            <?php $counter4++; ?>
                      @endif

                      <?php $counter++; ?>

                    @endforeach
                          </div>
                          </div>
                  </div>
                </div>

               


              </div>
              <div class="categoryMain">
               

                 <div id="playbig">
                  <a id="gogogo2" class="button pink serif round glass"> Spin! </a>         
                </div>

                   <h6 class="homeText"> Know what you like? Check the categories below! </h6>
                   <h6 class="homeText2"> Know what you like? Check the categories below! </h6>

                <div class="col-xs-24 col-sm-19 col-md-19 col-lg-19 categoryCol">

                  <div class="categories">

                    <ul>
                    @foreach($category_randomizer as $key => $value)
                    {!! $value !!}
                    @endforeach
                      </ul>
                  </div>
                </div>
              
              <!-- Adding Dynamic image-->
            
           <div class="col-xs-24 col-sm-5 col-md-5 col-lg-5 categAds1366">
               <img src="{{ asset('images/responsive/categoryReelDivider.png') }}" class="homeCategoryDivider">
              <!--  <div class="categAds">
                <a href="#">                      
                  <img src="http://susanwins.com/images/homepage/home-categ-ad1.jpg">
                  <div class="questionMarkHover hint--top hint--bounce hint--rounded" data-hint="Click to know more"> ? </div>
                </a>
                <a href="#">                      
                  <img src="http://susanwins.com/images/homepage/home-categ-ad2.jpg">
                  <div class="questionMarkHover hint--top hint--bounce hint--rounded" data-hint="Click to know more"> ? </div>
                </a>
              </div> -->

               <div class="categAds">
                  @foreach($home_image_headers as $home_image)
                 <a href="#">                      
                   <img src="{{ $home_image->image}}">
                   <div class="questionMarkHover hint--top hint--bounce hint--rounded" data-hint="Click to know more"> ? </div>
                 </a>
                 @endforeach
               </div>

             </div>
              </div>
              <div class="bigwinsMain">
                <ul>
                  @foreach($biggest_wins as $b)
                       <li class="refCell"> 
                         <img class="info" src="http://susanwins.com/uploads/24372_goldcoins.png" alt=""> 
                         <a href="{{ url().'/'.$b->post->slug }}"> 
                           <img src="{{ $b->custom_image ? url('uploads').'/'.$b->custom_image : url('uploads').'/'.$b->post->thumb_feature_image }}" /> 
                         </a>
                          <a href="{{ url().'/'.$b->post->slug }}" class="info2">
                                  <p> Total Win:</p>
                                  <h3> £{{ $b->total_wins }} </h3>
                                  <button class="yellow"> Play Now! </button>
                         </a>
                     </li>
                  @endforeach
                </ul>
              </div>
               <div class="latestMain">
                  <div class="col-xs-24 col-sm-18 col-md-18 col-lg-18">  
                      <div class="gameList">
                        <div class="inner">
                      <!--     <img src="http://susanwins.com/images/homepage/latestGamesSusan.png" class="susan"> -->
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
                  </div>
  

                <!-- Adding Dynamic image-->

                <div class="col-xs-24 col-sm-5 col-md-5 col-lg-5">  
                    <div class="ads2">
                    <!--   <a href="">
                      <img src="http://susanwins.com/images/homepage/ad2-ad1.png">
                      <div class="questionMarkHover hint--top hint--bounce hint--rounded" data-hint="Click to know more"> ? </div>
                    </a>
                    <a href="">
                      <img src="http://susanwins.com/images/homepage/ad2-ad1.png">
                      <div class="questionMarkHover hint--top hint--bounce hint--rounded" data-hint="Click to know more"> ? </div>
                    </a>
                    <a href="">
                      <img src="http://susanwins.com/images/homepage/ad2-ad1.png">
                      <div class="questionMarkHover hint--top hint--bounce hint--rounded" data-hint="Click to know more"> ? </div>
                    </a> -->
                    @foreach($home_image_footers as $home_image)
                     <a href="#">                      
                       <img src="{{ $home_image->image}}">
                       <div class="questionMarkHover hint--top hint--bounce hint--rounded" data-hint="Click to know more"> ? </div>
                     </a>
                   @endforeach
                    </div>
                </div> 

              </div>
        </div>

      </dov>
    </div>
  </div>  
</div>


@endsection


@section('footer_scripts')



  

   <script>

    $(document).ready(function(){

      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
      page = 1;

    // var images2 = new Array();

      function preload() {
        // console.log(preload.arguments[0]);
        for (i = 0; i < preload.arguments.length; i++) {
          var images2 = new Image();
          images2.src = preload.arguments[i];
        }
      }


      $(function(){

          var $divView = $('div.view');
          var innerHeight = $divView.removeClass('view').height();
          $divView.addClass('view');
            
          $('div.slide').click(function() {
              $('div.view').animate({
                height: (($divView.height() == 450)? innerHeight  : "450px")
              }, 500);
              return false;
          });

        var options = {
          horizontalPixelsCount: 90,
          verticalPixelsCount: 5,
          pixelSize: 5,
          disabledPixelColor: '#080808',
          enabledPixelColor: '#ff0101',
          pathToPixelImage: 'http://susanwins.com/uploads/43978_pixel.png',
          stepDelay: 40,
          // only for canvas
          backgroundColor: '#080808',
          // only for canvas
          pixelRatio: 0.7,
          runImmidiatly: true
        };

      });


    });



   $(window).bind("load", function() {
        
        new_blah1 = 0;
        new_blah2 = 0;
        new_blah3 = 0;
        new_blah4 = 0;

        var machine1 = $("#planeMachine2").slotMachine({
          active  : 0,
          delay : 500,
          randomize:function(activeElementIndex){
              return new_blah1;
          }
        });

        var machine2 = $("#planeMachine3").slotMachine({
          active  : 0,
          delay : 500,
          randomize:function(activeElementIndex){
              return new_blah2;
          }
        });

        var machine3 = $("#planeMachine4").slotMachine({
          active  : 0,
          delay : 500,
          randomize:function(activeElementIndex){
              return new_blah3;
          }
        });

        var machine4 = $("#planeMachine5").slotMachine({
          active  : 0,
          delay : 500,
          randomize:function(activeElementIndex){
              return new_blah4;
          }
        });


        function watermelon(new_blah)
        {
          return new_blah;
        }

        $("#gogogo2").click(function(){

          new_blah1++;
          new_blah2++;
          new_blah3++;
          new_blah4++; 

          if(new_blah1 == {{$counter1}})
          {
            new_blah1 = 0;
          }

          if(new_blah2 == {{$counter2}})
          {
            new_blah2 = 0;
          }

          if(new_blah3 == {{$counter3}})
          {
            new_blah3 = 0;
          }

          if(new_blah4 == {{$counter4}})
          {
            new_blah4 = 0;
          }

          machine1.shuffle(3);

          setTimeout(function(){
            machine2.shuffle(1);
          }, 500);

          setTimeout(function(){
            machine3.shuffle(2);
          }, 700);

          setTimeout(function(){
            machine4.shuffle(2);
          }, 900);

        });

        function onComplete(active){
          switch(this.element[0].id){
            case 'machine1':
              // $("#planeMachine2").text("Index: "+this.active);
              console.log('machin1');
              console.log(machine1.active);
              break;
            case 'machine2':
              // $("#planeMachine3").text("Index: "+this.active);
              break;
            case 'machine3':
              // $("#planeMachine4").text("Index: "+this.active);
              break;
            case 'machine4':
              // $("#planeMachine5").text("Index: "+this.active);
              break;
          }
        }
});
   
  </script>

@endsection

