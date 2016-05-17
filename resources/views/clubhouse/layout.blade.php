<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="AllLad" />
    <meta name="propeller" content="18cbecba5946cbcf8014a1a9c091968e" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible">    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="google-site-verification" content="ZsovtY5ezCxnStSn3xVYrsyYw7Jdt3pUHDhlV-qwKTY" />
    
    <link rel="shortcut icon" href="{{ asset('images/susanfav.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <!-- Document Title
    ============================================= -->
    <title> @yield('page-title') </title>
    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('css/reset.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid24.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">        
    <link rel="stylesheet" href="{{ asset('css/clubhouse.css') }}">   
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:800,900' rel='stylesheet' type='text/css'>

  
    <link rel="stylesheet" href="{{ asset('css/croppie.css') }}">

    <!--<link rel="stylesheet" href="{{ elixir('css/clubhouse-all.css') }}">-->

    <script src="{{ asset('js/modernizr.custom.js') }}"></script>



    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>        
    <script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write(unescape("%3Cscript src='/js/jquery.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>
    -->

   @yield('scripts_here')
      <style>
      
        #search_result{
          width: 47%;
        }

        /* header notification */
        .globalBox{
          right: 76px;
        }


      .pmBox{
          position: absolute;
          top: 20%;
          left: 50%;
          z-index: 4;
      }

      .messageBox.notificationBox {
          right: -6px;
          z-index: 20;
      }

      #myNotifications li button{
            display: inline-block;
          font-size: 12px;
          padding: 4px 15px;
          margin: 6px 5px;
          width: 100px;
      }
      .friendProfile  .msgImgcont{
        width: 150px;
        height: 150px;
        float: none;
        display: block;
        margin-left: 110px;
        margin-bottom: 9px;
      }

      .messageBox.messageNotifBox{
        z-index: 5;
      }

     #myGlobalNotifications p{
            padding: 15px 20px;
            margin: 0;
          }

      #myGlobalNotifications p span{
         display: block;
        font-size: 13px;
        font-weight: 500;
        padding: 0;
        font-family: Roboto;
      }
    .roomNavIcons{
      position: absolute;
      top: 207px;
      left: 0;
      z-index: 2;
      margin: 5px 20px;
      transition: all 0.2s ease;
      display: none;
    }
    .roomNavIcons ul li, .roomNavIcons ul li a{
    /*  display: inline-block;*/
    }
    .roomNavIcons ul li a img{
      width: 90px;
      border: 1px solid #fff;
      border-radius: 50%;
      margin: 10px 3px;
      -moz-box-shadow: 0 0 10px 0 #A8A8A8;
      -webkit-box-shadow: 0 0 10px 0 #A8A8A8;
      box-shadow: 0 0 10px 0 #A8A8A8;
    }
    .roomNavIcons ul li a:hover{
      position: relative;
      top: -10px;
    }
    @media(max-width: 1366px){
       .roomNavIcons ul li a img{
        width: 60px;
      }
    }
    </style>
  </head>
<body>


<div class="overlay"></div>
<div class="cd-cover-layer"></div>

