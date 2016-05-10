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
    @if(isset($session_id))
       <input type="hidden" value="{{ $session_id }}" id="sessionId">
      @endif
   <nav>

   <div class="nav-wrapper">
   
     <a href="javascript:;" class="brand-logo"> <img class="logo" src="http://susanwins.com/uploads/52424_logo.png" alt="Logo"> </a>
      @if(isset($user))
        <a href="javascript:;" data-activates="mobileSideNav" class="button-collapse" id="mobileSideNavButton"><i class="material-icons">menu</i></a>
       <ul class="side-nav" id="mobileSideNav">
         <li><a href="{{ url('clubhouse/home') }}"><img src="http://susanwins.com/uploads/38368_clubhouseicon.png"> Home</a></li>
         <li><a href="javascript:;"><img src="http://susanwins.com/uploads/64163_chaticon.png"> Messages</a></li>
         <li><a href="javascript:;"><img src="http://susanwins.com/uploads/83444_notificationicon.png"> All Notifications</a></li>
         <li><a href="javascript:;"><img src="http://susanwins.com/uploads/43069_friendicon.png"> Friend Requests</a></li>
         <li><a href="{{ url('logout') }}"><img src="http://susanwins.com/uploads/34338_logouticon.png"> Logout</a></li>
       </ul>
      @endif
      
   </div>

   <div class="nav-lower-wrapper">
          <a href="javascript:;" class="waves-effect back_button" id="backButton"><i class="material-icons">chevron_left</i> <span>Back</span></a>
         <!--  <h5 id="navbarTitle">All messages <span>(123)</span></h5> -->
          <h5 id="navbarTitle"></h5>
      </div>
       </nav>
        <ul class="bottomNotification z-depth-1">
                              
                        <li> <a href="http://susanwins.com/clubhouse/home" id="userMenu"> <img src="http://susanwins.com/uploads/38368_clubhouseicon.png"> </a> </li>
                        <li> 
                          <a href="javascript:;" id="messagesMenu"> 
                            <span id="unreadMessageNotification" class="notifCounter">

                            @if(isset($unread_messages_count) && $unread_messages_count > 0)
                                <span class="notifcount animated bounce bounceInUp">{{ $unread_messages_count }}</span>
                              @endif
                                                          </span>
                            <img src="http://susanwins.com/uploads/64163_chaticon.png">
                          </a> 
                        </li>

                        <li> 

                          <a href="javascript:;" id="globalNotifMenu">                       
                            <span id="unreadGlobalNotification" class="notifCounter">

                             @if(isset($global_notification_count) && $global_notification_count > 0)
                                <span class="notifcount   animated bounce bounceInUp">{{ $global_notification_count }}</span>
                              @endif
                                                            </span>
                        
                            <img src="http://susanwins.com/uploads/83444_notificationicon.png">
                          </a> 
                         </li>
                        
                        <li> 
                          <a href="javascript:;" id="notificationMenu"> 
                           <span id="unreadUserNotification" class="notifCounter">

                             @if(isset($user_notification_count) && $user_notification_count > 0)
                                  <span class="notifcount   animated bounce bounceInUp"> 
                                        {{ $user_notification_count }}
                                      </span>
                                @endif
                                                            </span>
                           <img src="http://susanwins.com/uploads/43069_friendicon.png">
                           </a> 
                        </li>

                        <li style="margin-right: 6px;"> 
                          <a href="http://susanwins.com/logout"> 
                           <img src="http://susanwins.com/uploads/34338_logouticon.png">
                          </a> 
                        </li>

                      </ul>
<!--    <div class="nav-wrapper">
 <a href="javascript:;" class="waves-effect waves-light btn back_button" style="display:none" id="backButton"><i class="material-icons">chevron_left</i></a>
