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
   <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
   <link rel="stylesheet" href="{{ asset('css/mobileLayout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobileFront.css') }}">   
    <link rel="stylesheet" href="{{ asset('css/tagging.css') }}">  
     <link rel="stylesheet" href="{{ asset('css/jrate.css') }}"> 
   
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:800,900' rel='stylesheet' type='text/css'>
    @yield('custom-styles')
  </head>
  <body>
       @if(isset($user))

          @if($user->user_detail->profile_picture == "")
                 <input type="hidden" value="{{ $user->id }}" id="userId" data-profile="{{$user->user_detail->profile_picture}}" data-image="{{ 'user_uploads/default_image/default_01.png' }}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}">
            @else
                <input type="hidden" value="{{ $user->id }}" id="userId" data-profile="{{$user->user_detail->profile_picture}}" data-image="{{ 'user_uploads/user_'}}{{$user->id}}/{{$user->user_detail->profile_picture}}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}">
            @endif

    @endif
    @if(isset($session_id))
       <input type="hidden" value="{{ $session_id }}" id="sessionId">
      @endif

         <header>
      <div class="row no-gutters">
        <div class="col-xs-24">
          <a href="javascript:;" class="waves-effect back_button" id="backButton"><i class="material-icons">chevron_left</i> </a>
          <a href="#"> <img src="http://susanwins.com/uploads/52424_logo.png" alt=""> </a>
        </div>
      </div>
    </header>

    @if(isset($user))

     <footer>
          <ul>
            <li> <a href="{{ url('/') }}"> <i class="ion-home"></i> </a> </li>
            <li> <div id="messagesMenu"> <i class="ion-chatbubbles"></i>
                   <span id="unreadMessageNotification" class="notifCounter">
      
                               @if(isset($unread_messages_count) && $unread_messages_count > 0)
                                   <span class="notifcount">{{ $unread_messages_count }}</span>
                                 @endif
                    </span>
      
            </div> </li>
            <li> <div id="globalNotifMenu"> <i class="ion-android-notifications"></i>
                      
                      <span id="unreadGlobalNotification" class="notifCounter">
      
                                @if(isset($global_notification_count) && $global_notification_count > 0)
                                   <span class="notifcount">{{ $global_notification_count }}</span>
                                 @endif
                      </span>

            </div> </li>
            <li> <div id="notificationMenu"> <i class="ion-android-happy"></i>

                    <span id="unreadUserNotification" class="notifCounter">
      
                                @if(isset($user_notification_count) && $user_notification_count > 0)
                                     <span class="notifcount   animated bounce bounceInUp"> 
                                           {{ $user_notification_count }}
                                         </span>
                                   @endif
                    </span>
            </div> </li>
            <li> <a href="{{ url('/notifications') }}"> <i class="ion-power"></i> </a> </li>
          </ul>
        </footer>
    @else
        <footer>
          <a href="{{ url('/') }}/login" class="loginFooter">Login/Signup</a>
      </footer>
    @endif

  <div class="container topMargin" >

        <!-- <div class="slotreel">
            <div class="reelgames">
              <div class="inner">

                    <div class="reel">

                          <div class="row no-gutters">
                            <div class="col-xs-8">
                              <div id="planeMachine1">
                                <img src="http://susanwins.com/uploads/39984_supersm.jpg" alt="">
                               
                                         
                              </div>
                            </div> 
                            <div class="col-xs-8"> 
                              <div id="planeMachine2">
                                 <img src="http://susanwins.com/uploads/39984_supersm.jpg" alt="">
                                
                               
                              </div>
                            </div> 
                            <div class="col-xs-8"> 
                              <div id="planeMachine3">
                                 <img src="http://susanwins.com/uploads/39984_supersm.jpg" alt="">
                                
                              </div> 
                            </div> 
                          </div>    

                    </div>                    

              </div>

            </div>                 
            <div class="d"></div>              
        </div> -->


        @yield('homecontentResposnive')
        @yield('singlecontentResposnive')

  </div>
<div class="app-page" data-page="myMessages">
      <div class="app-topbar"></div>
    <div class="app-content defaultBg">

      <div class="pageLoading">
                <div class="preloaderContainer">
                      <div class="preloader-wrapper big active">
                      <div class="spinner-layer spinner-red-only">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div><div class="gap-patch">
                          <div class="circle"></div>
                        </div><div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                    </div>
                </div>
             </div>

              <div id="yourMessages" class="col s12">
            <ul class="messageList">             
                     </ul>
              </div>
      </div>     
