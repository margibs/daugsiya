<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="author" content="Susanwins" />
    <meta name="propeller" content="18cbecba5946cbcf8014a1a9c091968e" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible">    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="baseURL" content="{{ url('') }}" />
    <meta name="google-site-verification" content="ZsovtY5ezCxnStSn3xVYrsyYw7Jdt3pUHDhlV-qwKTY" />
    
    <link rel="shortcut icon" href="{{ asset('images/susanfav.png') }}">



    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> -->


    @yield('for_og')
    
    <!-- Document Title
    ============================================= -->
    <title> SusanWins @yield('page-title')</title>
    <!-- Stylesheets
    ============================================= -->
    <!--<link rel="stylesheet" href="{{ asset('css/reset.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ezslots.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.m.flip.css') }}">        
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">    
    <link rel="stylesheet" href="{{ asset('css/960_24_col.css') }}">-->
<!-- 
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
     -->
    

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="{{ asset('css/grid24.css') }}">    
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">    
  <link rel="stylesheet" href="{{ asset('css/responsiveHomepage.css') }}">        
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">        
  <link rel="stylesheet" href="{{ asset('css/hint.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/tagging.css') }}">
  <!-- <link rel="stylesheet" href="{{ asset('css/bttrlazyloading.min.css') }}">         -->
  <link rel="stylesheet" href="{{ asset('css/jquery.slotmachine.css') }}">
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:800,900' rel='stylesheet' type='text/css'>
   

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
      <!-- new chat -->

  <style>

      .common{
      width: 92%!important;
      border: none;
      padding: 10px;
      margin-bottom: -3px;
      font-family: Roboto;
      }
      .chatbox-panel{
      position: fixed;
      bottom: 0;
      z-index: 99;
      width: 1184px;
      right: 10%;
      }

      .chatbox-container{
      position: relative;
      z-index: 1;
      bottom: 0;
      right: 0;
      float: right;
      margin-left: 4px;
      width: 275px;
      height: 36px;
      }

      .chatbox{
      position: absolute;
      z-index: 1;
      bottom: 0;
      left: 0;
      }

      .main{
      pointer-events: none;
      }

      #wrapper{
      pointer-events: all;
      }

    

      #search{
      position: absolute;
      z-index: 99;
      width: 41%;
      left: 4%;
      }
      .pmBox{
      position: absolute;
      top: 20%;
      left: 50%;

      z-index: 30;
      }

      .messageBox.notificationBox {
      right: -47px;
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

      #main{
      /* margin-top: 150px; */
      }

      .homepageReel{
      margin-top: 125px;
      }

      .messageBox.notificationBox {
      right: -60px;
      z-index: 20;
      }

      .messageBox.globalNotifBox{
      right: -4px;
      z-index: 10;
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


      .fa-smile-o, .fa-paper-plane{
      display: none;
      }


      .typing-indicator {
      background-color: #E6E7ED;
      width: auto;
      border-radius: 50px;
      padding: 20px;
      display: table;
      margin: 0 auto;
      position: relative;
      -webkit-animation: 2s bulge infinite ease-out;
      animation: 2s bulge infinite ease-out;
      }
      .typing-indicator:before, .typing-indicator:after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: -2px;
      height: 20px;
      width: 20px;
      border-radius: 50%;
      background-color: #E6E7ED;
      }
      .typing-indicator:after {
      height: 10px;
      width: 10px;
      left: -10px;
      bottom: -10px;
      }
      .typing-indicator span {
      height: 15px;
      width: 15px;
      float: left;
      margin: 0 1px;
      background-color: #9E9EA1;
      display: block;
      border-radius: 50%;
      opacity: 0.4;
      }
      .typing-indicator span:nth-of-type(1) {
      -webkit-animation: 1s blink infinite 0.3333s;
      animation: 1s blink infinite 0.3333s;
      }
      .typing-indicator span:nth-of-type(2) {
      -webkit-animation: 1s blink infinite 0.6666s;
      animation: 1s blink infinite 0.6666s;
      }
      .typing-indicator span:nth-of-type(3) {
      -webkit-animation: 1s blink infinite 0.9999s;
      animation: 1s blink infinite 0.9999s;
      }

      @-webkit-keyframes blink {
      50% {
      opacity: 1;
      }
      }

      @keyframes blink {
      50% {
      opacity: 1;
      }
      }
      @-webkit-keyframes bulge {
      50% {
      -webkit-transform: scale(1.05);
      transform: scale(1.05);
      }
      }
      @keyframes bulge {
      50% {
      -webkit-transform: scale(1.05);
      transform: scale(1.05);
      }
      }
      .loadContainer{
      margin-top: 170px;
      }

      .loadContainer p, .loading p{
      display:block;
      text-align:center!important;;
      margin-top:10px;
      font-weight: 500!important;;
      font-size: 15px!important;
      font-family: "Work Sans"!important;
      }
      .messageBox .loading{
      margin-top: 120px;
      }

      .pmBox{
      /*overflow: hidden;*/
      /*top: 120px;*/
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.95);
      width: 370px;
      text-align: center;
      /*position: relative;
      left: 93%;*/
      padding: 0 0 13px 0;
      display: none;
      -moz-box-shadow: 0 0 30px -10px #000;
      -webkit-box-shadow: 0 0 30px -10px #000;
      box-shadow: 0 0 30px -10px #000;
      height: 470px;
      overflow: hidden;
      position:fixed;
      }
      .pmBox ul li{
      overflow: hidden;
      }
      .pmBox ul li img{
      width: 45px;
      border-radius: 50%;
      float: left;
      margin-right: 14px;
      margin-left: 15px;
      margin-bottom: -85px;
      }
      .pmBox ul li span, .bigChatBox .body #messageContent li span{
      font-family: Roboto,Helvetica,Arial,sans-serif;
      text-align: left;
      font-size: 13px;
      padding: 10px 20px;
      margin-right: 20px;
      font-weight: 600;
      margin-left: 70px;
      margin-top: 10px;
      background:rgba(245, 245, 245, 0.77);
      border-radius: 20px;
      line-height: 18px;
      float: left;
      }


      .pmBox ul li span.alt{
      background: #FFCACE;
      display: inline-block;
      float: right!important;
      margin-left: 50px!important;
      }
      .pmBox .body h2{
      background: rgba(255, 255, 255, 0.64);
      font-family: 'Work Sans';
      padding: 11px;
      font-size: 16px;
      font-weight: 600;
      -moz-box-shadow: 0 0 10px -5px #000;
      -webkit-box-shadow: 0 0 10px -5px #000;
      box-shadow: 0 0 10px -5px #000;
      position: relative;
      z-index: 2;
      }
      .pmBox .body h2 i{
      float: right;
      color: #B5B2B2;
      margin: 1px;
      cursor: pointer;
      }
      .pmBox .body h2 span.online{
      display: inline-block;
      width: 9px;
      height: 9px;
      background: green;
      border-radius: 50%;
      margin-right: 2px;
      }
      .pmBox  .footer{
      margin-top: 10px;
      }
      .pmBox .triggers {
      position: absolute;
      bottom: 36px;
      right: 30px;
      z-index: 2;
      }
      .pmBox .arrow_box {
      right: -139px;
      top: 4px;
      z-index: 101;
      }
      .pmBox textarea {
      border: 1px solid #d8d8d8;
      padding: 20px;
      width: 91%;
      height: 60px;
      border-radius: 5px;
      position: relative;
      /* bottom: -7px; */
      /* left: 20px; */
      font-family: 'Work Sans';
      font-size: 14px;
      font-weight: 500;
      min-height: 60px;
      -moz-box-shadow: 0 0 7px -3px #D8D8D8;
      -webkit-box-shadow: 0 0 7px -3px #D8D8D8;
      box-shadow: 0 0 7px -3px #D8D8D8;
      padding-right: 80px;
      margin: 12px 20px 5px 20px;
      }
      .pmBox .footer{
      position: relative;
      }
      .pmBox #tooltip {
      position: absolute;
      top: 276px;
      z-index: 100;
      right: 20px;
      height: 200px;
      }
      .pmBox  #tooltip ul {
      text-align: left;
      }
      .pmBox #tooltip ul li img{
      width: 32px!important;
      margin: 5px!important;
      float: none!important;
      }
      .pmBox .triggers i {
      font-size: 20px;
      margin-left: 3px;
      color: #807C7C;
      cursor: pointer;
      }
      .pmBox .common {
      min-height: 15px;
      font-family: Arial, sans-serif;
      font-size: 12px;
      overflow: hidden;
      }

      .messageBox ul li a p{
      color:#000;
      }

      /*.slotMachineNoTransition {
          -webkit-transition: none !important;
                  transition: none !important;
      }

      .slotMachineBlurFast {
          -webkit-filter: blur(5px);
                  filter: blur(5px);
      }

      .slotMachineBlurMedium {
          -webkit-filter: blur(3px);
                  filter: blur(3px);
      }

      .slotMachineBlurSlow {
          -webkit-filter: blur(2px);
                  filter: blur(2px);
      }

      .slotMachineBlurTurtle {
          -webkit-filter: blur(1px);
                  filter: blur(1px);
      }

      .slotMachineGradient {
          -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0,0,0,0)), color-stop(25%, rgba(0,0,0,1)), color-stop(75%, rgba(0,0,0,1)), color-stop(100%, rgba(0,0,0,0)) );
          -webkit-mask: url("data:image/svg+xml;utf8,<svg version="1.1" xmlns="http:// www.w3.org/2000/svg" width="0" height="0"><mask id="slotMachineFadeMask" maskUnits="objectBoundingBox" maskContentUnits="objectBoundingBox"><linearGradient id="slotMachineFadeGradient" gradientUnits="objectBoundingBox" x="0" y="0"><stop stop-color="white" stop-opacity="0" offset="0"></stop><stop stop-color="white" stop-opacity="1" offset="0.25"></stop><stop stop-color="white" stop-opacity="1" offset="0.75"></stop><stop stop-color="white" stop-opacity="0" offset="1"></stop></linearGradient><rect x="0" y="-1" width="1" height="1" transform="rotate(90)" fill="url(#slotMachineFadeMask)"></rect></mask></svg>#slotMachineFadeMask");
                  mask: url("data:image/svg+xml;utf8,<svg version="1.1" xmlns="http:// www.w3.org/2000/svg" width="0" height="0"><mask id="slotMachineFadeMask" maskUnits="objectBoundingBox" maskContentUnits="objectBoundingBox"><linearGradient id="slotMachineFadeGradient" gradientUnits="objectBoundingBox" x="0" y="0"><stop stop-color="white" stop-opacity="0" offset="0"></stop><stop stop-color="white" stop-opacity="1" offset="0.25"></stop><stop stop-color="white" stop-opacity="1" offset="0.75"></stop><stop stop-color="white" stop-opacity="0" offset="1"></stop></linearGradient><rect x="0" y="-1" width="1" height="1" transform="rotate(90)" fill="url(#slotMachineFadeMask)"></rect></mask></svg>#slotMachineFadeMask");
      }*/
  </style>
  
  </head>
