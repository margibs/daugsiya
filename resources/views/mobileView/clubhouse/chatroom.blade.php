@extends('clubhouse.app')


@section('content-list')

<style type="text/css">
	.cardbg {
   background:url('../images/clubhouse/chatroom.png') no-repeat 0% 0%;
   background-size:cover;
	}

	 body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
	
</style>

<div class="app-page" data-page="chatroom">
    {!! csrf_field() !!}
 
  	<div class="app-content">
	   	<div class="row">
			<div class="cardbg">

				<div class="row">
					<div class="card-panel grey lighten-2 z-depth-1"> 						
			    		<div class="row">
						     <div class="col s7 push-s5">
						      	<span class="flow-text"> 
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/80737_clubhouseicon.png" alt=""></i>
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/16972_chaticon.png" alt=""></i>
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/78234_notificationicon.png" alt=""></i>
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/34532_friendicon.png" alt=""></i>
						      		<i class="large material-icons"><img src="http://susanwins.com/uploads/39695_logouticon.png" alt=""></i>
						      	</span>
						     </div>
					      <div class="col s5 pull-s7"><span class="flow-text"> <i class="large material-icons"><img src="http://susanwins.com/uploads/52424_logo.png" alt=""></i></span></div>
					    </div>
					</div>
				</div>


		   	
		 	<div class="row">
		 			@foreach($selectedRoom->room_messages as $msg)
			   		  @if($msg->user->user_detail->profile_picture == '')
			   		  	
						<div class="col s12 m8 offset-m2 l6 offset-l3">
					        <div class="card-panel grey lighten-5 z-depth-1">
					           <div class="row valign-wrapper">
						            <div class="col s2">
						              <img src="{{asset('user_uploads')}}/default_image/default_01.png" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
						            </div>
						            <div class="col s10">
						              <span class="black-text">
						             
						               <a class="waves-effect waves-light btn-large">  {{ $msg->message}}</a>
						              </span>
						            </div>
					           </div>
					        </div>
					     </div>
			   		@else
			   	
					     
						<div class="col s12 m8 offset-m2 l6 offset-l3">
					        <div class="card-panel grey lighten-5 z-depth-1">
					          	<div class="row valign-wrapper">
						            <div class="col s2">
						             
						               <img src ="{{asset('user_uploads')}}/user_{{$msg->user->id}}/{{$msg->user->user_detail->profile_picture }}"  alt="" class="circle responsive-img">  <!-- notice the "circle" class -->
						            </div>
						            <div class="col s10">
						              <span class="black-text">
						               {{ $msg->message}}
						              </span>
						            </div>
					         	</div>
					        </div>
					     </div>
			   		@endif
				@endforeach
		 	</div>

			<div class="row">
		      <div class="col s12">
				<form class="col s12">
			      <div class="row">
			        <div class="input-field col s12">
			         <span class="new badge">4</span>
			          <textarea id="textarea1" class="materialize-textarea"></textarea>
			          <label for="textarea1">Textarea</label>
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

<script>


  App.controller('chatroom', function (page){
    $(page)
      .find('#btnSignup')
      .on('click', function(){
        getData("Hello World");
        
      });
  });

  function getData(data){
     App.dialog({
                    title: 'Data Infromation',
                    text: data,
                    okButton: 'Try Again',
                    cancelButton: 'Cancel'
                },function (tryAgain) {
                    if (tryAgain) {
                        App.load('SignUp');
                    }
                });
  }	


	App.load('chatroom');

	 	$(docoment).ready(function(){
       		$('.button-collaps').sideNav();
       	});

         $('.fixed-action-btn').openFAB();
           $('.fixed-action-btn').closeFAB();


	/*	$(docoment).ready(function(){
       		$('.button-collaps').sideNav();
       	});
*/

</script>

@endsection