</div>
      <div class="app-page" data-page="myGlobalNotifs">
      <div class="app-topbar"></div>
    <div class="app-content defaultBg">

     <div class="pageLoading">
               <div class="preloaderContainer">
                     <div class="preloader-wrapper big active">
                     <div class="spinner-layer spinner-red-only">
                       <div class="circle-clipper left">
                         <div class="circle"></div>
                       </div><div class="gap-patch">
                         <div class="circle"></div>
                       </div><div class="circle-clipper right">
                         <div class="circle"></div>
                       </div>
                     </div>
                   </div>
               </div>
            </div>

              <div id="yourGlobalNotifs" class="col s12">

            <ul class="messageList">             
                     </ul>
              </div>
      </div>     
</div>
      <div class="app-page" data-page="myUserNotifs">
      <div class="app-topbar"></div>

    <div class="app-content defaultBg">
       <div class="pageLoading">
                <div class="preloaderContainer">
                      <div class="preloader-wrapper big active">
                      <div class="spinner-layer spinner-red-only">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div><div class="gap-patch">
                          <div class="circle"></div>
                        </div><div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                    </div>
                </div>
             </div>

              <div id="yourUserNotifs" class="col s12">
            <ul class="messageList">             
                     </ul>
              </div>
      </div>     
</div>
      <div class="app-page" data-page="privateMessage">
      <div class="app-topbar"></div>
  <div class="app-content defaultBg">
                     <div class="pageLoading">
                <div class="preloaderContainer">
                      <div class="preloader-wrapper big active">
                      <div class="spinner-layer spinner-red-only">
                        <div class="circle-clipper left">
                          <div class="circle"></div>
                        </div><div class="gap-patch">
                          <div class="circle"></div>
                        </div><div class="circle-clipper right">
                          <div class="circle"></div>
                        </div>
                      </div>
                    </div>
                </div>
             </div>
        <div class="chatBox">
            <div class="body">
                <ul>
            </ul>
            </div>
            <div class="chatFooter">
                   <div class="triggers">
                      <span class="sendMessage"><i class="fa fa-paper-plane"></i></span>
                    </div>
                    <textarea name="" placeholder="Type Message" id="sendPrivateMessageTextarea"></textarea>
            </div>
        </div>
        
      </div>
</div>
  

</body>

  <script> 
            var myFriends = '<?php echo isset($myFriends) && count($myFriends) > 0 ? json_encode($myFriends) : "" ?>';
            var myFriendsCount = '<?php echo isset($myFriends) ? count($myFriends) : 0 ?>';
            var onlineFriendsList = [];
    </script>
 
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.sharrre.min.js') }}"></script>  
  
    <script src="{{ asset('js/moment.min.js') }}"></script> 
    <script src="{{ asset('js/moment-timezone.min.js') }}"></script> 
    <script src="{{ asset('js/livestamp.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/jonasRate.js') }}"></script>

     <script src="{{ asset('js/sockets.io.js') }}"></script>
    <script>


    CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    BASE_URL = "{{ url('/')}}";
    USER_ID = "{{ isset(Auth::user()->id) ? Auth::user()->id : '' }}";
    USER_IMAGE = "{{ isset(Auth::user()->user_detail->profile_picture) ? Auth::user()->user_detail->profile_picture : '' }} ";
    USER_NAME = "{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}";
    USER_FULLNAME = "{{ isset(Auth::user()->user_detail) ? Auth::user()->user_detail->firstname.' '.Auth::user()->user_detail->lastname : '' }}";
    userImage = $('#userId').data('image');
    DEFAULT_IMAGE = BASE_URL+'/user_uploads/default_image/default_01.png';
    ROOM_ID = "{{ isset($selectedRoom->id ) ? $selectedRoom->id  : '' }}";
    ROOM_NAME = "{{ isset($selectedRoom->name) ? $selectedRoom->name : '' }}";
    ROOM_DESCRIPTION = "{{ isset($selectedRoom->description) ? $selectedRoom->description : '' }}";
    MESSAGE = "";
    var comment_type = "{{ isset($comment_type) ? $comment_type : '' }}";
    var content_id = "{{ isset($content_id) ? $content_id : '' }}";
    var socket = io.connect('{{ url('') }}:8891');
  </script>
         <script src="{{ asset('js/jquery.caret.js') }}"></script>
   <script src="{{ asset('js/tagging.js') }}"></script>
   
   <script src="{{ asset('js/mobileLayout.js') }}"></script>

   <script src="{{ asset('js/mobileHome.js') }}"></script>
     <script src="{{ asset('js/singlePage.mobile.js') }}"></script>
    @yield('app-js')
</html>