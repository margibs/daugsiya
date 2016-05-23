@extends('home.layout')

@section('homecontentResposnive')

<div class="app-page" data-page="main">
    <div class="app-content" data-no-scroll>
    		<style type="text/css">
  	 .round{
    height: 240px;
        border-radius: 92%/25%;
  }
  .round2{    
    border-radius: 48%/6%;
  }
  .round2 .featimg{
    position: static;
    width: 100%;
    margin-top: -2px;
   height: 100px;
  }
	 .latestgames{
	    margin-left: -7px;
	    margin-top: 13px;
	    z-index: 22;
  	}
   .latestgamescontent .inner{
	    background: #FDF6E9;
	    box-shadow: 0px 0px 10px 3px #DCB76B inset;
	    border: 1px solid #A07019;
   }
   .latestgamescontent .inner img{
      border: none;
      padding: 0;
      box-shadow: 0 0;
   }
   .bonusCasino a{
      display: inline-block;
      padding: 5px;
      width: 49%;
   }
   .bonusCasino a img{
      width: 100%;
      border-radius: 4px;
   }
   .thickgolddivider{
      background: transparent linear-gradient(to bottom, #FFFFFF 0%, #921B1B 27%, #A71818 51%, #E22D2D 100%) repeat scroll 0% 0%;
      border-bottom: 1px solid #841616;
   }
   .thickgolddivider p{
       font-size: 24px;
    line-height: 23px;
   }
   .thickgolddivider {
      width: 97%;
      margin-left: 6px;
   }
   #maincontainer{
    margin-top: 0;
   }
   #categoryContainer {
    top: 36px;
  }
/********** MEDIA QUERIES *************/
@media(min-width: 360px){   
   .round2{
      padding: 1px 0 0 0;
    }
   .thickgolddivider{
      margin-top: -1px;
   }
   #maincontainer{
    margin-top: -3px;
    padding: 1px 9px;
   }
   #postcontent {
    margin-top: 25px;
   }
   .categories{
    margin: 8px 7px 18px 7px;
   }
   .latestgames {    
      margin-top: 18px;
  }
   .latestgamescontent{
      padding:10px 15px 13px 12px;
   }
   .latestgamescontent .inner img{
    border: none;
   }
   #categoryContainer{
      top: 41px;
   }
   .g2, .g1 {
    top: 10px;
  }
  .thickgolddivider{
    margin-left: 6px;
    width: 97%;
    padding: 3px 0;
  }
  .thickgolddivider p {
    font-size: 21px;
  }
}


</style>


<div class="round ellipse">
  <div class="round2 ellipse">
   <img src="http://susanwins.com/uploads/67780_mobileheader.png" class="featimg" />
  </div>  
</div>

   <div class="thickgolddivider">
      <p> Check the cool games below! </p>
    </div>

