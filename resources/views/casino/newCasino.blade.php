@extends('admin.layout')

@section('content')

@include('casino.__navigation')

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

<div class="panel">
  <h6> 
    <a title="Upload Image" id="load_media_files" class="featImageButton featimglink modal-trigger"> 
    <i class="icon-line-plus"></i> Casino Logo  </a> 
  </h6>         
   <div id="img_here">
    @if(old('image_url'))
    <img src="{{url('uploads')}}/{{old('image_url')}}" alt="">
    @endif
  </div>   
</div>

<div class="panel">
  <h6> 
    <a title="Upload Image" id="load_media_files2" class="featImageButton featimglink modal-trigger"> 
    <i class="icon-line-plus"></i> Reel Image  </a> 
  </h6>         
   <div id="img_here2">
    @if(old('reels_image'))
    <img src="{{url('uploads')}}/{{old('reels_image')}}" alt="">
    @endif
  </div>   
</div>

<div class="panel">
  <h6> 
    <a title="Upload Image" id="load_media_files3" class="featImageButton featimglink modal-trigger"> 
    <i class="icon-line-plus"></i> Claim Bonus Image  </a> 
  </h6>         
   <div id="img_here3">
    @if(old('claim_image'))
    <img src="{{url('uploads')}}/{{old('claim_image')}}" alt="">
    @endif
  </div>   
</div>





@if (count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
<form action="{{url('admin/casino')}}" method="post">
	{!! csrf_field() !!}
  <input id="image_url" type='hidden' name='image_url' value="{{ old('image_url') }}">
  <input id="reels_image" type='hidden' name='reels_image' value="{{ old('reels_image') }}">
  <input id="claim_image" type='hidden' name='claim_image' value="{{ old('claim_image') }}">
  
	<input type="text" name="name" placeholder="name" value="{{ old('name') }}"> <br>
  <input type="text" name="link_desktop" placeholder="Desktop Link" value="{{ old('link_desktop') }}"><br>
  <input type="text" name="link_mobile" placeholder="Mobile Link" value="{{ old('link_mobile') }}"><br>
  <textarea name="bonus_offer" cols="30" rows="10" placeholder="Bonus offer">{{ old('bonus_offer') }}</textarea><br>

  <input name="category_id[]" type="checkbox" value="39">  Playtech <br>
  <input name="category_id[]" type="checkbox" value="34">  Microgaming <br>
  <input name="category_id[]" type="checkbox" value="43">  Netent <br>
	<input type="submit" value="Submit">

</form>

<script src="{{ asset('nexuspress/js/draggabilly.pkgd.js') }}"></script>
<script src="{{ asset('nexuspress/js/modal.js') }}"></script>
<script src="{{ asset('nexuspress/js/jquery.uploadfile.min.js') }}"></script>
<script src="{{ asset('nexuspress/js/rome.min.js') }}"></script>

<script>
  $('.uploadbtn').click(function(){
    $('#fileuploader').toggle();
  });
  window.onload = function(e){         
      Modal.init();
  };

  $(document).on('click','.addchoice',function(event){ 
      event.preventDefault();
      $('.pollul').append('<li> <input type="text" name="poll_choice[]" placeholder="Type here.." /> </li>');         
  });
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

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content'),
      template_for_media_file = $.trim($("#template_for_media_file").html()),
      load_file = 0;

      Modal.init();

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
      load_file = 1;
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

  $('#load_media_files2').on('click',function(){
    Modal.open();
      load_file = 2;
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

  $('#load_media_files3').on('click',function(){
    Modal.open();
      load_file = 3;
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


        if(load_file == 1)
        {
          $('#img_here').html("<img src='{{ url('uploads') }}/"+url+"'>");
          $('#image_url').attr('value',url);
        }
        else if(load_file == 2)
        {
          $('#img_here2').html("<img src='{{ url('uploads') }}/"+url+"'>");
          $('#reels_image').attr('value',url);
        }
        else if(load_file == 3)
        {
          $('#img_here3').html("<img src='{{ url('uploads') }}/"+url+"'>");
          $('#claim_image').attr('value',url);
        }


    });

  });
</script>
@endsection