<a href="javascript:;" class="brand-logo"> @yield('navbar-title') </a>
 @if(isset($user))
   <a href="#" data-activates="mobile-demo2" class="button-collapse"><i class="material-icons">menu</i></a>
     <ul class="side-nav" id="mobile-demo2">
      <li><a href="{{ url('clubhouse/home') }}"><img src="http://susanwins.com/uploads/38368_clubhouseicon.png"> Home</a></li>
      <li><a href="javascript:;"><img src="http://susanwins.com/uploads/64163_chaticon.png"> Messages</a></li>
      <li><a href="javascript:;"><img src="http://susanwins.com/uploads/83444_notificationicon.png"> All Notifications</a></li>
      <li><a href="javascript:;"><img src="http://susanwins.com/uploads/43069_friendicon.png"> Friend Requests</a></li>
      <li><a href="{{ url('logout') }}"><img src="http://susanwins.com/uploads/34338_logouticon.png"> Logout</a></li>
    </ul>
 @endif
 </div>  -->
     @if(isset($user))
        <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <!-- <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a> -->
    <ul class="homeButtonNav">
      <li><a class="btn-floating btn-large" href="{{ url('clubhouse/profile') }}"><img src="http://susanwins.com/images/clubhouse/profileroom-thumb.gif" alt=""></a></li>
      <li><a class="btn-floating btn-large" href="{{ url('clubhouse/slotsroom') }}"><img src="http://susanwins.com/images/clubhouse/slotsroom-thumb.gif" alt=""></a></li>
      <li><a class="btn-floating btn-large" href="{{ url('clubhouse/chatroom') }}"><img src="http://susanwins.com/images/clubhouse/chatroom-thumb.gif" alt=""></a></li>
      <li><a class="btn-floating btn-large" href="{{ url('clubhouse/prizeroom') }}"><img src="http://susanwins.com/images/clubhouse/prizeround.png" alt=""></a></li>
    </ul>
  </div>
     @endif

    @yield('content')

      <div class="app-page" data-page="myMessages">
      <div class="app-topbar"></div>
  <div class="app-content">

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
                   
                        <!-- <li class="app-button" data-target="privateMessage" data-target-args=''>
                          <img src="" alt="">
                          <div class="msgContent">
                              <div class="info"><h6>qweqwe</h6><span class="timestamp" data-datetime="2323"><span class="livetime"></span></span></div>
                              <p> qweqwe </p>
                          </div>
                        
                        </li> -->
                       
                     </ul>
              </div>
      </div>
              <!--        <div class="pageLoading">
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
                           </div> -->
          
        
      </div>
</div>
      <div class="app-page" data-page="privateMessage">
      <div class="app-topbar"></div>
  <div class="app-content">
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
  
     @yield('content-list')
  </body>
  
  <script> 
            var myFriends = '<?php echo isset($myFriends) && count($myFriends) > 0 ? json_encode($myFriends) : "" ?>';
            var myFriendsCount = '<?php echo isset($myFriends) ? count($myFriends) : 0 ?>';
            var onlineFriendsList = [];
    </script>
 
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script> 
    <script src="{{ asset('js/moment-timezone.min.js') }}"></script> 
    <script src="{{ asset('js/livestamp.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>

     <script src="{{ asset('js/sockets.io.js') }}"></script>
    <script>


    CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    BASE_URL = "{{ url('/')}}";
    USER_ID = "{{ isset(Auth::user()->id) ? Auth::user()->id : '' }}";
    USER_IMAGE = "{{ isset(Auth::user()->user_detail->profile_picture) ? Auth::user()->user_detail->profile_picture : '' }} ";
    USER_NAME = "{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}";
    DEFAULT_IMAGE = BASE_URL+'/user_uploads/default_image/default_01.png';
    ROOM_ID = "{{ isset($selectedRoom->id ) ? $selectedRoom->id  : '' }}";
    ROOM_NAME = "{{ isset($selectedRoom->name) ? $selectedRoom->name : '' }}";
    ROOM_DESCRIPTION = "{{ isset($selectedRoom->description) ? $selectedRoom->description : '' }}";
    MESSAGE = "";
  </script>
    <script>

      var socket = io.connect('{{ url('') }}:8891');

    $(function(){

      timeZone = 'Europe/London';

      $('.timestamp').each(function(){
      timestamp = this;
      datetime = $(timestamp).data('datetime');
      $(timestamp).find('.livetime').livestamp(moment.tz(datetime, timeZone).format() );
      $(timestamp).find('.readable_time').text(moment.tz(datetime, timeZone).format('MMM DD, YYYY'));
  });

      $('#backButton').on('click', function(){

        if(App.back() === false){
           window.history.back();
        }
        
      });

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


        socket.on('connect', function(){

          socket.emit('login', { user_id : userId , profile_picture : userImage, name : userName, session_id : sessionId }, true, isAdmin, myFriends);

              last_room_id = $('#roomDetails').data('id');
              last_room_name = $('#roomDetails').data('name');
              last_room_description = $('#roomDetails').data('description');

             if(ROOM_ID){
              socket.emit('connect_room', { room_id : ROOM_ID, name : ROOM_NAME, description : ROOM_DESCRIPTION });

             }

      });


      socket.on('myOnlineFriends', function(onlineFriends){

    onlineFriendsList = onlineFriends;
      for(i=0;i<onlineFriendsList.length;i++){
          friend_id = onlineFriendsList[i];
          $('#friend-online-status-'+friend_id).removeClass('offline');
      }

  });


        socket.on('friendOffline', function(friend_id){
              index = onlineFriendsList.indexOf(parseInt(friend_id));
              if(index != -1){

                onlineFriendsList.splice(index, 1);
              }
          });
        socket.on('friendOnline', function(friend_id){
              
              index = onlineFriendsList.indexOf(parseInt(friend_id));
              friendIndex = myFriends.indexOf(parseInt(friend_id));
              if(index == -1 && friendIndex >=0 ){
                onlineFriendsList.push(friend_id);
              }

          });




            socket.on('post_recommendGame_notification', function(friend){

        console.log('post_recommendGame_notification');

         span = $('<span>').addClass('notifcount animated bounce bounceInUp');
                notifcount = 1;
                if($('#unreadUserNotification').find('.notifcount').length){
                  notifcount = parseInt($('#unreadUserNotification').find('.notifcount').text())+1;
                }

                $('#unreadUserNotification').html('').append($(span).text(notifcount));
 

      });

       socket.on('post_accepted_friend_notification', function(friend){

          span = $('<span>').addClass('notifcount animated bounce bounceInUp');
              notifcount = 1;
              if($('#unreadUserNotification').find('.notifcount').length){
                notifcount = parseInt($('#unreadUserNotification').find('.notifcount').text())+1;
              }

              $('#unreadUserNotification').html('').append($(span).text(notifcount));   

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

            });

      });
   socket.on('post_friendTag_notification', function(data){

          span = $('<span>').addClass('notifcount');
      notifcount = 1;

      if($('#unreadUserNotification').find('.notifcount').length)
      {
        notifcount = parseInt($('#unreadUserNotification').find('.notifcount').text())+1;
      }

      $('#unreadUserNotification').html('').append($(span).text(notifcount));
      });


