@extends('clubhouse.app')


@section('content-list')

<div class="app-page" data-page="home">
    {!! csrf_field() !!}
 
  	<div class="app-content">
      <!--     <img src="{{url('images')}}/guide-susan.png" class="guide-susan">
              <div class="card-panel hoverable"> Hoverable Card Panel</div>
       -->
      <!--  <div class="row">
           <div class="col s12 m7">
             <div class="card">
               <div class="card-image">
               <img src="{{url('images/clubhouse')}}/front-house.png" alt="">  
               <img src="{{url('images')}}/guide-susan.png" class="guide-susan" height="320" >
               <span class="card-title">Card Title</span>
               </div>
              <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                I am convenient because I require little markup to use effectively.</p>
              </div>
               <div class="card-action">
                 <a href="#">This is a link</a>
               </div>
             </div>
           </div>
         </div>
       -->

       <div class="slider">
          <ul class="slides">
            <li>
               <img src="{{url('images')}}/guide-susan.png"><!-- random image -->
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
              <div class="caption left-align">
                <h3>Left Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
              <div class="caption right-align">
                <h3>Right Aligned Caption</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
            <li>
              <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
              <div class="caption center-align">
                <h3>This is our big Tagline!</h3>
                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
              </div>
            </li>
          </ul>
        </div>

         <ul class="collection">
          <li class="collection-item avatar">
            <img src="{{url('images')}}/guide-susan.png" alt="" class="circle">
            <span class="title">PROFILE</span>
            <p>First Line <br>
               Second Line
            </p>
            
            <a href="#!" class="secondary-content" id="btnSignup"><i class="material-icons">send</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle">folder</i>
            <span class="title">SLOOTS ROOM</span>
            <p>First Line <br>
               Second Line
            </p>
              <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
          </li>
          <li class="collection-item avatar">
           <!--  <img src="http://susanwins.com/images/clubhouse/arrow-selection.gif" alt="" class="circle"> -->
            <img src="{{url('images')}}/guide-susan.png" alt="" class="circle">
            <span class="title">CHAT ROOM</span>
            <p>First Line <br>
               Second Line
            </p>
               <a href="{{ url('clubhouse/chatroom') }}" class="secondary-content" data-target="chatroom"><i class="material-icons">send</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle red">play_arrow</i>
            <span class="title">PRIZE ROOM</span>
            <p>First Line <br>
               Second Line
            </p>
              <a href="#!" class="secondary-content"><i class="material-icons">send</i></a>
          </li>
        </ul>
            
            

                
    </div>    

  </div>
</div>


<!-- <div class="app-page" data-page="chatroom">
    {!! csrf_field() !!}
 
    <div class="app-content">
           <img id="roombg" width="650" src="{{url('images/clubhouse')}}/chatroom.png" alt="">  
<img class="materialboxed" width="650" src="images/sample-1.jpg">
                
    </div>    

  </div>
</div> -->

@endsection

@section('script')

<script>

$(document).ready(function(){
      $('.slider').slider({full_width: true});
    });

  App.controller('home', function (page){
    $(page)
      .find('#btnSignup')
      .on('click', function(){
        getData("Hello World");
        
      });
  });

  function getData(data){
     App.dialog({
                    title: 'Data Infromation',
                    text: data,
                    okButton: 'Try Again',
                    cancelButton: 'Cancel'
                },function (tryAgain) {
                    if (tryAgain) {
                        App.load('SignUp');
                    }
                });
  }

	App.load('home');

/*  App.controller('chatroom', function (page) {
  this.transition = 'fade';
});
*/

</script>

@endsection