<body>

  
  
 @if(Auth::check())

 


   <div class="activity">

    <h2> Friends Recent Activity </h2>
    <ul class="bxslider" id="friendUserActivityContainer">

      @if(isset($myFriends) && count($myFriends) > 0)
       

       @if(isset($user_activities) && count($user_activities) != 0 && $user_activities != null)
      
        @foreach($user_activities as $activity)
          <li> 
          <img src="{{ $activity->profile_picture ? asset('user_uploads/user_'.$activity->profile_picture.'/'.$activity->profile_picture) : asset('images/default_profile_picture.png') }}">
        @if($activity->type == 1)
            <p>{{ $activity->full_name }} addedd <a href="{{ $activity->slug }}"  style="text-decoration:none;">{{ $activity->gamename }}</a> as a new Favorite</p>
        @elseif($activity->type == 2)
            <p>{{ $activity->full_name }} played <a href="{{ $activity->slug }}"  style="text-decoration:none;">{{ $activity->gamename }}</a></p>
        @elseif($activity->type == 3)
            <p>{{ $activity->full_name }} just won {{ $activity->prizename }}</p>
         @endif
            </li>
        @endforeach


  
       @endif


        @else

                   <li> 
                 <a href="#" style="
                 overflow: hidden;
                font-weight: 400;
                color: #000;
                text-decoration: none;
                text-align: center;
                display: block;
                    font-family: Roboto;">
                  <img src="https://s3.amazonaws.com/uifaces/faces/twitter/choblab/128.jpg" style="float: none; width: 50px; margin-bottom: 10px;">
                  <p style="font-size: 17px;text-align: center;    font-family: Roboto;"> Aww you don't have any friends yet! <span style="    
                text-decoration: none;
                font-weight: bold;
                color: #D21416;
                font-family: Roboto;
                font-size: 17px;"> Join in the chat and make some now!  </span> </p>
                
                 </a> 
                </li>

      @endif  


    </ul>
    <a class="more" href="">
   <!--  <i class="fa fa-chevron-down"></i> -->
    </a>
  </div>
 @endif

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
                        <li> <a href="#" class="twitterSM"> <img src="http://susanwins.com/uploads/73749_twittericon.png" />  </a> </li>
                        <li> <a href="#" class="facebookSM"> <img src="http://susanwins.com/uploads/84170_facebookicon.png" /> </a> </li>                        
                        <li> <a href="#" class="pinterestSM"> <img src="http://susanwins.com/uploads/18419_pinteresticon.png" /> </a> </li>
                        <li> <a href="#" class="instagramSM"> <img src="http://susanwins.com/uploads/50236_instaicon.png" />   </a> </li>
                        <li style="margin-left: 10px;"> <!-- <img src="http://susanwins.com/uploads/74688_cherrylogin.gif" class="cherry" />  --> <a href="{{ url('/login') }}" class="loginbtn"> Login/Signup </a></li>
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

    
  @if(isset($user))
      @if($user->user_detail->profile_picture == "")
          <input type="hidden" value="{{ $user->id }}" id="userId" data-profile="{{$user->user_detail->profile_picture}}" data-image="{{'user_uploads/default_image/default_01.png'}}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}" data-email="{{ $user->email }}">
      @else
          <input type="hidden" value="{{ $user->id }}" id="userId" data-profile="{{$user->user_detail->profile_picture}}" data-image="{{'user_uploads/user_'.$user->user_detail->user_id.'/'.$user->user_detail->profile_picture }}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}" data-email="{{ $user->email }}">
      @endif
    
  @endif
  @if(isset($session_id))
     <input type="hidden" value="{{ $session_id }}" id="sessionId">
  @endif
  @yield('homecontent')
  @yield('singlecontent') 
  <div class="pmBox draggable" id="pmBox" style="margin-left: 6px;">        
        <div class="divContainer">
          <div class="header"></div>
            <div class="body">
              <h2> <i class="fa fa-times"></i> <span class="online"></span> <b id="pmName"> </b> </h2>
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
                      <textarea id="privateMessageTextarea" class="chatCommon txtstuff" placeholder="Type Message"  ></textarea>
                  </form>
              </div>
          </div>
  </div> 

      
  <div class="overlay"></div>

  @yield('homecontentResposnive')

    <div class="chatbox-panel" id="chatBoxPanel"></div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


    <script>

      var _nxlOptions = _nxlOptions || [];
      _nxlOptions.tracker_code = '$2y$10$P9Nx.8NNoidJZUKoSXDlpecCrJxKNaAGsKiAmIv0swXBoRkwFuFKu';
      
      user_email = $("#userId").data('email');

      if(user_email){
        _nxlOptions.user_email = user_email;
      }

       (function(){


        /*_tracker = document.createElement('script');
        _tracker.type = 'text/javascript';
        _tracker.async = true;
        _tracker.src = ('https:' == document.location.protocol ? 'https://ssl.' : 'http://') + 'nexolytics.susanwins.com/js/tracker.js';

        var s = document.getElementsByTagName('script')[0];

        s.parentNode.insertBefore(_tracker,s);*/

       })();

    </script>
    <!--<script src="{{ asset('js/jquery.m.flip.js') }}"></script>   -->
    <!-- <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.19/dist/jquery.flip.min.js"></script> -->
    <script> 
            var myFriends = '<?php echo isset($myFriends) && count($myFriends) > 0 ? json_encode($myFriends) : "" ?>';
    </script>
    <script src="{{ asset('js/ezslots.js') }}"></script>   
    <!-- <script src="{{ asset('js/jquery.bttrlazyloading.min.js') }}"></script>   -->
    <script src="{{ asset('js/jquery.unveil.js') }}"></script> 
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script> 
    <script src="{{ asset('js/jquery.leanModal.min.js') }}"></script>   
    <script src="{{ asset('js/jquery.lazyimage.js') }}"></script>   
    <script src="{{ asset('js/jquery.sharrre.min.js') }}"></script>   
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>  
    <script src="{{ asset('js/interact.min.js') }}"></script> 
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/sockets.io.js') }}"></script>
    
    <script src="{{ asset('js/gameSearch.js') }}"></script> 
    <script src="{{ asset('js/moment.min.js') }}"></script> 
    <script src="{{ asset('js/moment-timezone.min.js') }}"></script> 
    <script src="{{ asset('js/livestamp.min.js') }}"></script> 
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/jquery.slotmachine.js') }}"></script>
    <script src="{{ asset('js/jquery.caret.js') }}"></script>
    <script src="{{ asset('js/tagging.js') }}"></script>
    <!--<script src="{{ elixir('js/custom/main.js') }}"></script>-->
  <script>

  $(document).ready(function(){

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    // target elements with the "draggable" class
    interact('.draggable')
      .draggable({
        // enable inertial throwing
        inertia: true,
        // keep the element within the area of it's parent
        restrict: 
        {
          restriction: "parent",
          endOnly: true,
          elementRect: { top: 0, left: 0, bottom: 1, right: 1 }
        },
        // enable autoScroll
        autoScroll: true,
        // call this function on every dragmove event
        onmove: dragMoveListener,
        // call this function on every dragend event
        onend: function (event) 
        {
          // var textEl = event.target.querySelector('p');
          // textEl && (textEl.textContent =
          //   'moved a distance of '
          //   + (Math.sqrt(event.dx * event.dx +
          //                event.dy * event.dy)|0) + 'px');
        }
      });



    // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var comment_connected = false;
    var login_success = false;
    var tempComment = null;
    var tempReply = null;
    var user_json = '{!! isset($user) ? json_encode($user, JSON_HEX_APOS) : null !!}';
    var user = user_json ? JSON.parse(user_json) : false;
    var comment_type = "{{ isset($comment_type) ? $comment_type : '' }}";
    var content_id = "{{ isset($content_id) ? $content_id : '' }}";
    var BASE_URL = $('meta[name="baseURL"]').attr('content');
    var friendUrl = BASE_URL+'/friends';
    var profileImage = $('#data-profile').val();
    // getAnotherToken();

    // setInterval(getAnotherToken, 10000);

    // function getAnotherToken(){
    //       $.ajax({
    //           type: 'GET',
    //           url: 'get/me/token',
    //           async: false,
    //           success: function (token) {
    //               CSRF_TOKEN = token;
    //           },
    //           error: function () {
                 
    //           }
    //       });

    // }



     
timeZone = 'Europe/London';

// Comment ---------------
  
  $('.timestamp').each(function(){
      timestamp = this;
      datetime = $(timestamp).data('datetime');
      $(timestamp).find('.livetime').livestamp(moment.tz(datetime, timeZone).format() );
      $(timestamp).find('.readable_time').text(moment.tz(datetime, timeZone).format('MMM DD, YYYY'));
  });

    socket.on('connect', function(){
      if(comment_type && content_id){
          socket.emit('connect_to_comment', {type : comment_type , content_id : content_id  , user : '{{ isset($user->email) ?$user->email : "Guest" }}'});
      }
      
    });

    socket.on('comment_connected', function(){
      comment_connected = true;
      allowToComment(); 
    });

    socket.on('login_success', function(){
      login_success = true;
      allowToComment(); 
    });

    function allowToComment(){

      if(login_success && comment_connected)
      {
        $('#submitCommentTextarea').removeAttr('disabled').tagging();
        $('#submitCommentForm').removeAttr('disabled');

      }

    }

    function Comment(){
      this.id,
      this.content,
      this.user_id,
      this.content_id,
      this.email,
      this.temporaryComment,
      this.theComment,
      this.profile_picture;
    }

    Comment.prototype.makeTemporaryComment = function(){

      this.temporaryComment = $('<li></li>').addClass('temporary')
            .append(
              $('<div></div>').addClass('commentlist')
              .append(
                $('<div></div>').addClass('comment-parent')
                .append(
                  $('<img>').attr('src', this.profile_picture ? BASE_URL+'/'+this.profile_picture : defaultProfilePic).addClass('avatar')
                )
                .append(
                  $('<div></div>').addClass('comment-info').text(this.email)
                )
                .append(
                  $('<div></div>').addClass('comment-content').html(this.content)
                )
              )
            );

      return this.temporaryComment;
    };

    Comment.prototype.maketheComment = function(){

      var reply_form = '';

      if(user)
      {
        reply_form = $('<form></form>').addClass('reply-form').attr('action', '{{ url("add_reply") }}').attr('method', 'POST').css('display', 'none')
                .append( $('<input>').attr('type', 'hidden').attr('name', 'parent').val(this.id) )
                .append( $('<input>').attr('type', 'hidden').attr('name', 'user_id').val(user.id) )
                .append( $('<input>').attr('type', 'hidden').attr('name', 'content_id').val(this.content_id) )
                .append( $('<input>').attr('type', 'hidden').attr('name', 'email').val(user.email) )
                .append(
                  $('<div></div>').addClass('form-group')
                      .append(
                        $('<textarea>').addClass('form-control').attr('rows', 4).attr('placeholder', 'Write a reply').attr('name', 'content')
                        )
                   ).append( 
                  $('<div></div>').addClass('form-group')
                      .append(
                        $('<button type="submit" class="button_example" value="submit">').text('Submit')
                        )
                   );
      }
        this.theComment = 
                $('<li></li>')
                .append(
                  $('<div></div>').addClass('commentlist')
                  .append(
                    $('<div></div>').addClass('comment-parent').attr('id', 'comment-'+this.id)
                    .append(
                      $('<img>').attr('src', this.profile_picture ? BASE_URL+'/'+this.profile_picture : defaultProfilePic).addClass('avatar')
                    )
                    .append(
                      $('<span class="timestamp"> | <span class="readable_time">'+moment.tz(timeZone).format('MMM DD, YYYY')+'</span></span>')

                          .prepend($('<span class="livetime"></span>').livestamp(moment.tz(timeZone).format()))
                      )
                    .append(
                      $('<div></div>').addClass('comment-info').text(this.email)
                    )
                    .append(
                      $('<div></div>').addClass('comment-content').html(this.content)
                    )
                    .append(
                      $('<a href="javascript:;">').addClass('reply_btn').text('Reply')
                    )
                    .append(
                      $('<div"></div>').addClass('reply-list').attr('id', 'reply-to-'+this.id)
                    )
                    .append(
                      reply_form
                    )
                  )
                );
              
      return this.theComment;
    };

        $(document).on('click', '.viewPersonContainer .actionButtons button', function(){

        other_person = $(this).data('other_person');
        action = $(this).data('action');
        friend_id = $(this).data('friend_id');

        $(this).attr('disabled', 'disabled');

        //alert('i want to '+action+' person '+other_person+'using friend_id '+friend_id);

        if(action){

            if(other_person && action == 1){
              /*alert('add friend');*/
              addFriend(other_person);
            }else if(action == 2 && friend_id && other_person){
              /*alert('cancel friend request');*/
              cancelFriendRequest(friend_id, other_person);
            }else if(action == 3 && friend_id && other_person){
              /*alert('accept friend request');*/
              acceptFriendRequest(friend_id, other_person);
            }else if(action == 4 && friend_id && other_person){
              /*alert('unfriend');*/
              unFriend(friend_id, other_person);
            }


        }


       });

function unFriend(friend_id, other_person){
      $.ajax({

            url : friendUrl+'/unFriend',
            data : { id : friend_id , _token : CSRF_TOKEN },
            type : 'POST',
            dataType : 'json',
            success : function(data){

              new_button = $('<button>').data('action', 1).data('other_person', other_person).text('Add Friend');

              $('.viewPersonContainer .actionButtons').find('button').replaceWith(new_button);

            },error : function(xhr){
              console.log(xhr.responseText);
            }

          });
   }

   function acceptFriendRequest(friend_id, other_person){
          
          $.ajax({

            url : friendUrl+'/acceptFriendRequest',
            data : { id : friend_id , _token : CSRF_TOKEN },
            type : 'POST',
            dataType : 'json',
            success : function(data){

              if(data){
                socket.emit('friend_request_accepted', { other_person : other_person });
              }

              new_button = $('<button>').data('action', 4).data('other_person', other_person).data('friend_id', friend_id).text('Unfriend');

              $('.viewPersonContainer .actionButtons').find('button').replaceWith(new_button);

            },error : function(xhr){
              console.log(xhr.responseText);
            }

          });

   }

   function cancelFriendRequest(friend_id, other_person){

      $.ajax({

          url : friendUrl+'/cancelFriendRequest',
          data : { id : friend_id, _token : CSRF_TOKEN },
          type : 'POST',
          dataType : 'json',
          success : function(deleted){
              
             new_button = $('<button>').data('action', 1).data('other_person', other_person).text('Add Friend');

            $('.viewPersonContainer .actionButtons').find('button').replaceWith(new_button);

          },error : function(xhr){
            console.log(xhr.responseText);
          }

      });

   }


   function addFriend(other_person){
      console.log(' add this friend '+other_person);

      $.ajax({

          url : friendUrl+'/addFriend',
          data : { user_id : user.id, friend_id : other_person, _token : CSRF_TOKEN },
          type : 'POST',
          dataType : 'json',
          success : function(data){
            console.log(data);

            new_button = $('<button>').data('action', 2).data('other_person', other_person).data('friend_id', data.id).text('Cancel Friend Request');
             socket.emit('send_addFriend_request', { from : user.id, to : other_person, id : data.id });
            $('.viewPersonContainer .actionButtons').find('button').replaceWith(new_button);

          },error : function(xhr){
            console.log(xhr.responseText);
          }

      });
   }

    $('.reply-form textarea').tagging();

    socket.on('push_comment', function(response){

      console.log('push_comment');
      console.log(response);

      $('#no-comments').remove();

      comment = new Comment();

      comment.id = response.id;
      comment.user_id = response.user_id;
      comment.content_id = response.content_id;
      comment.email = response.email;
      comment.content = response.content;
      comment.profile_picture = response.user.user_detail.profile_picture;

      if($('#comment-'+comment.id).length == 0)
      {

        getComment = comment.maketheComment();

        $('#commentList ul').append(getComment);
        lastComment = $('#commentList ul').find('> li').last();
        $(lastComment).find('textarea').tagging();
        console.log($(getComment).find('textarea'));
        $(document).trigger('adjustHeight');
      }

    });


    socket.on('push_reply', function(response){

      reply = new Reply();

      reply.id = response.id;
      reply.user_id = response.user_id;
      reply.content = response.content;
      reply.content_id = response.content_id;
      reply.email = response.email;
      reply.parent = response.parent;
      reply.profile_picture = response.profile_picture;

      if($('#reply-'+reply.id).length == 0)
      {
        $('#reply-to-'+reply.parent).append(reply.maketheReply());
        $(document).trigger('adjustHeight');
      }

    });

      

    $('#commentForm').on('submit', function(e){

      e.preventDefault();
      $(this).trigger('simulateSubmit');
      if(tempComment == null){

        comment = new Comment();

        comment.user_id = $(this).find('[name="user_id"]').val() || false;
        comment.content = $(this).find('[name="content"]').val();
        comment.content_id = $(this).find('[name="content_id"]').val() || false;
        comment.email = $(this).find('[name="email"]').val() || false;
        comment.profile_picture = userImage;
        actionUrl = $(this).attr('action');

        friendTags = $(this).data('friendTags');
        if(comment.content)
        {

          tempComment = comment.makeTemporaryComment();

          $('#commentList ul').append(tempComment);

          temporaryComment = $('#commentList ul').find('> li.temporary').last();
          $('#no-comments').remove();              
          if(comment.user_id && comment.user_id && comment.email)
          {

            $(this).find('[name="content"]').val('');

            $.ajax({
              type : 'post',
              data : { _token : CSRF_TOKEN , content : comment.content, user_id : comment.user_id, email : comment.email , content_id : comment.content_id, type : comment_type, friendTags : friendTags },
              url : actionUrl,
              dataType : 'json',
              success : function(response)
              {

                console.log(response);
                if(response)
                {
                  comment.id = response.id;
                  getComment = comment.maketheComment();
                  $(temporaryComment).replaceWith(getComment);
                  $(getComment).find('textarea').tagging();
                  /*createTag = setInterval(function(){

                      if($(getComment).find('textarea').length){
                        $(getComment).find('textarea').tagging();
                        clearInterval(createTag);
                      }
                  }, 500);*/
                  $(document).trigger('adjustHeight');
                  tempComment = null;
                  socket.emit('comment', response);
                }
              },
              error : function(res)
              {
                console.log(res.responseText);
              }
            });


          }
          else
          {
            alert('You must login first!');
          }

        }
        else{
          alert('Please write something!');
        }

      }

      return false;
      
    });

   $(document).on('click', '#commentList .reply_btn', function(){

      if(user && comment_connected && login_success)
      {
        form = $(this).parent().find('.reply-form');

        $('#commentList').find('.reply-form').not(form).slideUp();

        $(form).slideToggle('slow', function(){
          $(document).trigger('adjustHeight');
        });
      }

    });


    function Reply(){
      this.id, 
      this.user_id, 
      this.content, 
      this.content_id, 
      this.email, 
      this.parent, 
      this.temporaryReply, 
      this.theReply, 
      this.profile_picture;
    }

    Reply.prototype.makeTemporaryReply = function(){

       this.temporaryReply = $('<div></div>').addClass('replies-parent').addClass('temporary')
             .append(
                $('<img>').addClass('avatar').attr('src', this.profile_picture ? BASE_URL+'/'+this.profile_picture : defaultProfilePic)
                )
              .append($('<div></div>').addClass('reply-info').text(this.email))
              .append($('<div></div>').addClass('reply-content').html(this.content));

      return this.temporaryReply;
    }

    Reply.prototype.maketheReply = function(){

        this.theReply = $('<div></div>').addClass('replies-parent').attr('id', 'reply-'+this.id)
              .append(
                $('<img>').addClass('avatar').attr('src', this.profile_picture ? BASE_URL+'/'+this.profile_picture : defaultProfilePic)
                )
                .append(
                      $('<span class="timestamp"> | <span class="readable_time">'+moment.tz(timeZone).format('MMM DD, YYYY')+'</span></span>')

                          .prepend($('<span class="livetime"></span>').livestamp(moment.tz(timeZone).format()))
                      )
              .append($('<div></div>').addClass('reply-info').text(this.email))
              .append($('<div></div>').addClass('reply-content').html(this.content));

      return this.theReply;
    }

    $('#commentList').on('submit', '.reply-form', function(e){

      e.preventDefault();
      $(this).trigger('simulateSubmit');

      if(tempReply == null){

            reply = new Reply();

            reply.user_id = $(this).find('[name="user_id"]').val() || false;
            reply.content = $(this).find('[name="content"]').val();
            reply.content_id = $(this).find('[name="content_id"]').val() || false;
            reply.email = $(this).find('[name="email"]').val() || false;
            _token = $('meta[name="csrf-token"]').attr('content');
            reply.profile_picture = userImage;
            reply.parent = $(this).find('[name="parent"]').val();

            actionUrl = $(this).attr('action');

             friendTags = $(this).data('friendTags');

            if(reply.content){

              $(this).find('[name="content"]').val('');

                tempReply = reply.makeTemporaryReply();
                $('#reply-to-'+reply.parent).append(tempReply);
                temporaryReply = $('#reply-to-'+reply.parent).find('> .temporary').last();
                $(document).trigger('adjustHeight');
                $.ajax({
                    type : 'post',
                    data : {  user_id : reply.user_id, content : reply.content, content_id : reply.content_id, email : reply.email, _token : CSRF_TOKEN, parent : reply.parent, type : comment_type, friendTags : friendTags },
                    url : actionUrl,
                    dataType : 'json',
                    success : function(response){

                      console.log('maketheReply');
                      console.log(response);
                      if(response){

                            reply.id = response.id;
                            response.profile_picture = userImage;
                            
                            $(temporaryReply).replaceWith(reply.maketheReply());
                            $(document).trigger('adjustHeight');
                              tempReply = null;

                              
                              socket.emit('reply', response);

                      }
                    },error : function(res){
                      console.log(res.responseText);
                    }
                  });


            }else{
              alert('Please write something!');
            }

      }
      return false;

    });

// ENDOF Comment

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
      if (e.keyCode == 27) 
      { // escape key maps to keycode `27`
        $(".pmBox").hide();
      }
    });

    /*global document:false, $:false */
    var txt = $('#comments'),
        hiddenDiv = $(document.createElement('div')),
        content = null;

    txt.addClass('txtstuff');
    hiddenDiv.addClass('hiddendiv common');

    $('body').append(hiddenDiv);

    txt.on('keyup', function () {

      content = $(this).val();
      content = content.replace(/\n/g, '<br>');
      hiddenDiv.html(content + '<br class="lbr">');
      $(this).css('height', hiddenDiv.height());

    });

    $('.emojiTrigger').click(function(){
      $('#tooltip').toggle();
      $('.typeBox .arrow_box').toggle();
    });

    $('#userMenu').click(function(){
      $('.profileBox').toggle();
    });

    $('.messageBox ul').slimScroll({
      height: '366px'
    });

    $('.pmBox .messagesContent').slimScroll({
      height: '355px',
      start: 'bottom'
    });

    $(".categ-button").click(function(){
      $(".categ-entries").fadeToggle();
    });

    $('body').on('click', function(e){
      if( $('.categ-entries').is(':visible') && ( !$(e.target).hasClass('categ-entries') && !$(e.target).hasClass('categ-button')))
      {
        $(".categ-entries").fadeOut();
      } 
    });

    $('.pmBox .body h2 i').click(function() {        
      $(".pmBox").fadeToggle();
    });

    $('#pm-user').click(function() {
      $('#pmBox').fadeToggle();
    });

   /* $('.bxslider').bxSlider({
    mode: 'vertical',
    slideMargin: 5,
    minSlides: 6,
    maxSlides: 6,
    pager:false,
    prevText:'‹',
    nextText:'›'
    });*/

  });

 


  </script>



  @yield('footer_scripts')


</body>
</html>