socket.on('post_addFriend_request', function(request_id, request){

    console.log('post_addFriend_request');
    console.log(request);

          span = $('<span>').addClass('notifcount');
        notifcount = 1;

      if($('#unreadUserNotification').find('.notifcount').length)
      {
        notifcount = parseInt($('#unreadUserNotification').find('.notifcount').text())+1;
      }

      $('#unreadUserNotification').html('').append($(span).text(notifcount));

  });


              socket.on('post_private_message', function(message){
          console.log('you got a private message!');
        /*  console.log(profileImage);*/
          console.log(publicUrl+'/'+message.from.profile_picture );
          console.log(message);
          thePage = App.getPage();

          if(message.to == userId){

            if(App.current() == 'privateMessage'){

                $(thePage).find('.chatBox .body ul').append(
                    $('<li>')
                        .append(
                          $('<img>').attr('src', message.from.profile_picture ? publicUrl+'/'+message.from.profile_picture : defaultProfilePic)
                          )
                        .append(
                            $('<span>').text(message.message)
                          )
                  );

                 $(thePage).find('.chatBox .body').scrollTop( $(thePage).find('.chatBox .body ul')[0].scrollHeight);
            }else{


                 span = $('<span>').addClass('notifcount');
        notifcount = 1;
                    if($('#unreadMessageNotification').find('.notifcount').length)
                    {
                      notifcount = parseInt($('#unreadMessageNotification').find('.notifcount').text())+1;
                    }

                    $('#unreadMessageNotification').html('').append($(span).text(notifcount));
                          }
          }


      });

            App.controller('myGlobalNotifs', function(page, request){
                 this.transition = 'slide-left';

            });

              App.controller('myMessages', function(page, request){
                this.transition = 'slide-left';

                $(page).on('appShow', function(){
                        $('#navbarTitle').text('Messages');

                        });
                  
                $(page).find('.pageLoading').show();
                $(page).find('#yourMessages').hide();
                      setTimeout(function(){
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



                              container = $(page).find('#yourMessages .messageList');
                               container.html('');
                               

                               $.each(inbox, function(){

                                msg = this;

                                    li = $('<li>').addClass('app-button').attr('data-target', 'myMessages').attr('data-args', '{ "user_id" : "'+msg.from_user.user_detail.user_id+'", "name" : "'+msg.from_user.user_detail.firstname+'" }')
                                          .append(
                                              $('<img>').attr('src', msg.from_user.user_detail.profile_picture ? publicUrl+'/'+ msg.from_user.user_detail.profile_picture : defaultProfilePic )
                                            )
                                          .append(
                                            $('<div>').addClass('msgContent')
                                              .append(
                                                $('<div>').addClass('info')
                                                    .append(
                                                      $('<h6>').text(msg.from_user.user_detail.firstname)
                                                      )
                                                    .append(
                                                      $('<span>').addClass('timestamp').livestamp(moment.tz(msg.created_at, timeZone).format() )
                                                      )
                                                )
                                              .append($('<p>').text(msg.message))
                                            )

                                    if(msg.read == 0){
                                      $(li).addClass('unread');
                                    }

                                    $(li).bind('click', function(){
                                        App.load('privateMessage', JSON.parse($(this).attr('data-args')));
                                    });

                                    container.append(li);

                                    
                    
                               })
                            
                               $(page).find('.pageLoading').hide();
                                 $(page).find('#yourMessages').show();

                              },error : function(xhr){
                                console.log(xhr.responseText);
                              }
                          });
                      }, 2000);
                    
              });


              App.controller('privateMessage', function (page, request) {
            this.transition = 'slide-left';

              $(page).on('appDestroy', function(){
                $('.bottomNotification').show();
              });
              $(page).on('appShow', function(){
                $('.bottomNotification').hide();
                chatBox = $(page).find('.chatBox');
                chatBoxOffsetTop = chatBox.offset().top;
                chatBoxFooterOffsetTop = $(page).find('.chatFooter').offset().top;
                  
                  $(page).find('.chatBox .body').css('height', (chatBoxFooterOffsetTop- chatBoxOffsetTop)+'px');



                  
                  if(request.user_id && !$(chatBox).hasClass('dataLoaded')){

                      $('#navbarTitle').text(request.name);
                     $(page).find('.pageLoading').show();


                     $(page).on('click','.sendMessage', function(){

                          message = $(page).find('#sendPrivateMessageTextarea').val();

                          if(message && request.user_id){

                            $(page).find('#sendPrivateMessageTextarea').val('');
                            $(page).find('.chatBox .body ul').append(
                                    $('<li>')
                                      .append(
                                        $('<span>').text(message).addClass('alt').text(message)
                                        )
                                );

                            $(page).find('.chatBox .body').animate({
                                    scrollTop:  $(page).find('.chatBox .body ul')[0].scrollHeight
                                   }, 200);

                                        $.ajax({
                                              url : messageUrl+'/sendPrivateMessage',
                                              data : { from : userId, to : request.user_id, message : message, _token : CSRF_TOKEN },
                                              type : 'POST',
                                              dataType : 'json',
                                              success : function(data){
                                                socket.emit('send_private_message', { to : request.user_id, message : message });
                                              },error : function(xhr){
                                                console.log(xhr.responseText);
                                              }
                                            });

                          }
                     });

                      setTimeout(function(){
                              $.ajax({
                                url : messageUrl+'/getPrivateMessages',
                                data : { user_id : userId , other_person : request.user_id , _token : CSRF_TOKEN },
                                dataType : 'json',
                                type : 'POST',
                                success : function(data){

                                   $(page).find('.pageLoading').hide();
                                  $(page).find('.chatBox').addClass('dataLoaded');
                                  $(page).find('.chatBox .body ul').html('');
                                  console.log(data);
                                  if(data.conversation && data.conversation.length > 0){

                                    $.each(data.conversation, function(){

                                      li = $('<li>');

                                      span = $('<span>').text(this.message);

                                      if(this.from != userId){

                                        $(li).append(                        
                                          $('<img>').attr('src', data.other_person.user_detail.profile_picture ? publicUrl+data.other_person.user_detail.profile_picture : defaultProfilePic )                        
                                        );

                                      }else{

                                       
                                        $(span).addClass('alt');

                                     
                                      }

                                     $(page).find('.chatBox .body ul').append(
                                        li.append(span)
                                        );



                                    });

                                      $(page).find('.chatBox .body').scrollTop( $(page).find('.chatBox .body ul')[0].scrollHeight);
                                  }

                                },error : function(xhr){
                                  console.log(xhr.responseText);
                                }
                              });
                        }, 2000);
                  };
              });

 
      });
        
        $('#messagesMenu').on('click', function(){
            if(App.current() != 'myMessages'){
              App.load('myMessages');
            }
        });


        $(".button-collapse").sideNav();

      /*       App.populator('main', function (page) {
            this.transition = 'slide-right';

            $('#backButton').hide().removeAttr('data-load');
      });

              App.load('main');*/
        $('.button-collapse2').sideNav({
        menuWidth: 300, // Default is 240
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
      }
    );

    });
    
    </script>
    @yield('app-js')
    @yield('script')
</html>