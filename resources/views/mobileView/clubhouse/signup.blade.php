@extends('clubhouse.layout')

<style type="text/css">
body{
  background: #fff url(http://susanwins.com/uploads/61221_signup-bg-mobile.jpg) center center;
}
  .app-page .app-content {
    padding-top: 20px!important;
} 
 .formBox{
    padding: 10px;
    border-radius: 3px;
  }
  .formBox h1 {
    font-family: 'Work Sans',Roboto,Helvetica,Arial,Sans-serif;
    font-size: 41px;
    font-weight: 600;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
}
.formBox h2 {
    color: #cccccc;
    font-family: Roboto,Helvetica,Arial,Sans-serif;
    font-weight: 500;
    margin: 0px 0 20px 0;
    font-size: 18px;
    text-align: center;
}

   .formBox .submit{
    background: #f19b20!important;
    display: block!important;
    width: 100%;
    font-family: 'Work Sans';
    text-transform: initial!important;
    font-size: 28px;
    font-weight: 600;
    height: auto!important;
    padding: 10px!important;
    letter-spacing: 0!important;
  }
  .formBox .terms{
    background: transparent;
    font-family: Roboto;
    font-size: 11px;
    line-height: 16px;
    margin: 10px 0;
  }
  .formBox .terms a{
    text-decoration:none;
    color: #F19B20
  }

  .input-field{
    margin-top: 0;
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
  .haveaccount{
    color: #F19B20;
    font-weight: 700;
    text-align: center;
    display: block;
    margin: 15px;
    font-size: 17px;
  }
  form input[type=text], form input[type=password], form input[type=email]{
    background: #fff;
    /* border: 1px solid #E6E3E3; */
    /* border-radius: 4px; */
    border-bottom: 1px solid #F3DCBB;
    text-align: center;
    padding: 0 10px;
    width: 93%;
    font-family: Roboto,Helvetica,Arial,Sans-serif;
    font-size: 16px;
    color: #000;
    box-shadow: 0 0 0 0;
    margin-bottom: 6px;
  }
  input:not([type]).valid, input:not([type]):focus.valid, input[type=text].valid, input[type=text]:focus.valid, input[type=password].valid, input[type=password]:focus.valid, input[type=email].valid, input[type=email]:focus.valid, input[type=url].valid, input[type=url]:focus.valid, input[type=time].valid, input[type=time]:focus.valid, input[type=date].valid, input[type=date]:focus.valid, input[type=datetime].valid, input[type=datetime]:focus.valid, input[type=datetime-local].valid, input[type=datetime-local]:focus.valid, input[type=tel].valid, input[type=tel]:focus.valid, input[type=number].valid, input[type=number]:focus.valid, input[type=search].valid, input[type=search]:focus.valid, textarea.materialize-textarea.valid, textarea.materialize-textarea:focus.valid {
    border-bottom:none;
    box-shadow: 0 0 0 0!important;
  }

  
    header,.logout_button{
    display: none!important;
  }
  .logo_button {      
      left: 37%!important;      
  }
  .formBox .terms {
    font-family:helvetica,Arial,Sans-serif;
    font-size: 13px;    
    text-align: center;
}
</style>




@section('content-list')

<div class="app-page" data-page="signup">
    {!! csrf_field() !!}
 
    <div class="app-content">
           

    <div class="formBox">
        <h1> Sign-up </h1>
        <h2> It's free and always will be </h2>

         <form method="post" class="af-form-wrapper" accept-charset="UTF-8" action="https://www.aweber.com/scripts/addlead.pl"  >

                               {!! csrf_field() !!}
            
            @if(count($errors->all()) > 0)

              <ul class="errors">
                @foreach($errors->all() as $error)
                  
                  <li>{{ $error }}</li>
                    
                @endforeach
              </ul>
            @endif


                              <div style="display: none;">
                              <input type="hidden" name="meta_web_form_id" value="2089372002" />
                              <input type="hidden" name="meta_split_id" value="" />
                              <input type="hidden" name="listname" value="awlist4254968" />
                              <input type="hidden" name="redirect" value="http://susanwins.com/" id="redirect_2c7e9e9eeb4cdb1c7d53c5c85b3d1e9d" />
                              <input type="hidden" name="meta_redirect_onlist" value="http://susanwins.com/" />
                              <input type="hidden" name="meta_adtracking" value="Susan_Signup" />
                              <input type="hidden" name="meta_message" value="1" />
                              <input type="hidden" name="meta_required" value="name (awf_first),name (awf_last),email,custom Password" />

                              <input type="hidden" name="meta_tooltip" value="" />
                              </div>
                              <div id="af-form-2089372002" class="af-form"><div id="af-body-2089372002" class="af-body af-standards">
                              <div class="af-element">
                              <!-- <label class="previewLabel" for="awf_field-83122113-first">First Name:</label> -->
                              <div class="af-textWrap">
                              <input id="awf_field-83122113-first" type="text" class="text" name="name (awf_first)" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="500" placeholder="First Name" />
                              </div>
                              <div class="af-clear"></div>
                              </div>
                              <div class="af-element">
                              <!-- <label class="previewLabel" for="awf_field-83122113-last">Last Name:</label> -->
                              <div class="af-textWrap">
                              <input id="awf_field-83122113-last" class="text" type="text" name="name (awf_last)" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="501" placeholder="Last Name" />
                              </div>
                              <div class="af-clear"></div></div>
                              <div class="af-element">
                           <!--    <label class="previewLabel" for="awf_field-83122114">Email: </label> -->
                              <div class="af-textWrap"><input class="text" id="awf_field-83122114" type="text" name="email" value="" tabindex="502" onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " placeholder="Email Address" />
                              </div><div class="af-clear"></div>
                              </div>
                              <div class="af-element">
           <!--                    <label class="previewLabel" for="awf_field-83122115">Password:</label> -->
                              <div class="af-textWrap"><input type="password" id="awf_field-83122115" class="text" name="custom Password" value=""  onfocus=" if (this.value == '') { this.value = ''; }" onblur="if (this.value == '') { this.value='';} " tabindex="503" placeholder="Password"/></div>
                              <div class="af-clear"></div></div><div class="af-element buttonContainer">
                              <input name="submit" class="submit waves-light btn" type="submit" value="Sign me up!" tabindex="504" />
                                <a href="{{ url('/login')}}" class="haveaccount"> Already have an account </a>
                               <p class="terms"> By clicking Sign Up, you agree to our <a href="#"> Terms </a> and that you have read our <a href="#"> Data Policy </a>, including our Cookie Use. </p>
                              <div class="af-clear"></div>
                              </div>
                              </div>
                              </div>
                              <div style="display: none;"><img src="https://forms.aweber.com/form/displays.htm?id=TAwcnMzsTAwMTA==" alt="" /></div>
                              </form>

    </div>    

  </div>
</div>

@endsection

@section('script')

<script>
$(function(){
           $('.app-page').css({ 'display' : 'block' });
        $('#mainLoading').remove();
          App.load('signup');
})

</script>

@endsection