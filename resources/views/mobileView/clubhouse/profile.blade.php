@extends('clubhouse.layout')
	
@section('custom-styles')
 <link rel="stylesheet" href="{{ asset('css/croppie.css') }}">
 <style>

.friendList .user_online_status{
        position: absolute;
    width: 13px;
    height: 13px;
    background: green;
    border-radius: 50%;
    border: 2px solid #e3e3e3;
        left: 46px;
    top: 9px;
    z-index: 1;
  }
 </style>
@endsection

@section('navbar-title', 'Profile')
@section('content')

  <div class="app-page" data-page="main">
  <div class="app-content">
          <div class="userDetailBackground"></div>
    <div class="userDetail">
        <div class="upperHalf">
            <div class="imgContainer">
        <div class="changePicButtonContainer z-depth-1">
            <a href="javascript:;" class="changePicButton">
                
                     <img src="{{ !$user->user_detail->profile_picture  ? url().'/user_uploads/user_'.$user->id.'/'.$user->user_detail->profile_picture : url().'/user_uploads/default_image/default_01.png' }}" alt="">
                
               
               
            </a>
               <label>
                  <span> + </span>
                </label>
            </div>

        </div>
          <h6>{{ $user->user_detail->firstname.' '.$user->user_detail->lastname }}</h6>
          <div class="row userDetailActions">
                <div class="col s6"><a href="javscript:;"><span class="icon ion-ios-chatbubble"></span> <span>{{ count($user->myFriends) }}</span></a></div>
          <div class="col s6"><a href="javascript:;"><span class="icon ion-person-stalker"></span> <span>{{ count($user->myMessages) }} </span></a></div>
          </div>
        </div>
        <div class="lowerHalf">


            <div class="listFav">
                <p class="favTitle">Favourite Games</p>
                 <ul class="row">

                  @foreach($user->favorites as $favorite)
                    <li class="col s2"><img src="{{ asset('uploads') }}/{{ $favorite->icon_feature_image }}"></li>
                  @endforeach
              
            </ul>
            </div>
            <div class="listFav">
                <p class="favTitle">Games you've played</p>
                 <ul class="row">

                   @foreach($user->played_games as $played_game)
                    <li class="col s2"><img src="{{ asset('uploads') }}/{{ $played_game->icon_feature_image }}"></li>
                  @endforeach
              
            </ul>
            </div>
            <div class="listFav">
                <p class="favTitle">Games you haven't played yet </p>
                 <ul class="row">

                  @foreach($user->unplayed_games as $unplayed_game)
                    <li class="col s2"><img src="{{ asset('uploads') }}/{{ $unplayed_game->icon_feature_image }}"></li>
                  @endforeach
              
            </ul>
            </div>
           
        </div>
    </div>

     <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

     <!--  <ul class="collection">
       
         <li class="collection-item">
         <a href="javascript:;" class="app-button" data-target="uploadImage">
     <span class="title">Upload Image</span>
     </a>
         </li>
       
      
         <li class="collection-item">
          <a href="javascript:;" class="app-button" data-target="yourFriends">
     <span class="title">Your Friends</span>
     </a>
         </li>
         <li class="collection-item">
         <a href="javascript:;">
     <span class="title">Change Password</span>
      </a>
         </li>
         <li class="collection-item">
         <a href="javascript:;">
     <span class="title">About You</span>
     </a>
         </li>
         <li class="collection-item">
         <a href="javascript:;">
     <span class="title">Your Profile</span>
     </a>
         </li>
       
       </ul> -->

      </div>
</div>
    

      <div class="app-page" data-page="uploadImage">
  <div class="app-content">

             <div class="row">
        <div class="col s12 m7">
          <div class="card uploadImageCard">
            <div class="card-image" id="imageView">
              <img src="{{asset('user_uploads')}}/user_{{$user->id}}/{{$user->user_detail->profile_picture }}" id="picPreview">
            </div>
             <div id="cropperH" style="display:none"></div>
            <div class="card-content">
             
             <input type="file" class="upload file-input" name="profilePic" accept="image/*" id="profilePic" />
             <div id="imageButtons">
               <a class="waves-effect waves-light btn" id="uploadBtn">Upload Image</a>
               <a class="waves-effect waves-light btn app-button" data-target="main">Go back</a>
             </div>
             <div id="croppingButtons" style="display:none">
                 <a class="waves-effect waves-light btn" id="doneCropping">Save</a>
               <a class="waves-effect waves-light btn app-button" data-target="main">Go back</a> 
             </div>
            </div>
          </div>
        </div>
      </div>

        
      </div>
</div>