<div id="maincontainer">
 
	<div class="innerfirst"> 

             
   <!-- 
        <div id="playbig">
            <a id="gogogo2" class="button pink glass"> Play Now! </a>         
        </div>     --> 
   
   

        <div id="categoryContainer">
            <div class="goldborder g1"></div>
            <div class="goldborder g2"></div>
              
             <div class="latestgamescontent">
              <div class="inner">
                  <div class="row">

                   @foreach($posts as $post)
                   <div class="col s6">
                   		<a href="{{url('')}}/{{$post->slug}}">                  
                            <img src="{{url('uploads')}}/{{$post->thumb_feature_image}}">
                         </a>
                   </div>
				   @endforeach        
                  </div>
              </div>
            </div>


        </div>    

        
        <div class="latestgames"></div>
        <div class="latestgamescontent">
     
          <div class="inner">

              <div class="commentsContainer">
                <h2> Recent Comments </h2>

                @if(count($comments))
					<ul id="commentList">
						 @foreach($comments as $comment)
							<li>
		                    <img src="{{$comment->user->user_detail->profile_picture ? url('').'/user_uploads/user_'.$comment->user->id.'/'.$comment->user->user_detail->profile_picture : url('').'/images/default_profile_picture.png' }}" class="avatar" />
		                    <p class="name"> {{$comment->user->user_detail->firstname.' '.$comment->user->user_detail->lastname }} </p>
		                    <p class="comment">{!! $comment->content !!} </p>
		                    <div class="replyArea">
				                    <ul class="replyList" id="reply-to-{{$comment->id}}">

				                     @foreach($comment->category_replies as $reply)
										<li>
					                        <img src="{{$reply->user->user_detail->profile_picture ? url('').'/user_uploads/user_'.$reply->user->id.'/'.$reply->user->user_detail->profile_picture : url('').'/images/default_profile_picture.png' }}" class="avatar" />
					                        <p class="name"> {{$reply->user->user_detail->firstname.' '.$reply->user->user_detail->lastname }} </p>
					                        <p class="comment"> {!! $reply->content !!} </p>
					                      </li>
				                     @endforeach
				                      
				                    </ul>

				                     @if(isset($user))
				                        <form action="{{ url('add_reply') }}" method="POST" style="display:none" class="reply_form">
				                          <input type="hidden" name="parent" value="{{ $comment->id }}">
			                              <input type="hidden" name="content_id" value="{{ $current_category_id }}">
				                            <textarea class="reply" placeholder="Add Reply" name="content"></textarea>
				                            <button type="submit" class="replyBtn">Reply</button>
				                        </form>

				                      @endif
				                    <a href="javascript:;" class="toggleReply"> Reply </a></div>
		                  </li>
						 @endforeach
					</ul>
                 @else
                    <ul id="commentList"></ul>
                    <p id="no-comments">No Comments yet.</p>
                  @endif 

                 <form class="comment-form" action="{{ url('add_comment') }}" method="POST" id="commentForm">
                    <textarea class="form-control" rows="4" placeholder="Write a comment" name="content" id="submitCommentTextarea" disabled="disabled"></textarea>
 
                  <div class="form-group">

                    @if(isset($user))
                      <input type="hidden" name="user_id" value="{{ $user->id }}">
                      <input type="hidden" name="content_id" value="{{ $current_category_id }}">
                      <input type="hidden" name="email" value="{{ $user->email }}">
                      <p style="display:none;">Signed in as {{ $user->email }}  
                        <a href="{{ url('logout') }}?redirect={{ Request::url() }}"><i class="fa fa-sign-out"></i></a> 
                      </p>
                    @else
                      <div class="rednotifbox">
                        <a href="{{ url('login') }}?redirect={{ Request::url() }}">Login to Comment</a> or <a href="{{ url('register') }}?redirect={{ Request::url() }}">Register</a>
                      </div>
                    @endif

                  </div>
                  <div class="form-group">
                    <button type="submit" value="submit" id="submitCommentForm" disabled="disabled">Submit</button>
                  </div>
                </form>
              </div>

              <h2> Top Categories </h2>

               <div class="row">
                <div class="col s4" style="padding: 0;">
                   <img src="http://susanwins.com/uploads/48873_fantasy.png" alt="">
                  <img src="http://susanwins.com/uploads/52845_seasonal.png" alt="">
                  <img src="http://susanwins.com/uploads/41272_tropical.png" alt="">
                  <img src="http://susanwins.com/uploads/88737_sorcery.png" alt="">
                </div>     
                <div class="col s4" style="padding: 0;">
                   <img src="http://susanwins.com/uploads/48873_fantasy.png" alt="">
                  <img src="http://susanwins.com/uploads/52845_seasonal.png" alt="">
                  <img src="http://susanwins.com/uploads/41272_tropical.png" alt="">
                  <img src="http://susanwins.com/uploads/88737_sorcery.png" alt="">
                </div>            
                <div class="col s4" style="padding: 0;">
                   <img src="http://susanwins.com/uploads/48873_fantasy.png" alt="">
                  <img src="http://susanwins.com/uploads/52845_seasonal.png" alt="">
                  <img src="http://susanwins.com/uploads/41272_tropical.png" alt="">
                  <img src="http://susanwins.com/uploads/88737_sorcery.png" alt="">
                </div>            
              </div>

          </div>
        </div>
        <div class="bottomads">
          <img src="http://a1.mzstatic.com/us/r30/Purple/v4/e1/e7/c6/e1e7c6c5-8ce5-9a7b-8236-695ac0eb0168/screen520x924.jpeg" alt="">
        </div>
        <div class="footer"></div>
      </div>

</div> 
    </div>
</div>

@endsection

@section('app-js')
  <script>
       $(document).on('ready', function(){


       		App.controller('main', function(page){

       			$(page).attachCommentEvents();

       			/*$(page).on('click', '.toggleReply', function(){

	       			$(this).parent('.replyArea').find('form').show();
	       		});*/
       		});

             App.load('main');

       });
  </script>

@endsection