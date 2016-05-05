@extends('clubhouse.layout')
	
@section('custom-styles')
<style>
/* 	#roombg{
	width:auto;
	height:100%;
	position: absolute;
}

.signupform{
  position: relative;
  display: block;
  margin:20% auto auto auto;
  z-index: 2;
  background:rgb(255, 255, 255);
  padding: 25px 20px;
  border-radius: 3px;
  -moz-box-shadow: 0 0 10px -2px #000;
  -webkit-box-shadow: 0 0 10px -2px #000;
  box-shadow: 0 0 10px -2px #000;
  width: 80%;
  max-width: 300px;
}
.signupform h3{
    font-family: 'Work Sans',Roboto,Arial,Helvetica,sans-serif;
    font-size: 24px;
    margin-bottom: 20px;
}
.singupcontainer .signupform h1{
font-family: 'Work Sans';
    font-weight: 700;
    font-size: 35px;
    text-align: center;
    margin-bottom: 20px;
    text-transform: uppercase;
}
.signupform input[type="text"], .signupform input[type="password"], .signupform input[type="email"]{
    background: #F5F5F5;
    border: medium none;
    padding: 12px 20px;
    font-size: 17px;
    font-family: Roboto;
    border-radius: 2px;
    margin-bottom: 12px;
    width: 100%;
    float:left;
    color: #000;
    position: relative;
    -moz-box-shadow: inset 0 0 10px -2px #ABABAB;
    -webkit-box-shadow:inset 0 0 10px -2px #ABABAB;
    box-shadow: inset 0 0 10px -2px #ABABAB;
}
.signupform button{
  background: rgb(242, 155, 32);
      margin-top: 10px;
  border: none;
  display: block;
  width: 100%;
  padding: 10px;
  font-family: Roboto;
  font-weight: 600;
  color: #fff;
  font-size: 23px;
  border-radius: 4px;
  cursor: pointer;

} */

</style>
@endsection

 @section('navbar-title', 'Login')

	@section('content')

     <div class="app-page" data-page="main">
  <div class="app-content">
            <div class="panel z-depth-1">                 
       <div class="row">
          <form class="col s12" action="{{ url('login/post') }}" method="POST">
          {!! csrf_field() !!}
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="text" class="validate" name="email">
                <label for="email">Enter Your Email</label>
              </div>
              <div class="input-field col s12">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Enter Your Password</label>
              </div>
              <button class="waves-effect waves-light btn" type="Submit">Let me in</button>
            </div>
          </form>
        </div>
              
        </div>
  </div>
  </div>

    @endsection


<!-- <form action="{{ url('login/post') }}" method="POST" class="form-horizontal">
    		 		
    					{!! csrf_field() !!}
    		
    										<div class="form-group">
    											<label for="">Enter your Email</label>
    												<input type="text" name="email">
    										</div>
    										<div class="form-group">
    											<label for="">Your Password</label>
    												<input type="password" name="password">
    										</div>
    										<input type="checkbox" name="remember" checked="" style="display:none;">
    										<button type="submit">Let me in</button>
    		
    									</form> -->



@section('app-js')
  <script>
       $(document).on('ready', function(){

             App.load('main');

       });
  </script>
@endsection