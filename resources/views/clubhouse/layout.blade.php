<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="AllLad" />
    <meta name="propeller" content="18cbecba5946cbcf8014a1a9c091968e" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible">    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="google-site-verification" content="ZsovtY5ezCxnStSn3xVYrsyYw7Jdt3pUHDhlV-qwKTY" />
     <meta name="baseURL" content="{{ url('') }}" />
    <link rel="shortcut icon" id="favicon"  href="{{ asset('images/susanfav.png') }}">
   <!--  <link href="/YOUR_PATH/favicon.ico" rel="icon" type="image/x-icon" /> -->

   <!--  <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAA/f3+AHZ3hAD+/f4Aj5CgACQqRwBWXXQA8PDyAAoMKQBhaH4AFyBDAKKnsgDZ3uQA9PX1AGxscwCVmqYAERc0AM7R2AD6/v0A2tziAF1gdQDt7vEA9Pj+AOPm5wDZ290A9fX2AF1ieAAqNE4Apay2AJ2drwD39/kAERU7AP7+/gBFSWUAU1hsAFlZaQBZWGwAztLXAAgJJABMUmUA4uTmAMvN1QD+/v8A3ODhADQ4TAD//v8AVmBvAOrr6wAAABUA5ebpAERMXgBzeYMAV2F1AKesuAAPEzIAcnSJAP///QDn6OwA4eTnAHx9gAD09vYADQ8lAAoQMwADAx4ALDVOAEtNXAAlJTEA3N3jAAoOMQCNjpsAYGJrAK6vuQD29vcARUxoADg7TgABBBQA8/T1AP7//wD///8ASUtjAA4VNwD6/f0AkJGcANLU1QCcoq4AaG58AH+EkAAjJSsAm6CsAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKU5OTk5OTk5OTk5OTk5OFQo4Tk5OTk5OTk5OTk5OAT4zTk5OTk5OTk5OTk5OIFEZBx8gTk5OTk5OTk5OTgNOTiIuPQY3BBRPIw47AkVQMEQ2QkFKNRFYExdMTjlLUjwYEldTDx0lCys6DU4mFlY/IE5ORjIsCFRDKAwnHkgvKjFOTk5NBUcQIRokVRstTk4gTk5OTiAcCUBJNE4gTk5OTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP//AAD//wAA//8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//wAA//8AAP//AAA=" rel="icon" type="image/x-icon" /> -->

    <!-- <link id="favicon" rel="shortcut icon" type="image/png" href="favicon.png" /> -->

  <!--   <link rel="icon" href="http://susanwins.com/uploads/43069_friendicon.png"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    
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
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:800,900,500' rel='stylesheet' type='text/css'>

    <!--<link rel="stylesheet" href="{{ elixir('css/clubhouse-all.css') }}">-->

    <link rel="stylesheet" href="{{ asset('css/croppie.css') }}">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

    <script src="{{ asset('js/modernizr.custom.js') }}"></script>

   
    <script type="text/javascript">
    
    document.head = document.head || document.getElementsByTagName('head')[0];
    
    var notificationCOunts = 0;
    function changeFavicon(src, counter) {
      console.log(counter);
     var link = document.createElement('link'),
     oldLink = document.getElementById('dynamic-favicon');
     link.id = 'dynamic-favicon';
     link.rel = 'shortcut icon';
     link.href = src;
     if (oldLink) {
      document.head.removeChild(oldLink);
     }
     document.head.appendChild(link);
     notificationCOunts += counter;
     document.title = notificationCOunts+'chatroom';
    }

    function resetFavicon(){
      oldLink = document.getElementById('dynamic-favicon');
      document.head.removeChild(oldLink);
    }

    /*<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">*/
    </script> 

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
    
    .pmBoxContainer{
         position: fixed;
    left: 0;
    right: 0;
    top: 98px;
    bottom: 7px;
    width: 100%;
    /* height: 100%; */
    z-index: 998;
        pointer-events: none;
    }

      .pmBox{
       /* overflow: hidden; */
      /* top: 120px; */
      border-radius: 5px;
      width: 370px;
      text-align: center;
      padding: 0 0 13px 0;
      display: none;
      -moz-box-shadow: 0 0 30px -10px #000;
      -webkit-box-shadow: 0 0 30px -10px #000;
      box-shadow: 0 0 30px -10px #000;
      height: 480px;
      overflow: hidden;
      position: fixed;
      -moz-box-shadow: 0 3px 6px 1px #7F7F7F;
      -webkit-box-shadow: 0 3px 6px 1px #7F7F7F;
      box-shadow: 0 3px 6px 1px #7F7F7F;
      border: none;
      background: #979797;
      z-index: 99;
          pointer-events: all;
      }
      .pmBox ul li{
      overflow: hidden;
      padding-bottom: 3px;
          margin-bottom: 6px;
      }

      .pmBox ul li img{
      width: 33px;
      border-radius: 50%;
      float: left;
      margin-right: 14px;
      margin-left: 15px;
      margin-bottom: -85px;
      }
      .pmBox ul li span, .bigChatBox .body #messageContent li span{
      font-family: Roboto,Helvetica,Arial,sans-serif;
      text-align: left;
      font-size: 14px;
      padding: 6px 20px;
      margin-right: 20px;
      font-weight: 500;
      margin-left: 61px;
      margin-top: 0;
      background: rgb(255, 255, 255);
      border-radius: 20px;
      line-height: 18px;
      float: left;
      display: block;
      }
      #sendPrivateMessage{
        text-align: left;
      }

      .pmBox ul li span.alt{
     background: #BA7FEC;
    display: inline-block;
    float: right!important;
    margin-left: 50px!important;
    color: #FFFFFF;
      }
      .pmBox .body h2{
      background: rgb(140,2,5);
      background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
      background: -moz-linear-gradient(top, rgb(49, 49, 49) 0%, rgb(6, 6, 6)  100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(49, 49, 49)), color-stop(100%,rgb(6, 6, 6) ));
      background: -webkit-linear-gradient(top, rgb(49, 49, 49) 0%,rgb(6, 6, 6)  100%);
      background: -o-linear-gradient(top, rgb(49, 49, 49) 0%,rgb(6, 6, 6)  100%);
      background: -ms-linear-gradient(top, rgb(49, 49, 49) 0%,rgb(6, 6, 6)  100%);
      background: linear-gradient(to bottom, rgb(49, 49, 49) 0%,rgb(6, 6, 6)  100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8c0205', endColorstr='#ba0034',GradientType=0 );
      -moz-box-shadow: 0 0 10px -3px #000;
      -webkit-box-shadow: 0 0 10px -3px #000;
      box-shadow: 0 2px 10px -3px #000;
      font-family: Roboto;
      padding: 11px;
      font-size: 20px;
      font-weight: 600;
      -moz-box-shadow: 0 0 10px -1px #000;
      -webkit-box-shadow: 0 0 10px -1px #000;
      box-shadow: 0 0 10px -1px #000;
      position: relative;
      z-index: 2;
      color: #FFFFFF;
      text-shadow: 0px 1px 2px rgb(109, 9, 9);
      }
      .pmBox .body{
        background: #EDEDED;
        padding-bottom: 10px;
      }
      .pmBox .body h2 i{
      float: right;
      color: #B5B2B2;
      margin: 1px;
      cursor: pointer;
      }
      .pmBox .body ul{
        padding-top: 15px;
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
        border-top: 1px solid #E8E8E8;
        margin-top: -1px;
      }
      .pmBox .triggers {
      position: absolute;
      bottom: 16px;
      right: 19px;
      z-index: 2;
      }
      .pmBox .arrow_box {
      right: -139px;
      top: 4px;
      z-index: 101;
      }
      .pmBox textarea {
      border: 1px solid transparent;
      padding: 18px;
      width: 84%;
      height: 60px;
      font-family: 'Work Sans';
      font-size: 16px;
      font-weight: 500;
      min-height: 60px;
      -moz-box-shadow: 0 0 7px -3px #D8D8D8;
      -webkit-box-shadow: 0 0 7px -3px #D8D8D8;
      box-shadow: 0 0 7px -3px #D8D8D8;
      padding-right: 80px;
      margin: 1px 0 -3px 0;
      }
    
      .pmBox textarea:focus{
        outline: none;
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
      font-size: 27px;
      margin-left: 3px;
      color: #807C7C;
      cursor: pointer;
      border-left: 1px solid #ddd;
      padding-left: 12px;
      }
      .pmBox .common {
      min-height: 15px;
      font-family: Arial, sans-serif;
      font-size: 12px;
      overflow: hidden;
      }
