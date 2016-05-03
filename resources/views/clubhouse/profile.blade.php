@extends('clubhouse.layout')


@section('page-title', 'Profile Room')


@section('scripts_here')

<link rel="stylesheet" href="{{ asset('css/rateit.css') }}">

@endsection

 @section('switch-button')
    <button class="categ-button"> <a href="{{ url('logout') }}">Logout</a></button>
@endsection

@section('user-options')

          <!-- div class="profileBox">
           <div class="arrow_box"></div>
            <ul>
              <li> <a href=""> <i class="fa fa-user"></i> Profile </a> </li>
              <li> <a href=""> <i class="fa fa-comment"></i> Chat </a> </li>
              <li> <a href=""> <i class="fa fa-gift"></i> Prize </a> </li>
              <li> <a href=""> <i class="fa fa-ticket"></i> Slots </a> </li>
              <li> <a href=""> <i class="fa fa-sign-out"></i> Logout </a> </li>
            </ul>
          </div>

          <div class="messageBox">
           <div class="arrow_box"></div>
            <ul id="myMessages">
            </ul>
            <a href="#" class="viewAll"> View All </a>
          </div>


          <ul class="topicons">
            <li> <a href="#"> <img src="img/assets/susan-club-icon.png" alt="Susan's Club" /> </a> </li>
            <li> <a href="#" id="userMenu"> <img src="img/assets/user-icon.png" alt="User" /> </a> </li>
            <li> <a href="#" id="messagesMenu"> 
            
            <span id="unreadMessageNotification">
              @if($unread_messages_count > 0)
                <span class="notifcount">{{ $unread_messages_count }}</span>
              @endif
            </span>
            
            

             <img src="img/assets/message-icon.png" alt="Messages" /> </a> </li>
            <li> <a href="#"> <span class="notifcount"> 3 </span>  <img src="img/assets/notif-icon.png" alt="Notifications" /> </a> </li>
            <li style="margin-right: 6px;"> <a href="#"> <img src="img/assets/key-icon.png" alt="Login/Signup" /> </a> </li>
          </ul> -->
@endsection




@section('background-content')

<style type="text/css">
.guideSusanContainer{
  left: 0;
}
@media (max-width: 1680px){
  #roombg {
    top: -40px;
 }
}

.cropperContainer{
      top: 21%;
    left: 14%;
      position: absolute;
          background: rgba(255, 255, 255, 0.98);
    width: 370px;
        height: 440px;
    padding: 0 0 15px 0;
        border-radius: 5px;
    overflow: hidden;
        z-index: 1;
    moz-box-shadow: 0 0 30px -10px #000;
    -webkit-box-shadow: 0 0 30px -10px #000;
    box-shadow: 0 0 30px -10px #000;
    display: none;
}

.cropperContainer .fa-times{
     top: 0px;
    color: rgb(158, 0, 0);
    position: absolute;
    z-index: 2;
    right: 0;
    margin: 7px;
    cursor: pointer;
}

.cropperContainer button{
    background: #A40605;
    border: none;
    display: block;
    width: 46.5%;
    margin: 15px 5px 5px 5px;
    float: left;
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
}

#cropperH{
padding: 20px 0;
background: rgba(190, 19, 19, 0.92);
height: 372px; 
}

