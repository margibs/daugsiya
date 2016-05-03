@extends('clubhouse.app')

@section('content-list')

<div class="app-page" data-page="signup">
  <div class="app-topbar">
  	 <div class="app-button left blue" data-target="home">Sign-up</div>
  </div>
  <div class="app-content">
  	<div class="first-name">
    	<input id="txtFirstName" class="app-input" placeholder="First Name" type="text">
    </div>
    <br>
    <div class="last-name">
    	<input id="txtLastName" class="app-input" placeholder="Last Name" type="text"></input>
    </div>
    <br>
     <div class="email">
    	<input id="txtEmail" class="app-input" placeholder="Email" type="email">
    </div>
    <br>
    <div class="password">
    	<input id="txtPassword" class="app-input" placeholder="Password" type="password"></input>
    </div>
    <br>
   
    <div class="app-button green" id="btnSignup">SignUp</div>
  </div>
</div>

@endsection

@section('script')

<script>
	App.controller('signup', function (page){
		$(page)
			.find('#btnSignup')
			.on('click', function(){
				var first_name = $('#txtFirstName').val();
				var last_name  = $('#txtLastName').val();
				var email = $('#txtEmail').val();
            	var password = $('#txtPassword').val();

            	//getData(first_name, last_name, email, password);
            	loginData(first_name, last_name, email, password);
				
			});
	});

	function loginData(first_name, last_name, email, password){
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		var result = '';
		  $.ajax({
	          url : 'signup/post',
	          data : { first_name : first_name, last_name : last_name, email: email, password: password,  _token : CSRF_TOKEN },
	          type : 'POST',
	          dataType : 'json',
	          success : function(data){
	            console.log(data);
	            //getData(data);
	            result = data;
	          },error : function(xhr){
	            console.log(xhr.responseText);
	            result = xhr.responseText;
	          }

      });	
		  getData(result);
	}

	//function getData(first_name, last_name, email, password){
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

	App.load('signup');
</script>

@endsection