.pmFooter{
        background: rgb(255,255,255);
        
      }
      .pmFooter p{
        font-family: roboto;
        font-size: 12px;
        color: #C9C5C5;
        background: #EDEDED;
        padding: 5px 0 9px 0;
      }
      .messageBox ul li a p{
      color:#000;
      }

      .messageBox.notificationBox {
          right: -59px;
          z-index: 20;
      }
      .globalNotifBox {
        right: -13px;
    }

      #myNotifications li button{
        display: inline-block;
        font-size: 12px;
        padding: 4px 15px;
        margin: 6px 5px;
        width: 100px;
        background: #9C0504;
        border: none;
        border-radius: 15px;
        color: #fff;
        border: 1px solid #941413;
        cursor: pointer;
      }
      .friendProfile  .msgImgcont{
        width: 150px;
        height: 150px;
        float: none;
        display: block;
        margin-left: 110px;
        margin-bottom: 9px;
        border-radius: 50%;
        border: 4px solid #B11A1A;
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

   <!-- private messaging -->
  <style>
    
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

    .sendPrivateMessage{
        text-align:   left;
      }

        .chatbox .messagesContent{
              padding: 10px 13px;
    border: 1px solid #D4CCCC;
    -moz-box-shadow: 0 0 10px -5px #000;
    -webkit-box-shadow: 0 0 10px -5px #000;
    box-shadow: 0 0 10px -5px #000;
    height: 200px;
    overflow-y: scroll;
    width:100%;
        }


      .inactivebox i{
        float: right;
    margin: 2px;
    color: #DE6466;
    cursor: pointer;
      }
      
      .chatbox .triggers{
            position: absolute;
            right: 1px;
      }
      .chatbox .triggers i {
            display: block;
    font-size: 22px;
    padding: 4px;
    margin: 11px;
    border-left: 1px solid #ccc;
    padding-left: 10px;
      }

    .chatbox .sendPrivateMessage textarea{
         width: 100%;
    border: none;
    padding: 10px;
    margin-bottom: -3px;
    font-family: Roboto;
    padding-right: 44px;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
    resize: none;
      }

      .chatbox .messagesContent li{
            overflow: hidden;
        padding-bottom: 3px;
        margin-bottom: 6px;
      }

      .chatbox .messagesContent img{
            width: 33px;
    border-radius: 50%;
    float: left;
    margin-right: 14px;
    /* margin-left: 15px; */
    margin-bottom: -85px;
      }

      .chatbox .messagesContent li span{
     font-family: Roboto,Helvetica,Arial,sans-serif;
    text-align: left;
    font-size: 14px;
    padding: 6px 20px;
    /* margin-right: 20px; */
    font-weight: 500;
    margin-left: 36px;
    margin-top: 0;
    background: rgb(255, 255, 255);
    border-radius: 20px;
    line-height: 18px;
    float: left;
    display: block;
      }

      .chatbox .messagesContent li span.alt{
            background: #BA7FEC;
    display: inline-block;
    float: right!important;
    /* margin-left: 50px!important; */
    color: #FFFFFF;
      }

      .pmMiniChat .head {
            height: 34px;
      }

            .chatbox{
      position: absolute;
      z-index: 1;
      bottom: 0;
      left: 0;
      }

      .chatSmContainerParent{
        float: right;
        width: 40px;
        height: 36px;
            position: relative;
      }

      .chatSmContainerParent .chatSmContainerBtn{
          position: relative;
          display: block;
          width: 100%;
          height: 100%;
          background: #C50D12;
          background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
          background: -moz-linear-gradient(top, #C50D12 0%, #A20807 100%);
          background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#C50D12), color-stop(100%,#A20807));
          background: -webkit-linear-gradient(top, #C50D12 0%,#A20807 100%);
          background: -o-linear-gradient(top, #C50D12 0%,#A20807 100%);
          background: -ms-linear-gradient(top, #C50D12 0%,#A20807 100%);
          background: linear-gradient(to bottom, #C50D12 0%,#A20807 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#C50D12', endColorstr='#A20807',GradientType=0 );
          border: 1px solid #BC0C0F;
          color: #fff;
          font-size: 25px;
          padding: 5px 8px;
          border-top-left-radius: 5px;
          border-top-right-radius: 5px;
      }

      .chatSmContainerParent .chatSmContainer{
        position: absolute;
        bottom: 35px;
            right: 0;
            display: none;
      }

      .chatSmContainerParent .chatSmContainer .smInner{
        float: left;
        width: 100%;
        position: relative;
        background: #C50D12;
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        background: -moz-linear-gradient(top, #C50D12 0%, #A20807 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#C50D12), color-stop(100%,#A20807));
        background: -webkit-linear-gradient(top, #C50D12 0%,#A20807 100%);
        background: -o-linear-gradient(top, #C50D12 0%,#A20807 100%);
        background: -ms-linear-gradient(top, #C50D12 0%,#A20807 100%);
        background: linear-gradient(to bottom, #C50D12 0%,#A20807 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#C50D12', endColorstr='#A20807',GradientType=0 );
        border: 1px solid #BC0C0F;
        padding: 5px 0;
        font-size: 14px;
      }
      .chatSmContainerParent .chatSmContainer .smInner li{
        float: left;
        width: 100%;
        padding: 4px;
        padding-right: 18px;
        position: relative;
        cursor: pointer;
      }
      .chatSmContainerParent .chatSmContainer .smInner li a{
           max-width: 193px;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        display: block;
        float: left;
        color: #fff;
        text-decoration: none;
        font-family: 'Roboto';
      }

      .chatSmContainerParent .chatSmContainer .smInner li:hover{
            background-color: #9C0E11;
      }

      .chatSmContainerParent .chatSmContainer .smInner li .closeSm{
       position: absolute;
        right: 3px;
        color: #DE6466;
        cursor: pointer;
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
                  <div class="col-xs-8 col-sm-5 col-md-5 col-lg-5">
                    <a href="{{ url('/') }}"><img class="logo" src="http://susanwins.com/uploads/52424_logo.png" alt="Logo"></a>
                  </div>
                  <div class="col-xs-14 col-sm-14 col-md-12 col-lg-11 hide991" style="text-align: right;">
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
                              
                        <li> <a href="http://susanwins.com/clubhouse/home" id="userMenu"> <img src="http://susanwins.com/uploads/38368_clubhouseicon.png" /> </a> </li>
                        <li> 
                          <a href="javascript:;" id="messagesMenu"> 
                            <span id="unreadMessageNotification">
                              @if(isset($unread_messages_count) && $unread_messages_count > 0)
                                <span class="notifcount   animated bounce bounceInUp">{{ $unread_messages_count }}</span>
                              @endif
                            </span>
                            <img src="http://susanwins.com/uploads/64163_chaticon.png" />
                          </a> 
                        </li>

                        <li> 

                          <a href="javascript:;" id="globalNotifMenu">                       
                            <span id="unreadGlobalNotification">
                                @if(isset($global_notification_count) && $global_notification_count > 0)
                                <span class="notifcount   animated bounce bounceInUp">{{ $global_notification_count }}</span>
                              @endif
                            </span>
                        
                            <img src="http://susanwins.com/uploads/83444_notificationicon.png" />
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
                           <img src="http://susanwins.com/uploads/43069_friendicon.png" />
                           </a> 
                        </li>

                        <li style="margin-right: 6px;"> 
                          <a href="{{ url('/logout') }}"> 
                           <img src="http://susanwins.com/uploads/34338_logouticon.png" />
                          </a> 
                        </li>

                         <li style="margin-right: 6px;"> 
                          <a href="#"> 
                              <button id="sendEmail">SendEmail</button>
                          </a> 
                        </li>

                         <li style="margin-right: 6px;"> 
                          <a href="#"> 
                              <button id="enterAddress">Enter Address</button>
                          </a> 
                        </li>


                        
                         <li style="margin-right: 6px;"> 
                          <a href="#"> 
                              <button id="ignore">ignore</button>
                          </a> 
                        </li>

                         <li style="margin-right: 6px;"> 
                          <a href="#"> 
                              <button id="notify">Notify</button>
                          </a> 
                        </li>


                      </ul>

                   @else
                      <ul class="topicons">           
                        <li> <a href="#" class="twitterSM"> <img src="http://susanwins.com/uploads/73749_twittericon.png" />  </a> </li>
                        <li> <a href="#" class="facebookSM"> <img src="http://susanwins.com/uploads/84170_facebookicon.png" /> </a> </li>                        
                        <li> <a href="#" class="pinterestSM"> <img src="http://susanwins.com/uploads/18419_pinteresticon.png" /> </a> </li>
                        <li> <a href="#" class="instagramSM"> <img src="http://susanwins.com/uploads/18859_instaicon.png" />   </a> </li>
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


<!--  <div class="pmBoxContainer">
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
                     
                     <i class="fa fa-paper-plane pmTrigger"></i>
                   </div>
                   <p> Press enter to send message</p>
                   <form id="sendPrivateMessage">
                       <textarea id="privateMessageTextarea" class="chatCommon txtstuff" placeholder="Type Message" style="height:auto;" ></textarea>
                   </form>
               </div>
           </div>
     </div>
</div> -->
  

   @yield('split-content')

     @if(isset($user))
     <!--  <input type="hidden" value="{{ $user->id }}" id="userId" data-image="{{ $user->user_detail->profile_picture }}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}"> -->
          <!--   @if($user->user_detail->profile_picture == "")
               <input type="hidden" value="{{ $user->id }}" id="userId" data-profile="{{$user->user_detail->profile_picture}}" data-image="{{ '/user_uploads/default_image/default_01.png' }}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}">
          @else
              <input type="hidden" value="{{ $user->id }}" id="userId" data-profile="{{$user->user_detail->profile_picture}}" data-image="{{$user->user_detail->profile_picture}}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}">
          @endif
           -->
               <input type="hidden" value="{{ $user->id }}" id="userId" data-profile="{{$user->user_detail->profile_picture}}" data-image="{{$user->user_detail->profile_picture}}" data-name="{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}" data-isAdmin="{{ $user->is_admin }}">
      
      <!--  <img src ="{{asset('user_uploads')}}/user_{{$user->id}}/{{$user->user_detail->profile_picture }}" alt="" class="profile_pic" id="picPreview">  -->
    @endif
      @if(isset($session_id))
   <input type="hidden" value="{{ $session_id }}" id="sessionId">
  @endif
    @yield('background-content')
     <!--  <div class="pmBox draggable" id="pmBox" style="margin-left: 6px;">        
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
     </div> -->
    <div class="chatbox-panel" id="chatBoxPanel"></div>
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
        <script src="{{ asset('js/sockets.io.js') }}"></script>
        <script> 
            var myFriends = '<?php echo isset($myFriends) && count($myFriends) > 0 ? json_encode($myFriends) : "" ?>';
            var onlineFriendsList = [];
              var socket = io.connect('{{ url('') }}:8891');
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

    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
     <script src="{{ asset('js/privateMessaging.js') }}"></script>

     @yield('script')

  <script>

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
  var EMAIL = "{{ isset($_GET['email']) ? $_GET['email'] : ''}}";


/* $('#sendEmail').on('click', function(){
    console.log("You Click Me");
     $.ajax({
            url :baseUrl+'/admin/sendEmailAweber',
            data : { _token : CSRF_TOKEN },
            dataType : 'json',
            type : 'POST',
            success : function(data){
            console.log(data);
            },error : function(xhr){
              console.log(xhr.responseText);
            }
        });
  });
*/
  $(document).on('click', '#sendEmail', function(){
     console.log("You Click Me");
       $.ajax({
            url :baseUrl+'/admin/sendEmailAweber',
            data : { _token : CSRF_TOKEN },
            dataType : 'json',
            type : 'POST',
            success : function(data){
            console.log(data);
            },error : function(xhr){
              console.log(xhr.responseText);
            }
        });
  });



   $(document).on('click', '#enterAddress', function(){
     //console.log("You Click Me Address");
     var address = "My New Address";
       $.ajax({
            url :baseUrl+'/admin/enterAddress',
            data : { _token : CSRF_TOKEN, address: address },
            dataType : 'json',
            type : 'POST',
            success : function(data){
            console.log(data);
            },error : function(xhr){
              console.log(xhr.responseText);
            }
        });
  });

    $(document).on('click', '#ignore', function(){
       $.ajax({
            url :baseUrl+'/admin/ignore',
            data : { _token : CSRF_TOKEN},
            dataType : 'json',
            type : 'POST',
            success : function(data){
            console.log(data);
            },error : function(xhr){
              console.log(xhr.responseText);
            }
        });
  });

    $(document).on('click', '#notify', function(){
     console.log("You Click Me Address");

    changeFavicon("http://susanwins.com/uploads/43069_friendicon.png", 2);
    blink();
    //icon = '<i class="ion-android-happy lightorange"></i>';
    //changeFavicon(icon, "23");

    //$("#favicon").attr("href","http://susanwins.com/uploads/43069_friendicon.png").attr("title","Hello Wolrd");



     
  });

    function blink(){
    $("#favicon").delay(100).fadeTo(100,0.5).delay(100).fadeTo(100,1, blink);
}

  
     
  
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
                              //$('<img>').attr('src', friend.user.user_detail.profile_picture ? publicUrl+'/'+friend.user.user_detail.profile_picture : defaultProfilePic )
                              $('<img>').attr('src', getImage(friend.user.user_detail.profile_picture, friend.user.user_detail.user_id, 5050) )
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
                           // $('<img>').attr('src', friend.profile_picture ? publicUrl+'/'+friend.profile_picture : defaultProfilePic )
                            $('<img>').attr('src', getImage(friend.profile_picture, friend.user_id, 5050) )
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
                //$('<img>').attr('src', data.user.user_detail.profile_picture ? baseUrl+'/'+data.user.user_detail.profile_picture : defaultProfilePic )
                $('<img>').attr('src', getImage(data.user.user_detail.profile_picture. data.user.user_detail.user_id, 5050) )
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
          $(theButton).bind('ckick', readUserNotifications);
        }

        $('#myNotifications').html('');

        $.each(data, function(){

          li = $('<li>');

          request = this;
          if(request.type == 0)
          {
            button = $('<a href="javascript:;">')
            .append(
              //$('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
               $('<img>').attr('src', getImage(request.user.user_detail.profile_picture, request.user.user_detail.user_id, 5050) )
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
              //$('<img>').attr('src', request.user.profile_picture ? baseUrl+'/'+request.user.profile_picture : defaultProfilePic )
              $('<img>').attr('src', getImage(request.user.profile_picture, request.user.user_id, 5050))
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
                //$('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
                $('<img>').attr('src', getImage(request.user.user_detail.profile_picture, request.user.user_detail.user_id, 5050) )
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
                //$('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
                 $('<img>').attr('src', getImage(request.user.user_detail.profile_picture, request.user.user_detail.user_id, 5050) )
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
                //$('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
                 $('<img>').attr('src', getImage(request.user.user_detail.profile_picture, request.user.user_detail.user_id, 5050) )
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
                //$('<img>').attr('src', request.user.user_detail.profile_picture ? baseUrl+'/'+request.user.user_detail.profile_picture : defaultProfilePic )
                 $('<img>').attr('src', getImage(request.user.user_detail.profile_picture, request.user.user_detail.user_id, 5050) )
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
                            //$('<img>').attr('src', request.profile_picture ? publicUrl+'/'+request.profile_picture : defaultProfilePic )
                            $('<img>').attr('src', getImage(request.profile_picture, request.user_id, 5050) )
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

$(document).on('click', '.pmTrigger', function(){
    $(this).parents('.pmBox').find('form').submit();
});


/*  $('#sendPrivateMessage').on('submit', function(e){
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

      });*/
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

/*$(document).on('click', '.pmFriend', function(){

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
                        //$('<img>').attr('src', data.other_person.user_detail.profile_picture ? publicUrl+'/user_uploads/user_'+data.other_person.user_detail.user_id+'/'+data.other_person.user_detail.profile_picture : defaultProfilePic )
                        $('<img>').attr('src', getImage(data.other_person.user_detail.profile_picture, data.other_person.user_detail.user_id, 5050) )                        
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

      });*/

      /*socket.on('post_private_message', function(message){
          console.log('you got a private message!');
          console.log(profileImage);
          console.log(publicUrl+'/'+message.from.profile_picture );
          console.log(message);


          if($('#pmBox').data('current') == message.from.user_id && $('#pmBox').is(':visible')){
              console.log('real time add');

              $('#pmMessageContent').append(
                      $('<li>').append(
                        //$('<img>').attr('src', message.from.profile_picture ? publicUrl+'/'+message.from.profile_picture : defaultProfilePic )
                        $('<img>').attr('src', getImage(message.from.profile_picture, message.from.user_id, 5050) )
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
                                //$('<img>').attr('src', message.from.profile_picture ? publicUrl+'/'+ message.from.profile_picture : defaultProfilePic )
                                $('<img>').attr('src', getImage(message.from.profile_picture, message.from.user_id, 5050) )
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
      });*/

  
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
              console.log("testing debug");
              console.log(msg.from_user.user_detail.profile_picture);
                button = $('<a href="javascript:;">').addClass('subModalToggle pmFriend').attr('data-target', '#pmBox')
                              .append(
                                //$('<img>').attr('src', msg.from_user.user_detail.profile_picture ? publicUrl+'/'+ msg.from_user.user_detail.profile_picture : defaultProfilePic )
                                 //CHAMGES CALL A FUNCTION GET IMAGE
                                $('<img>').attr('src', getImage(msg.from_user.user_detail.profile_picture,  msg.from_user.user_detail.user_id, 5050) )
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

  /********************** START GET IMAGE ******************************************************************************/
  function getImage(profile_picture ,user_id, size) {

      if(size === null) {
          return  profile_picture ? publicUrl+'/user_uploads/user_'+user_id+'/'+profile_picture : defaultProfilePic;
      }
       return  profile_picture ? publicUrl+'/user_uploads/user_'+user_id+'/'+size+'/'+profile_picture : defaultProfilePic;
    }

  /********************** END GET IMAGE ******************************************************************************/

  $('#myMessages').on('click', 'li a', function(){

      $('#unreadMessageNotification').html('');
  });

  $('#messagesMenu').on('click', function(){

    $('#unreadMessageNotification').html('');

  });

   /*$('#userMenu').click(function(){
      $('.profileBox').toggle();
    });*/

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
      restriction: ".pmBoxContainer",
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

          console.log(event.dx);
        console.log(event.dy);
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


  $('.variable-width').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    variableWidth: true,
    autoplay: true
  });

 

  </script>
    <script src="{{ asset('js/clubhouse/croppie.js') }}"></script>
   @yield('custom_scripts')
  @yield('footer_scripts')


</body>
</html>

