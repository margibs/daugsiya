@extends('clubhouse.layout')


@section('content-list')



<div class="app-page" data-page="chatroom">
  	<div class="app-content" data-no-scroll>
  		<div class="body" id="peopleContent">
		  <ul class="side-nav" id="mobile-demo">
               <li>
                 <div class="chip">
                   <img src="{{ asset('images/default_profile_picture.png') }}">
                  <span id="user_name">fdsafsda</span>
                 </div>
               </li>
             </ul> 
		</div> 

	   <div class="row">
	   			<div class="chatroomHeader">
	   			<ul id="dropdown2" class="dropdown-content" data-id="{{ $selectedRoom->id }}">
				 	@foreach($chatrooms as $room)
				    	<li><a href="{{ url('clubhouse/chatroom') }}/{{$room->name}}">{{ $room->name }}<span class="badge"></span></a></li>
				    @endforeach
				</ul>
					<a class="btn dropdown-button" href="#!" data-activates="dropdown2">{{ $selectedRoom->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
					<center>	
						<p style="color: red">	  
							 <a href="#" data-activates="mobile-demo" class="button-collapse2">{{ $selectedRoom->name }}<span id="people_count"></span></a>
						</p>
					</center>
	   			</div>
					 	
				<div class="chatBox">
		            <div class="body">
		                <ul>
			               
								<li>
			                    	<img src="{{ asset('/images/default_profile_picture.png') }}" class="chatProfPic" data-id="">
			                    	<span></span>
			                	</li>
								
		            	</ul>
		            </div>
		            <div class="chatFooter">
		                   <div class="triggers">
		                      	<a href="javscript:;" class="sendMessage" id="sendChat"><i class="fa fa-paper-plane"></i></a>
		            		</div>
		                    	<textarea name="" placeholder="Connecting to server..." id="chatRoomTextarea" disabled="disabled"></textarea>
		            </div>
		        </div>
			</div>
  		</div>
  	</div>
</div>


<div class="app-page" data-page="userDetails">
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
              <div id="friendDetailContainer" style="display:none">
                      <div class="userDetailBackground"></div>
    <div class="userDetail">
        <div class="upperHalf">
            <div class="imgContainer">
        <div class="changePicButtonContainer z-depth-1">
            <a href="javascript:;" class="changePicButton">
                
                     <img src="" alt="" id="friendProfilePic">
                
               
               
            </a>
            </div>

        </div>
          <h6></h6>
          <div class="row userDetailActions">

                <div class="col s8"><span class="actionButton" id="toggleRelationship">Unfriend</span></div>
                <div class="col s4"><span id="messageUser"><span class="icon ion-ios-chatbubble"></span> <span></span></span></div>
          
          </div>
        </div>
        <div class="lowerHalf">


            <div class="listFav">
                <p class="favTitle">Favourite Games</p>
                 <ul class="row" id="friendFavGameUl">

              
            </ul>
            </div>
            <div class="listFav">
                <p class="favTitle">Games you've played</p>
                 <ul class="row" id="friendPlayedGameUl">
              
            </ul>
            </div>
           
        </div>
    </div>
                      <div id="confirmModal" class="modal">
                      <div class="modal-content">
                        <h5></h5>
                      </div>
                      <div class="modal-footer">
                        <a href="javascript:;" class=" modal-action modal-close waves-effect waves-green btn-flat confirmUnfriend">Yes</a>
                        <a href="javascript:;" class=" modal-action modal-close waves-effect waves-green btn-flat">No</a>
                      </div>
                    </div>
              </div>
     </div>
</div>



@endsection

@section('script')
<script src="{{ asset('js/sockets.io.js') }}"></script>

<script>

(function(window, document, $){
		var profileUrl = '{{ url("profile") }}';

	var publicUrl = '{{ asset("") }}';
	 var imageUrl = '{{ asset("uploads") }}';
   var friendUrl = '{{ url("friends") }}';


$.fn.initBan = function(time){

        function millisToMinutesAndSeconds(millis) {
          var minutes = Math.floor(millis / 60000);
          var seconds = ((millis % 60000) / 1000).toFixed(0);
          return minutes + ":" + (seconds < 10 ? '0' : '') + seconds;
        }

        function countRemaining(input){

          remaining_time = $(input).data('remaining_time');

          remaining_time = remaining_time - 1000;

          if(remaining_time > 0){

            $(input).data('remaining_time', remaining_time);
            $(input).removeData('remaining_time').data('remaining_time', remaining_time);
             $(input).attr('placeholder' ,'Banned for '+millisToMinutesAndSeconds(remaining_time)).attr('disabled', 'disabled');

          }else{
            clearInterval($(input).data('time_interval'));
            $(input).attr('placeholder', 'Type Message').removeAttr('disabled');
          }

          

        }

        return this.each(function(){

          input = this;

          $(input).attr('disabled', 'disabled');

          $(input).removeData('remaining_time').data('remaining_time', time);

          $(input).attr('placeholder' ,'Banned for '+millisToMinutesAndSeconds(time));

          if($(input).data('time_interval')){

            clearInterval($(input).data('time_interval'));

          }

          $(input).data('time_interval', 

            setInterval(countRemaining, 1000, input)

            )



        });

      }

  App.controller('chatroom', function (page){
    $(page)
		.find('#sendChat')
		.on('click', function(){

		MESSAGE = $('#chatRoomTextarea').val();
		
			 if(MESSAGE == "") {
				//getData('Please insert data');
				alert("Please insert data");
			} 
			else {
				sendMessage(MESSAGE);
				//console.log(MESSAGE);
			}
			
		});

			


		$(page).on('click', '.chatProfPic', function(){

			user_id = $(this).attr('data-id');

			App.load('userDetails', { user_id : user_id });
			//App.load('userDetails');

		})

		$(page).on('appShow', function(){
			$(page).find('#peopleContent').show();
			$('.drag-target:eq(1)').show();

			chatBox = $(page).find('.chatBox');
                chatBoxOffsetTop = chatBox.offset().top;
                chatBoxFooterOffsetTop = $(page).find('.chatFooter').offset().top;
                  
            $(page).find('.chatBox .body').css('height', (chatBoxFooterOffsetTop- chatBoxOffsetTop)+'px');

            chatTextarea = $(page).find('#chatRoomTextarea');
            chatTextarea.attr('disabled', 'disabled').attr('placeholder', 'Connecting to server...');

            socket.on('room_connected', function(banned){
            	/*console.log(banned && userId == banned.user_id &&  == banned.room_id);*/
            	console.log(ROOM_ID);
            	console.log(banned);
	      if(banned && USER_ID == banned.user_id && ROOM_ID == banned.room_id){
	        chatTextarea.initBan(banned.time);

	      }else{
	        chatTextarea.removeAttr('disabled').attr('placeholder', 'Type Message');
	      }

	   });

             socket.on('user_banned', function(data, room_id){
      if(data.user_id == USER_ID && ROOM_ID == room_id ){
        chatTextarea.initBan(data.time);

      }

   });

    socket.on('disconnect', function(){

    	chatTextarea.attr('placeholder', 'Disconnected. Connecting to Server...').attr('disabled', 'disabled');
    });
    socket.on('connect', function(){

    	chatTextarea.removeAttr('disabled').attr('placeholder', 'Type Message');
    });


   socket.on('lift_ban', function(user_id, room_id){
      if(user_id == USER_ID && ROOM_ID == room_id ){
        
        clearInterval(chatTextarea.data('time_interval'));
        chatTextarea.attr('placeholder', 'Type Message').removeAttr('disabled');

      }

   });

		});
		$(page).on('appForward', function(){
			$(page).find('#peopleContent').hide();
			$('.drag-target:eq(1)').hide();
		});

		

   		socket.on('display_people', function(data){

    	//console.log('display_people');
    	//console.log(data);
    	var count = Object.keys(data).length;
 		//console.log(count);
 		$(page).find('#people_count').html('');
 		$(page)	
   			.find('#people_count').append('<span> ' + count + ' people are talking now</span>');

   			$(page)
    		.find('#mobile-demo').html('');
    		//console.log(BASE_URL);
	   		$.each(data, function() {
	   			$(page)
	    		.find('#mobile-demo').append(
	    				$('<li>').append(
	    					$('<div>').addClass('chip').append(
	    						$('<img>').attr('src', this.profile_picture ? BASE_URL+'/user_uploads/user_'+this.user_id+'/'+this.profile_picture : DEFAULT_IMAGE)
	    					)
	    					.append(
			                  $('<span>').text(this.name)
			                )
	    				)
	    		)
	   		});
   		});

   	//get all chatroom
   		$(page).on('appShow', function(){

   			room_id = $(page).find('#dropdown2').data('id');
   			var is_loading = false; // initialize is_loading by false to accept new loading
			var limit = 4; // limit items per page
		
   			room_id = $(page).find('#dropdown2').data('id');
   			$.ajax({
   				  url : BASE_URL+'/mobile/getChatroom/'+room_id,
		          type : 'GET',
		          dataType : 'json',
		          success : function(data){

			   		$(page).find('.chatBox .body ul').html('');
			   		$.each(data, function() {
			   			 $(page).find('.chatBox .body ul').prepend(
				          $('<li>')
				              .append(
				                $('<img>').attr('src', this.profile_picture ? BASE_URL+'/user_uploads/user_'+this.user_id+'/'+this.profile_picture : DEFAULT_IMAGE ).attr('data-id', this.user_id).addClass('chatProfPic')
				                )
				              .append(
				                  $('<span>').text(this.message)
				                )
				        );
			   		});
			   		$(page).find('.chatBox .body').scrollTop( $(page).find('.chatBox .body ul')[0].scrollHeight);

		          },
		          error: function(error)
		          {
		          	console.log(error.responseText);
		          }
   			});


   			$(document).ready(function(){
   				 var CurrentScroll = 0;
   				 var messageIndex = 10;
   				 var scrollAjax = false;
			    $(".chatBox .body").scroll(function(e){

			   		body = $(this);
			    	var NextScroll = body.scrollTop();

			      //console.log(NextScroll);
			  
			      if (NextScroll > CurrentScroll){
			         //down-ward scrolling 
			         console.log("down");
			      }
			      else if(NextScroll == 0 && !scrollAjax){
			         // upward-scrolling 
						//console.log("up");
						scrollAjax = true;
						$.ajax({
				      	url: BASE_URL+'/mobile/paginate/getchatroom',
				      	type: 'POST',
				      	data: {start: 10, end: messageIndex, room_id: room_id, _token : CSRF_TOKEN },
				      	dataType: 'json',
				      	success: function(data) {
				      		if(data.done != 1)
				      		{
				      			messageIndex = messageIndex + 10;
					      		//console.log(data);
					      		scrollAjax = false;
					      		
						   		$.each(data, function() {
						   			 $(page).find('.chatBox .body ul').prepend(
							          $('<li>')
							              .append(
							                $('<img>').attr('src', this.profile_picture ? BASE_URL+'/user_uploads/user_'+this.user_id+'/'+this.profile_picture : DEFAULT_IMAGE ).attr('data-id', this.user_id).addClass('chatProfPic')
							                )
							              .append(
							                  $('<span>').text(this.message)
							                )
							        );
						   		});
						   		body.scrollTop(1);
				      		}
				      	},
				      	error: function(error) {
				      		console.log(error.responseText);
				      	}
				      });
			      }
			      CurrentScroll = NextScroll; 
			   });
			});
			
   		});
  });



App.controller('userDetails', function(page, request){
			 this.transition = 'slide-left';
				$(page).on('appShow', function(){
				$('#navbarTitle').text('Friend Details');
				//alert(JSON.stringify(request));

				//Hide the pageloading
				$(page).find('.pageLoading').show();
              	$(page).find('#friendDetailContainer').hide();


   $(page).find('#toggleRelationship').on('click', function(){

              		   	theButton = this;

    other_person = $(this).data('other_person');
    action = $(this).data('action');
    friend_id = $(this).data('friend_id');


    if(action){

        if(other_person && action == 1){

	           $.ajax({

			          url : friendUrl+'/addFriend',
			          data : { friend_id : other_person, _token : CSRF_TOKEN },
			          type : 'POST',
			          dataType : 'json',
			          success : function(data){

			            $(theButton).text('Cancel Friend Request').data('action', 2).data('other_person', other_person).data('friend_id', data.id);

			            socket.emit('send_addFriend_request', { from : userId, to : other_person, id : data.id });

			          },error : function(xhr){
			            console.log(xhr.responseText);
			          }

			      });

        }else if(action == 2 && friend_id && other_person){

				          $.ajax({

				          url : friendUrl+'/cancelFriendRequest',
				          data : { id : friend_id, _token : CSRF_TOKEN },
				          type : 'POST',
				          dataType : 'json',
				          success : function(deleted){
				     
				              $(theButton).text('Add Friend').data('action', 1).data('other_person', other_person);


				          },error : function(xhr){
				            console.log(xhr.responseText);
				          }

				      });
        }else if(action == 3 && friend_id && other_person){
          $.ajax({

            url : friendUrl+'/acceptFriendRequest',
            data : { id : friend_id , _token : CSRF_TOKEN },
            type : 'POST',
            dataType : 'json',
            success : function(data){

              if(data){
                socket.emit('friend_request_accepted', { other_person : other_person });
              }

              $(theButton).data('action', 4).data('other_person', other_person).data('friend_id', friend_id).text('Unfriend');


            },error : function(xhr){
              console.log(xhr.responseText);
            }

          });

        }else if(action == 4 && friend_id && other_person){

        	$.ajax({

            url : friendUrl+'/unFriend',
            data : { id : friend_id , _token : CSRF_TOKEN },
            type : 'POST',
            dataType : 'json',
            success : function(data){

              $(theButton).data('action', 1).data('other_person', other_person).text('Add Friend');

            },error : function(xhr){
              console.log(xhr.responseText);
            }

          });

        }


    }


   });

		setTimeout(function(){
			friendFavGameUl = $(page).find('#friendFavGameUl').html('');
      		friendPlayedGameUl = $(page).find('#friendPlayedGameUl').html('');

      		$.ajax({
      			url : profileUrl+'/viewFriendProfile',
          		data : { user_id : USER_ID, other_person : request.user_id, _token : CSRF_TOKEN },
          		dataType : 'json',
          		type : 'POST',
          		success : function(data){
          			//console.log(data);
          			
          			$(page).find('#friendDetailContainer').show().addClass('dataLoaded');
          			//$(page).find('#friendProfilePic').attr('src', data.user_detail.profile_picture ? BASE_URL+'/user_uploads/user_'+data.user_detail.user_id+'/'+data.user_detail.profile_picture : DEFAULT_IMAGE  );
          			$(page).find('#friendProfilePic').attr('src', data.user_detail.profile_picture ? BASE_URL+'/user_uploads/user_'+data.user_detail.user_id+'/5050/'+data.user_detail.profile_picture : DEFAULT_IMAGE  );

          			friendName = data.user_detail.firstname+' '+data.user_detail.lastname;
     				$(page).find('#friendDetailContainer h6').text(friendName);


     				/*****************UNFRIEND AND FAVOURITE GAMES AND GAMES YOU PLAYED********************/
		            $(page).on('click', '#messageUser', function(){
		                App.load('privateMessage', { user_id : request.user_id, name : friendName});
		            });

		              friend_id = data.friend.friend_id;

		              $.each(data.favorites, function(){
		                       $(friendFavGameUl) 
		                        .append(
		                          $('<li>').addClass('col s2')
		                            .append(
		                              $('<a href="#">')
		                                .append(
		                                    $('<img>').attr('src', imageUrl+'/'+this['icon_feature_image'])
		                                  )
		                              )
		                                
		                          )
		                  });
		                  
		                  $.each(data.played_games, function(){
		                      $(friendPlayedGameUl)
		                        .append(
		                          $('<li>').addClass('col s2')
		                            .append(
		                              $('<a href="#">')
		                                .append(
		                                    $('<img>').attr('src', imageUrl+'/'+this['icon_feature_image'])
		                                  )
		                              )
		                                
		                          )
		                  });
		             /***************** UNFRIEND AND FAVOURITE GAMES AND GAMES YOU PLAYED ********************/

		             
		             /******************DISPLAY BUTTON ACCORDING TO RELATIONSHIP ****************/
		             	 relation = data.friend.relation;
          				friend_id = data.friend.friend_id;

          				if(relation != 2){

			                    actionBtn = $(page).find('#toggleRelationship').data('other_person', request.user_id);

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

			                  }else{
			                  	$(page).find('#toggleRelationship').hide();
			                  }

		             /******************DISPLAY BUTTON ACCORDING TO RELATIONSHIP ****************/
		          
     				//hide pageLoading after successfull
     				$(page).find('.pageLoading').hide();
      				$(page).find('#friendDetailContainer').show();

          		},
          		error: function(error){
          			console.log(error.responseText);
          		}
      		});

		},2000);
	});
});
	
	/*App.back(function(){
		alert("Hello World");
	});*/

  	App.load('chatroom');

  function sendMessage(message) {
  	console.log(message);
  	thePage = App.getPage(); 	
 	   $(thePage).find('.chatBox .body ul').append(
            $('<li>')
              .append(
                $('<span>').text(message).addClass('alt').text(message)
                )
        );

	 document.getElementById('chatRoomTextarea').value = "";

	$.ajax({
		url: BASE_URL+"/chatroom/postMessage",
		type:'POST',
		data: { user_id : USER_ID , message : message, room_id : ROOM_ID , _token : CSRF_TOKEN },
		dataType: 'json',
		success: function(result){
			socket.emit('send_chatroom_message', ROOM_ID, message );
			//socket.emit('send_chatroom_message', ROOM_ID, data);
			//console.log(result);
		},
		error: function(error){
			console.log(error.responseText);
		}
	});


  }
	

  socket.on('post_chatroom_message', function(data){
  	//var page = App.getPage();

  	thePage = App.getPage();
  	if(ROOM_ID == data.room_id) {
  		 $(thePage).find('.chatBox .body ul').append(
          $('<li>')
              .append(
                $('<img>').attr('src',data.user.profile_picture ? BASE_URL+'/user_uploads/user_'+data.user.user_id+'/'+data.user.profile_picture : DEFAULT_IMAGE ).attr('data-id', data.user.user_id).addClass('chatProfPic')
                )
              .append(
                  $('<span>').text(data.message)
                )
        );
	 }
  });

  thePage = App.getPage();

  function getData(data){
     App.dialog({
                    title: 'Data Infromation',
                    text: data,
                    okButton: 'Try Again',
                    cancelButton: 'Cancel'
                },function (tryAgain) {
                    if (tryAgain) {
                        App.load('chatroom');
                    }
                });
  }	

})(window, document, jQuery);

</script>

@endsection