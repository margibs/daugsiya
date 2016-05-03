@extends('admin.layout')

@section('content')
<style>
	
.form-horizontal{

}

.form-horizontal .form-group{
	width:100%;
	padding-bottom:10px;
	position: relative;
	font-family: Roboto;
	margin-bottom: 3px;
}

.form-horizontal .form-group .form-control{
	width:100%;
}

#searchResults{
	    position: absolute;
	    background: #fff;
	    width: 100%;
	    border: 1px solid #ccc;
	    padding: 3px 7px;
	    z-index: 2;
	    display: none;
}

#clearResult,
#clearResult:hover,
#clearResult:visited
{
	position: absolute;
	display: none;
    top: 33px;
    right: 9px;
    color:#000;
    text-decoration: none;
}


.form-group input[type=text], .form-group textarea, .form-group select{
	border: 1px solid #ddd;
	border-radius: 2px;
	font-family: Roboto;	
	width: 100%;
	padding: 10px;
	font-size: 15px;
}
.form-group .panel{
	margin: 0px;
	padding: 0px;
}
.form-group .panel h6{
	margin: 0px;
}
.form-group .panel a{
	font-size: 14px;
	padding: 15px 10px;
}
#check_post_submit{
	width: 220px!important;
}
#img_here{
	width: 200px;
}
#date{
	font-weight: bold;
	margin-bottom: 23px;
}

#searchResults li a{
	text-decoration: none;
    padding: 5px 0;
    margin-bottom: 5px;
    display: block;
    border-bottom: 1px solid #F5F4F4;
    color: #EC0505;
    font-weight: 600;
}
h2{
	font-size: 23px;
	margin-bottom: 30px;
}
</style>
<!-- modal -->
  <div class="modal">
    <header class="modal-header">
      <h1 class="modal-header-title left"></h1>
      <button class="modal-header-btn modal-close" title="Close Modal"> <i class="icon-line-cross"></i> Close </button>
      <!-- <button class="modal-header-btn uploadbtn" title="Upload" style="float:left;"> <i class="icon-line-outbox"></i> Upload </button> -->
      <button class="modal-header-btn" id="save_image_close_modal" title="Close Modal"> <i class="icon-line-check"></i> Select </button>        
    </header>
    <div class="modal-body">
      <section class="modal-content">      
          
          <div id="fileuploader">Upload</div>            

          <div id="image_list"></div>

      </section>
    </div>
  </div>
<!-- modal -->

@include('admin.navigations.homeImageNav')
					
					@if($errors && count($errors) > 0)
						<ul class="errors">
							@foreach($errors->all() as $err)
								<li>{{ $err }}</li>
							@endforeach
						</ul>
					@endif
					
					@if (Session::has('custom_image'))
					    <ul class="errors">
							<li>{{ Session::get('custom_image') }}</li>
					    </ul>
					@endif


					<form action="{{ url('admin/insert_image') }}" method="POST" class="form-horizontal">
					{!! csrf_field() !!}

					<div class="row">	
						<div class="col-xs-12 col-lg-6" style="padding: 20px 40px;">
							<div class="panel">
			                	<h2> New Home Ads </h2>	
								
							

								<div class="form-group">
									<h6> Link </h6> 
									<input type="text" class="form-control" name="link" value="{{old('link')}}">
								</div>

								<div class="form-group">
									<h6> Position </h6> 
									<input type="text" class="form-control" name="position" value="{{old('position')}}">
								</div>

								<div class="form-group">
									<div class="panel">
										  <h6> 
										    <a title="Upload Image" id="load_media_files" class="featImageButton featimglink modal-trigger"> 
										    <i class="icon-line-plus"></i> Add an image  </a> 
										  </h6>         
										   <div id="img_here">
										    <img src="" alt="" style="display:none">
										  </div>   
										</div>

									<input id="image_url" type='hidden' name='image' value="{{old('image')}}">
								</div>		
								
										
								
							</div>	
			                	<input id="check_post_submit" value="Submit " class="submit" type="submit">
						</div>
					</div>
					</form>

               

<script src="{{ asset('nexuspress/js/draggabilly.pkgd.js') }}"></script>
<script src="{{ asset('nexuspress/js/modal.js') }}"></script>
<script src="{{ asset('nexuspress/js/jquery.uploadfile.min.js') }}"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $('.uploadbtn').click(function(){
    $('#fileuploader').toggle();
  });
  window.onload = function(e){         
      Modal.init();
  };

  </script>

  <script id="template_for_media_file" type="nexus/template">
  <div class="outer">
    <a href="#" class="remove_image" get-id="--id--"> <i class="icon-line-cross"> </i> </a>
    <div class="inner">
      <img src="{{ url('uploads') }}/--image_url--" get-this="--image_url--" />
    </div>                          
  </div>
</script>

  <script>

	$(document).ready(function(){
		var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		template_for_media_file = $.trim($("#template_for_media_file").html());

			  $("#fileuploader").uploadFile({
    url:"{{url('admin/ajax_upload_image')}}",
      fileName:"myfile",
      formData: { _token: CSRF_TOKEN },
      onSuccess:function(files,data,xhr,pd)
      {
        var parsed = JSON.parse(data);

          var add_parent = 
          template_for_media_file.replace(/--image_url--/ig, parsed.image_url)
          .replace(/--id--/ig, parsed.id);

          $('#image_list').prepend(add_parent);

      }
    });

		 $('#load_media_files').on('click',function(){
	      $('#image_list').html('');
	        $.ajax({ 
	          type: 'get',
	          url: "{{url('admin/ajax_get_media_file')}}",
	          success: function(response)
	          {
	            var parsed = JSON.parse(response);

	              $.each( parsed, function( index, obj){

	                var add_parent = 
	                  template_for_media_file.replace(/--image_url--/ig, obj.image_url)
	                  .replace(/--id--/ig, obj.id);

	                $('#image_list').append(add_parent);

	            });
	          }
	        });
	    });


		  var url = '';
	    $("#image_list").on("click", "img", function (event) {
	        url = $(this).attr('get-this');
	        $('.outer').removeClass('selected');
	        $(this).parents('.outer').addClass('selected');
	    });
	  // Hide modal if "Okay" is pressed
	    $('#save_image_close_modal').click(function() {

	        // $('#myModal').modal('hide');
	        Modal.close();

	        $('#img_here').html("<img src='{{ url('uploads') }}/"+url+"'>");
	        $('#image_url').attr('value',url).css('display', 'block');

	        

	    });
		
	});
</script>

@endsection