@yield('guide-susan')



 <div class="container-fluid verytopHeader">
        <div class="container">
          <div class="col-lg-24">
                <header>
                  <div class="col-xs-8 col-sm-7 col-md-5 col-lg-3">
                    <a href="{{ url('/') }}"><img class="logo" src="http://susanwins.com/uploads/52424_logo.png" alt="Logo"></a>
                  </div>
                  <div class="col-xs-14 col-sm-14 col-md-12 col-lg-13 hide991" style="text-align: right;">
                    <div class="search">
                      <input type="text" placeholder="Search Games" id="search" autocomplete="off">                  
                    </div>
                  </div>
                  <div class="col-xs-16 col-sm-17 col-md-19 col-lg-8">
                    @if(Auth::check())

                      <div class="messageBox messageNotifBox">
                        <div class="arrow_box"></div>
                          <p> All Messages </p>
                          <ul id="myMessages">
                          </ul>
                      </div>


                      <div class="messageBox notificationBox">
                        <div class="arrow_box"></div>
                        <p> Friend Requests </p>
                        <ul id="myNotifications">
                        </ul>                      
                      </div>

                      <div class="messageBox globalNotifBox">
                        <div class="arrow_box"></div>
                        <p> All Notifications </p>
                        <ul id="myGlobalNotifications">
                        </ul>
                      </div>

                      <ul class="topicons">
                              
                        <li> <a href="http://susanwins.com/clubhouse/home" id="userMenu"> <img src="http://susanwins.com/uploads/80737_clubhouseicon.png" /> </a> </li>
                        <li> 
                          <a href="javascript:;" id="messagesMenu"> 
                            <span id="unreadMessageNotification">
                              @if(isset($unread_messages_count) && $unread_messages_count > 0)
                                <span class="notifcount   animated bounce bounceInUp">{{ $unread_messages_count }}</span>
                              @endif
                            </span>
                            <img src="http://susanwins.com/uploads/16972_chaticon.png" />
                          </a> 
                        </li>

                        <li> 

                          <a href="javascript:;" id="globalNotifMenu">                       
                            <span id="unreadGlobalNotification">
                                @if(isset($global_notification_count) && $global_notification_count > 0)
                                <span class="notifcount   animated bounce bounceInUp">{{ $global_notification_count }}</span>
                              @endif
                            </span>
                        
                            <img src="http://susanwins.com/uploads/78234_notificationicon.png" />
                          </a> 
                         </li>
                        
                        <li> 
                          <a href="javascript:;" id="notificationMenu"> 
                           <span id="unreadUserNotification">
                                @if(isset($user_notification_count) && $user_notification_count > 0)
                                  <span class="notifcount   animated bounce bounceInUp"> 
                                        {{ $user_notification_count }}
                                      </span>
                                @endif
                            </span>
                           <img src="http://susanwins.com/uploads/34532_friendicon.png" />
                           </a> 
                        </li>

                        <li style="margin-right: 6px;"> 
                          <a href="{{ url('/logout') }}"> 
                           <img src="http://susanwins.com/uploads/39695_logouticon.png" />
                          </a> 
                        </li>

                      </ul>

                   @else
                       <ul class="topicons" style="margin-top: 9px;">           
                        <li> <a href="#" class="facebookSM"> <i class="ion-social-facebook"></i> </a> </li>
                        <li> <a href="#" class="twitterSM"> <i class="ion-social-twitter"></i>  </a> </li>
                        <li> <a href="#" class="pinterestSM"> <i class="ion-social-pinterest"></i></a> </li>
                        <li> <a href="#" class="instagramSM"> <i class="ion-social-instagram"></i>   </a> </li>
                        <li style="margin-left: 10px;"><!--  <img src="http://susanwins.com/uploads/74688_cherrylogin.gif" class="cherry" />   --><a href="{{ url('/login') }}" class="loginbtn"> Login/Signup </a></li>
                        <!-- <li> <a href="#"> <i class="ion-social-youtube"></i>   <span>  Signout </span> </a> </li> -->
                      </ul>
                   @endif


                  </div>

               
                  <div class="grid_12">
                            <div id="search_result">
                        </div>
                  </div>


                </header>
          </div>
        </div>
  </div>


    @yield('split-content')

     @if(isset($user))
     <!--  <input type="hidden" value="{{ $user->id }}" id="userId" data-image="{{ $user->user_detail->profile_picture }}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}"> -->
            @if($user->user_detail->profile_picture == "")
                 <input type="hidden" value="{{ $user->id }}" id="userId" data-profile="{{$user->user_detail->profile_picture}}" data-image="{{ '/user_uploads/default_image/default_01.png' }}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}">
            @else
                <input type="hidden" value="{{ $user->id }}" id="userId" data-profile="{{$user->user_detail->profile_picture}}" data-image="{{ 'user_uploads/user_'}}{{$user->id}}/5050/{{$user->user_detail->profile_picture}}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}">
            @endif
      
      <!--  <img src ="{{asset('user_uploads')}}/user_{{$user->id}}/{{$user->user_detail->profile_picture }}" alt="" class="profile_pic" id="picPreview">  -->
    @endif
      @if(isset($session_id))
   <input type="hidden" value="{{ $session_id }}" id="sessionId">
  @endif
    @yield('background-content')
      <div class="pmBox draggable" id="pmBox" style="margin-left: 6px;">        
          <div class="divContainer">
            <div class="header"></div>
              <div class="body">
                <h2> <i class="fa fa-times"></i> <span class="online"></span> <b id="pmName">Syndey Winchester </b> </h2>
                <ul class="messagesContent" id="pmMessageContent">
                </ul>
              </div>
              <div class="pmFooter">
                    <div class="arrow_box pmArrowbox" style="display:none;"></div>  
                    <div id="tooltip pmTooltip" style="display:none;">

                      <ul>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                          <li> <img src="http://hassankhan.me/emojify.js/images/emoji/grin.png"> </li>
                      </ul>

                      </div>

                    <div class="triggers">
                      
                      <i class="fa fa-smile-o pmTrigger"></i>
                      <i class="fa fa-paper-plane"></i>
                    </div>
                    <form id="sendPrivateMessage">
                        <textarea id="privateMessageTextarea" class="chatCommon txtstuff" placeholder="Type Message" style="height:auto;" ></textarea>
                    </form>
                </div>
            </div>
      </div>
	
    <script src="{{ asset('js/jquery-1.12.0.js') }}"></script>
    <script src="{{ asset('js/CSSPlugin.min.js') }}"></script> 
    <script src="{{ asset('js/TweenLite.min.js') }}"></script> 
    <script src="{{ asset('js/clubhouse.plugins.js') }}"></script>
    
    <script>

    /*  var _nxlOptions = _nxlOptions || [];
      _nxlOptions.tracker_code = '$2y$10$54gEixgpLZjfaudmBZ6xceN5vA1jkLNztnLEEiRsmc5Zf.cK19KY6';
        
       (function(){


        _tracker = document.createElement('script');
        _tracker.type = 'text/javascript';
        _tracker.async = true;
        _tracker.src = ('https:' == document.location.protocol ? 'https://ssl.' : 'http://') + 'nexolytics.dev/js/tracker.js';

        var s = document.getElementsByTagName('script')[0];

        s.parentNode.insertBefore(_tracker,s);

       })();*/

    </script>
        <script> 
            var myFriends = '<?php echo isset($myFriends) && count($myFriends) > 0 ? json_encode($myFriends) : "" ?>';
            var onlineFriendsList = [];
    </script>
    <script src="{{ asset('js/ezslots.js') }}"></script>   
    <script src="{{ asset('js/jquery.unveil.js') }}"></script>   
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> 
    

    <!--<script src="{{ asset('js/jquery.m.flip.js') }}"></script>   -->
    <!-- <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.19/dist/jquery.flip.min.js"></script> -->
    <script src="{{ asset('js/jquery.leanModal.min.js') }}"></script>    
    <script src="{{ asset('js/jquery.lazyimage.js') }}"></script>   
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>  
    <script src="{{ asset('js/interact.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.mobile.min.js') }}"></script>  
    <script src="{{ asset('js/tour.js') }}"></script> 
    <script src="{{ asset('js/moment.min.js') }}"></script> 
    <script src="{{ asset('js/moment-timezone.min.js') }}"></script> 
    <script src="{{ asset('js/livestamp.min.js') }}"></script> 

  <script src="{{ asset('js/sockets.io.js') }}"></script>


  <script>


  var socket = io.connect('{{ url('') }}:8891');
  var loginPage = false;

    $.fn.preload = function() {
        this.each(function(){
            $('<img/>')[0].src = this;
        });
    }

    var window_focus = true;

    window.onblur = function() { window_focus = false; }
    window.onfocus = function() { window_focus = true; }

    $(['http://susanwins.com/uploads/64878_click-header.png']).preload();

      socket.on('user_logged_in', function(){
        if(!window_focus){
          location.reload();
        }

        /*location.reload();*/
        

      });

      socket.on('user_logged_out', function(){

        location.reload();

      });


    $(document).ready(function(){




      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var userId = $('#userId').val();
       var userImage = $('#userId').data('image');
       var userName = $('#userId').data('name');
       var isAdmin = $('#userId').data('isAdmin') == 1 ? true : false;

       var sessionUrl = '{{ url("session") }}';
 var profileUrl = '{{ url("profile") }}';
var friendUrl = '{{ url("friends") }}';
 var messageUrl = '{{ url("message") }}';
 var publicUrl = '{{ asset("") }}';
 var baseUrl = '{{ url() }}';
 var notifUrl = '{{ url("notification") }}';
 var clubhouseUrl = '{{ url("clubhouse") }}';
 var sessionId = $('#sessionId').val();
var defaultProfilePic = publicUrl+'/images/default_profile_picture.png';
  
var profileImage = $('#data-profile').val();
var pagename = '{{ Request::segment(2) }}';
timeZone = 'Europe/London';
london = moment.tz(timeZone);
    socket.on('connect', function(){

          socket.emit('login', { user_id : userId , profile_picture : userImage, name : userName, session_id : sessionId }, true, isAdmin, myFriends);

              last_room_id = $('#roomDetails').data('id');
              last_room_name = $('#roomDetails').data('name');
              last_room_description = $('#roomDetails').data('description');

             if(last_room_id){
              socket.emit('connect_room', { room_id : last_room_id, name : last_room_name, description : last_room_description });

             }

      });


      socket.on('myOnlineFriends', function(onlineFriends){

    onlineFriendsList = onlineFriends;
      for(i=0;i<onlineFriendsList.length;i++){
          friend_id = onlineFriendsList[i];
          $('#friend-online-status-'+friend_id).removeClass('offline').parent('li').prependTo('#friendList');
      }

  });

    /*  socket.on('friend_login', function(friend_id){
        console.log('friend_login');
        console.log(friend_id);
        $('#friend-online-status-'+friend_id).removeClass('offline').parent('li').prependTo('#friendList');
    });
    socket.on('friend_logout', function(friend_id){
        console.log('friend_logout');
        console.log(friend_id);
        $('#friend-online-status-'+friend_id).addClass('offline');
    });
*/
  socket.on('friendOffline', function(friend_id){
        index = onlineFriendsList.indexOf(parseInt(friend_id));
        if(index != -1){

          onlineFriendsList.splice(index, 1);
          offlineUserOnlineStatusElements(friend_id);
        }
    });
  socket.on('friendOnline', function(friend_id){
        
        index = onlineFriendsList.indexOf(parseInt(friend_id));
        friendIndex = myFriends.indexOf(parseInt(friend_id));
        if(index == -1 && friendIndex >=0 ){
          onlineFriendsList.push(friend_id);
          onlineUserOnlineStatusElements(friend_id);
        }

    });

      function offlineUserOnlineStatusElements(friend_id){
    if($('#pmBox').data('current') == friend_id && $('#pmBox').is(':visible'))
    {
      $('#pmBox').find('.body h2 > span').removeClass('online');
    }

    $('#friend-online-status-'+friend_id).addClass('offline');
    }
    function onlineUserOnlineStatusElements(friend_id){
    if($('#pmBox').data('current') == friend_id && $('#pmBox').is(':visible'))
    {
      $('#pmBox').find('.body h2 > span').addClass('online');
    }

     
      $('#friend-online-status-'+friend_id).removeClass('offline').parent('li').prependTo('#friendList');
    }


/*    $.ajax({
      url : clubhouseUrl+'/session',
      type : 'POST',
      data : { user_id : userId, session_id : sessionId, _token : CSRF_TOKEN },
      dataType : 'json',
      success : function(data){
        console.log('success');
        console.log(data);
      }
    });*/
    
      $('.guideSusanContainer').css({ 'marginLeft': '-374px','display' : 'block' }).animate({ 'marginLeft' : 0 }, 'slow', function(){
           $(document).trigger('start_tour');
      });

      $(document).on('click', '.cd-tour-nav .skip', function(){
          $(this).parents('.cd-single-step').fadeOut('slow');
          $('.guideSusanContainer').animate({ 'marginLeft' : '-374px' }, 'slow', function(){
           $('.guideSusanContainer').css('display', 'none');
      });
      });

    $(document).on('click', '.cd-close', function(){

      $('.guideSusanContainer').animate({ 'marginLeft' : '-374px' }, 'slow', function(){
           $('.guideSusanContainer').css('display', 'none');
      });
    }); 

        tourAjax = false;
    $(document).on('click', '.cd-tour-nav .complete', function(){
      $(this).parents('.cd-single-step').fadeOut('slow');
          $('.guideSusanContainer').animate({ 'marginLeft' : '-374px' }, 'slow', function(){
           $('.guideSusanContainer').css('display', 'none');
      });
      if(!tourAjax){
        tourAjax = true;
           $.ajax({
              url : baseUrl+'/endTour',
              data : { _token : CSRF_TOKEN, pagename : pagename },
              dataType : 'json',
              type : 'POST',
              success : function(data){
                console.log(data);
              },error : function(xhr){
                console.log(xhr.responseText);
              }    
            });
      }
       
    });


     socket.on('post_recommendGame_notification', function(friend){

        console.log('post_recommendGame_notification');

         span = $('<span>').addClass('notifcount');
                notifcount = 1;
                if($('#unreadUserNotification').find('.notifcount').length){
                  notifcount = parseInt($('#unreadUserNotification').find('.notifcount').text())+1;
                }

                $('#unreadUserNotification').html('').append($(span).text(notifcount));


            $('#myNotifications').prepend(
                $('<li>').append(
                          $('<a href="'+baseUrl+'/'+friend.game.slug+'">').addClass('unread')
                            .append(
                              $('<img>').attr('src', friend.user.user_detail.profile_picture ? publicUrl+'/'+friend.user.user_detail.profile_picture : defaultProfilePic )
                              )
                            .append(
                              $('<p>')
                                  .append(
                                    $('<span>').addClass('name').text(friend.user.user_detail.firstname+' '+friend.user.user_detail.lastname+' recommended you to play. ')
                                    )
                                  .append(
                                    $('<div>').addClass('actionList')
                                      .append(
                                          $('<span>').text('Click to Play')
                                          )
                                    )
                              )
                        )
              );  

      });

       socket.on('post_accepted_friend_notification', function(friend){

          span = $('<span>').addClass('notifcount');
              notifcount = 1;
              if($('#unreadUserNotification').find('.notifcount').length){
                notifcount = parseInt($('#unreadUserNotification').find('.notifcount').text())+1;
              }

              $('#unreadUserNotification').html('').append($(span).text(notifcount));


          $('#myNotifications').prepend(
              $('<li>').append(
                        $('<a href="javascript:;">').addClass('unread')
                          .append(
                            $('<img>').attr('src', friend.profile_picture ? publicUrl+'/'+friend.profile_picture : defaultProfilePic )
                            )
                          .append(
                            $('<p>')
                                .append(
                                  $('<span>').addClass('name').text('You and '+friend.name+' are now friends!')
                                  )
                                .append(
                                  $('<div>').addClass('actionList').data('user', friend.user_id)
                                    .append(
                                        $('<button>').text('Message').addClass('subModalToggle pmFriend').attr('data-target', '#pmBox')
                                        )
                                  )
                            )
                      )
            );     

       });

      function readGlobalNotification(){
        $.ajax({
            url : notifUrl+'/readGlobalNotifications',
            data : { _token : CSRF_TOKEN },
            dataType : 'json',
            type : 'POST',
            success : function(data){
             
             console.log('readGlobalNotification');
             console.log(data);

            },error : function(xhr){
              console.log(xhr.responseText);
            }
        });
    }


    $('#globalNotifMenu').on('click', function(){
        $('#unreadGlobalNotification').html('');
    });


    $('#globalNotifMenu').one('click', function(e){
      button = this;

      $('#myGlobalNotifications').html('').append($('<li style="border:none;">').addClass('loading').append('<div class="typing-indicator"><span></span><span></span><span></span></div><p> Loading... </p>'));

        $.ajax({
            url : notifUrl+'/getGlobalNotifications',
            data : {  _token : CSRF_TOKEN },
            dataType : 'json',
            type : 'POST',
            success : function(data){
              console.log('getGlobalNotifications');
                console.log(data);

                $(button).bind('click', readGlobalNotification);

                readGlobalNotification();

              $('#myGlobalNotifications').html('');


                $.each(data, function(){

                  notification = this;


                  li = $('<li>');


                  if(notification.type == 1){

                    $('#myGlobalNotifications').append(
                      $(li)
                          .append(
                            $('<a href="'+baseUrl+'/'+notification.game.slug+'">')
                                  .append(
                                    $('<p>')
                                      .append(
                                        $('<span>').text('New Game has Added!')
                                        )
                                    )
                            )
                      );

                  }else if(notification.type == 2){
                    
                    $('#myGlobalNotifications').append(
                      $(li)
                          .append(
                            $('<a href="'+baseUrl+'/clubhouse/chatroom/'+notification.room.name+'">')
                                  .append(
                                    $('<p>')
                                      .append(
                                        $('<span>').text('New Chatroom Created!')
                                      )
                                    )
                            )
                          );

                  }else if(notification.type == 3){

                    $('#myGlobalNotifications').append(
                      $(li)
                          .append(
                            $('<a href="'+baseUrl+'/clubhouse/chatroom/'+notification.room.name+'">')
                                  .append(
                                    $('<p>')
                                      .append(
                                        $('<span>').text(notification.moderator.user_detail.firstname+' '+notification.moderator.user_detail.lastname+' is now in '+notification.room.name)
                                        )
                                    )
                            )
                          );
                  }else if(notification.type == 4){


                      var a =  $('<a href="//'+ notification.custom_notification.link +' ">').addClass('unread')
                            .append(
                              $('<p>')
                                .append(
                                  $('<span>').text(notification.custom_notification.description)
                                  )
                              );

              if(notification.custom_notification.image){
                   a =  $('<a href="//'+ notification.custom_notification.link +' ">').addClass('unread')
                            .append($('<img>').attr('src', baseUrl+'/uploads/'+notification.custom_notification.image))
                            .append(
                              $('<p>')
                                .append(
                                  $('<span>').text(notification.custom_notification.description)
                                  )
                              );
              }
 

                     $('#myGlobalNotifications').append(
                      $(li)
                          .append(
                            a
                            )
                          );

                  }


                  if(!notification.globalnotification_read){
                    $(li).find('a').addClass('unread');
                  }


                });
                

            },error : function(xhr){
              console.log(xhr.responseText);
            }
        });
    });

       socket.on('post_global_notification', function(notification){


          console.log('post_global_notification');
          console.log(notification);

          if(notification){


            span = $('<span>').addClass('notifcount');
              notifcount = 1;
              if($('#unreadGlobalNotification').find('.notifcount').length){
                notifcount = parseInt($('#unreadGlobalNotification').find('.notifcount').text())+1;
              }

              $('#unreadGlobalNotification').html('').append($(span).text(notifcount));

            if(notification.type == 1){


              

              $('#myGlobalNotifications').prepend(
                $('<li>')
                    .append(
                      $('<a href="'+baseUrl+'/'+notification.game.slug+'">').addClass('unread')
                            .append(
                              $('<p>')
                                .append(
                                  $('<span>').text('New Game has Added!')
                                  )
                              )
                      )
                );

            }else if(notification.type == 2){
              
              $('#myGlobalNotifications').prepend(
                $('<li>')
                    .append(
                      $('<a href="'+baseUrl+'/clubhouse/chatroom/'+notification.room.name+'">').addClass('unread')
                            .append(
                              $('<p>')
                                .append(
                                  $('<span>').text('New Chatroom Created!')
                                  )
                              )
                      )
                    );

            }else if(notification.type == 3){

              $('#myGlobalNotifications').prepend(
                $('<li>')
                    .append(
                      $('<a href="'+baseUrl+'/clubhouse/chatroom/'+notification.room.name+'">').addClass('unread')
                            .append(
                              $('<p>')
                                .append(
                                  $('<span>').text(notification.moderator.user_detail.firstname+' '+notification.moderator.user_detail.lastname+' is now in '+notification.room.name)
                                  )
                              )
                      )
                    );
            }else if(notification.type == 4){


               var a =  $('<a href="//'+ notification.custom_notification.link +' ">').addClass('unread')
                            .append(
                              $('<p>')
                                .append(
                                  $('<span>').text(notification.custom_notification.description)
                                  )
                              );

              if(notification.custom_notification.image){
                   a =  $('<a href="//'+ notification.custom_notification.link +' ">').addClass('unread')
                            .append($('<img>').attr('src', baseUrl+'/uploads/'+notification.custom_notification.image))
                            .append(
                              $('<p>')
                                .append(
                                  $('<span>').text(notification.custom_notification.description)
                                  )
                              );
              }

               $('#myGlobalNotifications').prepend(
                $('<li>')
                    .append(
                      a
                      )
                    );

            }

          }


       });


      socket.on('post_custom_notification', function(notification){

            $.each(notification, function(){

              data = this;


              span = $('<span>').addClass('notifcount');
              notifcount = 1;
              if($('#unreadGlobalNotification').find('.notifcount').length){
                notifcount = parseInt($('#unreadGlobalNotification').find('.notifcount').text())+1;
              }

              $('#unreadGlobalNotification').html('').append($(span).text(notifcount));


              var a =  $('<a href="//'+ data.custom_notification.link +' ">').addClass('unread')
                            .append(
                              $('<p>')
                                .append(
                                  $('<span>').text(data.custom_notification.description)
                                  )
                              );

              if(data.custom_notification.image){
                   a =  $('<a href="//'+ data.custom_notification.link +' ">').addClass('unread')
                            .append($('<img>').attr('src', baseUrl+'/uploads/'+data.custom_notification.image))
                            .append(
                              $('<p>')
                                .append(
                                  $('<span>').text(data.custom_notification.description)
                                  )
                              );
              }

              $('#myGlobalNotifications').prepend(
                $('<li>')
                    .append(
                        a
                      )
                    );

            });

      });

    $(document).on('click','.pmFriend', function(){
        $('.pmBox').css('display','block');


      });

    if(userId){
      /* setInterval(updateLastActivityTime, 3000);


            function updateLastActivityTime(){
          $.ajax({

              url : sessionUrl+'/getUserSession',
              data : { _token : CSRF_TOKEN , user_id : userId },
              type : 'POST',
              dataType : 'json',
              success : function(data){

                if(data && data.length > 0){
                  $.each(data, function(){

                    if(!$('#friend-online-status-'+this.id).hasClass('online')){

                      $('#friend-online-status-'+this.id).parent().prependTo('#friendList');
                    }

                      $('#friend-online-status-'+this.id).removeClass('offline').addClass('online').addClass('updated');
                      $('#friend-message-online-status-'+this.id).removeClass('offline').addClass('online').addClass('updated');
                      
                  });

                   }

                  $('#friendList > li > span:not(.updated)').addClass('offline').removeClass('online');
                  $('.messagingBox > li > span:not(.updated)').addClass('offline').removeClass('online');

                  $('#friendList > li > span').removeClass('updated');
                  $('.messagingBox > li > span').removeClass('updated');

                  $('#onlineFriendCount').text('('+ data.length +')');
                  $('#offlineFriendCount').text('('+ $('#friendList > li > span.offline').length +')');
               

              },error : function(xhr){
                console.log(xhr.responseText);
              }

          });
      }*/

    }

     

     function readUserNotifications(){

        $.ajax({
            url : profileUrl+'/readFriendRequests',
            data : { user_id : userId, _token : CSRF_TOKEN },
            dataType : 'json',
            type : 'POST',
            success : function(data){
             
             console.log('readFriendRequests');
             console.log(data);

            },error : function(xhr){
              console.log(xhr.responseText);
            }
        });

      }


    $('#notificationMenu').on('click', function(){

      $('#notificationMenu').find('.notifcount').remove();
      
    });


    socket.on('post_friendTag_notification', function(data){

          span = $('<span>').addClass('notifcount');
      notifcount = 1;

      if($('#unreadUserNotification').find('.notifcount').length)
      {
        notifcount = parseInt($('#unreadUserNotification').find('.notifcount').text())+1;
      }

      $('#unreadUserNotification').html('').append($(span).text(notifcount));
      console.log(data);
      data_url = data.content;

      if(data.type == 3 || data.type == 2){
        data_url = data.content.slug;
      }

      data_url = baseUrl+'/'+data_url;

      $('#myNotifications').prepend(
        $('<li>').append(
              $('<a href="'+data_url+'">')
              .append(
                $('<img>').attr('src', data.user.user_detail.profile_picture ? baseUrl+'/'+data.user.user_detail.profile_picture : defaultProfilePic )
              )
              .append(
                $('<p>')
                .append(
                  $('<span>').addClass('name').text(data.user.user_detail.firstname+' '+data.user.user_detail.lastname+' tagged you in a comment. ')
                )
              )
            )
      );
      });
     

       $('#notificationMenu').one('click', function(){

    theButton = this;

    $('#myNotifications').html('').append($('<li style="border:none;">').addClass('loading').append('<div class="typing-indicator"><span></span><span></span><span></span></div><p> Loading... </p>'));

    $.ajax({
      url : profileUrl+'/getFriendRequests',
      data : { user_id : userId, _token : CSRF_TOKEN },
      dataType : 'json',
      type : 'POST',
      success : function(data)
      {
        console.log('getFriendRequests');
        console.log(data);

        if(data)
        {
          readUserNotifications();
          $(theButton).bind('click', readUserNotifications);
        }

        $('#myNotifications').html('');

        $.each(data, function(){

          li = $('<li>');

          request = this;
          if(request.type == 0)
          {
            button = $('<a href="javascript:;">')
            .append(
              $('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
            )
            .append(
              $('<p>')
              .append(
                $('<span>').addClass('name').text(request.user.user_detail.firstname+' '+request.user.user_detail.lastname)
              )
              .append(
                $('<div>').addClass('actionList')
                .append(
                  $('<button>').text('Accept').addClass('acceptFriend').data('id', request.id).data('user', request.user_id)
                )
                .append(
                  $('<button>').text('Decline').addClass('declineFriend').data('id', request.id)
                )
              )
            );

            $(li).attr('id', 'friend-request-'+request.user_id).append(
            button
            );     

          }
          else if(request.type == 1)
          {
            $(li).append(
              $('<a href="javascript:;">')
              .append(
              $('<img>').attr('src', request.user.profile_picture ? baseUrl+'/'+request.user.profile_picture : defaultProfilePic )
              )
              .append(
                $('<p>')
                .append(
                  $('<span>').addClass('name').text('You and '+request.user.user_detail.firstname+' '+request.user.user_detail.lastname+' are now friends!')
                )
                .append(
                  $('<div>').addClass('actionList').data('user', request.user.user_detail.user_id)
                  .append(
                    $('<button>').text('Message').addClass('subModalToggle pmFriend').attr('data-target', '#pmBox')
                  )
                )
              )
            );

          }
          else if(request.type == 2)
          {

            $(li).append(
              $('<a href="'+baseUrl+'/'+request.game.slug+'">')
              .append(
                $('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
              )
              .append(
                $('<p>')
                .append(
                  $('<span>').addClass('name').text(request.user.user_detail.firstname+' '+request.user.user_detail.lastname+' recommended you to play. ')
                )
                .append(
                  $('<div>').addClass('actionList')
                  .append(
                    $('<span>').text('Click to Play')
                  )
                )
              )
            );
          }
          else if(request.type == 3)
          {
            $(li).append(
              $('<a href="'+baseUrl+'/all_games">')
              .append(
                $('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
              )
              .append(
                $('<p>')
                .append(
                  $('<span>').addClass('name').text(request.user.user_detail.firstname+' '+request.user.user_detail.lastname+' tagged you in a comment. ')
                )
              )
            );
          }
          else if(request.type == 5)
          {
            $(li).append(
              $('<a href="'+baseUrl+'/'+request.postslug+'">')
              .append(
                $('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
              )
              .append(
                $('<p>')
                .append(
                  $('<span>').addClass('name').text(request.user.user_detail.firstname+' '+request.user.user_detail.lastname+' tagged you in a comment. ')
                )
              )
            );
          }
          else if(request.type == 4)
          {
            $(li).append(
              $('<a href="'+baseUrl+'/'+request.categoryslug+'">')
              .append(
                $('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
              )
              .append(
                $('<p>')
                .append(
                  $('<span>').addClass('name').text(request.user.user_detail.firstname+' '+request.user.user_detail.lastname+' tagged you in a comment. ')
                )
              )
            );
          }

          if(request.read == 0)
          {
            $(li).find('a').addClass('unread');
          }

          $('#myNotifications').append(li);

        });

      },
      error : function(xhr)
      {
        console.log(xhr.responseText);
      }
    });

  });


  socket.on('post_addFriend_request', function(request_id, request){

    console.log('post_addFriend_request');
    console.log(request);


    requestHtml =  $('<li>').attr('id','friend-request-'+request.user_id).append(
                        $('<a href="javascript:;">').addClass('unread')
                          .append(
                            $('<img>').attr('src', request.profile_picture ? publicUrl+'/'+request.profile_picture : defaultProfilePic )
                            )
                          .append(
                            $('<p>')
                                .append(
                                  $('<span>').addClass('name').text(request.name)
                                  )
                                .append(
                                  $('<div>').addClass('actionList')
                                    .append(
                                      $('<button>').text('Accept').addClass('acceptFriend').data('id', request_id).data('user', request.user_id)
                                      )
                                    .append(
                                      $('<button>').text('Decline').addClass('declineFriend').data('id', request_id)
                                      )
                                  )
                            )
                      );


    if($('#friend-request-'+request.user_id).length){

      $('#friend-request-'+request.user_id).replaceWith(requestHtml);

    }else{

    notifcount = $('#notificationMenu').find('.notifcount');

      if(notifcount.length){
        notifs = parseInt($(notifcount).text());
        $(notifcount).text(notifs+1);
      }else{
        $('#notificationMenu').prepend($('<span>').addClass('notifcount').text(1));
      }

      $('#myNotifications').prepend( requestHtml );
    }

    

  });


  $('#sendPrivateMessage').on('submit', function(e){
        e.preventDefault();
          theUser = $(this).data('user');
          message = $('#privateMessageTextarea').val();

          $('#privateMessageTextarea').val('');

          if(theUser && message){

             $('#pmMessageContent').append(
                      $('<li>').addClass('alt').append(
                          $('<span>').addClass('alt').text(message)
                        )
                      );

             $('#pmMessageContent').animate({
              scrollTop: $('#pmMessageContent')[0].scrollHeight
             }, 200);

            $.ajax({
              url : messageUrl+'/sendPrivateMessage',
              data : { from : userId, to : theUser, message : message, _token : CSRF_TOKEN },
              type : 'POST',
              dataType : 'json',
              success : function(data){
                socket.emit('send_private_message', { to : theUser, message : message });
              },error : function(xhr){
                console.log(xhr.responseText);
              }
            });

          }

      });
  $('.chatCommon').each(function(){

        var txt = $(this),
        hiddenDiv = $(document.createElement('div')),
        content = null;

        txt.addClass('txtstuff');
        hiddenDiv.addClass('hiddendiv common');

        $('body').append(hiddenDiv);

        txt.on('keyup', function (e) {

          if (e.keyCode == 13) {
              $(txt).parent('form').submit();
          }else{

            content = $(this).val();

            content = content.replace(/\n/g, '<br>');
            hiddenDiv.html(escapeHtml(content) + '<br class="lbr">');

            $(this).css('height', hiddenDiv.height());
          }

        });

    });

  function escapeHtml(text) {
    return text
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
  }

$(document).on('click', '.pmFriend', function(){

         modal = $('#pmBox');

         $(this).removeClass('unread');

        if(!modal.hasClass('loading')){

            $(modal).addClass('loading');
            theUser = $(this).parent().data('user');
            $('#pmBox').attr('data-current', theUser);
            $('#sendPrivateMessage').data('user', theUser);
            $(modal).find('.divContainer').hide();
            if(onlineFriendsList.indexOf(parseInt(theUser)) != -1){
                $('#pmBox').find('.body h2 > span').addClass('online');
              }else{
                $('#pmBox').find('.body h2 > span').removeClass('online');
              }
            loading = $('<div>').addClass('loadContainer').append('<div class="typing-indicator"><span></span><span></span><span></span></div><p> Loading... </p>');


            $(modal).append(loading);
            $('#pmMessageContent').html('');
            $.ajax({
              url : messageUrl+'/getPrivateMessages',
              data : { user_id : userId , other_person : theUser , _token : CSRF_TOKEN },
              dataType : 'json',
              type : 'POST',
              success : function(data){

                $('#unreadMessage').text('('+data['unread']+')');
                $('#readMessage').text('('+data['read']+')');

                $(modal).find('.divContainer').show();
                $(loading).remove();
                modal.removeClass('loading');

                $('#pmName').text( data.other_person.user_detail.firstname +' '+ data.other_person.user_detail.lastname);
                if(data.conversation && data.conversation.length > 0){

                  $.each(data.conversation, function(){

                    li = $('<li>');

                    span = $('<span>').text(this.message);

                    if(this.from != userId){

                      $(li).append(                        
                        $('<img>').attr('src', data.other_person.user_detail.profile_picture ? publicUrl+'/user_uploads/user_'+data.other_person.user_detail.user_id+'/'+data.other_person.user_detail.profile_picture : defaultProfilePic )                        
                      );

                    }else{


                       $(li).addClass('alt');
                     
                      $(span).addClass('alt');

                   
                    }

                    $('#pmMessageContent').append(
                      li.append(span)
                      );



                  });
                }

              },error : function(xhr){
                console.log(xhr.responseText);
              }
            });
          } 

      });

      socket.on('post_private_message', function(message){
          console.log('you got a private message!');
          console.log(profileImage);
          console.log(publicUrl+'/'+message.from.profile_picture );
          console.log(message);


          if($('#pmBox').data('current') == message.from.user_id && $('#pmBox').is(':visible')){
              console.log('real time add');

              $('#pmMessageContent').append(
                      $('<li>').append(
                        $('<img>').attr('src', message.from.profile_picture ? publicUrl+'/'+message.from.profile_picture : defaultProfilePic )
                      )
                      .append(
                          $('<span>').text(message.message)
                        )
                );

              $('#pmMessageContent').animate({
              scrollTop: $('#pmMessageContent')[0].scrollHeight
             }, 2000);

          }else{
            
            if($('#inbox-user-'+message.from.user_id).length){

              $('#inbox-user-'+message.from.user_id).find('a').addClass('unread').find('.message').text(message.message);

              $('#myMessages').prepend($('#inbox-user-'+message.from.user_id));

              $('#inbox-user-'+message.from.user_id).find('.timestamp').replaceWith($('<span></span>').addClass('timestamp').livestamp(london.format()) );

            }else{
                $('#myMessages').prepend(

                      $('<li>').attr('data-user', message.from.user_id).attr('id', 'inbox-user-'+message.from.user_id)
                        .append(
                            $('<a href="javascript:;">').addClass('subModalToggle pmFriend').attr('data-target', '#pmBox').addClass('unread')
                              .append(
                                $('<img>').attr('src', message.from.profile_picture ? publicUrl+'/'+ message.from.profile_picture : defaultProfilePic )
                                )

                              .append(
                                $('<p>')
                                    .append(
                                      $('<span>').addClass('name').text(message.from.name)
                                          .append($('<span></span>').addClass('timestamp').livestamp(london.format()))
                                      )
                                    .append(
                                        $('<span>').addClass('message').text(message.message)
                                      )
                                )
                          )

                    );
            }

            $('#unreadMessageNotification').html('').append(
                  $('<span>').addClass('notifcount').text($('#myMessages li a.unread').length)
              )

             
          }
      });

  
  $('#myNotifications').on('click', '.acceptFriend', function(){

      data_id = $(this).data('id');
      user = $(this).data('user');

      $(this).parents('li').find('.actionList').html('')

        .append(
            $('<span>').text('Request accepted! ').css('font-size', '12px').data('user', user)

              .append(
                $('<button>').text('Message').addClass('subModalToggle pmFriend').attr('data-target', '#pmBox')
                )
          );

    $.ajax({
      url : friendUrl+'/acceptFriendRequest',
      data : { _token : CSRF_TOKEN, id : data_id },
      type : 'POST',
      dataType : 'json',
      success : function(data){
        if(data){
                socket.emit('friend_request_accepted', { other_person : user });
              }
      },error : function (xhr){
        console.log(xhr.responseText);
      }

    });

  });
  
  $('#myNotifications').on('click', '.declineFriend', function(){

      data_id = $(this).data('id');

      $(this).parents('li').remove();

       $.ajax({
          url : friendUrl+'/cancelFriendRequest',
          data : { _token : CSRF_TOKEN, id : data_id },
          type : 'POST',
          dataType : 'json',
          success : function(data){
            console.log(data);
          },error : function (xhr){
            console.log(xhr.responseText);
          }

        });

  });


  $('#messagesMenu').one('click', function(){


    $('#myMessages').html('').append($('<li style="border:none;">').addClass('loading').append('<div class="typing-indicator"><span></span><span></span><span></span></div><p> Loading... </p>'));
        
        $.ajax({
            url : messageUrl+'/getInbox',
            data : { user_id : userId, _token : CSRF_TOKEN },
            dataType : 'json',
            type : 'POST',
            success : function(data){

              sortDates = data.sort(function(a, b){

                  return new Date(a.created_at) < new Date(b.created_at);
              });


              unread_messages = [];
              read_messages = [];

              $.each(sortDates, function(){

                  if(this.read == 0){
                    unread_messages.push(this);
                  }else{
                    read_messages.push(this);
                  }
              });

              inbox = unread_messages.concat(read_messages);



             $('#myMessages').html('');
             

             $.each(inbox, function(){

              msg = this;

                button = $('<a href="javascript:;">').addClass('subModalToggle pmFriend').attr('data-target', '#pmBox')
                              .append(
                                $('<img>').attr('src', msg.from_user.user_detail.profile_picture ? publicUrl+'/'+ msg.from_user.user_detail.profile_picture : defaultProfilePic )


                                )

                              .append(
                                $('<p>')
                                    .append(
                                      $('<span>').addClass('name').text(msg.from_user.user_detail.firstname+' '+msg.from_user.user_detail.lastname)
                                          .append($('<span></span>').addClass('timestamp').livestamp(moment.tz(msg.created_at, timeZone).format() ))
                                      )
                                    .append(
                                        $('<span>').addClass('message').text(msg.message)
                                      )
                                );

                  if(msg.read == 0){
                    $(button).addClass('unread');
                  }

                  $('#myMessages').append(

                      $('<li>').attr('id', 'inbox-user-'+msg.from_user.user_detail.user_id).attr('data-user', msg.from_user.user_detail.user_id)
                        .append(
                            button
                          )

                    );

                  
  
             });


            },error : function(xhr){
              console.log(xhr.responseText);
            }
        });
        
    });

  $('#myMessages').on('click', 'li a', function(){

      $('#unreadMessageNotification').html('');
  });

  $('#messagesMenu').on('click', function(){

    $('#unreadMessageNotification').html('');

  });

   $('#userMenu').click(function(){
      $('.profileBox').toggle();
    });

    $('#messagesMenu').click(function(){
      $('.messageNotifBox').toggle();
      $('.globalNotifBox ').hide();
      $('.notificationBox ').hide();
    });


    $('#globalNotifMenu').click(function(){

      $('.globalNotifBox').toggle();
      $('.messageNotifBox ').hide();
      $('.notificationBox ').hide();
    });

    $('#notificationMenu').click(function(){
      $('.notificationBox').toggle();
      $('.globalNotifBox ').hide();
      $('.messageNotifBox ').hide();
    });


    $('.messageBox ul').slimScroll({
        height: '366px',
        start: 'bottom'
    });

    $('.pmBox .messagesContent').slimScroll({
        height: '345px',
        start: 'bottom'
    });



      $(".categ-button").click(function(){

        $(".categ-entries").fadeToggle();

      });

      $('body').on('click', function(e){


        if( $('.categ-entries').is(':visible') && ( !$(e.target).hasClass('categ-entries') && !$(e.target).hasClass('categ-button'))){
           $(".categ-entries").fadeOut();
        } 

      });

      $('.pmBox .body h2 i').click(function() {        
         $(".pmBox").fadeToggle();
      });

      $('#pm-user').click(function() {
        $('#pmBox').fadeToggle();
      });

      



      // OLD SEARCH

      /*$('#search').keyup(function(e){

        var searchField = $('#search').val(),
            timer = $('#search').data('timeout');

     

        $("#mainhead").css({
           "position":"relative",
           "z-index":"999",
        });

        $(".overlay").css({
          "background-color":"rgba(0, 0, 0, 0.2)",
            "position": "fixed",
            "width": "100%",
            "height": "100%",
            "z-index": "98",
        });

        // $("#floatingCirclesG").css({
        //   "display":"block",
        // });

        $('#search_result').html('<div id="floatingCirclesG"  style="display:block;"><div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02"></div><div class="f_circleG" id="frotateG_03"></div><div class="f_circleG" id="frotateG_04"></div><div class="f_circleG" id="frotateG_05"></div><div class="f_circleG" id="frotateG_06"></div><div class="f_circleG" id="frotateG_07"></div><div class="f_circleG" id="frotateG_08"></div></div>');

        $("#search").css({
          "position": "absolute",
          "z-index": "99"
        });

        if(timer) 
        {
            clearTimeout(timer);
            $('#search').removeData('timeout');
        }

        // if(e.which === 40)
        // {
        //   $("#search_result").focus();
        //   console.log('unsa ning 40?');
        // }
        // else
        // {

          if( searchField == 0 || searchField == '' || searchField == null ) 
          {
            $('#search_result').html('');
          } 
          else if (e.which == 13) 
          {
            e.preventDefault();
            get_search_result(searchField);
          }
          else 
          {
            $('#search').data('timeout', setTimeout(get_search_result, 1000 * 0.5,searchField));
          }

        // }
      });*/

// NEW SEARCH

$('#search').on('input', function(e){


          //console.log($(this).val());

           var searchField = $('#search').val(),
            timer = $('#search').data('timeout');

     

        $("#mainhead").css({
           "position":"relative",
           "z-index":"999",
        });

        $(".overlay").css({
          "background-color":"rgba(0, 0, 0, 0.41)",
            "position": "fixed",
            "width": "100%",
            "height": "100%",
            "z-index": "98",
        });

        // $("#floatingCirclesG").css({
        //   "display":"block",
        // });

        $('#search_result').html('<div id="floatingCirclesG"  style="display:block;"><div class="f_circleG" id="frotateG_01"></div><div class="f_circleG" id="frotateG_02"></div><div class="f_circleG" id="frotateG_03"></div><div class="f_circleG" id="frotateG_04"></div><div class="f_circleG" id="frotateG_05"></div><div class="f_circleG" id="frotateG_06"></div><div class="f_circleG" id="frotateG_07"></div><div class="f_circleG" id="frotateG_08"></div></div>');

          $("#search_result").css({
          "background": "#ffffff"          
        });

        // $("#search").css({
        //   "position": "absolute",
        //   "z-index": "99",
        //   "width": "58%"
        // });

        if(timer) 
        {
            clearTimeout(timer);
            $('#search').removeData('timeout');
        }

        // if(e.which === 40)
        // {
        //   $("#search_result").focus();
        //   console.log('unsa ning 40?');
        // }
        // else
        // {

          if( searchField == 0 || searchField == '' || searchField == null ) 
          {
            $('#search_result').html('<h6>NO RESULTS FOUND</h6>');
          } 
          else if (e.which == 13) 
          {
            e.preventDefault();
            get_search_result(searchField);
          }
          else 
          {
            $('#search').data('timeout', setTimeout(get_search_result, 1000 * 0.5,searchField));
          }

        // }


     
      });



      function get_search_result(searchField)
      {
        $.ajax({
          type: 'post',
          url: "{{url('home/ajax_get_posts')}}",
          data: {_token: CSRF_TOKEN,'searchField' : searchField}, 
          success: function(response)
          {
            var parsed = JSON.parse(response),
            output = '';

            $.each( parsed, function( index, obj){

              output += '<a class="entry" tabindex="1" href="{{url('')}}/' +obj.slug+ '" ><img src="{{url('uploads')}}/'+obj.icon_feature_image+'" width="100px" height="100px"> <p>' +obj.title+ '</p> <div class="searchratingouter"> <span class="searchrating" style="width:'+Math.floor(obj.total_rating)+'%;"> &nbsp; </span> </div> </a>';
            
            });

            if(output.trim() == '')
            {
              $('#search_result').html('<h6>NO RESULTS FOUND</h6>');
            }
            else
            {
              $('#search_result').html(output);
            }
            
          }
        });
      }


    });



// Highlighting search results

    // added tanbindex="1" to each entries

  $('#search').on('keyup', function(e){
      if(e.which == 40){
        $('#search_result').find('.entry:first-child').focus().trigger('keydown');

      }
  });

  $('#search_result').on('focusin', '.entry', function(){
        $(this).css({'outline' : 0, 'background' : '#E8E8E8'});
  }).on('focusout','.entry', function(){
      $(this).css({'background' : '#fff'});
  });

  $('#search_result').on('keydown','.entry:focus', function(e){

    if(e.which == 40 || e.which == 38){

        if(e.which == 40){
            $(this).next().focus();
        }else{

          if($(this).index() == 0){
            $('#search').focus();
          }else{
               $(this).prev().focus();
          }

          
        }

        return false;

    }

  });

  // ENDOF Highlighting search results


  $(".overlay").click(function(){
      $(this).css({
           "background":"none",
            "z-index": "0"
          }); 

      $('#search_result').html('');
  });

 
 // target elements with the "draggable" class
interact('.draggable')
  .draggable({
    // enable inertial throwing
    inertia: true,
    // keep the element within the area of it's parent
    restrict: {
      restriction: "parent",
      endOnly: true,
      elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
    },
    // enable autoScroll
    autoScroll: true,

    // call this function on every dragmove event
    onmove: dragMoveListener,
    // call this function on every dragend event
    onend: function (event) {
      // var textEl = event.target.querySelector('p');

      // textEl && (textEl.textContent =
      //   'moved a distance of '
      //   + (Math.sqrt(event.dx * event.dx +
      //                event.dy * event.dy)|0) + 'px');
    }
  });

  function dragMoveListener (event) {
    var target = event.target,
        // keep the dragged position in the data-x/data-y attributes
        x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx,
        y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

    // translate the element
    target.style.webkitTransform =
    target.style.transform =
      'translate(' + x + 'px, ' + y + 'px)';

    // update the posiion attributes
    target.setAttribute('data-x', x);
    target.setAttribute('data-y', y);
  }

  $(document).keyup(function(e) {
       if (e.keyCode == 27) { // escape key maps to keycode `27`
             $(".pmBox").hide();
      }
  });


  </script>
    <script src="{{ asset('js/clubhouse/croppie.js') }}"></script>
   @yield('custom_scripts')
  @yield('footer_scripts')


</body>
</html>
