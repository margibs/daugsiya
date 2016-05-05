<!DOCTYPE html>
<html>
  <head>
    <title>@yield('page-title')</title>
    <meta name="viewport" content="width=device-width,
                                   initial-scale=1.0,
                                   maximum-scale=1.0,
                                   user-scalable=no,
                                   minimal-ui">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta name="baseURL" content="{{ url('') }}" />
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/mobileLayout.css') }}">   
   
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:800,900' rel='stylesheet' type='text/css'>
    @yield('custom-styles')
  </head>
  <body>
       @if(isset($user))
      <input type="hidden" value="{{ $user->id }}" id="userId" data-image="{{ $user->user_detail->profile_picture }}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}">
    @endif
   <nav>
   <div class="nav-wrapper">
   <a href="javascript:;" class="waves-effect waves-light btn back_button" style="display:none" id="backButton"><i class="material-icons">chevron_left</i></a>
     <a href="javascript:;" class="brand-logo"> @yield('navbar-title') </a>
      @if(isset($user))
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
       <ul class="side-nav" id="mobile-demo">
         <li><a href="{{ url('clubhouse/home') }}"><img src="http://susanwins.com/uploads/38368_clubhouseicon.png"> Home</a></li>
         <li><a href="javascript:;"><img src="http://susanwins.com/uploads/64163_chaticon.png"> Messages</a></li>
         <li><a href="javascript:;"><img src="http://susanwins.com/uploads/83444_notificationicon.png"> All Notifications</a></li>
         <li><a href="javascript:;"><img src="http://susanwins.com/uploads/43069_friendicon.png"> Friend Requests</a></li>
         <li><a href="{{ url('logout') }}"><img src="http://susanwins.com/uploads/34338_logouticon.png"> Logout</a></li>
       </ul>
      @endif
   </div>
       </nav>
     @if(isset($user))
        <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul class="homeButtonNav">
      <li><a class="btn-floating btn-large" href="{{ url('clubhouse/profile') }}"><img src="http://susanwins.com/images/clubhouse/profileroom-thumb.gif" alt=""></a></li>
      <li><a class="btn-floating btn-large" href="{{ url('clubhouse/slotsroom') }}"><img src="http://susanwins.com/images/clubhouse/slotsroom-thumb.gif" alt=""></a></li>
      <li><a class="btn-floating btn-large" href="{{ url('clubhouse/chatroom') }}"><img src="http://susanwins.com/images/clubhouse/chatroom-thumb.gif" alt=""></a></li>
      <li><a class="btn-floating btn-large" href="{{ url('clubhouse/prizeroom') }}"><img src="http://susanwins.com/images/clubhouse/prizeround.png" alt=""></a></li>
    </ul>
  </div>
     @endif



    @yield('content')

      <div class="app-page" data-page="privateMessage">
  <div class="app-content">
      message here

      </div>
</div>

  </body>
    
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/zepto.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script>


    $(function(){

      $('#backButton').on('click', function(){
        dataLoad = $(this).attr('data-load');
          App.load(dataLoad);
       /* if(dataLoad){
          App.load(dataLoad);
        }else{
          App.back();
        }*/
        
      });

              App.populator('privateMessage', function (page, request) {
            this.transition = 'slide-left';
            if(request.lastPage){
               /* $('#backButton').show().attr('data-load', request.lastPage);*/
                $('#backButton').show().removeAttr('data-load');
            }
            
      });

        $(".button-collapse").sideNav();

/*             App.populator('main', function (page) {
            this.transition = 'slide-right';

            $('#backButton').hide().removeAttr('data-load');
      });

              App.load('main');*/



    });



     /* App.setDefaultTransition('slide-right');*/
    </script>
    @yield('app-js')

</html>