
@extends('clubhouse.layout')
  
@section('custom-styles')
@endsection

 @section('navbar-title', 'Home')
@section('content')

  <style type="text/css">

   body {
    background: #fff url(http://susanwins.com/uploads/51107_mobilefronthouse.jpg) no-repeat center top;
  }
  .collection{
    border: none;
    margin-bottom: 90px;
    margin-top: 103px;
  }
  .collection .collection-item{
    background: transparent;
    border: none;
  }
  .collection .collection-item.avatar{
    min-height: 115px;
  }
  .collection .collection-item.avatar .circle{
    width: 100px;
    height: 100px;
    border: 2px solid #FFF;
  }
  .collection .collection-item.avatar .title{
    font-size: 19px;
    font-weight: 600;
    display: block;
    text-align: center;
    margin-top: 36px;
    color: #fff;
    background: rgb(207,11,11);
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top, rgba(207,11,11,0.96) 0%, rgba(165,6,6,0.96) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(207,11,11,1)), color-stop(100%,rgba(165,6,6,0.96)));
    background: -webkit-linear-gradient(top, rgba(207,11,11,0.96) 0%,rgba(165,6,6,0.96) 100%);
    background: -o-linear-gradient(top, rgba(207,11,11,0.96) 0%,rgba(165,6,6,0.96) 100%);
    background: -ms-linear-gradient(top, rgba(207,11,11,0.96) 0%,rgba(165,6,6,0.96) 100%);
    background: linear-gradient(to bottom, rgba(207,11,11,0.96) 0%,rgba(165,6,6,0.96) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cf0b0b', endColorstr='#a50606',GradientType=0 );

    padding: 8px;
    border-radius: 30px;
    margin-left: 14px;
    width: 80%;
  }
  </style>
   <div class="app-page" data-page="main">
<!--    <div class="app-topbar"></div> -->
  <div class="app-content" data-no-scroll>
         <ul class="collection">
        
          <li class="collection-item avatar">
          <a href="{{ url('clubhouse/profile') }}">
            <img src="http://susanwins.com/images/clubhouse/profileroom-thumb.gif" alt="" class="circle">
            <span class="title">Profile</span>
            </a>
          </li>
              
             
                <li class="collection-item avatar">
                 <a href="{{ url('clubhouse/chatroom') }}">
            <img src="http://susanwins.com/images/clubhouse/chatroom-thumb.gif" alt="" class="circle">
            <span class="title">Chatroom</span>
            </a>
          </li>
              
              
                <li class="collection-item avatar">
                <a href="{{ url('clubhouse/prizeroom') }}">
            <img src="http://susanwins.com/images/clubhouse/prizeround.png" alt="" class="circle">
            <span class="title">Prizeroom</span>
             </a>
          </li>
             
              
                <li class="collection-item avatar">
                <a href="{{ url('clubhouse/slotsroom') }}">
            <img src="http://susanwins.com/images/clubhouse/slotsroom-thumb.gif" alt=""  class="circle">
            <span class="title">Slotsroom</span>
            </a>
          </li>
              
        </ul>
  </div>
  </div>
     

@endsection


@section('app-js')
  <script>
       $(document).on('ready', function(){

             App.load('main');

       });
  </script>

@endsection