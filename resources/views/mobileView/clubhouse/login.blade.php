
@extends('clubhouse.layout')
  
@section('custom-styles')
<style type="text/css">
  body {
    background: #fff url(http://susanwins.com/uploads/51107_mobilefronthouse.jpg) no-repeat center top;
  }
  .bgwrapper{
    padding-top: 100px;
  }
  .formBox{
    margin-right: 110px;
    margin-left: 20px;
    border: 1px solid #EAEAEA;
    padding: 20px 30px;
    border-radius: 3px;
  }
  .formBox h1{
    font-family: 'Work Sans',Roboto,Helvetica,Arial,Sans-serif;
    font-size: 50px;
  }
  .formBox h2{
    color: #cccccc;
    font-family: Roboto,Helvetica,Arial,Sans-serif;
    font-weight: 500;
    margin: 8px 0 20px 0;
    font-size: 18px;
  }
  .formBox input[type=text], .formBox input[type=password], .formBox input[type=email]{
    font-family: Roboto;
    padding: 10px;
    width: 100%;
    border-radius: 2px;
    border: 1px solid #EFEFEF;
    font-size: 20px;
    margin: 7px 0;
  }
  .formBox button{
    background: #dfa522;
    background: -moz-linear-gradient(top,  #dfa522 0%, #f2c154 100%);
    background: -webkit-linear-gradient(top,  #dfa522 0%,#f2c154 100%);
    background: linear-gradient(to bottom,  #dfa522 0%,#f2c154 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dfa522', endColorstr='#f2c154',GradientType=0 );
    color: #fff;
    font-family: 'Work Sans',Roboto,Helvetica,Arial,Sans-serif;
    border: 1px solid #F5C863;
    font-size: 30px;
    font-weight: 500;
    padding: 10px 20px;
    width: 100%;
    border-bottom: 2px solid #E1A828;
    border-radius: 2px;
    margin-top: 20px;
    cursor: pointer;
    -moz-box-shadow: 0 0 10px -2px #B3B3B3;
    -webkit-box-shadow: 0 0 10px -2px #B3B3B3;
    box-shadow: 0 0 10px -2px #B3B3B3;
    text-shadow: 0px 1px 2px rgb(167, 121, 17);
  }
  .formBox .terms{
    font-family: Roboto;
    font-size: 11px;
    line-height: 16px;
    margin: 10px 0;
    color: #B7B4B4;
  }
  .formBox .terms a{
    text-decoration:none;
    color: #982A29
  }
  .benefits{
     margin-top: 10px;
  }
  .benefits h2{
    font-family: 'Work Sans';
    font-size: 36px;
    line-height: 31px;
  }
  .benefits ul li{
    font-family: Roboto;
    font-weight: 600;
    font-size: 18px;
    margin: 20px 0;
  }
  .benefits ul li i{
    font-size: 40px;
    margin-right: 10px;
    position: relative;
    top: 8px;
  }
  .benefits ul{
        margin-top: 30px;
  }
  form input[type=text], form input[type=password], form input[type=email]{
    background: #fff;
    border: none;
    border-radius: 4px;
    padding: 5px 10px;
    width: 95%;
    font-family: 'Work Sans';
    font-size: 20px;
    font-weight: 600;
    color: #000;
  }
</style>

@endsection

 @section('navbar-title', 'Login')

  @section('content')

     <div class="app-page" data-page="main">
    <div class="app-topbar"></div>
  <div class="app-content">
                   
               <div class="row">
                  <form class="col s12" action="{{ url('login/post') }}" method="POST">
                  {!! csrf_field() !!}
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="text" class="validate" name="email" placeholder="Email">
                        
                      </div>
                      <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="password" placeholder="Password">
                      <!--   <label for="password">Enter Your Password</label> -->
                      </div>
                      <button class="waves-effect waves-light btn" type="Submit">Let me in</button>
                    </div>
                  </form>
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

