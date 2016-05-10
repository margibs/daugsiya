@extends('clubhouse.layout')


@section('content-list')

<style type="text/css">
	.cardbg 
	{
   		background:url('../images/clubhouse/chatroom.png');
   		background-size:cover;
	}
	#sendChatedit {

 	background: url('../images/homepage/message-icon.png');
    width: 67px; // just wide enough to show mic icon
    height: 85px; // just high enough to show mic icon
    cursor:pointer;
    border: none;
    position: absolute;
    margin-right: 5px;
    outline: none;

}
#chatRoomTextarea {
    height: 100px;
    width: 380px;
}
	
</style>

<div class="app-page" data-page="chatroom">
    {!! csrf_field() !!}
 
  	<div class="app-content">
  		<div class="body" id="peopleContent">
		  <ul class="side-nav" id="mobile-demo">
               <li>
                 <div class="chip">
                   <img src="{{ asset('images/default_progile_picture.png') }}" alt="Contact Person">
                   Jane Doe
                 </div>
               </li>
               <li>
                <div class="chip">
                   <img src="{{ asset('images/default_progile_picture.png') }}" alt="Contact Person">
                   Jane Doe
                 </div>
               </li>
               <li>
                  <div class="chip">
                   <img src="{{ asset('images/default_progile_picture.png') }}" alt="Contact Person">
                   Jane Doe
                 </div>
               </li>
               <li>
                  <div class="chip">
                   <img src="{{ asset('images/default_progile_picture.png') }}" alt="Contact Person">
                   Jane Doe
                 </div>
               </li>
             </ul> 
  		</div>
	   	<div class="row">
			<div class="cardbg">
				

				<div class="row">
					<div class="card-panel grey lighten-2 z-depth-1"> 						
			    		<div class="row">
						     <div class="col s7 push-s5">
						      	<span class="flow-text"> 
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/80737_clubhouseicon.png" alt="" id="home"></i>
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/16972_chaticon.png" alt="" id="privateMessage"></i>
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/78234_notificationicon.png" alt="" id="notification"></i>
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/34532_friendicon.png" alt="" id="friendrequest"></i>
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/39695_logouticon.png" alt="" id="logout"></i>
						      	</span>
						     </div>
								<div class="col s5 pull-s7"><span class="flow-text"><img src="http://susanwins.com/uploads/52424_logo.png" alt="" height="50px"></i>
								<ul id="dropdown2" class="dropdown-content">
								 	@foreach($chatrooms as $room)
								    	<li><a href="{{ url('clubhouse/chatroom') }}/{{$room->name}}">{{ $room->name }}<span class="badge"></span></a></li>
								    @endforeach
								  </ul>
								  <a class="btn dropdown-button" href="#!" data-activates="dropdown2">{{ $selectedRoom->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
								</span></div> 
					    </div>
					</div>
				</div>
				<center>	
					<p style="color: red">	  
						{{ $selectedRoom->name }}
						 <a href="#" data-activates="mobile-demo" class="button-collapse2"><span id="people_count"></span></a>
					</p>
				</center>
			 	<div class="row">
			 		<div class="chatContainer">
			 			<div class="divContainer">
			 				<div class="body" id="messageContent">
			 					@if($selectedRoom)
						 			@foreach($selectedRoom->room_messages as $msg)
											<div class="col s12 m8 offset-m2 l6 offset-l3">
										        <div class="card-panel grey lighten-5 z-depth-1">
										          	<div class="row valign-wrapper">
											            <div class="col s2">
											               <img src ="{{$msg->user->user_detail->profile_picture ? asset('').'/user_uploads/user_'.$msg->user->user_detail->user_id.'/'.$msg->user->user_detail->profile_picture : asset('/images/default_profile_picture.png') }}"  alt="" class="circle responsive-img">  <!-- notice the "circle" class -->
											            </div>
											            <div class="col s10">
											              <span class="black-text">
											               	{{ $msg->message }}
											              </span>
											            </div>
										         	</div>
										        </div>
										     </div>
									@endforeach
						 		@endif
			 				</div>
			 			</div>
			 		</div>
			 	</div>
			<div class="row">
		      <div class="col s12">
				<form class="col s12"  id="chatMessageForm" action="{{ url('chatroom/postMessage') }}">
			      <div class="row">
			        <div class="input-field col s12">
			      		<i class="material-icons" id="sendChat">send</i>
			      	<!-- 	<input id="sendChat"/> -->
			      		 <div class="contact">
				          <textarea id="chatRoomTextarea"  class="chatCommon" placeholder="Write Message"></textarea>
				        </div>
			          
			        </div>
			      </div>

			    </form>
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

	/*CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	BASE_URL = "{{ url('/')}}";
	USER_ID = "{{ Auth::user()->id }}";
	//USER_IMAGE = "{{ Auth::user()->user_detail->profile_picture }} ";
	USER_NAME = "{{ Auth::user()->name }}";
	DEFAULT_IMAGE = BASE_URL+'/user_uploads/default_image/default_01.png';
	ROOM_ID = "{{ $selectedRoom->id  }}";
	ROOM_NAME = "{{ $selectedRoom->name }}";
	ROOM_DESCRIPTION = "{{ $selectedRoom->description }}";*/
	

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
			}
			
		});

	$(page)
		.find('#home')
		.on('click', function(){
			console.log("Hello Home");
			getData("Hello World");
		});

	$(page)
		.find('#privateMessage')
		.on('click', function(){
			console.log("Hello privateMessage");
		});
	$(page)
		.find('#notification')
		.on('click', function(){
			console.log("Hello notification");
		});
	$(page)
		.find('#friendrequest')
		.on('click', function(){
			console.log("Hello friendrequest");
		});
	$(page)
		.find('#logout')
		.on('click', function(){
			console.log("Hello logout");
		});

		console.log("Testing 101");

		socket.on('display_people', function(data){

    	console.log('display_people');
    	console.log(data);
    	var count = Object.keys(data).length;
 		console.log(count);
 		$( "#people_count" ).append(count+" people are talking now");
    	/*.find('#people_count')
    	.append('<span>').text("Hello Wolrd");*/

   		});
   	

   	 /* <ul class="side-nav" id="mobile-demo">
               <li>
                 <div class="chip">
                   <img src="{{ asset('images/default_progile_picture.png') }}" alt="Contact Person">
                   Jane Doe
                 </div>
               </li>
               <li>
                <div class="chip">
                   <img src="{{ asset('images/default_progile_picture.png') }}" alt="Contact Person">
                   Jane Doe
                 </div>
               </li>
               <li>
                  <div class="chip">
                   <img src="{{ asset('images/default_progile_picture.png') }}" alt="Contact Person">
                   Jane Doe
                 </div>
               </li>
               <li>
                  <div class="chip">
                   <img src="{{ asset('images/default_progile_picture.png') }}" alt="Contact Person">
                   Jane Doe
                 </div>
               </li>
             </ul> */


  });

  	App.load('chatroom');

  function sendMessage(message) {
	$('#messageContent').append(
		$('<div>').addClass('col s12 m8 offset-m2 l6 offset-l3')
				.append(
					$('<div>').addClass('card-panel grey lighten-5 z-depth-1')
						.append(
							$('<div>').addClass('row valign-wrapper')
								.append(
									$('<div>').addClass('col s2')
										.append(
											$('<img>').addClass('circle responsive-img').attr('src', USER_IMAGE ? BASE_URL+'/user_uploads/user_'+USER_ID+'/'+USER_IMAGE : DEFAULT_IMAGE )
											)
									)
								.append(
									$('<div>').addClass('col s10')
										.append(
											$('<span>').addClass('black-text').text(message)
											)
									)
							)
					)
		)
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

  	if(ROOM_ID == data.room_id) {
  		$('#messageContent').append(
			$('<div>').addClass('col s12 m8 offset-m2 l6 offset-l3')
					.append(
						$('<div>').addClass('card-panel grey lighten-5 z-depth-1')
							.append(
								$('<div>').addClass('row valign-wrapper')
									.append(
										$('<div>').addClass('col s2')
											.append(
												$('<img>').addClass('circle responsive-img').attr('src', data.user.profile_picture ? BASE_URL+'/user_uploads/user_'+data.user.user_id+'/'+data.user.profile_picture : DEFAULT_IMAGE )
												)
										)
									.append(
										$('<div>').addClass('col s10')
											.append(
												$('<span>').addClass('black-text').text(data.message)
												)
										)
								)
						)
			)
	  	}
  });


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