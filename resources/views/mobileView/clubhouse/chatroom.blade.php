@extends('clubhouse.layout')


@section('content-list')



<div class="app-page" data-page="chatroom">
<div class="app-topbar"></div>

    {!! csrf_field() !!}
 	
  	<div class="app-content">
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
	   			<ul id="dropdown2" class="dropdown-content">
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
					 	
				<div class="chatBox">
		            <div class="body">
		                <ul>
			                @if($selectedRoom)
								@foreach($selectedRoom->room_messages as $msg)
								<li>
			                    	<img src="{{$msg->user->user_detail->profile_picture ? asset('').'/user_uploads/user_'.$msg->user->user_detail->user_id.'/'.$msg->user->user_detail->profile_picture : asset('/images/default_profile_picture.png') }}">
			                    	<span>{{ $msg->message }}</span>
			                	</li>
								@endforeach
							@endif
		            	</ul>
		            </div>
		            <div class="chatFooter">
		                   <div class="triggers">
		                      	<a href="javscript:;" class="sendMessage" id="sendChat"><i class="fa fa-paper-plane"></i></a>
		            		</div>
		                    	<textarea name="" placeholder="Type Message" id="chatRoomTextarea"></textarea>
		            </div>
		        </div>
			</div>
  		</div>
  	</div>
</div>

@endsection

@section('script')
<script src="{{ asset('js/sockets.io.js') }}"></script>

<script>

	

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
  });


  	App.load('chatroom');

  function sendMessage(message) {
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
                $('<img>').attr('src',data.user.profile_picture ? BASE_URL+'/user_uploads/user_'+data.user.user_id+'/'+data.user.profile_picture : DEFAULT_IMAGE )
                )
              .append(
                  $('<span>').text(data.message)
                )
        );
	 }
  });

  thePage = App.getPage();
  console.log(thePage);

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

</script>

@endsection