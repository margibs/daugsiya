@extends('home.layout')

@section('page-title')
 - {{$post->title}}
@endsection

@section('scripts_here')
  <script type="text/javascript" src="https://www.youtube.com/player_api"></script>
@endsection

@section('for_og')
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{ url('uploads') }}/{{ $post->thumb_feature_image }}"/>
  <link rel="image_src" href="{{ url('uploads') }}/{{ $post->thumb_feature_image }}"/>
  <meta property="og:title" content="{{$post->title}}" />
@endsection

@section('singlecontent')

<style type="text/css">

      .popunder{
    position: fixed;
    bottom: -340px;
    right: 310px;
    z-index: 2;
}
      .fave{
      border-radius: 50px;
      border-top: 2px solid #D29B24;
      border-left: 2px solid #e7b240;
      border-right: 2px solid #e7b240;

      background: #fbf7ef; /* Old browsers */
      background: -moz-linear-gradient(top,  #fff 0%, #FFEA98  100%); /* FF3.6-15 */
      background: -webkit-linear-gradient(top,  #fff 0%,#FFEA98  100%); /* Chrome10-25,Safari5.1-6 */
      background: linear-gradient(to bottom,  #fff 0%,#FFEA98  100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#FFEA98 ',GradientType=0 ); /* IE6-9 */

      -moz-box-shadow: inset 0 12px 10px -2px #FFFFFF;;
      -webkit-box-shadow:inset 0 12px 10px -2px #FFFFFF;;
      box-shadow: inset 0 12px 10px -2px #FFFFFF;;

      padding: 0 12px;
      font-size: 19px;
      text-decoration: none;  
      font-family: 'Work Sans';
      font-weight: 600;
      color: #AD7B12;
      position: absolute;
      top: 0;
      z-index: 10;
      cursor: pointer;
      display: inline-block;
      }
      .fave span{
      position: relative;
      top: -1px;
      right: 1px;
      color: #AD7B4C;
      }
      .fave img{
      margin-right: 4px;
      width: 36px;
      }
      #addToFavorite, #removeToFavorite{
      top:-1px;
      left: 28px;
      }
      #addToFavorite span, #removeToFavorite span, #playedGame span{
      top: -10px;
      }
      
      #playedGame{
       /*right: 20px; 
      top: 71px;*/
        position: absolute;
        top: 0;
        right: 15px;
      }
      .playedGamePad{
        /*   right: 70px;
                padding: 10px 20px; */
            float: right;
            margin-left: 15px;
            margin-right: 19px;
            text-decoration: none;
      }
      #playedGame span{
         right: 6px;
      }
      #playedText{
       /* margin-left: 375px; */
       padding: 9px 9px 9px 25px;
       /*width: 515px;*/
       left: 41%;
       /* width: 336px; */
         width: 222px;
    text-align: center;
      }
      #totalVoters{
           top: -3px;
          font-size: 14px;
          right: -5px;
      }
      .susanExpression{
            width: auto;
            left: 36%;
            position: absolute;
            z-index: 11;
            top: -16px;
      }
      .no-gutter > [class*='col-'] {
      padding-right:0;
      padding-left:0;
      }
      #planeMachine{
      width: 100%;
      height: 280px;
      }
      .reels{
      padding: 0 53px 0 67px;
      margin-top: 0px;
      height: 234px;
      overflow: hidden;
      }
      .reels img{
      border-right: 2px solid #040404;
      }
      .casinolist {
        margin: 25px 0;
        }
        .casinolist li, .casinolist li a{
        display: inline-block;
        }
        .casinolist li a img{
        margin: 0 2px;
        width: 150px!important;
        height: auto;
        }
      #no-comments{
      font-family: Roboto;
      margin-left: 40px;
      margin-top: 20px;
      }

      .sidebar .sidebarInner{
      background: #c20f14;
      padding: 12px 14px 12px 19px;
      margin-top: -57px;
      border-radius: 4px;
      overflow: hidden;
      -moz-box-shadow: 2px 0 6px -2px #000;
      -webkit-box-shadow: 2px 0 6px -2px #000;
      box-shadow: 2px 0 6px -2px #000;
      }
      .sidebar .susan{
      margin-top: 60px;
      }
      .sidebar h3{
      padding: 0 0px 0px 0px;
      margin: 3px 0 15px 2px;
      font-family: 'Work Sans';
      color: #9a0a0e;
      font-weight: 800;
      font-size: 30px;
      border-bottom: 1px solid #b00c0c;
      }
      .sidebar .rellimg img{
      width: 100%;
      background: #ffe18d;
      background: -moz-linear-gradient(top, #ffe18d 0%, #cd8b01 27%, #ffe491 57%, #cfb319 80%, #cdb985 100%);
      background: -webkit-linear-gradient(top, #ffe18d 0%,#cd8b01 27%,#ffe491 57%,#cfb319 80%,#cdb985 100%);
      background: linear-gradient(to bottom, #ffe18d 0%,#cd8b01 27%,#ffe491 57%,#cfb319 80%,#cdb985 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffe18d', endColorstr='#cdb985',GradientType=0 );
      -moz-background-size: 250% 250%, 100% 100%;
      background-size: 250% 250%, 100% 100%;
      -webkit-transition: background-position 0s ease;
      -moz-transition: background-position 0s ease;
      -o-transition: background-position 0s ease;
      transition: background-position 0s ease;
      border-radius: 7px;
      overflow: hidden;
      -moz-box-shadow: 0 0 10px -2px #000;
      -webkit-box-shadow: 0 0 10px -2px #000;
      box-shadow: 0 0 10px -2px #000;
      height: auto;
      margin: 10px 0;
      padding: 2px;
      }
      .singlePostBG{
      height: 100%;
      position: absolute;
      top: 687px;
      width: 99%;
      left: 12px;
      }
      .randombutton {
      background: #ffa8a9;
      background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
      background: -moz-linear-gradient(top, #ffa8a9 0%, #911e1f 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffa8a9), color-stop(100%,#911e1f));
      background: -webkit-linear-gradient(top, #ffa8a9 0%,#911e1f 100%);
      background: -o-linear-gradient(top, #ffa8a9 0%,#911e1f 100%);
      background: -ms-linear-gradient(top, #ffa8a9 0%,#911e1f 100%);
      background: linear-gradient(to bottom, #ffa8a9 0%,#911e1f 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffa8a9', endColorstr='#911e1f',GradientType=0 );
      border-radius: 50px;
      padding: 2px;
      width: 38%;
      margin-left: 60px;
      cursor: pointer;
      text-align: center;
      margin: 0 auto;
      z-index: 2;
      position: relative;
      }

      .randombutton .inner, .claimbutton .inner {
         border-radius: 50px!important;
          padding: 6px 0;
          background: #f3961c;
          background: -webkit-gradient(linear, 0 0, 0 100%, from(#FFFDF2), to(#ffffff))!important;
          background: -moz- linear-gradient(#FFFDF2, #ffffff)!important;
          background: -o- linear-gradient(#FFFDF2, #ffffff)!important;
          background: linear-gradient(#FFFDF2, #ffffff)!important;
          border: none!important;
      }
      .claimbutton .inner {
      margin: 0!important;
      text-align: center!important;
      }
      .randombutton .inner img, .claimbutton .inner  img{
      width: auto;
      }

      .claimbutton {
      background: #f1d841;
      background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
      background: -moz-linear-gradient(top, #f1d841 0%, #ca9b20 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f1d841), color-stop(100%,#ca9b20));
      background: -webkit-linear-gradient(top, #f1d841 0%,#ca9b20 100%);
      background: -o-linear-gradient(top, #f1d841 0%,#ca9b20 100%);
      background: -ms-linear-gradient(top, #f1d841 0%,#ca9b20 100%);
      background: linear-gradient(to bottom, #f1d841 0%,#ca9b20 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f1d841', endColorstr='#ca9b20',GradientType=0 );
      border-radius: 50px;
      padding: 2px;
      cursor: pointer;

      width: 39%;
      margin: 30px auto 20px auto;
      }


      .commentsReel{
      margin-left: -2px;
      position: absolute;
      top: 20px;
      left: 3px;
      width: 100.1%;
      }

      .related {
      background-color: #a27721;
      width: 97.5%;
      padding-top: 10px;
      margin: 0 auto;
      position: absolute;
      top: 64px;
      left: 13px;
      }
      .related .outer {
      background-color: #DABE83;
      margin: 10px 30px 10px 30px;
      padding-top: 1px;
      border-radius: 2px;
      -moz-box-shadow: inset 0 0 10px -1px #000;
      -webkit-box-shadow: inset 0 0 10px -1px #000;
      box-shadow: inset 0 0 10px -1px #000;
      border: 1px solid #8C6416;
      }
      .related .outer .inner {
      background: #F9F3E8;
      background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
      background: -moz-linear-gradient(left, #F9F3E8 0%, #ffffff 21%, #ffffff 50%, #ffffff 79%, #F9F3E8 100%);
      background: -webkit-gradient(linear, left top, right top, color-stop(0%,#F9F3E8), color-stop(21%,#ffffff), color-stop(50%,#ffffff), color-stop(79%,#ffffff), color-stop(100%,#F9F3E8));
      background: -webkit-linear-gradient(left, #F9F3E8 0%,#ffffff 21%,#ffffff 50%,#ffffff 79%,#F9F3E8 100%);
      background: -o-linear-gradient(left, #F9F3E8 0%,#ffffff 21%,#ffffff 50%,#ffffff 79%,#F9F3E8 100%);
      background: -ms-linear-gradient(left, #F9F3E8 0%,#ffffff 21%,#ffffff 50%,#ffffff 79%,#F9F3E8 100%);
      background: linear-gradient(to right, #F9F3E8 0%,#ffffff 21%,#ffffff 50%,#ffffff 79%,#F9F3E8 100%);
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#F9F3E8', endColorstr='#F9F3E8',GradientType=1 );
      /* background: #fff; */
      margin: 10px;
      border: 1px solid #fff;
      border-radius: 2px;
      }
      .related .outer .inner h6 {
       font-family: 'Work Sans';
       color: #9A0A0E;
       padding: 20px 20px 5px 4px;
       font-size: 25px;
       font-weight: 800;
       border-top: 1px solid rgba(185, 127, 11, 0.17);
       margin-top: 37px;
       margin: 37px 20px 20px 20px;
      }
      .related .outer .inner ul {
      padding: 15px 20px 30px 20px;
      text-align: center;
      }
      .related .outer .inner ul li, .related .outer .inner ul li a {
      display: inline-block;
      }
      .related .outer .inner ul li {
      width: 19%;
      }
      .related .outer .inner ul li a {
      width: 100%;
      }
      .related .outer .inner ul li a img {
      width: 100%;
      }

      .related .outer .inner .comments ul li{
      width: 100%;
      margin-bottom: 10px;
      text-align: left;

      }
      .related .outer .inner .comments ul li .commentlist img{
      border-radius: 50%;
      width: 50px;
      float: left;
      margin: 15px 15px 0 0px;
      border: 1px solid #ECECEC;
      }
      .related .outer .inner .comments ul li .commentlist  .timestamp{
      display: block;
      font-size: 11px;
      color: #ECD8AB;
      font-family: 'Work sans',roboto,arial;
      letter-spacing: 0px;
      text-align: right;
      margin-bottom: 10px;
      position: relative;
      top: 10px;
      }
      .related .outer .inner .comments ul li .commentlist p{
      font-size: 15px;
      font-family: 'Work Sans';
      line-height: 19px;
      font-weight: 500;
      margin-top: 10px;
      /*border: 1px solid #F7F0E2;*/
      padding: 0 0 10px 10px;
      width: 81%;
      border-radius: 5px;
      }
      .related .outer .inner .comments ul li .commentlist .reply_btn{
      width: 100%;
      display: block;
      font-size: 12px;
      margin-top: 5px;
      text-decoration: none;
      color: #D8BC81;
      padding-left:64px;
      font-family: Roboto;
      }
      .related .outer .inner .comments ul{
      padding-top: 0;
      padding-bottom: 5px;
      }
      .related .outer .inner .comments textarea{
      width: 84%;
      margin: 20px 35px;
      border: 1px solid #fff;
      border-radius: 3px;
      padding: 18px 20px;
      font-size: 15px;
      font-family: 'Work sans', Arial, Helvetica;

      -moz-box-shadow: 0 5px 4px -4px #f6e2b8;
      -webkit-box-shadow: 0 5px 4px -4px #f6e2b8;
      box-shadow: 0 5px 4px -4px #f6e2b8;


      height: 100px;
      }
      .replies-parent{
      overflow: hidden;
      }
      .reply-list{
      margin-left: 60px;
      margin-top: 10px;
      }
      .comment-info, .reply-info{
      font-family: 'Work Sans';
      font-size: 13px;
      font-weight: 400;
      color: #CCCCCC;
      /*text-align: right;*/
      }
      .comment-content, .reply-content{
      font-size: 15px;
      font-family: 'Work Sans';
      line-height: 19px;
      font-weight: 500;
      margin-top: 5px;
      /* border: 1px solid #F7F0E2; */
      padding: 5px 0 15px 64px;
      width: 81%;
      border-radius: 5px;
      }
      .comment-info, .livetime{
      font-weight: 500;
      font-family: Roboto;
      }
      .reply-form{
      padding-left: 70px;
      }
      .reply-form textarea{
      border: 1px solid #F9F4EA!important;
      }
      .rednotifbox{
      background: #FFE7E7;
      margin: 10px 20px;
      padding: 16px;
      border-radius: 5px;
      text-align: center;
      color: #D26060;
      font-family: Roboto;
      }
      .rednotifbox a{
      font-family: Roboto;
      text-decoration: none;
      color: #CA1B1B;    
      font-weight: 600; 
      }
      .button_example{
      cursor: pointer;
      border:1px solid #b1423a; -webkit-border-radius: 3px; -moz-border-radius: 3px;border-radius: 3px;font-size:25px; padding: 12px 12px 12px 12px; text-decoration:none; display:inline-block;text-shadow: -1px -1px 0 rgba(0,0,0,0.3); color: #FFFFFF;
      background-color: #C9625B; background-image: -webkit-gradient(linear, left top, left bottom, from(#C9625B), to(#d20202));
      background-image: -webkit-linear-gradient(top, #C9625B, #d20202);
      background-image: -moz-linear-gradient(top, #C9625B, #d20202);
      background-image: -ms-linear-gradient(top, #C9625B, #d20202);
      background-image: -o-linear-gradient(top, #C9625B, #d20202);
      background-image: linear-gradient(to bottom, #C9625B, #d20202);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#C9625B, endColorstr=#d20202);

      display: block;
      text-align: center;
      width: 40%;
      margin: 0 auto 40px auto;
      font-family: 'Work Sans';
      font-weight: 600;

      }

      .button_example:hover{
      border:1px solid #8f352f;
      background-color: #b5433c; background-image: -webkit-gradient(linear, left top, left bottom, from(#b5433c), to(#9f0202));
      background-image: -webkit-linear-gradient(top, #b5433c, #9f0202);
      background-image: -moz-linear-gradient(top, #b5433c, #9f0202);
      background-image: -ms-linear-gradient(top, #b5433c, #9f0202);
      background-image: -o-linear-gradient(top, #b5433c, #9f0202);
      background-image: linear-gradient(to bottom, #b5433c, #9f0202);filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#b5433c, endColorstr=#9f0202);
      }


      .related .outer .inner .comments .button_example{
      font-size: 20px;
      padding: 10px;
      width: 30%;
      }
      .singleFooter{
      position: absolute;
      bottom: 0;
      width: 100.3%;
      }
      .singelTopReel{
      position: absolute;

      width: 99%;
      left: 12px;
          height: 687px;
      }
      .featImg {
      position: relative;
      margin-top: 50px;
      margin-left: 44px;      
      }
      .featImg img{
      width: 838px;
      height:192px;
      margin-bottom: 20px;
      }

      .content{
      position: relative;
      margin-top: 170px;
      padding-left: 8px;
      padding-bottom: 280px;
      }
      .content h2{
      padding: 20px 35px 20px 10px;
      margin: 10px 70px 0px 70px;
      font-family: "Work Sans";
      color: rgb(154, 10, 14);
      font-weight: 800;
      font-size: 30px;
      line-height: 33px;
      border-bottom: 1px solid rgb(221, 221, 221);
      }
      .content h2 span{
      display: block;
      font-weight: 500;
      color: rgb(239, 162, 162);
      font-family: Roboto;
      font-size: 16px;
      margin-top: 5px;
      }
      .content p b{
      font-weight: 500;
      }
      .content p {
      font-weight: 400;
      font-size: 17px;
      font-family: Roboto;
      line-height: 25px;
      margin: 30px 80px 0px 80px;
      }
      .content p img{
      /*width: 743px;*/
      width: auto;
      border-radius: 2px;
      cursor: pointer;
      /*height: 463px; */
      }
      .content .commentCount{
      font-size: 16px;
      margin-top: -3px;
      color: #9A0A0E;
      cursor: pointer;
      }
      #api_count{
      font-family: 'Work Sans';
      font-size: 32px;
      font-weight: 700;
      color: #353030;
      padding: 3px 5px 2px 5px;
      border-radius: 5px;
      display: inline-block;
      margin-top: 7px;
      /* background: #DFC546; */
      position: relative;
      top: 2px;
      margin-right: 3px;
      }
      .contentSociallinks{
      margin-left: 70px;
      }
      .contentSociallinks li, .contentSociallinks li a{
      display: inline-block;
      }
      .contentSociallinks li a{
      color: #fff;
      padding: 5px 25px;
      font-size: 25px;
      border-radius: 3px;
      }
      .contentSociallinks li a.fb{
      background: #3b5998;
      }
      .contentSociallinks li a.tw{
      background: #54abee;
      }
      .contentSociallinks li a.pn{
      background: #d73532;
      }
      .contentSociallinks li a.g{
      background: #dc4a38;
      }
      .right{
      position: absolute;
      right: 30px;
      }
      .left{
      position: absolute;
      z-index: 2;
      }





      #wrapper{
      position: absolute;
      border: 0;
      width: 100%;
      top:525px;
      }
      #wrapper a {
      width: 65px;
      height: 38px;
      position: relative;
      left: 70px;
      z-index: 5;
      top: -28px;
      } 
      #wrapper a img{
      margin-top: -13px;
      width: auto;
      }


      #playbig {
        position: absolute;
        right: 160px;
        top: -41px;
        margin-left: 0;
      }
      #playbig .button{
        text-align: center;
        font: 33px/0.9em 'Work Sans',sans-serif;
        padding: .2em .6em;
      }
      .reply-list{
      margin-left: 10%;
      margin-top: 10px;
      overflow: hidden;
      position: relative;
      float: left;
      width: 90%;
      }

      #commentList .temporary{
      opacity: 0.2;
      }

      .recommendBox{
      left: 40%;
      top: 20%;
      position: fixed;
      z-index: 10;
      }

      .recommendBox .fa-times{
      position: absolute;
      z-index: 2;
      right: 0;
      margin: 7px;
      color: #CECECE;
      cursor: pointer;
      }

      .recommendBox .recommendFriends{
      overflow: hidden;
      border-radius: 5px;
      background: rgba(255, 255, 255, 0.98);
      width: 370px;
      height: 490px;
      text-align: center;
      position: relative;
      padding: 0 0 20px 0;
      display: none;
      -moz-box-shadow: 0 0 30px -10px #000;
      -webkit-box-shadow: 0 0 30px -10px #000;
      box-shadow: 0 0 30px -10px #000;
      }
      .recommendBox .recommendFriends p{
          font-family: Roboto;
          font-weight: 500;
          margin-top: 10px;
          font-size: 13px;
          color: #BFBABA;
          border-bottom: 1px solid #F0F0F0;
          padding-bottom: 9px;
      }
      .recommendFriends ul{
      height: 426px;      
      }

      .recommendFriends ul li{
      overflow: hidden;
      border-bottom: 1px solid rgba(255, 255, 255, 0.48);
      padding-bottom: 10px;
      padding: 10px 20px;
      background: rgba(255, 255, 255, 0.50);
      transition: background 0.2s ease;
      position: relative;
      text-align: left;
      }

      .recommendFriends ul li .msgImgcont{
      width: 50px;
      height: 50px;
      border-radius: 50%;
      overflow: hidden;
      float: left;
      }

      .recommendFriends ul li .msgImgcont img{
      width: 100%;
      }

      .recommendFriends ul li h6{
      font-family: 'Work Sans';
      margin-left: 75px;
      display: block;
      font-size: 16px;
      font-weight: 600;
      padding-top: 10px;
      color: #000;
      }

      .recommendFriends ul li .recommendCheck{
      float: right;
      margin-top: -12px;
      margin-right: 16px;
      }

      .recommendBox .recommendBtn{
      background: #A40605;
      border: none;
      display: block;
      width: 352px;
      padding: 7px;
      border-radius: 2px;
      color: #fff;
      font-family: 'Work Sans';
      font-size: 20px;
      font-weight: 500;
      -moz-box-shadow: 0px 2px 3px -2px #696969;
      -webkit-box-shadow: 0px 2px 3px -2px #696969;
      box-shadow: 0px 2px 3px -2px #696969;
      cursor: pointer;
      margin: 8px auto;
      }

      #recommendToFriend{
      background: #A40605;
      padding: 9px 10px;
      border-radius: 2px;
      color: #fff;
      font-family: 'Work Sans';
      font-size: 14px;
      font-weight: 200;
      display: block;
      position: relative;
      top: -3px;
      -moz-box-shadow: 0px 2px 3px -2px #696969;
      -webkit-box-shadow: 0px 2px 3px -2px #696969;
      box-shadow: 0px 2px 3px -2px #696969;
      cursor: pointer;
      border: none;
      }
      .commentRelativeBox{
      overflow: hidden;
      left: 5px;
      position:relative;
      margin-top: -18px;
      }

      .bottomCasinos{
         background: #fff url(http://susanwins.com/uploads/86674_casinobonusbg.jpg) center no-repeat;
         width: 93%;
       text-align: center;
       margin: 10px 30px 10px 30px;
       border-radius: 5px;
       padding: 50px 0 10px 0;   

       -moz-box-shadow: 0 0 10px -5px #000;
-webkit-box-shadow: 0 0 10px -5px #000;
box-shadow: 0 0 10px -5px #000;
      }
      .bottomCasinos .ribbon{
             width: auto;
    position: absolute;
    z-index: 2;
    left: 160px;
    top: 31px;
      }
      .bottomCasinos ul li, .bottomCasinos ul li a{
      display: inline-block;
      }
      .bottomCasinos ul li {
      width: 18%!important;
          margin: 0 5px;
      }
      .bottomCasinos ul li a img{
      width: 100%;
      border-radius: 5px;
      }



   
      .not_count{
        height: auto!important;
      }
      .totalcontainer{
      position: absolute;
      overflow: hidden;
      width: 159px;
      height: 32px;
      left: 11%;
      }
      .totalcontainer .innertotalcontainer{
      width: 85%;
      height:auto;
      overflow: hidden;
      }
      .totalcontainer .innertotalcontainer img{
        width: 135px;
      }
      .up1level{
        position: relative;
        z-index: 2; 
      }
      .text-center{
        position: relative;
      }

      .rateBtn{
          text-align: right;
          padding-right: 90px;
      }
      .addBtn{
          padding-left: 90px;
      }
      .gameExp{
        position: relative;
        top: 82px;
      }
      .musicStar{
        top: 140px;    
      }
      .longtermStar{
        top: 130px;    
      }
      .funStar{
        top: 121px;    
      }
      .graphicStar{
        top: 128px;    
      }

         @media(max-width: 1199px){
      .singelTopReel{
            height: auto;
      }
      .right{
      right:2px; 
      width: 25%;
      }
      .left{
      left: -19px;
      }
      .content p img{
        height: auto;
      }

      .featImg img{
        height: auto;
        width: 100%;
        margin-bottom: 0;
      }
      .featImg{
      margin-top: 41px;
      margin-left: 38px;
      width: 92.5%;
      }
      .reels {
      padding: 0 41px 0 58px;
      margin-top: 12px;
      height: 200px;
      }
      .singlePostBG{
      top: 569px;
      }
      .content{
      margin-top: 150px;
      }
      #wrapper{
      top: 427px;
      }
      .related{
      top: 57px;
      left: 11px;
      }
      .gameExp{
      top: 62px!important;
      }
      #playbig{
      top: -25px;
      }
     
      #playbig .button{
      font: 30px/0.9em 'Work Sans',sans-serif;
      padding: .1em .6em;
      }
      #playbig a {
      width: 130px!important;
      height: 70px!important;
      }
     .casinolist li a img{
      width: 150px!important;
      }
      .casino_yes{
       margin-left: 216px;
      }
      }
      @media(max-width: 991px){
      .featImg {
      margin-top: 32px;
      margin-left: 31px;
      width: 92.7%;
      }
      #addToFavorite span, #removeToFavorite span, #playedGame span {
          top: -7px;
      }
      .reels {
      padding: 0 29px 0 48px;
      margin-top: 8px;
      height: 156px;
      }
      #wrapper {
      top: 326px;
      left: -13px;
      }
      #wrapper a {
      width: 60px;
      height: 35px;
      }
      .singlePostBG{
      top: 440px;
      }
      .content {
      margin-top: 111px;
      }
      .content h2{
      margin: 10px 31px 0px 49px;
      }
      .content p{
      margin: 30px 41px 0px 60px;
      }
      .contentSociallinks {
      margin-left: 53px;
      }
      .singleFooter{
      left: 3px;
      height: auto;
      }
      .commentsReel{
      top: 29px;
      left: 6px;
      }
      .related .outer .inner ul li {
      width: 24%;
      }
      .randombutton, .claimbutton{
      width: 50%;
      }
      .gameExp {
      top: 47px!important;
      }
      .fave{
        font-size: 15px;
      }
      .fave img{
      width: 27px;
      }
      .fave span {
      top: -8px;
      }
      #addToFavorite, #removeToFavorite{
      left: 66px;  
      }
      #playedGame{
      right: 40px;
      }
      #playbig{
      right: 90px;  
      }
      #playbig a {
      width: 119px!important;
      height: 60px!important;
      }
      #playbig .button {
      font: 25px/0.9em 'Work Sans',sans-serif;
      }
      #playbig {
      top: -13px;
      }
      .popupheading{
      font-size: 23px!important;
      margin-bottom: 10px!important;
      }
      #recommendToFriend{
      top: 11px;  
      }
      .musicStar {
      top: 92px;
      }
      .longtermStar {
      top: 86px;
      }
      .funStar {
      top: 81px;
      }
      .graphicStar {
       top: 81px;
      }      
      .totalcontainer .innertotalcontainer img {
      width: 100px;
      }
      }
      @media(max-width: 768px){
      .related .outer .inner ul li {
      width: 24%;
      }
      .right {
      display: none;
      }
      .left {
      left: auto;
      }
      .singlePostBG {
      top: 568px;
      }
      .reels {
      padding: 0 40px 0 57px;
      margin-top: 12px;
      height: 197px;
      }
      .featImg {           
      margin-left: 36px;
      width: 92.4%;
      margin-top: 40px;
      }
      #wrapper{
      top: 419px;
      }
      .content {
      margin-top: 150px;
      }
      .content p {
      margin: 30px 53px 0px 60px;
      }
      .commentsReel{
      top: 30px;
      left: 4px;
      width: 100.2%;
      }
      .related{
      width: 97.6%;
      left: 11px;
      top: 65px;
      }
      .singleFooter{
      left: 1px;
      }
      .related .outer .inner ul li {
      width: 23%;
      }

      }
      
      #random_game{
      position: relative;
      display: block;
      padding-bottom: 18px;
      }
      .pointingSusan{  
      background: transparent url(http://susanwins.com/uploads/43589_casinobonusbgmain.png) no-repeat center bottom;    
      position: absolute;
       bottom: -12px;
       z-index: 2;
       width: 89%;
       left: 58px;
       height: 268px;
      }
      .pointingSusan a{
           border-bottom: 1px solid #BA1916;
         color: #fff;
         font-family: 'Work Sans';
         font-weight: 600;
         float: right;
          text-align: center;
         margin-right: 100px;
        margin-top: 135px;
          font-size: 30px;
          text-decoration: none;
          padding: 20px 40px 0px 40px;
          border-radius: 5px;
         background: rgb(182,21,17);
         background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2I2MTUxMSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNkYjNiMzgiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
         background: -moz-linear-gradient(top,  rgba(182,21,17,1) 0%, rgba(219,59,56,1) 100%);
         background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(182,21,17,1)), color-stop(100%,rgba(219,59,56,1)));
         background: -webkit-linear-gradient(top,  rgba(182,21,17,1) 0%,rgba(219,59,56,1) 100%);
         background: -o-linear-gradient(top,  rgba(182,21,17,1) 0%,rgba(219,59,56,1) 100%);
         background: -ms-linear-gradient(top,  rgba(182,21,17,1) 0%,rgba(219,59,56,1) 100%);
         background: linear-gradient(to bottom,  rgba(182,21,17,1) 0%,rgba(219,59,56,1) 100%);
         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b61511', endColorstr='#db3b38',GradientType=0 );
       

         -moz-box-shadow: 0 0 10px -2px #000;
-webkit-box-shadow: 0 0 10px -2px #000;
box-shadow: 0 0 10px -2px #000;

      }
       .pointingSusan a img{
             float: right;
    margin-top: -19px;
    margin-left: 6px;
       }
      .oval-speech-border{
          position: relative;
          padding: 50px 0px;
          margin: -51px auto 60px 155px;
          border: 2px solid #f4d597;
          text-align: center;
          color: #333;
         background: rgb(255,250,232);
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmFlOCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjM0JSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZmZkZjkiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  rgba(255,250,232,1) 0%, rgba(255,255,255,1) 34%, rgba(255,253,249,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,250,232,1)), color-stop(34%,rgba(255,255,255,1)), color-stop(100%,rgba(255,253,249,1)));
background: -webkit-linear-gradient(top,  rgba(255,250,232,1) 0%,rgba(255,255,255,1) 34%,rgba(255,253,249,1) 100%);
background: -o-linear-gradient(top,  rgba(255,250,232,1) 0%,rgba(255,255,255,1) 34%,rgba(255,253,249,1) 100%);
background: -ms-linear-gradient(top,  rgba(255,250,232,1) 0%,rgba(255,255,255,1) 34%,rgba(255,253,249,1) 100%);
background: linear-gradient(to bottom,  rgba(255,250,232,1) 0%,rgba(255,255,255,1) 34%,rgba(255,253,249,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fffae8', endColorstr='#fffdf9',GradientType=0 );

          -webkit-border-top-left-radius: 240px 140px;
          -webkit-border-top-right-radius: 240px 140px;
          -webkit-border-bottom-right-radius: 240px 140px;
          -webkit-border-bottom-left-radius: 240px 140px;
          -moz-border-radius: 240px / 140px;
          border-radius: 135px / 82px;
          height: 155px;
          width: 260px;
      }
      .oval-speech-border:before {
          content: "";
          position: absolute;
          z-index: 2;
          bottom: -23px;
          right: 50%;
          width: 50px;
          height: 23px;
          border-style: solid;
          border-width: 0 2px 2px 0;
          border-color: #f4d597;
          margin-right: -10px;
          background: transparent;
          -webkit-border-bottom-right-radius: 80px 50px;
          -moz-border-radius-bottomright: 80px 50px;
          border-bottom-right-radius: 80px 50px;
          display: block;
      }
      .oval-speech-border:after {
          content: "";
          position: absolute;
          z-index: 2;
          bottom: -21px;
          right: 50%;
          width: 20px;
          height: 22px;
          border-style: solid;
          border-width: 0 2px 2px 0;
          border-color: #f4d597;
          margin-right: 20px;
          background: transparent;
          -webkit-border-bottom-right-radius: 40px 50px;
          -moz-border-radius-bottomright: 40px 50px;
          border-bottom-right-radius: 40px 50px;
          display: block;
      }
      .oval-speech-border > :first-child:after{
             content: "";
             position: absolute;
             z-index: 1;
             bottom: -37px;
             right: 46%;
             width: 30px;
             height: 15px;
            background: #fff;
      }
       .oval-speech-border p{
             margin: 0;
             padding: 0;
             text-align: center;
             color: red;
             position: absolute;
             left: 14%;
             top: 32px;
             width: 73%;
             color: #ba861f;
             font-family: 'Work Sans';
             font-weight: 600;
             font-size: 30px;
             line-height: 23px;
       }
      .pointingSusan img{
      width: auto;
      float: left;
      position: relative;
      z-index: 2;
      }

  /*    .postcontent p img
      {
            display:none;
      }
*/
 .moveLeft{
  left: 32%;  
}
#planeMachine2, #planeMachine3, #planeMachine4, #planeMachine5{
      height: 250px;
}
.hidethenshow{
    display: none;
    width: auto!important;
    height: auto!important;
    position: absolute;
    left: 290px;
    top: 22px;
}
.hidethenshowtwo{
   display: none;
    width: auto!important;
    height: auto!important;
    position: absolute;
    top: 130px;
    left: 341px;  
}
</style>

@if(isset($user))
      <div class="recommendBox">
        <div class="recommendFriends">
          <i class="fa fa-times"></i>
          <p> Select your friends: </p>
          <ul id="friendRecommentList">
          </ul>
          <button class="recommendBtn" id="recommendBtn" type="button"> <i class="ion-android-happy"> </i> Recommend Game</button>
        </div>
      </div>
@endif




<div clbeass="container-fluid">
  <div class="container"  style="position:relative;">
    <div class="row no-gutter">
      <div class="col-xs-24 col-lg-24 col-lg-24 col-lg-24">
       

        <div class="col-xs-24 col-sm-19 col-md-19 col-lg-19 left" id="main">

          <img src="{{ url('images/responsive/singleTopReel.png') }}" class="singelTopReel" />
          <img src="{{ url('images/responsive/singlePostBG.png') }}" class="singlePostBG">
          
          <div class="featImg featimg">
             <img src="{{ asset('images/responsive/clickoncasinos.png') }}" class="hidethenshow" />
             <img src="{{ asset('images/responsive/belowToPlay.png') }}" class="hidethenshowtwo" />
             <img src="{{ url('uploads')}}/{{$post->feat_image_url}}" alt="" class="replaceme">
          </div>

         <div class="reels">
                  <div class="row no-gutter">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="planeMachine2" style="height:227px;">
                         
                              <div class="text-center">
                                <div class="totalcontainer musicStar">
                                <div class="innertotalcontainer" style="width:{{ $widget_ratings->music_sounds / 10 * 100 }}%;">
                                <img src="http://susanwins.com/uploads/56148_stars.jpg" style="border:none;"  /></div></div>
                                <img src="http://susanwins.com/uploads/19401_music.jpg">                            
                              </div>

                              <div class="text-center">
                               {!! $casino_lists[0] !!}
                              </div> 

                              <div class="text-center">
                               {!! $casino_lists[0] !!}
                              </div> 

                              <div class="text-center">
                               {!! $casino_lists[0] !!}
                              </div> 
                            
                              
                          </div>
                    </div>          
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="planeMachine3"  style="height:227px;">

                              <div class="text-center">
                                <div class="totalcontainer longtermStar"><div class="innertotalcontainer" style="width:{{$widget_ratings->long_term_play / 10 * 100}}%;"><img src="http://susanwins.com/uploads/56148_stars.jpg" style="border:none;"  /></div></div>
                                <img src="http://susanwins.com/uploads/80687_longterm.jpg">  
                              </div>

                             <div class="text-center">
                                {!! $casino_lists[1] !!}
                              </div> 

                              <div class="text-center">
                                {!! $casino_lists[1] !!}
                              </div> 

                              <div class="text-center">
                                {!! $casino_lists[1] !!}
                              </div> 
                              
                           
                          </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="planeMachine4" style="height:227px;">

                          <div class="text-center">
                            <div class="totalcontainer funStar"><div class="innertotalcontainer" style="width:{{$widget_ratings->fun_rate / 10 * 100}}%;"><img src="http://susanwins.com/uploads/56148_stars.jpg" style="border:none;" /></div></div>
                            <img src="http://susanwins.com/uploads/81613_funrating.jpg">         
                          </div>

                          <div class="text-center">
                            {!! $casino_lists[2] !!}
                          </div>
                           
                           <div class="text-center">
                            {!! $casino_lists[2] !!}
                          </div>

                          <div class="text-center">
                            {!! $casino_lists[2] !!}
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="planeMachine5" style="height:227px;">

                          <div class="text-center">
                            <div class="totalcontainer graphicStar"><div class="innertotalcontainer" style="width:{{$widget_ratings->graphics / 10 * 100}}%;"><img src="http://susanwins.com/uploads/56148_stars.jpg" style="border:none;"  /></div></div>
                            <img src="http://susanwins.com/uploads/47931_graphic.jpg">
                          </div>

                         <div class="text-center">
                             {!! $casino_lists[3] !!}
                          </div> 

                          <div class="text-center">
                             {!! $casino_lists[3] !!}
                          </div> 

                          <div class="text-center">
                             {!! $casino_lists[3] !!}
                          </div> 
                          
                      
                        </div>
                    </div>
                  </div>
          </div> 

      <!--     <div class="reels">
                  <div class="row no-gutter">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div id="planeMachine2" >
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
                            <img src="http://susanwins.com/uploads/72613_tales_of_krakow.jpg">
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
                            <img src="http://susanwins.com/uploads/20611_wildgamblerreel.jpg">
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
           </div> -->

          <div id="wrapper">
            <div class="socbtn"> 
              <a class="button fbblue serif round glass sharrre" id="share_via_facebook" data-url="http://susanwins.com/sunset-beach-online-slots-review" data-text="Share this up!"><img src="http://susanwins.com/uploads/34329_fb-button.png" style="left: 2px!important;top: -4px;"></a>
              <a class="button pink serif round glass sharrre" id="share_via_pinterest" style="left:55px;" data-url="http://susanwins.com/sunset-beach-online-slots-review" data-text="Pin me!"><img src="http://susanwins.com/uploads/76008_pinterestubtton.png" style="left:4px!important;top: -3px;"></a>
              <a class="button blue serif round glass sharrre" id="share_via_twitter" style="left: 40px;" data-url="http://susanwins.com/sunset-beach-online-slots-review" data-text="I'm tweeting this awesome game!"><img src="http://susanwins.com/uploads/70478_twitter-icon.png" style="top: -3px;left: 1px;"></a>      
              <a class="button pink serif round glass sharrre" id="share_via_googlePlus" style="left:25px;" data-url="http://susanwins.com/sunset-beach-online-slots-review" data-text=""><img src="http://susanwins.com/uploads/79339_g+button.png"></a>
            </div>

            <div id="playbig">
              <a id="winwinwin3" class="button pink serif round glass"> Play Now! </a>         
            </div>


          </div>


             @if(isset($user))
              <link rel="stylesheet" href="{{ asset('css/rateit.css') }}"> 

            <div class="gameExp" data-user="{{ $user->id }}">

                    @if($favorite)
                      <a class="fave" id="removeToFavorite" data-id="{{ $favorite->id }}"> 
                        <img src="http://susanwins.com/images/homepage/remove2fave.png" /> 
                        <span> Remove from Faves </span>  
                      </a>
                    @else
                      <a class="fave" id="addToFavorite"> 
                        <img src="http://susanwins.com/images/homepage/add2fave.png" /> 
                        <span> Add to Favourites  </span>  
                      </a>
                    @endif
           
                    @if($played_game)
                     <img src="{{ url('images')}}/happySusan.png" class="susanExpression moveLeft" />
                     <div class="fave" id="playedText" style="width: 561px;left:35%;">  You've Played it! Please Rate it <i class="fa fa-arrow-right" aria-hidden="true" style="margin-left:5px;"></i>
                              <a href="#" class="playedGamePad">                                                
                                  <input type="range" value="{{ $gameRating['totalRating'] }}" step="0.5" id="gameRating">
                                  <div class="rateit" data-rateit-backingfld="#gameRating" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-max="5"></div>
                                  <span id="totalVoters">({{ $gameRating['voters'] }})  </span>
                                  <div id="ratingThanks"></div>
                                </a>
                     </div> 
                    
                    @else
                        <img src="{{ url('images')}}/sadSusan.png"  class="susanExpression" />  
                        <div class="fave" id="playedText"> Not Played Yet</div> 
                        <a id="playedGame" class="fave">
                        <img src="http://susanwins.com/images/homepage/alreadyPlayedIcon.png" />
                        <span> Add to Played List </span>
                        </a>
                        
                      
                    @endif
                 

            </div>
          @endif
          

          <div class="content">     

            <div class="pointingSusan">

               <a href="#">
                  <img src="http://susanwins.com/uploads/53949_giftbox.png" />
                  Claim Bonus!
               </a>
                  <img src="{{ url('images/responsive/pointingSusan.png') }}" >
                 <blockquote class="oval-speech-border">
                 <p>Get your bonus and more. Click now!</p>
               </blockquote>
            </div>

            <div class="postcontent" data-post="{{ $post->id }}">

                         <div class="susantinyimg"></div>

                        <h2> {{$post->title}} <span> Written by Susan &nbsp;&nbsp;&nbsp; <a class="commentCount"> <i class="fa fa-comment"></i> {{ $post->total_comments()->count() }}  </a></span> </h2>

                         <ul class="contentSociallinks">
                            <li>
                              <span id="api_count" data-url="{{url('')}}/{{$post->slug}}"></span>
                            </li>
                            <li>
                              <a href="javascript:;" data-target="#share_via_facebook" class="fb" data-url="{{url('')}}/{{$post->slug}}" data-text="Share this up!">
                                <i class="fa fa-facebook"></i>
                              </a>
                            </li>                        
                            <li>
                              <a href="javascript:;" data-target="#share_via_pinterest" class="pn" data-url="{{url('')}}/{{$post->slug}}" data-text="Pin me!">
                                <i class="fa fa-pinterest-p"></i>
                              </a>
                            </li>
                            <li>
                              <a href="javascript:;" data-target="#share_via_twitter" class="tw" data-url="{{url('')}}/{{$post->slug}}" data-text="I'm tweeting this awesome game!">
                                <i class="fa fa-twitter"></i>
                              </a>
                            </li>
                            <li>
                              <a href="javascript:;" data-target="#share_via_googlePlus" class="g" data-url="{{url('')}}/{{$post->slug}}" data-text="">
                                <i class="fa fa-google-plus"></i>
                              </a>
                            </li>
                            @if(isset($user))
                                    <li>
                              <button id="recommendToFriend" type="button"> <i class="ion-android-happy"></i> Recommend to Friends</button>
                            </li>
                            @endif
                          </ul> 

                          <p>
                            <b>
                              {{$post->introduction}}
                            </b>
                          </p>

                          {!!$post->content!!}

                          <h2 > My thoughts </h2> 
                          <p style="margin-bottom: 50px;"> 
                            {{ $widget_ratings->final_verdict }}
                          </p>
              </div>
                       <!--  <a href="#" id="random_game"> 
                              <div class="randombutton">
                                <div class="inner">
                                    <img id="random_game_image" src="http://susanwins.com/images/homepage/random.png" />
                                </div>
                              </div>
                            </a>   -->
                          

          </div>


            



            <div class="commentRelativeBox">



                <img src="{{ url('images/responsive/commentsReel.png') }}" class="commentsReel">

                <div class="related">


                             <div class="bottomCasinos" >
                                  <ul class="animated bounceIn">
                                    @foreach($casino_lists2 as $k => $v) 
                                    {!! $v !!}
                                    @endforeach
                                  </ul>
                              </div>


                              <div class="outer">




                                  <div class="inner">

                                         

                                         
                                          


                          
                                                                
            <h6 style="border-top: 1px solid #F9EBCF;"> Recent Comments </h6>
                                   
            <div class="comments">

              <div class="comment-section">

                <div class="comments-list" id="commentList">
                  @if(count($comments))
                    <ul>
                      @foreach($comments as $comment)
                      <li>

                        <div class="commentlist">

                          <div class="comment-parent">

                            <img src="{{$comment->user->user_detail->profile_picture ? url('').'/user_uploads/user_'.$comment->user->user_detail->user_id.'/'.$comment->user->user_detail->profile_picture : url('').'/images/default_profile_picture.png' }}" class="avatar">
                            <span class="timestamp" data-datetime="{{ $comment->created_at }}"><span class="livetime"></span> | <span class="readable_time"></span></span>
                            <div class="comment-info">{{ ucfirst($comment->user->user_detail->firstname) }} {{ucfirst($comment->user->user_detail->lastname)}}</div>
                            <div class="comment-content">{!! $comment->content !!}</div>
                            <a href="javascript:;" class="reply_btn">Reply</a>

                            <div class="reply-list" id="reply-to-{{$comment->id}}">
                              @foreach($comment->post_replies as $reply)
                              <div class="replies-parent">
                                <img src="{{$reply->user->user_detail->profile_picture ? url('').'/user_uploads/user_'.$reply->user->user_detail->user_id.'/'.$reply->user->user_detail->profile_picture : url('').'/images/default_profile_picture.png' }}" class="avatar">
                                <span class="timestamp" data-datetime="{{ $reply->created_at }}"><span class="livetime"></span> | <span class="readable_time"></span></span>
                                <div class="reply-info">{{$reply->user->email}}</div>
                                <div class="reply-content">{!! $reply->content !!}</div>
                              </div>
                              @endforeach
                            </div>

                            @if(isset($user))
                            <form class="reply-form" action="{{ url('add_reply') }}" method="POST" style="display:none">
                              <input type="hidden" name="parent" value="{{ $comment->id }}">
                              <input type="hidden" name="user_id" value="{{ $user->id }}">
                              <input type="hidden" name="content_id" value="{{ $post->id }}">
                              <input type="hidden" name="email" value="{{ $user->email }}">

                              <div class="form-group">
                                <textarea class="form-control" rows="4" placeholder="Write a reply" name="content"></textarea>
                              </div>
                              <div class="form-group"></div>
                              <div class="form-group">
                                <button type="submit" class="button_example"  value="submit">Submit</button>
                              </div>
                            </form>
                            @endif                                                              
                          </div>
                        </div>

                      </li>         
                      @endforeach
                    </ul> 

                  @else
                    <ul></ul>
                    <p id="no-comments">No Comments yet.</p>
                  @endif 
                </div>

                <form class="comment-form" action="{{ url('add_comment') }}" method="POST" id="commentForm">
                  {!! csrf_field() !!}
                  <div class="form-group">
                    <textarea class="form-control" rows="4" placeholder="Write a comment" name="content" id="submitCommentTextarea" disabled="disabled"></textarea>
                  </div>
                  <div class="form-group">

                    @if(isset($user))
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                      <input type="hidden" name="content_id" value="{{ $post->id }}">
                      <input type="hidden" name="email" value="{{ $user->email }}">
                      <p style="display:none;">Signed in as {{ $user->email }}  
                        <a href="{{ url('logout') }}?redirect={{ Request::url() }}"><i class="fa fa-sign-out"></i></a> 
                      </p>
                    @else
                      <div class="rednotifbox">
                        <a href="{{ url('login') }}?redirect={{ Request::url() }}">Login to Comment</a> or <a href="{{ url('register') }}?redirect={{ Request::url() }}">Register</a>
                      </div>
                    @endif

                  </div>
                  <div class="form-group">
                    <button type="submit" class="button_example"  value="submit" id="submitCommentForm" disabled="disabled">Submit</button>
                  </div>
                </form>

              </div>
            </div> 
                        
                                     <h6> Top Categories </h6>
                                      <ul>
                                         @foreach($category_randomizer as $k => $v) 
                                              {!! $v !!}
                                          @endforeach
                                                                                        
                                      </ul>  

                      </div>
                    </div>
                </div>

                <img src="{{ url('images/responsive/singleFooter.png') }}" class="singleFooter">
            </div>

        </div>

            <div class="col-xs-24 col-sm-5 col-md-5 col-lg-5 right">
               <div class="sidebar">
                  <img src="{{ url('images/single-susan.png') }}" alt="" class="susan">
                      <div class="sidebarInner">
                        <h3> <img src="http://susanwins.com/uploads/28532_sidebartext.png" alt=""> </h3>
                         <div class="rellimg"></div>
                     </div>
               </div>
            </div>

        
              </div>
            </div>  
        </div>
    </div>
  </div>
 <div class="popunder">
               <img src="http://susanwins.com/uploads/35599_scrollsusan.png" alt="Scroll down to see my videos and read my review!" />
              </div>
  

@endsection


@section('footer_scripts')

<script src="{{ asset('js/jquery.rateit.min.js') }}"></script>
<script src="{{ asset('js/single/singlePage.js') }}"></script>

<script>

  $(function() {

    var user_id = $('.gameExp').data('user') || false,
        post_id = $('.postcontent').data('post') || false,
        gameExpUrl = '{{ url("gameExp") }}',
        profileUrl = '{{ url("profile") }}',
        notifUrl = '{{ url("notification") }}',
        get_casino_category = '{{$get_casino_category}}',
        get_post_id = '{{$post->id}}',
        finalSidebarContentHeight = 0,
        contentOffset = 1,
        ajaxDone = false,
        sidebarContentHeight = 0,
        sideBarHeightLeft = 0,
        sideBarCompleted = false,
        sideBarAjaxDone = true,
        pendingSideBarElements = [],
        sideBarSpacer = parseInt($('.rellimg').css('padding-bottom')),
        sideBarSingleContentHeight = 117 + (sideBarSpacer),
        posts_category_id = '{{$posts_category_id->category_id}}',
        totalImages = $(".postcontent img").length,
        imageLoaded = 0,
        allImageLoaded = false,
        singleImageLoaded = true,
        startAddingSidebarInterval = null,
        maxSidebarAutoLoad = 10 * 10, //10 seconds
        maxSidebarCounter = 0;

        header_counter = 0;

        post_comment_connected = false;
        login_success = false;
        user_json = '{!! isset($user) ? json_encode($user) : null !!}';
        user = user_json ? JSON.parse(user_json) : false;
        tempComment = null;
        tempReply = null;

        setSidebarLoadInterval();

        recommendFriendAJAX = false;
        $("#recommendToFriend").click(function(){

        $(".recommendFriends").fadeToggle('fast', function(){
              if($(".recommendFriends").is(':visible')){  

              if(!recommendFriendAJAX){
                recommendFriendAJAX = true;
                $('#friendRecommentList').html('').append($('<li>').text('Loading...'));
                $.ajax({
                     url : profileUrl+'/getMyFriends',
                     data : { _token : CSRF_TOKEN },
                     dataType : 'json',
                     type : 'POST',
                     success : function(data){
                        recommendFriendAJAX = false;
                        $('#friendRecommentList').html('');
                        if(data && data.length){
                          $.each(data, function(){
                            f = this;

                                $('#friendRecommentList').append(
                                  $('<li>')
                                      .append(
                                        $('<div>').addClass('msgImgcont')
                                            .append(
                                              $('<img>').attr('src', f.friend.user_detail.profile_picture ? BASE_URL+'/'+ f.friend.user_detail.profile_picture : defaultProfilePic )
                                              )
                                        )
                                      .append(
                                        $('<h6>').text(f.friend.user_detail.firstname+' '+f.friend.user_detail.lastname)
                                        )
                                      .append(
                                        $('<input type="checkbox" name="friends[]" value="'+f.friend.user_detail.user_id+'">').addClass('recommendCheck')
                                        )
                                  )
                          });
                        }
                     },error : function(xhr){
                      console.log(xhr.responseText);
                     }
                  });
              } 
   /* <li><div class="msgImgcont">
                                      <img src="http://susanwins.com//user_uploads/user_5/profile_picture-2016-04-04-11-54-17.jpg" alt="">
                                    </div>
  <h6> nam name</h6>
  <input type="checkbox" class="recommendCheck"  name="friend[]">
</li>*/
               


              }
        });

        

      });

      $('#recommendBtn').on('click', function(){

            theButton = this;

            $(theButton).attr('disabled', 'disabled').text('Sending...');

        friends = [];

          $('#friendRecommentList').find('input[name="friends[]"]').each(function(){
                if($(this).is(':checked')){
                    friends.push($(this).val());
                }
          });

          if(friends.length){

              $.ajax({
                url : notifUrl+'/recommendGame',
                data : { friends : friends, post_id : post_id, _token : CSRF_TOKEN },
                type : 'POST',
                dataType : 'json',
                success : function(data){
                  $(theButton).text('Recommendation Sent!');
                  setTimeout(function(){
                        $(".recommendFriends").fadeOut('fast');
                        $(theButton).html('<i class="ion-android-happy"> </i> Recommend Game').removeAttr('disabled');
                        $('#friendRecommentList').html('');
                  }, 800);
                },error : function(xhr){
                  console.log(xhr.responseText);
                }
              });

          }else{
            alert('Please select atleast 1 friend');
          }

      });

        $('.recommendFriends .fa-times').on('click', function(){
            $(".recommendFriends").fadeOut('fast');
        });

  /*  socket.on('connect', function(){
      room = 'post_comment_{{$post->id}}';
      socket.emit('connect_post_comment', {room : room , user : '{{ isset($user->email) ?$user->email : "Guest" }}'});
    });

    socket.on('post_comment_connected', function(){
      post_comment_connected = true;
      allowToComment(); 
    });

    socket.on('login_success', function(){
      login_success = true;
      allowToComment(); 
    });

    function allowToComment(){

      if(login_success && post_comment_connected)
      {
        $('#submitCommentTextarea').removeAttr('disabled');
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
                  $('<div></div>').addClass('comment-content').text(this.content)
                )
              )
            );

      return this.temporaryComment;
    };

    Comment.prototype.maketheComment = function(){

      var reply_form = '';

      if(user)
      {
        reply_form = $('<form></form>').addClass('reply-form').attr('action', '{{ url("add_post_reply") }}').attr('method', 'POST').css('display', 'none')
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
                      $('<div></div>').addClass('comment-info').text(this.email)
                    )
                    .append(
                      $('<div></div>').addClass('comment-content').text(this.content)
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

    socket.on('push_post_comment', function(response){

      console.log('push_post_comment');
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
        $('#commentList ul').append(comment.maketheComment());
        $(document).trigger('adjustHeight');
      }

    });


    socket.on('push_post_reply', function(response){

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

      if(tempComment == null){

        comment = new Comment();

        comment.user_id = $(this).find('[name="user_id"]').val() || false;
        comment.content = $(this).find('[name="content"]').val();
        comment.content_id = $(this).find('[name="content_id"]').val() || false;
        comment.email = $(this).find('[name="email"]').val() || false;
        comment.profile_picture = userImage;
        _token = $(this).find('[name="_token"]').val();
        actionUrl = $(this).attr('action');

        if(comment.content)
        {

          tempComment = comment.makeTemporaryComment();

          $('#commentList ul').append(tempComment);
          $('#no-comments').remove();              

          if(comment.user_id && comment.user_id && comment.email)
          {

            $(this).find('[name="content"]').val('');

            $.ajax({
              type : 'post',
              data : { _token : _token , content : comment.content, user_id : comment.user_id, email : comment.email , content_id : comment.content_id },
              url : actionUrl,
              dataType : 'json',
              success : function(response)
              {

                console.log(response);
                if(response)
                {
                  comment.id = response.id;
                  $(comment.temporaryComment).replaceWith(comment.maketheComment());
                  $(document).trigger('adjustHeight');
                  tempComment = null;
                  socket.emit('post_comment', response);
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
      
    });*/


    $('.gameExp').on('click','#addToFavorite', function(){

        _this = $(this).attr('disabled', 'disabled');
        if(user_id && post_id){

          $.ajax({
            url: gameExpUrl+'/addFavorite',
            type : 'POST',
            data : { user_id : user_id , post_id : post_id, _token : CSRF_TOKEN  },
            dataType : 'json',
            success : function(data){
              if(data && data.id){
                $(_this).replaceWith($('<a href="javascript:;" class="fave" id="playedGame"></a>').addClass('').attr('id', 'removeToFavorite').data('id', data.id)
                    .append($('<img src="http://susanwins.com/images/homepage/remove2fave.png">'))
                    .append($('<span>').text(' Remove from Faves')));
              }

            },error : function(xhr){
              console.log(xhr.responseText);
            }

          });

        }

    });

    $('.gameExp').on('click','#removeToFavorite', function(){
        _this = $(this).attr('disabled', 'disabled');

        data_id = $(_this).data('id');
        if(data_id){

          $.ajax({
            url: gameExpUrl+'/removeFavorite',
            type : 'POST',
            data : { id : data_id , _token : CSRF_TOKEN  },
            dataType : 'json',
            success : function(data){
                $(_this).replaceWith($('<a href="javascript:;" class="fave" id="playedGame"></a>').addClass('').attr('id', 'addToFavorite')
                  .append($('<img src="http://susanwins.com/images/homepage/add2fave.png" />'))
                  .append($('<span>').text(' Add to Favourites ')));

            },error : function(xhr){
              console.log(xhr.responseText);
            }

          });

        }

    });


    $('.gameExp').on('click','#playedGame', function(){

        _this = $(this).attr('disabled', 'disabled');
        if(user_id && post_id){

          $.ajax({
            url: gameExpUrl+'/playedGame',
            type : 'POST',
            data : { user_id : user_id , post_id : post_id, _token : CSRF_TOKEN  },
            dataType : 'json',
            success : function(data){
              if(data && data.id){
                  $(_this).remove();
                $('#playedText').css({'width':'561px','left':'35%'}).html("Now You've Played! Please Rate it <i class='fa fa-arrow-right' aria-hidden='true'></i>");
                $('.susanExpression').replaceWith($('<img>').attr('src', BASE_URL+'/images/happySusan.png').addClass('susanExpression moveLeft'))
                  rateIt = $('<div data-rateit-backingfId="#gameRating" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">').addClass('rateit');


                  ratingThanks = $("<div id='ratingThanks'></div>");

                $('#playedText').append(

                  $('<a href="javascript:;">').addClass('playedGamePad')
                        .append(

                            $('<input type="hidden" step="0.1" id="gameRating" style="top: 81px;">').data('id', data.id)
                          )

                        .append(

                          rateIt  

                          )

                        .append(
                          $('<span id="totalVoters" ></span>').text('('+data.gameRating['voters']+')')
                          )

                        .append(
                            ratingThanks
                          )


                  );

                $(rateIt).rateit({ max: 5, step: 0.1, backingfld: '#gameRating' });

              }

            },error : function(xhr){
              console.log(xhr.responseText);
            }

          });

        }

    });
  

  $('.gameExp').bind('rated', '#gameRating', function(e, value){

        data_id = $('#gameRating').data('id');

        if(user_id && post_id){

          $.ajax({
              url: gameExpUrl+'/rateGame',
              type : 'POST',
              data : { user_id : user_id, rating : value , post_id : post_id, _token : CSRF_TOKEN  },
              dataType : 'json',
              success : function(data){
                if(data){
                  // $('#ratingThanks').text('Thanks for rating!');

                  setTimeout(function(){
                      $('#gameRating').val(data.totalRating);
                      $('#totalVoters').text('('+data.voters+')');
                     $('#ratingThanks').text('');
                  }, 1000);

                }

              },error : function(xhr){
                console.log(xhr.responseText);
              }

            });
        }
  });


 /*   $(document).on('click', '#commentList .reply_btn', function(){

      if(user && post_comment_connected && login_success)
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
              .append($('<div></div>').addClass('reply-content').text(this.content));

      return this.temporaryReply;
    }

    Reply.prototype.maketheReply = function(){

        this.theReply = $('<div></div>').addClass('replies-parent').attr('id', 'reply-'+this.id)
              .append(
                $('<img>').addClass('avatar').attr('src', this.profile_picture ? BASE_URL+'/'+this.profile_picture : defaultProfilePic)
                )
              .append($('<div></div>').addClass('reply-info').text(this.email))
              .append($('<div></div>').addClass('reply-content').text(this.content));

      return this.theReply;
    }

    $('#commentList').on('submit', '.reply-form', function(e){

      e.preventDefault();
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

            if(reply.content){

              $(this).find('[name="content"]').val('');

                tempReply = reply.makeTemporaryReply();
                $('#reply-to-'+reply.parent).append(tempReply);
                $(document).trigger('adjustHeight');
                $.ajax({
                    type : 'post',
                    data : {  user_id : reply.user_id, content : reply.content, content_id : reply.content_id, email : reply.email, _token : CSRF_TOKEN, parent : reply.parent },
                    url : actionUrl,
                    dataType : 'json',
                    success : function(response){

                      console.log('maketheReply');
                      console.log(response);
                      if(response){

                            reply.id = response.id;
                            response.profile_picture = userImage;
                            
                            $(reply.temporaryReply).replaceWith(reply.maketheReply());
                            $(document).trigger('adjustHeight');
                              tempReply = null;

                              
                              socket.emit('post_reply', response);

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

    });*/

    $('.postcontent').on('click','.casino_yes',function(e){

      e.preventDefault();
      var $this = $(this);
      var casino_yes_parent = $this.parent();
       casino_yes_parent.html("<div class='cssload-loader'></div><p style='position:relative;top:30px;'> Searching for Casinos... </p>");
            

      $.ajax({
          type: 'post',
          url: "{{url('casino/ajax/get_casino')}}",
          data: {_token: CSRF_TOKEN,'category_id' : get_casino_category,'post_id' : get_post_id}, 
          success: function(response)
          {
            var parsed = JSON.parse(response);
            var casino = '<p class="popupheading">Casino List</p> <ul class="casinolist">';
           
            $.each( parsed, function( index, obj){
              var casino_url = '';

              casino_url = obj.link_desktop;

              casino += "<li><a href='"+casino_url+"' track-action='56ddbe5eb51c9' track-value='"+obj.name+"' class='casino_option' get-this-id="+obj.id+"><img src='{{url("uploads")}}/"+obj.image_url+"' style='width:auto;'></a></li>";

            });

            casino += "</ul>";

            setTimeout(function() {
             casino_yes_parent.html(casino);
            }, 3000);

          }
        });

    });


    //Article Banner
    var total_image = $( ".postcontent img" ).length;

    if(total_image >= 1)
    {

      var articleBannerRatio = {{$articleBannerRatio}},
      banner_type = 1;

      $.ajax({
        type: 'post',
        url: "{{url('casino/ajax/get_article_banner')}}",
        data: {_token: CSRF_TOKEN,'articleBannerRatio' : articleBannerRatio,'total_image' : total_image,'banner_type' : banner_type}, 
        success: function(response)
        {
          var parsed = JSON.parse(response),
              no_total = articleBannerRatio;

          $.each( parsed, function( i, l){

            if(total_image < articleBannerRatio)
            {
              no_total = total_image;
            }

            no_total -= 1;
            var every_nth = "img:eq("+no_total+")";
            $( ".postcontent" ).find(every_nth).parent().after(l);
            no_total += articleBannerRatio + 2;

          });

        }
      });
    }
    //END Article Banner

    // Random Game
    $('#random_game').on('click',function(e){
      e.preventDefault();
      $('#random_game_image').attr('src','http://susanwins.com/uploads/66058_default.gif').addClass('w48');

      setTimeout(function(){
        location.href = '{{url("")}}/{{$random_single_page->slug}}';
      }, 2000);
    });
    // END Random Game

    // OLD REELS
    // var images4 = 
    // [
    // '<div class="slotwrapper"><div class="details"><div class="totalcontainer" style="top: 57%;"><div class="innertotalcontainer" style="width:{{ $widget_ratings->music_sounds / 10 * 100 }}%;"><img src="http://susanwins.com/uploads/56148_stars.jpg" /></div></div><img src="http://susanwins.com/uploads/19401_music.jpg"></div></div>'
    // ];

    // var images5 = 
    // [
    // '<div class="slotwrapper"><div class="details"><div class="totalcontainer" style="top: 53%;"><div class="innertotalcontainer" style="width:{{$widget_ratings->long_term_play / 10 * 100}}%;"><img src="http://susanwins.com/uploads/56148_stars.jpg" /></div></div><img src="http://susanwins.com/uploads/80687_longterm.jpg"></div></div>'
    // ];

    // var images6 = 
    // [
    // '<div class="slotwrapper"><div class="details"><div class="totalcontainer" style="top: 50%;"><div class="innertotalcontainer" style="width:{{$widget_ratings->fun_rate / 10 * 100}}%;"><img src="http://susanwins.com/uploads/56148_stars.jpg" /></div></div><img src="http://susanwins.com/uploads/81613_funrating.jpg"></div></div>'
    // ];

    // var images7 = 
    // [
    // '<div class="slotwrapper"><div class="details"><div class="totalcontainer" style="top: 51%;"><div class="innertotalcontainer" style="width:{{$widget_ratings->graphics / 10 * 100}}%;"><img src="http://susanwins.com/uploads/56148_stars.jpg" /></div></div><img src="http://susanwins.com/uploads/47931_graphic.jpg"></div></div>'
    // ];

    // $("#winwinwin3").click(function(){

    //   if(header_counter == 0)
    //   {

    //     images4.push('{!! $casino_lists[0] !!}');
    //     images5.push('{!! $casino_lists[1] !!}');
    //     images6.push('{!! $casino_lists[2] !!}');
    //     images7.push('{!! $casino_lists[3] !!}');

    //     $('.featimg .replaceme').fadeOut(300, function() {
       

    //     $('.featimg .replaceme').attr("src","http://susanwins.com/uploads/64878_click-header.png");
    //     $('.featimg .replaceme').fadeIn(100);

    //      $('.hidethenshow').css({'display':'block'}).addClass('animated bounceIn');

    //        function showme(){
    //            $('.hidethenshowtwo').css({'display':'block'}).addClass('animated bounceIn');
    //         }
    //         setTimeout(showme, 500);

    //     });

    //   }
    //   ezslot15.win();
    //   ezslot16.win();
    //   ezslot17.win();
    //   ezslot18.win();

    //   header_counter++;

    // });

    // var ezslot15 = new EZSlots("ezslots15",{"reelCount":1,"winningSet":[1,1,1,1],"symbols":images4,"height":255,"width":169});
    // var ezslot16 = new EZSlots("ezslots16",{"reelCount":1,"winningSet":[1,1,1,1],"symbols":images5,"height":255,"width":169});
    // var ezslot17 = new EZSlots("ezslots17",{"reelCount":1,"winningSet":[1,1,1,1],"symbols":images6,"height":255,"width":169});
    // var ezslot18 = new EZSlots("ezslots18",{"reelCount":1,"winningSet":[1,1,1,1],"symbols":images7,"height":255,"width":169});

    //END REELS

    // SIDEBAR AJAX
    function updateSidebarHeight(){

      mainHeight = $('#main').height() - ($('.singelTopReel').height())/* - parseInt($('.singleFooter').css('padding-bottom').replace('px', ''))*/;

      sideBarHeight = mainHeight + ( $('.postcontent').offset().top - $('.sidebarInner').offset().top );
      finalSidebarContentHeight = sideBarHeight - ( $('.sidebarInner').find('h3').height() + (sideBarSpacer ) );
      $('.sidebarInner').css('height', sideBarHeight+'px');
      sidebarContentHeight = $('.rellimg').height();
      sideBarHeightLeft = finalSidebarContentHeight - sidebarContentHeight;

      lastElement = $('.rellimg').children(':visible').last();

      if( $('.rellimg').find('.updateHeight').length > 0)
      {
        lastElement = $('.rellimg').find('.updateHeight').first();
        lastElement.next().css('visibility', 'hidden');
      }

      theImage = $(lastElement).find('img');

      if(sideBarHeightLeft <= sideBarSpacer)
      { 

        offsetBottom = ($('.sidebarInner').offset().top+sideBarHeight) - lastElement.offset().top - (sideBarSpacer);

        if(!lastElement.hasClass('updateHeight'))
        {
          lastElement.addClass('updateHeight').data('originalHeight', $(theImage).height());
          theImage.css('height', offsetBottom+'px');
        }
        else
        {
          lastElement.css('visibility', 'visible');
          if(offsetBottom > 0 && offsetBottom < lastElement.data('originalHeight'))
          {
            theImage.css('height', offsetBottom+'px');
          }
          else if(offsetBottom >= lastElement.data('originalHeight'))
          {
            theImage.css('height', lastElement.data('originalHeight')+'px');
          }
          else
          {
            console.log('unshift');
            prevElement = lastElement.prev();
            prevElementImage = prevElement.find('img');

            if(offsetBottom <= 0)
            {
              lastElement.css('visibility', 'hidden');
            }
            // else
            // {

            // }

            prevOffsetBottom = ($('.sidebarInner').offset().top+sideBarHeight) - prevElement.offset().top - (sideBarSpacer);

            prevElement.addClass('updateHeight').data('originalHeight', $(prevElementImage).height());
            prevElementImage.css('height', prevOffsetBottom+'px');
          }
        }

      }
      else
      {

        if(lastElement.hasClass('updateHeight'))
        {

          if(theImage.height() >= lastElement.data('originalHeight'))
          {
            theImage.css('height', lastElement.data('originalHeight')+'px');
            lastElement.removeClass('updateHeight').removeData('originalHeight');
          }
          else
          {
            offsetBottom = ($('.sidebar').offset().top+sideBarHeight) - lastElement.offset().top - (sideBarSpacer);

            if(offsetBottom <= lastElement.data('originalHeight'))
            {
              theImage.css('height', offsetBottom+'px');
            }
            else
            {

              if(offsetBottom - lastElement.data('originalHeight') > 0)
              {
                lastElement.next().css('visibility', 'visible');
              }
              else
              {
                lastElement.next().css('visibility', 'hidden');
              }

              changeHeight = lastElement.attr('data-height') ? lastElement.attr('data-height') : lastElement.data('originalHeight');
              theImage.css('height', changeHeight+'px');

              if(!lastElement.attr('data-height') )
              {
                lastElement.attr('data-height', lastElement.data('originalHeight') );
              }

              lastElement.addClass('updatedHeight').removeClass('updateHeight').removeData('originalHeight');

            }     
          }
        }
      }
    }
    
    $(window).scroll(function(event){
      //console.log(sideBarCompleted);
      if(!sideBarCompleted){
        clearInterval(startAddingSidebarInterval);
        setSidebarLoadInterval();
      }
    });

    $(document).on('adjustHeight', function(){
          sideBarCompleted = false;
          startAddingSidebarContent();
    });

    function setSidebarLoadInterval(){
      startAddingSidebarInterval = setInterval(function(){

        maxSidebarCounter++;

        if(maxSidebarAutoLoad == maxSidebarCounter)
        {
          clearInterval(startAddingSidebarInterval);
        }
        else
        {
          if(sideBarCompleted)
          {
            clearInterval(startAddingSidebarInterval);
          }else
          {
            startAddingSidebarContent();
          }
        }

      }, 100);
    }

    function startAddingSidebarContent(){

      updateSidebarHeight();
      //console.log('startAddingSidebarContent');

      if(finalSidebarContentHeight > sidebarContentHeight && sideBarHeightLeft >= sideBarSingleContentHeight)
      {
        getSidebarContent();
      }
      else
      {
        if(sideBarHeightLeft <= 0)
        {
          if(allImageLoaded)
          {

            lastImage = $('.rellimg').children().last();
            pendingSideBarElements.push($(lastImage)[0].outerHTML);
            //$(lastImage).remove();
            sideBarCompleted = true;
          }

        }
        else if(allImageLoaded)
        {
          sideBarCompleted = true;
        }
      }
    }

    function getSidebarContent(){

      if(sideBarAjaxDone && sideBarHeightLeft >= sideBarSingleContentHeight)
      {

        if(pendingSideBarElements.length > 0)
        {

          temp = pendingSideBarElements;

          stillPending = [];

          $.each(temp, function(i, l){

            /* if(sideBarHeightLeft >= sideBarSingleContentHeight){
            $( ".rellimg" ).append(l);
            updateSidebarHeight();
            }else{
            stillPending.push(l);
            }*/

            singleSidebarImage(l, function(el){
              stillPending.push(el);
            });

          });

          pendingSideBarElements = stillPending;

        }
        else
        {

          sideBarAjaxDone = false;
          sideBarAJAX().done(function(response){

            try {
                  $.parseJSON(response);
            } catch(error) {
                location.reload();
            }

            var parsed = JSON.parse(response);

            contentOffset++;

            $.each( parsed, function( i, l ){
              /* if(sideBarHeightLeft >= sideBarSingleContentHeight){

              $( ".rellimg" ).append(l);
              updateSidebarHeight();
              }else{
              pendingSideBarElements.push(l);
              }*/

              singleSidebarImage(l, function(el){
                pendingSideBarElements.push(el);
              });
            });

            sideBarAjaxDone = true;
          });
        }

      }

    }

    function singleSidebarImage(el, callback){

      if(sideBarHeightLeft >= sideBarSingleContentHeight && singleImageLoaded)
      {

        element = $(el).hide();

        singleImageLoaded = false;

        $( ".rellimg" ).append(element);

        image = new Image();

        image.onload = function(){

          singleImageLoaded = true;

          theHeight = this.fixedHeight == 117 ? this.fixedHeight : this.naturalHeight;
          $(this.element).find('img').css('height', theHeight+'px');

          $(this.element).show();
          updateSidebarHeight();

        }

        image.onerror = function(){
          singleImageLoaded = true;
          $(this.element).show();
          updateSidebarHeight();
        }

        image.src = $(el).find('img').attr('src');
        image.fixedHeight = parseInt($(el).find('img').css('height').replace('px', ''));
        image.element = element;

      }
      else
      {
        callback(el);
      }

    }

    var random_sidebar_order_number = {{$random_sidebar_order_number}};

    function sideBarAJAX(){

      var dfr = $.Deferred();
      maxThrottles = 10;
      throttleCounter = 0;
      throttleTimeout = 3000;

      (function throttle(){
        $.ajax({
          type: 'post',
          url: "{{url('home/ajax_get_ads_posts_init')}}",
          data: {_token: CSRF_TOKEN,'posts_category_id' : posts_category_id,'posts_id' : post_id, 'contentOffset' :contentOffset, random_sidebar_order_number : random_sidebar_order_number },
          success : dfr.resolve, 
          error : function(xhr)
          {

            throttleCounter++;
            if ( xhr.status === 401 || xhr.status === 500 && throttleCounter <= maxThrottles) 
            {
              return setTimeout(function(){ throttle( this ) }, throttleTimeout);
            }

            dfr.rejectWith.apply( this, [] );
          }

        });
      })();

      return dfr.promise();

    }
    // END SIDEBAR AJAX
$('.postcontent img').css('display','inline');
    //LAZY LOADING
    $(".postcontent img").unveil(600, function() {
            

      $(this).load(function() {
            $(this).css('width','743px').removeClass('img-loading');
            // $(this).renameAttr('height', 'data-height' );
            // $(this).renameAttr('width', 'data-width' );   

           imageLoaded++;

          if(totalImages == imageLoaded){
            allImageLoaded = true;

         // $('.content p img').css({
         //    "width":"743px",
         //    "height":"463px",
         // });

            $(document).trigger('adjustsinglePostBG');
            // var width = $(window).width(); 
            // var result = $(".content").height();             
            // var result2 = $(".related").height(); 
                  
            
            

            //    if ( width > 1199 ) {
            //     $('.sidebarInner').height( result + result2 + 720 );
            //     $(".singlePostBG").height( result + 200 );
            //   }
            //   else if ( width > 991 && width < 1200 ) {
            //     $('.sidebarInner').height( result + result2 + 570 );
            //     $(".singlePostBG").height( result + 200 );
            //   }
            //   else if( width > 767 && width < 992 ){
            //     $('.sidebarInner').height( result + result2 + 450 );
            //     $(".singlePostBG").height( result + 500 );
            //   }
            //   else if( width > 765 && width < 767 ){
            
            //   }
            //   else if( width < 766 ){
               
            //   }

          }
          else{
            if(!sideBarCompleted){
                    clearInterval(startAddingSidebarInterval);
                    setSidebarLoadInterval();
                }
          }
          //$(this).css('width','100%');
        });
    });
    //END LAZY LOADING

    //IDLE POPUP//
    $(window).scroll(function () { 
      if( $(window).scrollTop() > 300 ) 
      {
        $('.popunder').animate({bottom: '-340px'}, 300);
      }
    })

    startIdleCounting = setInterval( checkIdle, 1000 );
    idleCounter = 0;
    maxIdle = 10;

    //checkTitleSeen()

    function checkIdle(){


    idleCounter++;

     title_is_seen = checkTitleSeen();

    if(idleCounter == maxIdle){
        clearInterval(startIdleCounting);

        if(title_is_seen == false){
            $('.popunder').animate({bottom: '-9px'}, 300);
        }

    }

    }

    $(window).bind('scroll load', function(){
    title_is_seen = checkTitleSeen();
    if(title_is_seen){
         clearInterval(startIdleCounting);
    }
    });

    function checkTitleSeen(){

      /*title = $('a[name="gohere"]');*/
      title = $('.postcontent h2');
      titleOffsetHeight = title.offset().top + $('.susantinyimg').height();
      pageHeight = window.height || document.documentElement.clientHeight;

      documentOffsetTop = document.documentElement.scrollTop || document.body.scrollTop;  
      documentHeight = documentOffsetTop + pageHeight;

      if(titleOffsetHeight > documentHeight){
          return false;
      }

      return true;

              //if(titleOffsetHeight)

              /*$('.popunder').animate({bottom: '-9px'}, 300);*/

    }

    // ENDOF IDLE POPUP

  });
</script>

<!-- YOUTUBE SCRIPT HERE -->
<script type="text/javascript">

  $(document).ready(function(){

      $("iframe[src^='//www.youtube.com']").parent().wrap("<div class='yt_container'></div>");

    function getFrameID(id) {

      var elem = document.getElementById(id);
      if (elem) 
      {
        if (/^iframe$/i.test(elem.tagName)) return id; //Frame, OK
        // else: Look for frame
        var elems = elem.getElementsByTagName("iframe");

        if (!elems.length) return null; //No iframe found, FAILURE
        for (var i = 0; i < elems.length; i++) 
        {
          if (/^https?:\/\/(?:www\.)?youtube(?:-nocookie)?\.com(\/|$)/i.test(elems[i].src)) break;
        }

        elem = elems[i]; //The only, or the best iFrame

        if (elem.id) return elem.id; //Existing ID, return it
        // else: Create a new ID
        do 
        { //Keep postfixing `-frame` until the ID is unique
          id += "-frame";
        } 
        while (document.getElementById(id));

        elem.id = id;

        return id;
      }
      // If no element, return null.
      return null;
    }

    // Define YT_ready function. 
    var YT_ready = (function() {
      //for debug
      // console.log('watermelon2!!!!');
      var onReady_funcs = [],
      api_isReady = false;
    /* @param func function     Function to execute on ready
         * @param func Boolean      If true, all qeued functions are executed
         * @param b_before Boolean  If true, the func will added to the first
                                     position in the queue*/
      return function(func, b_before) {
          if (func === true) {
              api_isReady = true;
              for (var i = 0; i < onReady_funcs.length; i++) {
                  // Removes the first func from the array, and execute func
                  onReady_funcs.shift()();
              }
          }
          else if (typeof func == "function") {
              if (api_isReady) func();
              else onReady_funcs[b_before ? "unshift" : "push"](func);
          }
      }
    })();

    //for debug
    // console.log('watermelon 3.0 !!!!');
    YT_ready(true);

    var players = {};
  //Define a player storage object, to enable later function calls,
  //  without having to create a new class instance again.
    YT_ready(function() {
      // for debug
      // console.log('watermelon4221!!!!');
      readyYoutube();

      function readyYoutube(){
        // console.log('readyYoutube function');
        if(YT && YT.Player)
        {
          $("iframe[id]").each(function() {
            var identifier = this.id;

            // console.log('samoka this guy oi');
            // console.log(identifier);
            var frameID = getFrameID(identifier);
            if (frameID) 
            {
              //If the frame exists
              // console.log(frameID);
              // players[frameID] = readyYoutube(frameID);
              players[frameID] = new YT.Player(frameID, {
                playerVars: 
                {                          
                  'controls': 1   
                },
                events: 
                {
                  // "onReady": createYTEvent(frameID, identifier),
                  'onStateChange': onPlayerStateChange
                }
              });
              // console.log(players[frameID]);
            }
          });
        }
        else
        {
          setTimeout(readyYoutube, 100);
        }
        //ONPLAYERSTATECHANGE
        function onPlayerStateChange(event) 
        {
          // for debug
          // console.log('am i in?');
          var state = event.target.getPlayerState();
          if (state === 2) 
          {
            // console.log('this is a state');
            // console.log(event.target.F.videoData.video_id);
            // var new_src = '//www.youtube.com/embed/'+event.target.F.videoData.video_id+'?enablejsapi=1&rel=0&controls=1';
            // $('iframe').attr('src',new_src).parent().html("<div style='position: relative; z-index:999;'><img src='{{url('uploads')}}/{{$yt_image_url}}'></div>");
            console.log(event);
          }
          else if (state === 0) 
          {
            // var iframe_id_men = event.target.f.id;
            // $("#"+iframe_id_men).parent().html("<div style='position: relative; z-index:999;'><img src='{{url('uploads')}}/{{$yt_image_url}}'></div>");
            var new_src = '//www.youtube.com/embed/'+event.target.D.videoData.video_id+'?enablejsapi=1&rel=0&controls=1';
            // console.log('samoka this guy 2');
            // console.log(new_src);
            $('iframe[src="'+new_src+'"]').parent().html("<div style='position: relative; z-index:999;'><a href='{{$yt_image_link}}'><img class='not_count' src='{{url('uploads')}}/{{$yt_image_url}}'></a></div>");
            // <div style='position: relative; z-index:999;'><a href='{{$yt_image_link}}'><img src='{{url('uploads')}}/{{$yt_image_url}}'></a></div>
          }
        }
        //END ONPLAYERSTATECHANGE
      };


    });


    });

  $(window).bind("load", function() {

        var machine2 = $("#planeMachine2").slotMachine({
          active  : 0,
          delay : 500,
         randomize : function(activeElementIndex){
              return 2;
          }
        });

        var machine3 = $("#planeMachine3").slotMachine({
          active  : 0,
          delay : 500,
         randomize : function(activeElementIndex){
              return 1;
          }      
        });

        var machine4 = $("#planeMachine4").slotMachine({
          active  : 0,
          delay : 500,
         randomize : function(activeElementIndex){
              return 1;
          }
        });

        var machine5 = $("#planeMachine5").slotMachine({
          active  : 0,
          delay : 500,
         randomize : function(activeElementIndex){
              return 1;
          }
        });

        function onComplete(active){
         console.log('yeah yeah yo yo');
         console.log(active);
          switch(this.element[0].id){
            case 'machine1':
              $("#planeMachine2").text("Index: "+this.active);
              break;
            case 'machine2':
              $("#planeMachine3").text("Index: "+this.active);
              break;
            case 'machine3':
              $("#planeMachine4").text("Index: "+this.active);
              break;
            case 'machine4':
              $("#planeMachine5").text("Index: "+this.active);
              break;
          }
        }

        $("#winwinwin3").click(function(){

          machine2.shuffle(5, function(){
            machine2.setRandomize(0);
          });

          setTimeout(function(){
            machine3.shuffle(5, onComplete);
          }, 500);

          setTimeout(function(){
            machine4.shuffle(5, onComplete);
          }, 600);

          setTimeout(function(){
            machine5.shuffle(5, onComplete);
          }, 700);

            if(header_counter == 0)
            {

              $('.featimg .replaceme').fadeOut(300, function() {
             

              $('.featimg .replaceme').attr("src","http://susanwins.com/uploads/64878_click-header.png");
              $('.featimg .replaceme').fadeIn(100);

               $('.hidethenshow').css({'display':'block'}).addClass('animated bounceIn');

                 function showme(){
                     $('.hidethenshowtwo').css({'display':'block'}).addClass('animated bounceIn');
                  }
                  setTimeout(showme, 500);

              });

            }

            header_counter++;

        })

   });     

  </script>
  <!-- END YOUTUBE SCRIPT HERE -->


@endsection