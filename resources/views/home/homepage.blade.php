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
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="planeMachine2">
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/63331_we.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/54797_junglejimreels.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/20611_wildgamblerreel.jpg">
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/63331_we.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/72613_tales_of_krakow.jpg">
                              </div>
                          </div>
                    </div>          
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="planeMachine3">
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/63331_we.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/54797_junglejimreels.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/20611_wildgamblerreel.jpg">
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/63331_we.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/72613_tales_of_krakow.jpg">
                              </div>
                          </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="planeMachine4">
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/63331_we.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/54797_junglejimreels.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/20611_wildgamblerreel.jpg">
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/63331_we.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/72613_tales_of_krakow.jpg">
                              </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="planeMachine5">
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/63331_we.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/54797_junglejimreels.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/20611_wildgamblerreel.jpg">
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/63331_we.jpg">                              
                              </div>
                              <div class="text-center">
                                <img src="http://susanwins.com/uploads/72613_tales_of_krakow.jpg">
                              </div>
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
<!--                         <li><a href="http://susanwins.com/relaxingsoothing"><img src="http://susanwins.com/uploads/49793_relaxing.png"></a></li>
                    
                        <li><a href="http://susanwins.com/pirates"><img src="http://susanwins.com/uploads/70833_pirate.png"></a></li>
                    
                        <li><a href="http://susanwins.com/classic"><img src="http://susanwins.com/uploads/66321_classic.png"></a></li>
                    
                        <li><a href="http://susanwins.com/egyptian"><img src="http://susanwins.com/uploads/76342_egyptian.png"></a></li>
                    
                        <li style="position: relative; top: 10px;"><a href="http://susanwins.com/sexy"><img src="http://susanwins.com/uploads/24631_sexy.png"></a></li>
                    
                        <li><a href="http://susanwins.com/adventure"><img src="http://susanwins.com/uploads/76393_adventure.png"></a></li>
                    
                        <li><a href="http://susanwins.com/vegas"><img src="http://susanwins.com/uploads/35722_vegas.png"></a></li>
                    
                        <li><a href="http://susanwins.com/animal"><img src="http://susanwins.com/uploads/63125_animals.png "></a></li>
                    
                        <li><a href="http://susanwins.com/romance"><img src="http://susanwins.com/uploads/33566_romantic.png"></a></li>
                    
                        <li><a href="http://susanwins.com/myths-legends"><img src="http://susanwins.com/uploads/26569_myths.png"></a></li>
                    
                        <li><a href="http://susanwins.com/movie"><img src="http://susanwins.com/uploads/18354_movies.png"></a></li>
                    
                        <li><a href="http://susanwins.com/party"><img src="http://susanwins.com/uploads/30641_party.png"></a></li>
                    
                        <li><a href="http://susanwins.com/tropicaljungle"><img src="http://susanwins.com/uploads/41272_tropical.png"></a></li>
                    
                        <li><a href="http://susanwins.com/celebs"><img src="http://susanwins.com/uploads/49000_celebs.png"></a></li>
                    
                        <li><a href="http://susanwins.com/sea-2"><img src="http://susanwins.com/uploads/42258_sea.png"></a></li>
                    
                        <li><a href="http://susanwins.com/sorcery"><img src="http://susanwins.com/uploads/88737_sorcery.png"></a></li>
                    
                        <li><a href="http://susanwins.com/mysterious"><img src="http://susanwins.com/uploads/32493_mystery.png"></a></li>
                    
                        <li><a href="http://susanwins.com/television"><img src="http://susanwins.com/uploads/28435_television.png"></a></li>
                    
                        <li><a href="http://susanwins.com/seasonal"><img src="http://susanwins.com/uploads/52845_seasonal.png"></a></li>
                    
                        <li><a href="http://susanwins.com/comic"><img src="http://susanwins.com/uploads/27452_comic.png "></a></li>
                    
                        <li><a href="http://susanwins.com/cowboywestern"><img src="http://susanwins.com/uploads/71559_cowboy.png"></a></li>
                    
                        <li><a href="http://susanwins.com/superheroes"><img src="http://susanwins.com/uploads/28203_superhero.png"></a></li>
                    
                        <li><a href="http://susanwins.com/fantasy"><img src="http://susanwins.com/uploads/48873_fantasy.png"></a></li>
                    
                        <li><a href="http://susanwins.com/medieval"><img src="http://susanwins.com/uploads/43173_medieval.png"></a></li>
                    
                        <li><a href="http://susanwins.com/cute"><img src="http://susanwins.com/uploads/63299_cute.png"></a></li>

                         <li><a href="http://susanwins.com/relaxingsoothing"><img src="http://susanwins.com/uploads/49793_relaxing.png"></a></li>
                    
                        <li><a href="http://susanwins.com/pirates"><img src="http://susanwins.com/uploads/70833_pirate.png"></a></li>
                    
                        <li><a href="http://susanwins.com/classic"><img src="http://susanwins.com/uploads/66321_classic.png"></a></li>
                    
                        <li><a href="http://susanwins.com/egyptian"><img src="http://susanwins.com/uploads/76342_egyptian.png"></a></li> -->

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
      page = 1,
      random_order_number = '{{$random_order_number}}';


   