<div class="app-page" data-page="yourFriends">
  <div class="app-content">
         <div class="row">
              <div class="col s12">
                <ul class="tabs" id="yourFriendTab">
                  <li class="tab col s6"><a href="#myFriends">Friends ({{ count($user->myFriends) }}) </a></li>
                  <li class="tab col s6"><a href="#myMessages">Messages</a></li>

                </ul>
              </div>
              <div id="myFriends" class="col s12">
            <ul class="collection friendList">
                   @foreach($user->myFriends as $fr)

                       <li class="collection-item avatar app-button" data-target="userDetails" data-target-args='{ "user_id" : "{{ $fr->friend->user_detail->user_id }}" }'>
                            <span class="user_online_status offline" id="friend-online-status-{{ $fr->friend->user_detail->user_id }}"></span>
                            <img src="{{ $fr->friend->user_detail->profile_picture ? asset('').'/'.$fr->friend->user_detail->profile_picture : asset('images/default_profile_picture.png') }}" alt="" class="circle">
                            <span class="title">{{ ucwords( $fr->friend->user_detail->firstname ) }}</span>
                          </li>
                   @endforeach
                     </ul>
              </div>
              <div id="myMessages" class="col s12">Test 2</div>
            </div>
        
      </div>
</div>

<div class="app-page" data-page="userDetails">
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
              <div class="userDetail" style="display:none">
                <div class="imgContainer">
                <a class="messageButton app-button" data-target="privateMessage" data-target-args='{ "lastPage" : "userDetails" }'> <i class="fa fa-comment" style="position: relative;   top:4px;"></i> </a>
                      <div class="msgImgcont">
                      <img src="http://susanwins.com//profile_picture-2016-05-04-17-52-33.png" id="viewFriendProfilePic">
                    </div>
                    <h6 id="viewFriendProfileName"></h6>
                    <div id="profileBtn"><button type="button">Unfriend</button></div>
                </div>
                <div class="moredetailsbox">
                      <p> Favorite Games  </p>
                      <div class="favegames">
                        <ul id="profileFavorites"><li><a href="#"><img src="http://susanwins.com/uploads/35843_8balls.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/19119_atlantisqueen.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/77682_jurrsaicsearch.gif"></a></li></ul>
                      </div>
                      <p> Games Played with their rating  </p>
                      <div class="favegames">
                        <ul id="profilePlayedGames"><li><a href="#"><img src="http://susanwins.com/uploads/35843_8balls.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/19119_atlantisqueen.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/27222_thefiner_reelsoflife.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/46681_zhao-cai-jin-bao.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/80436_lucky_leprechaun.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/80182_russiasearch.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/18300_lucky_zodiac.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/47879_sparks.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/42833_coolwolf.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/64448_bigbang.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/48047_fisticuffs.gif"></a></li><li><a href="#"><img src="http://susanwins.com/uploads/55891_golden_princess.gif"></a></li></ul>
                      </div>
                    <!--   <p> Interview  </p>
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

@endsection

@section('app-js')
<script>
  
