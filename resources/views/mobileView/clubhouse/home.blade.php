@extends('clubhouse.layout')
	
@section('custom-styles')
@endsection

 @section('navbar-title', 'Home')
@section('content')
   <div class="app-page" data-page="main">
  <div class="app-content">
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