//OLD REELS
      // var reels_image = [
      //       @foreach($reel_posts as $reel_post)
      //         '<div class="slotwrapper"><div class="details"><a href="{{url('')}}/{{$reel_post->slug}}" class="img-shadow"><img  src="{{url('uploads')}}/{{$reel_post->reels_image}}"></a></div></div>',
      //       @endforeach
      //   ];

      // var reel_post_buffers = 
      //     [
      //       @foreach($reel_post_buffers as $reel_post_buffer)
      //         '<div class="slotwrapper"><div class="details"><a href="{{url('')}}/{{$reel_post_buffer->slug}}" class="img-shadow"><img  src="{{url('uploads')}}/{{$reel_post_buffer->reels_image}}"></a></div></div>',
      //       @endforeach
      //       @foreach($reel_posts as $reel_post)
      //         '<div class="slotwrapper"><div class="details"><a href="{{url('')}}/{{$reel_post->slug}}" class="img-shadow"><img  src="{{url('uploads')}}/{{$reel_post->reels_image}}"></a></div></div>',
      //       @endforeach
      //     ];

      //     <?php $count_yeah = 1; ?>

      //     preload(
      //       @foreach($reel_post_buffers as $reel_post_buffer)
      //         '{{url('uploads')}}/{{$reel_post_buffer->reels_image}}',
      //       @endforeach
      //       @foreach($reel_posts as $reel_post)
      //         <?php 
      //           if($count_yeah < 20) {
      //         ?>
      //         '{{url('uploads')}}/{{$reel_post->reels_image}}',
      //         <?php 
      //           }else
      //           {
      //         ?>
      //         '{{url('uploads')}}/{{$reel_post->reels_image}}'
      //         <?php 
      //         }
      //         ?>

      //         <?php $count_yeah++; ?>
      //       @endforeach

      //     );


      // var buffer_more = reels_image;

      // var ezslot = new EZSlots("ezslots",{"reelCount":4,"winningSet":[0,1,2,3],"symbols":reels_image,"height":287,"width":201});
      


      //   $("#gogogo2").click(function(){

      //     $('#ezslots').html('');
      //     if(page == 1)
      //     {
      //       var ezslot = new EZSlots("ezslots",{"reelCount":4,"winningSet":[0,1,2,3],"symbols":reel_post_buffers,"height":287,"width":201});
      //     }
      //     else
      //     {
      //       var ezslot = new EZSlots("ezslots",{"reelCount":4,"winningSet":[4,5,6,7],"symbols":reel_post_buffers,"height":287,"width":201});
      //     }
          

      //     ezslot.win();
      //     $("#gogogo2").css({
      //       'pointer-events':'none'
      //     });

      //     function pointevent(){
      //       $("#gogogo2").css({
      //         'pointer-events':'auto'
      //       });
      //     }
      //     setTimeout(pointevent, 2550);

      //     $.ajax({
      //       type: 'post',
      //       url: "{{url('home/ajax_get_reels_post')}}",
      //       data: {_token: CSRF_TOKEN,'page' : page,'random_order_number' : random_order_number}, 
      //       success: function(response)
      //       {
              
      //         var parsed = JSON.parse(response),
      //         number_of_object = Object.keys(parsed).length;

      //         reel_post_buffers = [];


      //         if(number_of_object < 4)
      //         {
      //           // console.log('less than 4');
      //           reel_post_buffers = reels_image;
      //           page = 1;
      //         }
      //         else
      //         {
      //           // console.log('go on');
      //           reel_post_buffers.push(buffer_more[0]);
      //           reel_post_buffers.push(buffer_more[1]);
      //           reel_post_buffers.push(buffer_more[2]);
      //           reel_post_buffers.push(buffer_more[3]);

      //           $.each( parsed, function( index, obj){

      //             reel_post_buffers.push('<div class="slotwrapper"><div class="details"><a href="{{url('')}}/'+obj.slug+'"><img src="{{url('uploads')}}/'+obj.reels_image+'"></a></div></div>');
      //             preload('{{url("uploads")}}/'+obj.reels_image);
      //           });
      //           page++;

      //         }

      //       }
            
      //     });
       
      //   });

        // END OLD REELS

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
   
        var machine1 = $("#planeMachine2").slotMachine({
          active  : 0,
          delay : 500
        });

        var machine2 = $("#planeMachine3").slotMachine({
          active  : 1,
          delay : 500
        });

        var machine3 = $("#planeMachine4").slotMachine({
          active  : 2,
          delay : 500
        });

        var machine4 = $("#planeMachine5").slotMachine({
          active  : 4,
          delay : 500
        });

        $("#gogogo2").click(function(){

          // machine1.next();
          // machine2.next();
          // machine3.next();
          // machine4.next();
          machine1.shuffle(3, function(){
            machine1.destroy();
            machine1 = $("#planeMachine2").slotMachine({
              active  : 1,
              delay : 500
            });
            machine1.next();
          });

          setTimeout(function(){
            machine2.shuffle(1, function(){
            machine2.destroy();
            machine2 = $("#planeMachine3").slotMachine({
              active  : 2,
              delay : 500
            });
            machine2.next();
          });
          }, 500);

          setTimeout(function(){
            machine3.shuffle(5, function(){
            machine3.destroy();
            machine3 = $("#planeMachine4").slotMachine({
              active  : 3,
              delay : 500
            });
            machine3.next();
          });
          }, 700);

          setTimeout(function(){
            machine4.shuffle(2, function(){
            machine4.destroy();
            machine4 = $("#planeMachine5").slotMachine({
              active  : 4,
              delay : 500
            });
            machine4.next();
          });
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