</script>
<script src="{{ asset('js/clubhouse/croppie.js') }}"></script>
<script>


 $(document).on('ready', function(){

      var gameExpUrl = '{{ url("gameExp") }}';
      var profileUrl = '{{ url("profile") }}';
      var messageUrl = '{{ url("message") }}';
      var sessionUrl = '{{ url("session") }}';
      var friendUrl = '{{ url("friends") }}';
      var userId = $('#userId').val();
      var userImage = $('#userId').data('image');
      var userName = $('#userId').data('name');
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      var imageUrl = '{{ asset("uploads") }}';
      var publicUrl = '{{ asset("") }}';
      var defaultProfilePic = publicUrl+'/images/default_profile_picture.png';
     /* App.controller('yourFriends', function(page){

        $(page).find('#yourFriendTab').tabs();
      });*/

      
      $('.modal-trigger').leanModal();

      App.populator('yourFriends', function(page){
        this.transition = 'slide-left';
        /*$('ul.tabs').tabs('select_tab', 'tab_id');*/
        $(page).find('#yourFriendTab').tabs();

        dataLoad = $('#backButton').attr('data-load');
        if(dataLoad == 'yourFriends'){
           this.transition = 'slide-right';
        }else{
           this.transition = 'slide-left';
        }
        $('#backButton').show().attr('data-load', 'main');
      });

      App.populator('userDetails', function(page, request){
           this.transition = 'slide-left';
            $('#backButton').show().attr('data-load', 'yourFriends');

            if(request.user_id){

                                  $(page).on('click', '#profileBtn button', function(){

                      other_person = $(this).data('other_person');
                      action = $(this).data('action');
                      friend_id = $(this).data('friend_id');

                      $(this).attr('disabled', 'disabled');

                      if(action){

                        ajaxUrl = false;
                        data = false;

                          if(other_person && action == 1){

                            ajaxUrl = friendUrl+'/addFriend';
                              data =  { user_id : userId, friend_id : other_person };

                          }else if(action == 2 && friend_id){

                             ajaxUrl = friendUrl+'/cancelFriendRequest';
                              data = { id : friend_id };
                          }else if(action == 3 && friend_id && other_person){
                              ajaxUrl = friendUrl+'/acceptFriendRequest';
                              data = { id : friend_id };
                          }else if(action == 4 && friend_id && other_person){
                            ajaxUrl = friendUrl+'/unFriend';
                              data = { id : friend_id };
                          }


                          if(data && ajaxUrl){
                            alert(JSON.stringify(data) + ' '+ajaxUrl);
                          }


                      }


                     });
              setTimeout(function(){
                $('.pageLoading').show();
              $('.userDetail').hide();

                                $.ajax({
                  url : profileUrl+'/viewFriendProfile',
                  data : { user_id : userId, other_person : request.user_id, _token : CSRF_TOKEN },
                  dataType : 'json',
                  type : 'POST',
                  success : function(data){
                    console.log(data);
                      $('.pageLoading').hide();
              $('.userDetail').show();
                    $('#viewFriendProfilePic').attr('src', data.user_detail.profile_picture ? publicUrl+'/'+data.user_detail.profile_picture : defaultProfilePic  )
                       $('#viewFriendProfileName').text(data.user_detail.firstname+' '+data.user_detail.lastname);
                       relation = data.friend.relation;
                      friend_id = data.friend.friend_id;

                       if(relation != 2){

                        actionBtn = $('<button type="button">').data('other_person', request.user_id);

                        if(relation != 1){
                            $(actionBtn).data('friend_id', friend_id);
                        }

                        if(relation == 1){
                          $(actionBtn).text('Add Friend').data('action', 1);
                        }else if(relation == 3){
                          $(actionBtn).text('Cancel Friend Request').data('action', 2);
                        }else if(relation == 4){
                          $(actionBtn).text('Accept Friend Request').data('action', 3);
                        }else if(relation == 5){
                          $(actionBtn).text('Unfriend').data('action', 4);
                        }

                        $('#profileBtn').html('').append(actionBtn);

                      };

                     /* $(modal).find('.divContainer').show();
                      $(loading).remove();
                      modal.removeClass('loading');
                      $('#viewFriendProfilePic').attr('src', data.user_detail.profile_picture ? publicUrl+'/'+data.user_detail.profile_picture : defaultProfilePic  )
                      $('#viewFriendProfileName').text(data.user_detail.firstname+' '+data.user_detail.lastname);

                      $('#pm-user').data('user', data.user_detail.user_id).find('.message').addClass('subModalToggle pmFriend').attr('data-target', '#pmBox');

                      relation = data.friend.relation;
                      friend_id = data.friend.friend_id;

                      if(relation != 2){

                        actionBtn = $('<button type="button">').data('other_person', theUser);

                        if(relation != 1){
                            $(actionBtn).data('friend_id', friend_id);
                        }

                        if(relation == 1){
                          $(actionBtn).text('Add Friend').data('action', 1);
                        }else if(relation == 3){
                          $(actionBtn).text('Cancel Friend Request').data('action', 2);
                        }else if(relation == 4){
                          $(actionBtn).text('Accept Friend Request').data('action', 3);
                        }else if(relation == 5){
                          $(actionBtn).text('Unfriend').data('action', 4);
                        }

                        $('#profileBtn').append(actionBtn);

                      };

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
                      });*/


                  },error : function(xhr){
                    console.log(xhr.responseText);
                  }
                });
              }, 2000);


            }
      });

       App.populator('uploadImage', function (page) {
            this.transition = 'slide-left';
            $('#backButton').show().attr('data-load', 'main');
            $(page).on('click', '#profilePic', function(e){
                 e.stopPropagation();
            });
            $(page).on('click', '#uploadBtn', function(e){
                 e.stopPropagation();
                  $('#profilePic').click();
            });

            var $uploadCrop;

    function readFile(input) {
      if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function (e) {
                          $(page).find('#imageView').hide();
          $(page).find('#imageButtons').hide();
          $(page).find('#cropperH').show();
          $(page).find('#croppingButtons').show();
                $uploadCrop.croppie('bind', {
                  url: e.target.result,
                });
              }
              
              reader.readAsDataURL(input.files[0]);
          }

    }


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




    uploadCropAjax = false;
    $uploadCrop = $(page).find('#cropperH').croppie({
         
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

    $(page).on('change','#profilePic', function () { readFile(this); });
    $(page).on('click','#doneCropping', function (ev) {
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
                  console.log(data);
                  uploadCropAjax = false;
                           $(page).find('#imageView').show();
                  $(page).find('#imageButtons').show();
                  $(page).find('#cropperH').hide();
                  $(page).find('#croppingButtons').hide();
                  $('#picPreview').attr('src',resp );
                },error : function(xhr){
                  console.log(xhr.responseText);
                }
              });
        }

      });
    });
      });


             App.populator('main', function (page) {
            this.transition = 'slide-right';
              alert('ererrr');
            $('#backButton').hide().removeAttr('data-load');
      });

              App.load('main');

 });

</script>
@endsection