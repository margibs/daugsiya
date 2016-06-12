@extends('admin.layout')

@section('content')

<div class="submenu">
                  
  <div class="searchform"> 
  <form action="">
    <a href=""> <i class="icon-angle-right"></i> </a>
    <input type="text" class="searchbox" />
  </form>
  </div>

<ul>
    <li> <a href="{{ url('admin/comments') }}"><i class="icon-line-speech-bubble"></i> All </a> </li>
    <li> <a href="{{ url('admin/comments') }}""> <i class="icon-line-check"></i> Approved </a> </li>                   
     <li> <a href="#!" id="pending"> <i class="icon-line-cross"></i> Pending </a> </li>
    <li> <a href="{{ url('admin/comments') }}> <i class="icon-trash"></i> Trash </a> </li>                  
    <li> <a class="searchlink"> <i class="icon-line-search"></i> Search </a> </li>
  </ul>
  

</div>

{!! Form::model($post, array('class' => 'form-horizontal', 'url' => array('admin/editComment',  $post->id))) !!} 
	{!! csrf_field() !!}
	<div class="row">	
		<div class="col-xs-12 col-lg-6" style="padding: 20px 40px;">
			<div class="panel">
            	
				<div class="form-group">
					<h6> USER </h6> 
					<input type="text" class="form-control" name="user" value="{{ $post->user->user_detail->fullName() }}">
				</div>

				<div class="form-group">
					<h6> Content </h6> 
					<!-- <input type="textArea" class="form-control" name="content" value="{{ $post->content }}"> -->
					<!-- <textarea name="content" class="form-control" rows="5" cols="55">{{ $post->post_comments[0]->content }}</textarea>  -->
					@foreach($post->post_comments as $comments)
						<textarea name="content" class="form-control" rows="5" cols="55">{{ $comments->content }}</textarea>
					@endforeach
				</div>

					<div class="form-group">
					<h6> Title </h6> 
					<textarea name="title" class="form-control" rows="5" cols="55">{{ $post->title }}</textarea> 
					
				</div>

				<div class="form-group">
					<h6> Slug </h6> 
				<!-- 	<input type="text" class="form-control" name="slug" value="{{ $post->slug }}"> -->
					<textarea name="slug" class="form-control" rows="5" cols="55">{{ $post->slug }}</textarea> 
				</div>

				<div class="form-group">
					<h6> Approved </h6>

				@if($post->post_comments[0]->approved == 0)                  
                    <input type="checkbox" name="approved"  id="approved" value="0">
                @else
                  <input type="checkbox" name="approved"  id="approved" value="1" checked>
               
                @endif 
				</div>

				
			</div>	
            	<input id="check_post_submit" value="Submit " class="submit" type="submit">
		</div>
	</div>
{!! Form::close() !!}
    

@endsection