#cropperH input[type="range"]{
      background: #000;
}
</style>

   <!--  <div class="container background-container" style="width: 1280px !important; margin-top: 40px; padding:0">
      <img src="{{ asset('clubhouse/img/assets/livingroom.png') }}" class="background-image interactiveBackground" alt="">

        <div class="flipbook-viewport interactiveObj modal-popup" data-toggle="#magazine" id="interview" left="8%">
          <div class="container">
            <div class="flipbook">
              <div style="background-image:url(http://www.welovecelebz.com/wp-content/gallery/ileana-dcruz-photos/ileana-dcruz-hot-pictures-12.jpg)"></div>
              <div> 
                  <h2> This is the hottest interview of the year! Today, we're interviewing {account name}! </h2>
                  <p> Wow, such an honour to have you here (account name)! I'd love to ask you some questions!  </p>
              </div>
              <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              <div> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              <div style="background-color:#da7f88;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
          </div>
        </div>
          
        <div class="friendBox interactiveObj modal-popup" data-toggle="#yearbook" id="manageFriends" top="8%" left="6%">
            <div class="tabs">
               <div class="tab">
                   <input type="radio" id="tab-1" name="tab-group-1" checked="">
                   <label for="tab-1"> <i class="fa fa-user"></i> Friends ({{ count($user->myFriends) }}) </label>

                    <div class="contenttab" id="myFriends">
                    
                        <div class="friendBoxStatus">
                           <a href="#"> <i class="fa fa-circle indiOffline"></i> Offline <span id="offlineFriendCount"></span></a>
                                  <a href="#"> <i class="fa fa-circle indiOnline"></i> Online <span id="onlineFriendCount"></span></a>
                        </div>

                          <ul class="online" id="friendList">


                                @foreach($user->myFriends as $fr)
                                <li>
                                  <span class="offline" id="friend-online-status-{{ $fr->friend->user_detail->user_id }}"></span>
                                  <div class="options" data-user="{{ $fr->friend->user_detail->user_id }}">
                                    <a href="#" data-target="#pmBox" class="subModalToggle pmFriend"> <i class="fa fa-comment"></i>  </a>
                                    <a href="#" data-target="#friendProfile" class="subModalToggle viewFriendProfile">  <i class="fa fa-user"></i> </a>
                                  </div>
                                  <img src="{{ $fr->friend->user_detail->profile_picture ? asset('').'/'.$fr->friend->user_detail->profile_picture : asset('images/default_profile_picture.png') }}" alt="">
                                  <h6> {{ ucwords( $fr->friend->user_detail->firstname.' '.$fr->friend->user_detail->lastname ) }} </h6>
                                  <p> Is currently reading playing on the prize room... </p>
                                  <div class="optionBox">                              
                                  </div>
                                </li>

                                @endforeach
                              </ul>
                   </div>               
               </div>

               <div class="tab">
                   <input type="radio" id="tab-2" name="tab-group-1">
                   <label for="tab-2">   <i class="fa fa-comment"></i> Messages ( {{ count($user->myMessages) }} ) </label>

                    <div class="contenttab">


                    <div class="messageBoxStatus">
                      <a href="#"> <i class="fa fa-circle-thin indiOffline"></i> Unread <span id="unreadMessage">({{ $user->unread_messages()->count() }})</span></a>
                              <a href="#"> <i class="fa fa-circle-thin indiOnline"></i> Read <span id="readMessage">({{ $user->read_messages()->count() }})</span></a>
                    </div>

                        <ul class="messagingBox">                   
                          @foreach($user->myMessages as $msg)
                            <li data-user="{{ $msg->from_user->user_detail->user_id }}">
                              <a href="javascript:;" class="subModalToggle pmFriend" data-target="#pmBox"><span class="offline" id="friend-message-online-status-{{ $msg->from_user->user_detail->user_id }}"></span>
                            <img src="{{ $msg->from_user->user_detail->profile_picture ? asset('').'/'.$msg->from_user->user_detail->profile_picture : asset('images/default_profile_picture.png') }}" alt="">
                            <h6> {{ ucwords($msg->from_user->user_detail->firstname.' '.$msg->from_user->user_detail->lastname ) }} <em> 3:36pm </em></h6>
                            <p> {{ $msg->message }} </p></a>
                                               
                          </li>

                          @endforeach
                          </ul>                   
                   </div>
               </div>  
            </div>
        </div>

          
        <div class="interactiveObj parentModal" style="position:absolute; width:795px" top="8%" left="40%">      
            <div class="friendProfile modal-popup" id="friendProfile">
              <div class="divContainer">          
                      <div class="imgContainer">
                      <span> <a href="#" class="add"> <i class="fa fa-plus"></i> </a> </span>
                      <span> <a href="#" class="block"> <i class="fa fa-ban"></i> </a> </span>
                      <span> <a href="#" class="message"> <i class="fa fa-comment" style="    font-size: 16px;  position: relative;  top: -1px;"></i> </a> </span>
                      <img src="https://s3.amazonaws.com/uifaces/faces/twitter/whale/128.jpg" id="viewFriendProfilePic">
                      <h6 id="viewFriendProfileName"> Samantha Wilson </h6>
                      </div>
                      <p> Favorite Games  </p>
                      <div class="favegames">
                        <span class="ellipsis"> <i class="fa fa-ellipsis-h"></i><a href=" "></a></span>
                        <ul id="profileFavorites">
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/35843_8balls.gif"> </a> </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/44897_alchemist-lab.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/68900_hot-gems.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/21872_innocence-temptation.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/82396_iron-man.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/35843_8balls.gif"> </a> </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/44897_alchemist-lab.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/68900_hot-gems.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/21872_innocence-temptation.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/82396_iron-man.gif"> </a>  </li>
                        </ul>
                      </div>
                      <p> Games Played with their rating  </p>
                      <div class="favegames">
                        <ul id="profilePlayedGames">
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/35843_8balls.gif"> </a> </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/44897_alchemist-lab.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/68900_hot-gems.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/21872_innocence-temptation.gif"> </a>  </li>
                          <li> <a href="#"> <img src="http://susanwins.com/uploads/82396_iron-man.gif"> </a>  </li>
                        </ul>
                      </div>
                      <p> Interview  </p>
                      <div class="interviewBox">
                        <div>
                          <p class="question"> We've heard you're great company to be around – but when you're socialising what's your drink of choice? </p>
                          <p class="answer"> Spirit & Mixer </p>
                        </div>
                      </div>
              </div>
            </div>

            <div class="pmBox modal-popup" id="pmBox" style="margin-left: 6px;">        
                  <div class="divContainer">
                    <div class="header"></div>
                      <div class="body">
                        <h2> <span class="online"></span> <b id="pmName">Syndey Winchester </b> </h2>
                        <ul class="messagesContent" id="messageContent">
                        </ul>
                      </div>
                      <div class="pmFooter">
                            <div class="arrow_box" style="display:none;"></div>  
                            <div id="tooltip" style="display:none;">

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
                              
                              <i class="fa fa-smile-o emojiTrigger"></i>
                              <i class="fa fa-paper-plane"></i>
                            </div>
                            <form id="sendPrivateMessage">
                                <textarea id="chatEntry" class="chatCommon txtstuff" placeholder="Type Message" style="height:58px"></textarea>
                            </form>
                        </div>
                    </div>
            </div>
          
        </div>

              <div class="modalDiv modal-popup interactiveObj" data-toggle="#diary" id="userDetails" top="10%" right="14%">
                <div class="c-body">
                <div class="c-title">User Details</div>
                  <form action="{{ url('clubhouse/profile/userDetails') }}" method="POST">
                    
                      
                    
                    @if(session('userDetailsErrors'))
                      <ul class="formMessage errorlist">
                      @foreach(session('userDetailsErrors') as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                    @endif

                    @if(session('userDetailsSuccessMessage'))
                      <div class="formMessage successMessage">{{ session('userDetailsSuccessMessage')}}</div>
                    @endif
                  {!! csrf_field() !!}
                    <div class="form-group">
                      <label for="">Firstname</label>
                      <input type="text" name="firstname" class="form-control" value="{{ isset($user->user_detail) ? $user->user_detail->firstname : '' }}">
                    </div>
                    <div class="form-group">
                      <label for="">Lastname</label>
                      <input type="text" name="lastname" class="form-control" value="{{ isset($user->user_detail) ? $user->user_detail->lastname : '' }}">
                    </div>
                    <div class="form-group">
                      <label for="">Address</label>
                      <textarea name="address" cols="30" rows="5">{{ isset($user->user_detail) ? $user->user_detail->address : '' }}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="">Phone Number</label>
                      <input type="text" name="phone_no" class="form-control" value="{{ isset($user->user_detail) ? $user->user_detail->phone_no || '' : '' }}">
                    </div>
                    <div class="form-group">
                      <button type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              </div>

              <div class="modalDiv modal-popup interactiveObj" data-toggle="#doorKey" id="changePassword" top="18%" left="20%">
                  <div class="c-body">
                    <div class="c-title">Change Password</div>
                    <form action="{{ url('clubhouse/profile/changePassword') }}" method="POST">
                      
                        
                      
                      @if(session('changePasswordErrors'))
                        <ul class="formMessage errorlist">
                        @foreach(session('changePasswordErrors') as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                      @endif

                      @if(session('successMessage'))
                        <div class="formMessage successMessage">{{ session('successMessage')}}</div>
                      @endif
                    {!! csrf_field() !!}
                      <div class="form-group">
                        <label for="">Current Password</label>
                        <input type="password" name="current_password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" name="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Confirm New Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit">Submit</button>
                      </div>
                    </form>
                  </div>
              </div>
        
              <div class="modalDiv modal-popup interactiveObj" data-toggle="#pinboard" id="gameCollection" top="1%" left="17%">
                <div class="c-body">

                   <ul class="nav-tabs" role="tablist">
                        <li class="active col-sm-8"><a href="javascript:;" aria-controls="favorites" role="tab" data-toggle="tab">Favorites</a></li>
                        <li class="col-sm-8"><a href="javascript:;" aria-controls="gamePlayed" role="tab" data-toggle="tab">Games I've Played</a></li>
                        <li class="col-sm-8"><a href="javascript:;" aria-controls="gameUnplayed" role="tab" data-toggle="tab">Games I Haven't Played</a></li>
                      </ul>

                  <div class="tab-content col-sm-24">
                    <div class="tab-pane active" id="favorites">

                      <ul class="gameList">
                        @foreach($user->favorites as $favorite)

                          <li class="col-sm-8">

                              <div class="rateDiv">
                                  <div class="rateStatus">My Rating
                                    @if(!$favorite->user_rating)
                                    <span data-target="favorite_{{ $favorite->id }}">
                                      - <b>NOT RATED</b>
                                    </span>
                                    @endif
                                    
                                  </div>
                                  <div class="ratingArea">
                                    <input type="hidden" value="{{ $favorite->gameRating['totalRating'] }}" step="0.5" id="favorite_{{ $favorite->id }}" data-post="{{$favorite->id }}" class="rating">
                                                          <div class="rateit" data-rateit-backingfld="#favorite_{{ $favorite->id }}" data-rateit-resetable="false" data-rateit-ispreset="true"></div>

                                  
                                  </div>
                                  <img src="{{ asset('uploads') }}/{{ $favorite->thumb_feature_image }}" alt="">
                              </div>

                            <div class="col-sm-12"><button type="button">Play Now</button></div>
                            <div class="col-sm-12"><button type="button"><a href="{{ url('') }}/{{ $favorite->slug }}">Review</a></button></div>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                    <div class="tab-pane" id="gamePlayed">
                      <ul class="gameList">
                        @foreach($user->played_games as $played_game)
                          
                          <li class="col-sm-8">

                              <div class="rateDiv">
                                  <div class="rateStatus">My Rating
                                    @if(!$played_game->user_rating)
                                    <span data-target="played_game_{{ $played_game->id }}">
                                      - <b>NOT RATED</b>
                                    </span>
                                    @endif
                                    
                                  </div>
                                  <div class="ratingArea">
                                    <input type="hidden" value="{{ $played_game->gameRating['totalRating'] }}" step="0.5" id="played_game_{{ $played_game->id }}" data-post="{{$played_game->id }}" class="rating">
                                                          <div class="rateit" data-rateit-backingfld="#played_game_{{ $played_game->id }}" data-rateit-resetable="false" data-rateit-ispreset="true"></div>

                                  
                                  </div>
                                  <img src="{{ asset('uploads') }}/{{ $played_game->thumb_feature_image }}" alt="">
                              </div>

                            <div class="col-sm-12"><button type="button">Play Now</button></div>
                            <div class="col-sm-12"><button type="button"><a href="{{ url('') }}/{{ $played_game->slug }}">Review</a></button></div>
                          </li>
                        @endforeach
                      </ul>
                    </div>
                    <div class="tab-pane" id="gameUnplayed">
                      <ul class="gameList">
                        @foreach($user->unplayed_games as $unplayed_game)

                            <li class="col-sm-8">

                                <div class="rateDiv">
                                  <div class="rateStatus">My Rating
                                      @if(!$unplayed_game->user_rating)
                                      <span data-target="unplayed_game_{{ $unplayed_game->id }}">
                                        - <b>NOT RATED</b>
                                      </span>
                                      @endif
                                      
                                    </div>
                                    <div class="ratingArea">s
                                      <input type="hidden" value="{{ $unplayed_game->gameRating['totalRating'] }}" step="0.5" id="unplayed_game_{{ $unplayed_game->id }}" data-post="{{$unplayed_game->id }}" class="rating">
                                                            <div class="rateit" data-rateit-backingfld="#unplayed_game_{{ $unplayed_game->id }}" data-rateit-resetable="false" data-rateit-ispreset="true"></div>

                                    
                                    </div>
                                    <img src="{{ asset('uploads') }}/{{ $unplayed_game->thumb_feature_image }}" alt="">
                                </div>

                              <div class="col-sm-12"><button type="button">Play Now</button></div>
                              <div class="col-sm-12"><button type="button"><a href="{{ url('') }}/{{ $unplayed_game->slug }}">Review</a></button></div>
                            </li>
                          @endforeach
                        </ul>
                    </div>
                  </div>
                </div>
              </div>

              <a href="#userDetails" class="interactiveObj interactive" right="40%" top="40%" id="diary">
                <img src="{{ asset('images/diary.png') }}" alt="" class="diary">  
              </a>
      
              <a href="#changePassword" class="interactiveObj interactive" left="45%" bottom="32%" id="doorKey">
                <img src="{{ asset('images/door_key.png') }}" alt="" class="door_key">
              </a>


              <a href="#gameCollection" class="interactiveObj interactive" right="10%" top="10%" id="pinboard">
                <img src="{{ asset('images/pinboard.png') }}" alt="" class="pinboard">
              </a>

              <a href="#manageFriends" class="interactiveObj interactive" left="30%" bottom="25%" id="yearbook">
                <img src="{{ asset('images/yearbook.png') }}" alt="" class="yearbook">
              </a>

              <div class="interactiveObj interactive" left="5%" top="2%" id="mirror">
                <img src="{{ asset('images/mirror.png') }}" alt="" class="mirror">
                <div class="profile_pictureParent">
                  <img src="{{  $user->user_detail->profile_picture ? asset('').'/'.$user->user_detail->profile_picture : asset('images/default_profile_picture.png')   }}" alt="" class="profile_pic" id="picPreview">
                </div>
                <input type="file" name="profilePic" accept="image/*" id="profilePic">
              </div>

              <a href="#interview" class="interactiveObj interactive" bottom="49%" left="45%" id="magazine">
                <span>{{ ucfirst($user->user_detail->firstname) }}'s Magazine</span>
                <img src="{{ asset('images/magazine.png') }}" alt="" class="magazine">
              </a>        
    </div> -->
    
<div class="roomNavIcons">
  <ul>
    <li> <a href="{{ url('/clubhouse/profile')}}"> <img src="http://susanwins.com/images/clubhouse/profileroom-thumb.gif" alt="" title="Profile Room">  </a> </li>
    <li> <a href="{{ url('/clubhouse/slotsroom')}}"> <img src="http://susanwins.com/images/clubhouse/slotsroom-thumb.gif" alt="" title="Slots Room">  </a> </li>
    <li> <a href="{{ url('/clubhouse/chatroom')}}"> <img src="http://susanwins.com/images/clubhouse/chatroom-thumb.gif" alt="" title="Chatroom Room">  </a> </li>
    <li> <a href="{{ url('/clubhouse/prizeroom')}}"> <img src="http://susanwins.com/images/clubhouse/prizeround.png" alt="" title="Prize Room">  </a> </li>
  </ul>
</div>

@if(!$user->completed_profile_tour)

  @section('guide-susan')
    <div class="guideSusanContainer">
    <img src="{{url('images')}}/guide-susan-left.png" class="guide-susan">
</div>
  @endsection

  <ul class="cd-tour-wrapper profilePage">
    <li class="cd-single-step no-pulse">

      <div class="cd-more-info">
        <h2> Profile page </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi alias animi molestias in, aperiam.</p>
        <img src="img/step-1.png" alt="step 1">
      </div>
    </li> <!-- .cd-single-step -->
    <li class="cd-single-step">
      <span>Step 1</span>

      <div class="cd-more-info top">
        <h2> Your Diary </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi alias animi molestias in, aperiam.</p>
        <img src="img/step-1.png" alt="step 1">
      </div>
    </li> <!-- .cd-single-step -->

    <li class="cd-single-step">
      <span>Step 2</span>

      <div class="cd-more-info top">
        <h2>Step Number 2</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia quasi in quisquam.</p>
        <img src="img/step-2.png" alt="step 2">
      </div>
    </li> <!-- .cd-single-step -->

    <li class="cd-single-step">
      <span>Step 3</span>

      <div class="cd-more-info left">
        <h2>Step Number 3</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio illo non enim ut necessitatibus perspiciatis, dignissimos.</p>
        <img src="img/step-3.png" alt="step 3">
      </div>
    </li> <!-- .cd-single-step -->

    <li class="cd-single-step">
      <span>Step 4</span>
      <div class="cd-more-info left">
        <h2>Step Number 4</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio illo non enim ut necessitatibus perspiciatis, dignissimos.</p>
        <img src="img/step-3.png" alt="step 3">
      </div>
    </li> <!-- .cd-single-step -->

    <li class="cd-single-step">
      <span>Step 5</span>
      <div class="cd-more-info right">
        <h2>Step Number 5</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio illo non enim ut necessitatibus perspiciatis, dignissimos.</p>
        <img src="img/step-3.png" alt="step 3">
      </div>
    </li> <!-- .cd-single-step -->

    <li class="cd-single-step">
      <span>Step 6</span>
      <div class="cd-more-info right">
        <h2>Step Number 6</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio illo non enim ut necessitatibus perspiciatis, dignissimos.</p>
        <img src="img/step-3.png" alt="step 3">
      </div>
    </li> <!-- .cd-single-step -->

  </ul> <!-- .cd-tour-wrapper -->

  @endif

    <div id="pages" style="width:1px;height:1px;overflow:hidden;">
      <div style="text-align:center;background-color:rgb(121, 142, 143)">
         <div class="firstpage">
            <h2> {{ $user->user_detail->firstname }} <span> Magazine </span> </h2>
            <h3> This is the hottest interview of the year! Today, we're interviewing {{ $user->user_detail->firstname }}  </h3>
            <h4> Wow, such an honour to have you here Misis Burito! I'd love to ask you some questions!  </h4>
         </div>
      </div>
    
      <div name="Home" style="background: url('../images/paparazis.jpg');"> </div>

     {!! $questionaire !!}
<!-- 
    


    <div style="background: url('../images/womentalking.jpg');"></div>

    <div class="questionpage">
      <p> We've heard you're great company to be around – but when you're socialising what's your drink of choice? </p>
      <ul>
        <li> <a href=""> Soft Drink </a> </li>
        <li> <a href=""> Wine </a> </li>
        <li> <a href=""> Beer </a> </li>
        <li> <a href=""> Spirit & Mixer  </a> </li>
        <li> <a href=""> Cocktail </a> </li>
        <li> <a href=""> Champagne </a> </li>
      </ul>
    </div>
    
   <div class="questionpage">
      <p> It's been rumoured you're a bit of a jet setter! Where's your ideal holiday destination? </p>
      <ul>
        <li> <a href=""> USA </a> </li>
        <li> <a href=""> Spain </a> </li>
        <li> <a href=""> France </a> </li>
        <li> <a href=""> Caribbean  </a> </li>
        <li> <a href=""> South East Asia </a> </li>
        <li> <a href=""> Dubai </a> </li>
        <li> <a href=""> Italy </a> </li>
        <li> <a href=""> Greece </a> </li>
        <li> <a href=""> Actually, I don't travel a lot!  </a> </li>
      </ul>
    </div>


    <div style="background: url('../images/womentraveling.jpg');"></div>


    <div style="background: url('../images/womentv.jpg');"></div>

    <div class="questionpage">
      <p> So when you're not out and about – what are your favourite shows to relax with in the evening?  </p>
      <ul>
        <li> <a href=""> Reality TV   </a> </li>
        <li> <a href=""> Celebrity Shows  </a> </li>
        <li> <a href=""> Soap Operas  </a> </li>
        <li> <a href=""> Stand up comedy   </a> </li>
        <li> <a href=""> Documentaries  </a> </li>
        <li> <a href=""> Nature Shows  </a> </li>
      </ul>
    </div>

    <div class="questionpage">
      <p>  Where do you go shopping?  </p>
      <ul>
        <li> <a href=""> Aldi </a> </li>
        <li> <a href=""> Morrisons   </a> </li>
        <li> <a href=""> Iceland   </a> </li>
        <li> <a href=""> Sainsubrys   </a> </li>
        <li> <a href=""> Marks & Spencers   </a> </li>
        <li> <a href=""> Waitrose  </a> </li>
        <li> <a href=""> Tesco </a> </li>
        <li> <a href=""> Asda </a> </li>
        <li> <a href=""> Coop  </a> </li>
      </ul>
    </div>

     <div style="background: url('../images/womenshopping.jpg');"></div>

 -->
  </div>

    <div class="bgwrapper">
      <img id="roombg" src="{{url('images/clubhouse')}}/profileroom3.png" alt="">

      <div  class="box good tvbox">
        <i class="fa fa-times"></i> 
    
        <div class="casinoBox">
          <i class="fa fa-times"></i>
          <p> Select from these casinos: </p>
          <ul id="selectCasino">
           <!--  <li> <a href="#"> <img src="http://susanwins.com/uploads/13553_hardrock2.jpg" alt=""> </a> </li>
           <li> <a href="#"> <img src="http://susanwins.com/uploads/13553_hardrock2.jpg" alt=""> </a> </li>
           <li> <a href="#"> <img src="http://susanwins.com/uploads/13553_hardrock2.jpg" alt=""> </a> </li>
           <li> <a href="#"> <img src="http://susanwins.com/uploads/13553_hardrock2.jpg" alt=""> </a> </li> -->
          </ul>
        </div>

        <ul class="tabs" data-toggle="#pinboard" id="gameCollection">
            <li>
                <input type="radio" name="tabs" id="tab1" checked />
                <label for="tab1"> <i class="fa fa-heart"></i>  </label>
                <div id="tab-content1" class="tab-content">
                  <p> Favourite Games </p>
              <div class="scrollme">
                    <ul class="gameList">
                    @foreach($user->favorites as $favorite)

                      <li class="col-sm-8">

                          <div class="rateDiv">


                              <div class="view third-effect">  
                                <img src="{{ asset('uploads') }}/{{ $favorite->thumb_feature_image }}" alt="">
                              <div class="mask"> 

                                  <div class="rateStatus">My Rating
                                    @if(!$favorite->user_rating)
                                    <span data-target="favorite_{{ $favorite->id }}">
                                      - <b>NOT RATED</b>
                                    </span>
                                    @endif
                                    
                                  </div>

                                  <div class="ratingArea">
                                    <input type="hidden" value="{{ $favorite->gameRating['totalRating'] }}" step="0.5" id="favorite_{{ $favorite->id }}" data-post="{{$favorite->id }}" class="rating">
                                                          <div class="rateit" data-rateit-backingfld="#favorite_{{ $favorite->id }}" data-rateit-resetable="false" data-rateit-ispreset="true"></div>                             
                                  </div>

                                  <div class="col-sm-12"><button type="button" class="buttonone" data-post="{{ $favorite->id }}"> <i class="fa fa-play"></i> </button>
                                <button type="button"><a href="{{ url('') }}/{{ $favorite->slug }}"> <i class="fa fa-book"></i> </a></button></div>

                                <!-- <a href="#" class="info" title="Full Image">Full Image</a>   -->
                              </div>  
                            </div> 


                              
                              
                            


                          </div>

                        
                      </li>
                    @endforeach
                </ul>
              </div>                  
                </div>
            </li>
          
            <li>
                <input type="radio" name="tabs" id="tab2" />
                <label for="tab2"> <i class="fa fa-smile-o" style="display:block;"></i> </label>
                <div id="tab-content2" class="tab-content">
                  <p> Games you've played </p>
                    <div class="scrollme">
                    <ul class="gameList">
                    @foreach($user->played_games as $played_game)
                      
                      <li class="col-sm-8">

                          <div class="rateDiv">

                              <div class="view third-effect">  
                              <img src="{{ asset('uploads') }}/{{ $played_game->thumb_feature_image }}" alt="">
                              <div class="mask"> 

                                 <div class="rateStatus">My Rating
                                        @if(!$played_game->user_rating)
                                        <span data-target="played_game_{{ $played_game->id }}">
                                          - <b>NOT RATED</b>
                                        </span>
                                        @endif
                                        
                                      </div>
                                      <div class="ratingArea">
                                        <input type="hidden" value="{{ $played_game->gameRating['totalRating'] }}" step="0.5" id="played_game_{{ $played_game->id }}" data-post="{{$played_game->id }}" class="rating">
                                                              <div class="rateit" data-rateit-backingfld="#played_game_{{ $played_game->id }}" data-rateit-resetable="false" data-rateit-ispreset="true"></div>

                                      
                                      </div>

                                    <div class="col-sm-12"><button type="button" class="buttonone" data-post="{{ $played_game->id }}">   <i class="fa fa-play"></i>  </button></div>
                                  <div class="col-sm-12"><button type="button"><a href="{{ url('') }}/{{ $played_game->slug }}"> <i class="fa fa-book"></i> </a></button></div>

                                <!-- <a href="#" class="info" title="Full Image">Full Image</a>   -->
                              </div>  
                            </div> 



                          </div>

                      
                      </li>
                    @endforeach
                </ul>
              </div>
                </div>
            </li>

            <li>
                <input type="radio" name="tabs" id="tab3" />
                <label for="tab3"> <i class="fa fa-frown-o"></i> </label>
                <div id="tab-content3" class="tab-content">
                  <p> Games you haven't played yet </p>
                    <div class="scrollme">
                    <ul class="gameList">
              @foreach($user->unplayed_games as $unplayed_game)

                  <li class="col-sm-8">

                      <div class="rateDiv">


                          <div class="view third-effect">  
                          <img src="{{ asset('uploads') }}/{{ $unplayed_game->thumb_feature_image }}" alt="">
                          <div class="mask"> 

                             <div class="rateStatus">My Rating - 
                                @if(!$unplayed_game->user_rating)
                                <span data-target="unplayed_game_{{ $unplayed_game->id }}">
                                  <b>NOT RATED</b>
                                </span>
                                @endif
                                
                              </div>
                              <div class="ratingArea">
                                <input type="hidden" value="{{ $unplayed_game->gameRating['totalRating'] }}" step="0.5" id="unplayed_game_{{ $unplayed_game->id }}" data-post="{{$unplayed_game->id }}" class="rating">
                                                      <div class="rateit" data-rateit-backingfld="#unplayed_game_{{ $unplayed_game->id }}" data-rateit-resetable="false" data-rateit-ispreset="true"></div>

                              
                              </div>


                              <div class="col-sm-12"><button type="button" class="buttonone" data-post="{{ $unplayed_game->id }}">   <i class="fa fa-play"></i>  </button></div>
                              <div class="col-sm-12"><button type="button"><a href="{{ url('') }}/{{ $unplayed_game->slug }}"> <i class="fa fa-book"></i>  </a></button></div>

                            <!-- <a href="#" class="info" title="Full Image">Full Image</a>   -->
                          </div>  
                        </div> 

                      </div>
                    
                  </li>
                @endforeach
              </ul>
              </div>
                </div>
            </li>
        </ul>
      </div>    

      <div class="box2 good keybox">
        <i class="fa fa-times"></i> 
        <form action="{{ url('clubhouse/profile/changePassword') }}" method="POST">           
            @if(session('changePasswordErrors'))
              <ul class="formMessage errorlist">
              @foreach(session('changePasswordErrors') as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            @endif

            @if(session('successMessage'))
              <div class="formMessage successMessage">{{ session('successMessage')}}</div>
            @endif
          {!! csrf_field() !!}
            <div class="form-group">
              <label for="">Current Password</label>
              <input type="password" name="current_password" class="form-control" placeholder="Current Password">
            </div>
            <div class="form-group">
              <label for="">New Password</label>
              <input type="password" name="password" class="form-control" placeholder="New Password">
            </div>
            <div class="form-group">
              <label for="">Confirm New Password</label>
              <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password">
            </div>
            <div class="form-group">
              <button type="submit">Submit</button>
            </div>
          </form>
      </div>
      
      <div class="box3 good profilebox">  
        <i class="fa fa-times"></i> 
        <form action="{{ url('clubhouse/profile/userDetails') }}" method="POST">
          @if(session('userDetailsErrors'))
            <ul class="formMessage errorlist">
            @foreach(session('userDetailsErrors') as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          @endif

          @if(session('userDetailsSuccessMessage'))
            <div class="formMessage successMessage">{{ session('userDetailsSuccessMessage')}}</div>
          @endif
        {!! csrf_field() !!}
          <div class="form-group">
            <label for="">Firstname</label>
            <input type="text" name="firstname" class="form-control" value="{{ isset($user->user_detail) ? $user->user_detail->firstname : '' }}" placeholder="Firstname">
          </div>
          <div class="form-group">
            <label for="">Lastname</label>
            <input type="text" name="lastname" class="form-control" value="{{ isset($user->user_detail) ? $user->user_detail->lastname : '' }}" placeholder="Lastname">
          </div>
          <div class="form-group">
            <label for="">Address</label>
            <textarea name="address" cols="30" rows="5"  placeholder="Address">{{ isset($user->user_detail) ? $user->user_detail->address : '' }}</textarea>
          </div>
          <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" name="phone_no" class="form-control" value="{{ isset($user->user_detail) ? $user->user_detail->phone_no || '' : '' }}"  placeholder="Phone Number">
          </div>
          <div class="form-group">
            <button type="submit">Submit</button>
          </div>
        </form>
      </div>

      <div class="box4 good magbox">
        <i class="fa fa-times"></i>         
<!--         <span class="arrow left" onclick="clipmeR();"> <i class="fa fa-chevron-left"></i> </span>
        <span class="arrow right" onclick="clipmeL();"> <i class="fa fa-chevron-right"></i> </span>
 -->
        <div id="bookflip"></div>
      </div>

      <div class="box5 good friendsbox" >
        <div class="friendBox">
           <i class="fa fa-times"></i> 
           <div class="tabs">
                 <div class="tab">
                     <input type="radio" id="tab-1" name="tab-group-1" checked="">
                     <label for="tab-1"> <i class="ion-person-stalker"></i> Friends ({{ count($user->myFriends) }}) </label>

                      <div class="contenttab" id="myFriends">
                      
                          <div class="friendBoxStatus">
                             <a href="#"> <i class="fa fa-circle indiOffline"></i> Offline <span id="offf.friendBox ul li alineFriendCount"></span></a>
                             <a href="#"> <i class="fa fa-circle indiOnline"></i> Online <span id="onlineFriendCount"></span></a>
                          </div>

                            <ul class="online" id="friendList">


                                  @foreach($user->myFriends as $fr)
                                  <li data-friend="{{$fr->friend->id }}">
                                    <span class="offline" id="friend-online-status-{{ $fr->friend->user_detail->user_id }}"></span>
                                    <div class="options" data-user="{{ $fr->friend->user_detail->user_id }}">
                                      <a  data-target="#pmBox" class="subModalToggle pmFriend"> <i class="fa fa-comment"></i>  </a>
                                      <!-- <a  data-target="#friendProfile" id="friendprofopen" class="subModalToggle viewFriendProfile toggle-good">  <i class="fa fa-user"></i> </a> -->
                                    </div>
                                    <div class="msgImgcont">
                                      <img src="{{ $fr->friend->user_detail->profile_picture ? asset('').'/'.$fr->friend->user_detail->profile_picture : asset('images/default_profile_picture.png') }}" alt="">
                                    </div>
                                   <!--  <h6> {{ ucwords( $fr->friend->user_detail->firstname.' '.$fr->friend->user_detail->lastname ) }} </h6> -->
                                    <h6> {{ ucwords( $fr->friend->user_detail->firstname ) }} </h6>
                                   <!--  <p> Is currently reading playing on the prize room... </p> -->
                                    <div class="optionBox">                              
                                    </div>
                                  </li>

                                  @endforeach
                            </ul>
                     </div>               
                 </div>

                 <div class="tab">
                     <input type="radio" id="tab-2" name="tab-group-1">
                     <label for="tab-2">   <i class="ion-chatbubbles"></i> Messages ( {{ count($user->myMessages) }} ) </label>

                      <div class="contenttab">


                      <div class="messageBoxStatus">
                        <a href="#"> <i class="fa fa-envelope"></i> Unread <span id="unreadMessage">({{ $user->unread_messages()->count() }})</span></a>
                        <a href="#"> <i class="fa fa-envelope-o"></i> Read <span id="readMessage">({{ $user->read_messages()->count() }})</span></a>
                      </div>

                          <ul class="messagingBox">                   
                            @foreach($user->myMessages as $msg)
                              <li data-user="{{ $msg->from_user->user_detail->user_id }}" style="text-align:left;">
                                <a href="javascript:;" class="subModalToggle pmFriend toggle-good" data-target="#pmBox"><span class="offline" id="friend-message-online-status-{{ $msg->from_user->user_detail->user_id }}"></span>
                                <div class="msgImgcont" style="float: left;">
                                  <img src="{{ $msg->from_user->user_detail->profile_picture ? asset('').'/'.$msg->from_user->user_detail->profile_picture : asset('images/default_profile_picture.png') }}" alt="">
                                </div>
                              <h6> {{ ucwords($msg->from_user->user_detail->firstname.' '.$msg->from_user->user_detail->lastname ) }} <em> 3:36pm </em></h6>
                              <p> {{ $msg->message }} </p></a>
                                                 
                            </li>

                            @endforeach
                            </ul>                   
                     </div>
                 </div>  
           </div>
        </div>
      </div>

      <div class="friendprofilebox" >
          <div class="friendProfile" id="friendProfile">
              <div class="divContainer">          
                      <div class="imgContainer">
                      <i class="fa fa-times"></i> 
                      <span> <a href="#" class="add"> <i class="fa fa-plus"></i> </a> </span>
                  <!--     <span> <a href="#" class="block"> <i class="fa fa-ban"></i> </a> </span> -->
                      <span id="pm-user"> <a class="message"> <i class="fa fa-comment" style="position: relative;   top:9px;"></i> </a> </span>
                      <div class="msgImgcont">
                          <img src="https://s3.amazonaws.com/uifaces/faces/twitter/whale/128.jpg" id="viewFriendProfilePic">
                      </div>
                      <h6 id="viewFriendProfileName"> Samantha Wilson </h6>
                      </div>
                      	<div class="moredetailsbox">
	                      <p> Favorite Games  </p>
	                      <div class="favegames">
	                        <span class="ellipsis"> <i class="fa fa-ellipsis-h"></i><a href=" "></a></span>
	                        <ul id="profileFavorites">
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/35843_8balls.gif"> </a> </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/44897_alchemist-lab.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/68900_hot-gems.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/21872_innocence-temptation.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/82396_iron-man.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/35843_8balls.gif"> </a> </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/44897_alchemist-lab.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/68900_hot-gems.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/21872_innocence-temptation.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/82396_iron-man.gif"> </a>  </li>
	                        </ul>
	                      </div>
	                      <p> Games Played with their rating  </p>
	                      <div class="favegames">
	                        <ul id="profilePlayedGames">
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/35843_8balls.gif"> </a> </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/44897_alchemist-lab.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/68900_hot-gems.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/21872_innocence-temptation.gif"> </a>  </li>
	                          <li> <a href="#"> <img src="http://susanwins.com/uploads/82396_iron-man.gif"> </a>  </li>
	                        </ul>
	                      </div>
	                     <!--  <p> Interview  </p>
	                      <div class="interviewBox">
	                        <div>
	                          <p class="question"> We've heard you're great company to be around – but when you're socialising what's your drink of choice? </p>
	                          <p class="answer"> Spirit & Mixer </p>
	                        </div>
	                      </div> -->
	                    </div>
                </div>
          </div>
      </div>
      <div class="cropperContainer">
      <i class="fa fa-times"></i>
          <div id="cropperH"></div>
          <button type="button" id="doneCropping">Done</button>
          <button type="button" id="cancelCropping">Cancel</button>
      </div>
     <!--  <div class="pmessagebox">
          <div class="pmBox" id="pmBox" style="margin-left: 6px;">        
                 <div class="divContainer">
                   <div class="header"></div>
                     <div class="body">
                       <h2>  <i class="fa fa-times"></i>  <span class="online"></span> <b id="pmName">Syndey Winchester </b> </h2>
                       <ul class="messagesContent" id="messageContent">
                       </ul>
                     </div>
                     <div class="pmFooter">
                           <div class="arrow_box" style="display:none;"></div>  
                           <div id="tooltip" style="display:none;">
     
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
                             
                             <i class="fa fa-smile-o emojiTrigger"></i>
                             <i class="fa fa-paper-plane"></i>
                           </div>
                           <form id="sendPrivateMessage">
                               <textarea id="chatEntry" class="chatCommon txtstuff" placeholder="Type Message" style="height:58px"></textarea>
                           </form>
                       </div>
                   </div>
           </div>
     </div> -->

      <div class="tvwrapper wrapper toggle-good">
            <div class="itemLabels"> View Games </div>
            <div class="tv"> <span></span> </div>
          </div> 

       <div class="diarywrapper wrapper toggle-good">
            <div class="itemLabels"> View Profile </div>
            <div class="diary"> <span></span> </div>
          </div>
          
     <!--      <div class="maginterview">
            <div class="maginterviewmain">
              <ul>
                <li>            
                  <p> Hi {{ $user->user_detail->firstname }}! We've got some questions  </p>  
                </li>             
                <li>            
                  <p> Please take time to answer...  </p>  
                </li>             
              </ul>
            </div>
          </div> -->

          <div class="magwrapper wrapper toggle-good">
            <div class="itemLabels"> About You </div>
            <div class="magazine"> <span></span> </div>
          </div>

 
          <div class="keywrapper  wrapper  toggle-good">
            <div class="itemLabels"> Change Password </div>
            <div class="key"> <span></span> </div>
          </div>

        <!--   <div class="friendsnotif">
           <h4> What's in your inbox today? </h4> 
           <div class="friendsnotification">
            <ul>

               @foreach($user->myMessages as $msg)                
                <li data-user="{{ $msg->from_user->user_detail->user_id }}">
                  <a href="javascript:;" class="subModalToggle pmFriend toggle-good" data-target="#pmBox"><span class="offline" id="friend-message-online-status-{{ $msg->from_user->user_detail->user_id }}">
                    <div class="msgImgcont"  style="width: 28px;height: 28px;margin-top: -2px;">
                      <img src="{{ $msg->from_user->user_detail->profile_picture ? asset('').'/'.$msg->from_user->user_detail->profile_picture : asset('images/default_profile_picture.png') }}" alt="">
                    </div>                    
                    <p> <b> {{ ucwords($msg->from_user->user_detail->firstname.' '.$msg->from_user->user_detail->lastname ) }}  </b> {{ $msg->message }} </p>
                  </a>                     
                </li>


                @endforeach

          
            </ul>
            </div>
          </div>
 -->
          <div class="friendswrapper wrapper toggle-good">
          <div class="itemLabels"> Your Friends </div>
            <div class="friends"> <span></span> </div>
          </div>


<!-- <<<<<<< HEAD
                    <div class="picwrapper wrapper">
            <div class="itemLabels"> Upload image </div>        
            <div class="pic">                 
            <img src="{{  $user->user_detail->profile_picture ? asset('').'/'.$user->user_detail->profile_picture : asset('images/default_profile_picture.png')   }}" alt="" class="profile_pic" id="picPreview">
======= -->
          <div class="picwrapper wrapper">
            <div class="itemLabels"> Upload image </div>        
            <div class="pic">                 
           <!--  <img src="{{  $user->user_detail->profile_picture ? asset('').'/'.$user->user_detail->profile_picture : asset('images/default_profile_picture.png')   }}" alt="" class="profile_pic" id="picPreview"> -->
            <img src ="{{asset('user_uploads')}}/user_{{$user->id}}/{{$user->user_detail->profile_picture }}" alt="" class="profile_pic" id="picPreview"> 

            </div>

            <label class="myLabel">
            <input type="file" class="upload file-input" name="profilePic" accept="image/*" id="profilePic" />
            <span>  +  </span>
        </label>

         <!--    <button class="file-upload">            
            <input type="file" class="upload file-input" name="profilePic" accept="image/*" id="profilePic" > + </button> -->

<!-- <<<<<<< HEAD
    </div> 


=======
    </div>
>>>>>>> 716615a7e751b994398f4828d9acec2a9a4dd28a -->
</div>
@endsection

@section('custom_scripts')
<script src="{{ asset('js/jquery.rateit.min.js') }}"></script>
<!-- <script src="{{ asset('js/jquery.vticker.min.js') }}"></script> -->
<script src="{{ asset('js/bookflip.js') }}"></script>

<script type="text/javascript">
      
$(document).ready(function(){

  // $('.tvwrapper').on('click', function(e){  e.preventDefault();  $(this).siblings('.box').toggleClass('active');});
  // $('.keywrapper').on('click', function(e){  e.preventDefault();  $(this).siblings('.box2').toggleClass('active');});
  // $('.diarywrapper').on('click', function(e){  e.preventDefault();  $(this).siblings('.box3').toggleClass('active');});
  // $('.magwrapper').on('click', function(e){  e.preventDefault();  $(this).siblings('.box4').toggleClass('active');});
  // $('.friendswrapper').on('click', function(e){  e.preventDefault();  $(this).siblings('.box5').toggleClass('active');});

  $(document).on('click','.pmFriend', function(){
    $('.pmBox').css('display','block');
  });

  $('.keybox .fa-times').click(function() {        
     $(".keybox ").fadeToggle('fast');
  });
  $('.keywrapper').click(function() {        
     $(".keybox ").fadeToggle('fast');
  });

  $('.profilebox .fa-times').click(function() {        
     $(".profilebox ").fadeToggle('fast');
  });
  $('.diarywrapper').click(function() {        
     $(".profilebox ").fadeToggle('fast');
  });

  $('.tvbox > .fa-times').click(function() {        
     $(".tvbox ").fadeToggle('fast');
  });
  $('.tvwrapper').click(function() {        
     $(".tvbox ").fadeToggle('fast');
  });

  $('#friendprofopen').click(function() {        
     $(".friendProfile ").fadeToggle('fast');
  });

   $('.imgContainer .fa-times').click(function() {        
     $(".friendProfile ").fadeToggle('fast');
  });

  // $('.msgImgcont img').click(function() {        
  //    $(".friendProfile ").fadeToggle('fast');
  // });

  $('.magbox .fa-times').click(function() {        
     $(".magbox ").fadeToggle('fast');
  });

  $('.magwrapper').click(function() {        
     $(".magbox ").fadeToggle('fast');
  });

  $('.casinoBox .fa-times').click(function() {        
     $(".casinoBox ").hide();
  });

   $('#profilePic').click(function(e){
    e.stopPropagation();
  });

  $('#mirror').click(function(e){
    $('#profilePic').click();   
  });

  // $('.maginterviewmain').vTicker('init', {
  //     speed: 600, 
  //     padding:10
  // });
  // $('.friendsnotification').vTicker('init', {
  //     speed: 400,
  //     height: 40,
  //     padding:8
  // });

  $('.nav-tabs li a').on('click', function(){
    $(this).parent().addClass('active');
    $(this).parents('ul').find('li').not($(this).parent()).removeClass('active');
    theContent = $('#'+$(this).attr('aria-controls')).addClass('active');
    $('.tab-content').find('.tab-pane').not(theContent).removeClass('active');
    $(theContent).trigger('tab-open');
  });

  $('.gameList .rating').rateit({ max: 5, step: 0.1, min : 0.5 });

  var gameExpUrl = '{{ url("gameExp") }}';
  var userId = $('#userId').val();
  var baseUrl = '{{ url() }}';
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


    function observeFriendSession(){

      friend_ids = [];
      $('#friendList').find('li').each(function(){
          friend_ids.push($(this).data('friend'));
      });

      socket.emit('observe_friend_session', friend_ids);

    }

    observeFriendSession();


/*    friend_login
friend_logout*/

    /*socket.on('friend_login', function(friend_id){
        console.log('friend_login');
        console.log(friend_id);
        $('#friend-online-status-'+friend_id).removeClass('offline').parent('li').prependTo('#friendList');
    });
    socket.on('friend_logout', function(friend_id){
        console.log('friend_logout');
        console.log(friend_id);
        $('#friend-online-status-'+friend_id).addClass('offline');
    });*/


    playNowAJAX = false;
    $('.buttonone').click(function() {

      $(".casinoBox ").show();

      if(!playNowAJAX){
          playNowAJAX = true;

        $('#selectCasino').html('').append($('<li>').text('Loading...'));

      post_id = $(this).data('post');

      $.ajax({
        type : 'POST',
        url : gameExpUrl+'/playNow',
        data : { _token : CSRF_TOKEN, post_id : post_id },
        dataType : 'json',
        success : function(data){
          console.log(data);

          $('#selectCasino').html('');
          playNowAJAX = false;

          if(data && data.length){
            
            $.each(data, function(){

              casino = this.casino;
              $('#selectCasino').append(
                  $('<li>')
                      .append(
                        $('<a href="'+baseUrl+'/'+casino.id+'" target="_blank">')
                            .append(
                              $('<img alt="">').attr('src', '{{url("uploads")}}/'+casino.claim_image)
                              )
                        )
                )
            });
          }else{
            $('#selectCasino').append($('<li>').text('No Casino Available'));
          }
          
        },error : function(xhr){
          console.log(xhr.responseText);
        }
      });

     
      }


  });


  $('#searchPeopleForm').on('submit', function(e){
    search = $('#searchPeople').val();
    e.preventDefault();
    action = $(this).attr('action');
    if(search){
      window.location.href=action+'?search='+search;
    }
  });


  questionAjax =false;
  $(document).on('click','.chooseAnswer', function(e){
      e.preventDefault();
      _this = this;
      question_id = $(_this).parents('.questionContainer').data('id');
      follow_id = $(_this).data('follow-id');
      choice_id = $(_this).data('id');
      response = $(_this).data('response');

      if(!questionAjax && question_id && choice_id){

        questionAjax = true;

        $.ajax({

            url : '{{ url("question/answer") }}',
            data : { _token : CSRF_TOKEN, question_id : question_id, choice_id : choice_id },
            type : 'POST',
            dataType : 'json',
            success : function(answered){
              
              if(answered){

                 

                ul = $(_this).parents('ul').html('');

                new_button = $('<li>').append($('<a href="javascript:;">').text('You answered: '+$(_this).text()));
                $(ul).append(new_button);

                if(response){

                  responseText = $('<li>').addClass('response').append($('<p>').text(response));

                  $(ul).append( responseText );
                }

                if(follow_id){

                      $('.follow_up_'+follow_id).css('display', 'block');
                  }

                  pageIndex = $(ul).parents('.questionpage').find('.questionBody').data('page');
                  pages[pageIndex] = $(ul).parents('.questionpage').parent()[0].innerHTML;
              }

                questionAjax = false;

            },error : function(xhr){
              console.log(xhr.responseText);
            }
          });
      }
      

      

  });
/*doneCropping
cancelCropping*/

function dataURItoBlob(dataURI, callback) {
// convert base64 to raw binary data held in a string
// doesn't handle URLEncoded DataURIs - see SO answer #6850276 for code that does this
var byteString = atob(dataURI.split(',')[1]);

// separate out the mime component
var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0]

// write the bytes of the string to an ArrayBuffer
var ab = new ArrayBuffer(byteString.length);
var ia = new Uint8Array(ab);
for (var i = 0; i < byteString.length; i++) {
ia[i] = byteString.charCodeAt(i);
}

// write the ArrayBuffer to a blob, and you're done
var bb = new Blob([ab], {type: mimeString});
return bb;
}

/*  cropperInstance = $('#cropperH').croppie({
          enableExif: true,
               viewport: {
                  width: 150,
                  height: 150,
                  type: 'square'
               },
               boundary: {
                  width: 300,
                  height: 300
               }
            });*/
  
  $('.cropperContainer').on('click', '> .fa-fa-times, #cancelCropping',function(){
      $('.cropperContainer').hide();
  });

/*  $('#doneCropping').on('click', function(){

      cropperPromise = cropperInstance.croppie('result', {
        type : 'canvas',
        size : 'viewport'
      }).then(function(cropCanvas){
        if(cropCanvas){
            $('#picPreview').attr('src',cropCanvas );

            profile_pictureData = dataURItoBlob(cropCanvas);
            console.log(profile_pictureData);
          }
      });
      
  });*/

var $uploadCrop;

    function readFile(input) {
      if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function (e) {
                 $('.cropperContainer').show();
                $uploadCrop.croppie('bind', {
                  url: e.target.result,
                });
              }
              
              reader.readAsDataURL(input.files[0]);
          }
          
    }

    uploadCropAjax = false;
    $uploadCrop = $('#cropperH').croppie({
         
               viewport: {
                  width: 150,
                  height: 150,
                  type: 'square'
               },
               boundary: {
                  width: 300,
                  height: 300
               },
                enableOrientation: true,
                enableExif: true,
            });

    $('#profilePic').on('change', function () { readFile(this); });
    $('#doneCropping').on('click', function (ev) {
      $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport',
      }).then(function (resp) {

         
        if(!uploadCropAjax){
          uploadCropAjax = true;
            profile_pictureData = dataURItoBlob(resp);
            formData = new FormData();
            formData.append('profile_picture', profile_pictureData, 'profile_picture.png');
            formData.append('user_id', userId);
            formData.append('_token', CSRF_TOKEN);

              $.ajax({
                url: gameExpUrl+'/uploadProfilePic',
                type : 'POST',
                data : formData,
                dataType : 'json',
                processData: false,
                contentType: false,
                success : function(data){
                  uploadCropAjax = false;
                  $('.cropperContainer').hide();
                  $('#picPreview').attr('src',resp );
                },error : function(xhr){
                  console.log(xhr.responseText);
                }
              });
        }

      });
    });

  $('.gameList').bind('rated','.rating', function(e, value){
      

      input = $(e.target).parent().find('input');

      data_id = $(input).data('id');
      post_id = $(input).data('post');

      if(post_id && userId ){

        $.ajax({
          type : 'POST',
          url: gameExpUrl+'/rateGame',
          data : { rating : value, user_id : userId , post_id : post_id , _token : CSRF_TOKEN },
          dataType : 'json',
          success : function(data){
            console.log(data);
            if(data){
              $('span[data-target="'+$(input).attr('id')+'"]').text('RATED!');
            }
          },error : function(xhr){
            console.log(xhr.responseText);
          }

        });
      }
      //alert(data_id);
  });

});



      var gameExpUrl = '{{ url("gameExp") }}';
      var profileUrl = '{{ url("profile") }}';
      var messageUrl = '{{ url("message") }}';
      var sessionUrl = '{{ url("session") }}';
      var userId = $('#userId').val();
      var userImage = $('#userId').data('image');
      var userName = $('#userId').data('name');
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      var imageUrl = '{{ asset("uploads") }}';
      var publicUrl = '{{ asset("") }}';
      var defaultProfilePic = publicUrl+'/images/default_profile_picture.png';

      /*

      $('#sendPrivateMessage').on('submit', function(e){
        e.preventDefault();
          theUser = $(this).data('user');
          message = $('#chatEntry').val();

          $('#chatEntry').val('');

          if(theUser && message){

             $('#messageContent').append(
                      $('<li>').addClass('alt').append(
                          $('<span>').addClass('alt').text(message)
                        )
                      );

            $.ajax({
              url : messageUrl+'/sendPrivateMessage',
              data : { from : userId, to : theUser, message : message, _token : CSRF_TOKEN },
              type : 'POST',
              dataType : 'json',
              success : function(data){
                socket.emit('send_private_message', { to : theUser, message : message });

                 $('#messageContent').animate({
                        scrollTop: $('#messageContent')[0].scrollHeight
                  }, 2000);

              },error : function(xhr){
                console.log(xhr.responseText);
              }
            });

          }

      });

      $('#messagesMenu').one('click', function(){


    $('#myMessages').html('').append($('<li>').addClass('loading').text('Loading'));
        
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
             $('#unreadMessageNotification').html('');

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
                                          .append($('<span>').addClass('timestamp').text('3:36pm'))
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


      $(document).on('click', '.pmFriend', function(){

         modal = $('#pmBox');

        if(!modal.hasClass('loading')){

            $(modal).addClass('loading');
            theUser = $(this).parent().data('user');
            $('#pmBox').attr('data-current', theUser);
            $('#sendPrivateMessage').data('user', theUser);
            $(modal).find('.divContainer').hide();
            loading = $('<div>').addClass('loadContainer').text('Loading');
            $(modal).append(loading);
            $('#messageContent').html('');
            $.ajax({
              url : messageUrl+'/getPrivateMessages',
              data : { user_id : userId , other_person : theUser , _token : CSRF_TOKEN },
              dataType : 'json',
              type : 'POST',
              success : function(data){
                console.log(data);

                $('#unreadMessage').text('('+data['unread']+')');
                $('#readMessage').text('('+data['read']+')');

                $(modal).find('.divContainer').show();
                $(loading).remove();
                modal.removeClass('loading');

                $('#pmName').text( data.other_person.user_detail.firstname +' '+ data.other_person.user_detail.lastname);
                console.log(data.conversation);
                if(data.conversation && data.conversation.length > 0){

                  $.each(data.conversation, function(){

                    console.log(this);

                    li = $('<li>');

                    span = $('<span>').text(this.message);

                    if(this.from != userId){

                      $(li).append(
                        $('<img>').attr('src', data.other_person.user_detail.profile_picture ? publicUrl+'/'+data.other_person.user_detail.profile_picture : defaultProfilePic )
                      );

                    }else{


                       $(li).addClass('alt');
                     
                      $(span).addClass('alt');

                   
                    }

                    $('#messageContent').append(
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
          console.log(message);

          if($('#pmBox').data('current') == message.from.user_id && $('#pmBox').is(':visible')){
              console.log('real time add');

              $('#pmMessageContent').append(
                      $('<li>').append(
                        $('<img>').attr('src', message.from.profile_picture ? publicUrl+'/'+message.from.profile_picture : defaultProfilePic )
                      )
                      .append(
                          $('<p>').text(message.message)
                        )
                );
          }else{
            
            if($('#inbox-user-'+message.from.user_id).length){

              $('#inbox-user-'+message.from.user_id).find('a').addClass('unread').find('.message').text(message.message);

              $('#myMessages').prepend($('#inbox-user-'+message.from.user_id));

              ;

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
                                          .append($('<span>').addClass('timestamp').text('3:36pm'))
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


      $('#myFriends').on('click','.viewFriendProfile', function(){

          modal = $('#friendProfile');

          if(!modal.hasClass('loading')){

            $(modal).addClass('loading');
            theUser = $(this).parent().data('user');
            $(modal).find('.divContainer').hide();
            loading = $('<div>').addClass('loadContainer').text('Loading');
            $(modal).append(loading);
            $('#profileFavorites').html('');
            $('#profilePlayedGames').html('');

            $.ajax({
              url : profileUrl+'/viewFriendProfile',
              data : { user_id : userId, other_person : theUser , _token : CSRF_TOKEN },
              dataType : 'json',
              type : 'POST',
              success : function(data){

                console.log('viewFriendProfile');
                console.log(data);

                  $(modal).find('.divContainer').show();
                  $(loading).remove();
                  modal.removeClass('loading');
                  $('#viewFriendProfilePic').attr('src', data.user_detail.profile_picture ? publicUrl+'/'+data.user_detail.profile_picture : defaultProfilePic  )
                  $('#viewFriendProfileName').text(data.user_detail.firstname+' '+data.user_detail.lastname);
                  $.each(data.favorites, function(){
                     $('#profileFavorites')
                        .append(
                          $('<li>')
                            .append(
                              $('<a href="#">')
                                .append(
                                    $('<img>').attr('src', imageUrl+'/'+this['icon_feature_image'])
                                  )
                              )
                                
                          )
                  });
                  
                  $.each(data.played_games, function(){
                     $('#profilePlayedGames')
                        .append(
                          $('<li>')
                            .append(
                              $('<a href="#">')
                                .append(
                                    $('<img>').attr('src', imageUrl+'/'+this['icon_feature_image'])
                                  )
                              )
                                
                          )
                  });


              },error : function(xhr){
                console.log(xhr.responseText);
              }
            });
          }     

      });



      $('.emojiTrigger').click(function(){
        $('#tooltip').toggle();
        $('.arrow_box').toggle();
      });

     $('.contenttab ul').slimScroll({
        height: '380px'
    });

    $('.friendBox .fa-times').click(function() {
      $('.friendsbox').css("left","-425px");
    });

    $('.friendswrapper').click(function() {
       $('.friendsbox').css("left","0");
    });

    $('.moredetailsbox').slimscroll({
      height: '180px'
    })



init_bookflip(0);

function init_bookflip(startpage){
   startingPage = startpage;
   var pages=new Array;

    pWidth=380; //width of each page
    pHeight=482; //height of each page

    numPixels=20;  //size of block in pixels to move each pass
    pSpeed=15; //speed of animation, more is slower

   /* startingPage=0;//select page to start from, for last page use "e", eg. startingPage="e"*/
    allowAutoflipFromUrl = true; //true allows querystring in url eg bookflip.html?autoflip=5

    pageBackgroundColor="#CCCCCC";
    pageFontColor="#ffffff";

    pageBorderWidth="1";
    pageBorderColor="transparent";
    pageBorderStyle="solid";  //dotted, dashed, solid, double, groove, ridge, inset, outset, dotted solid double dashed, dotted solid

    pageShadowLeftImgUrl ="../images/black_gradient.png";
    pageShadowWidth = 80;
    pageShadowOpacity = 60;
    pageShadow=1 //0=shadow off, 1= shadow on left page

    allowPageClick=true; //allow page turn by clicking the page directly
    allowNavigation=true; //this builds a drop down list of pages for auto navigation.
    pageNumberPrefix="page "; //displays in the drop down list of pages if enabled

    ini();
}


</script>

@endsection


</body>
</html>
