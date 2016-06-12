@extends('admin.layout')

@section('content')

@include('casino.__navigation')


<style type="text/css">
.sortbox{
    background: #000200;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
}
.sortbox h3{
    color: #A3A5A3;
}
.sortbox  p{
     color: #7ECA75;
}
.sortbox ul li{
    margin: 20px 0;
    color: #fff;
}
.sortbox .rawlink{
    color: #9A9A9A;
}

.modal-content {
    /* padding: 20px; */
    /* transition: transform 0.7s cubic-bezier(0.165, 0.840, 0.440, 1.000); */
    /* transform: translateY(-50px); */
    position: absolute;
    top: 1%;
    width: 900px;
    height: 380px;
    margin: auto;
    width: 60%;
    /* border: 3px solid #73AD21; */
    padding: 10px;
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

<div class="content-mid">
  <form action="" id="editCasinoForm">
          <div class="col-md-2">
                <div class="sortbox">
                        <h3> General Config: </h3>
                        <p> Article Banners <span> Option to set ratio of banner to pictures: 1 banner after ever X pictures </span> </p>
                        <input type="number" min="1" max="5" step="1">
                        <p> Skyscraper Banners <span> Option to set ratio of banner to pictures: 1 banner after ever X pictures </span> </p>
                        <input type="number" min="1" max="5" step="1">
                        
                        <p> Casino Banners </p>
                        <h3> Add New: </h3>
                        <input type="text" placeholder="Casino Name" />
                        
                        <select>
                            <option> Select Country  </option>
                        </select>

                        <select>
                            <option>  Select  Mask Link  </option>
                        </select>



                        <ul class="unstyled centered">
                          <li class="control-inline">
                            <input class="styled-checkbox" id="features-lcd" type="checkbox" value="lcd"><label for="features-lcd"> Playtech </label>
                          </li>
                          <li class="control-inline">
                            <input class="styled-checkbox" id="features-touchscreen" type="checkbox" value="touchscreen"><label for="features-touchscreen"> Microgaming </label>
                          </li>
                          <li class="control-inline">
                            <input class="styled-checkbox" id="features-lightweight" type="checkbox" value="lightweight"><label for="features-lightweight"> NetEnt </label>
                          </li>
                        </ul>


                      
                        <button> Submit </button>
                </div>            
            </div>  


            <div class="col-md-10">
                    

                 <ul class="postEntries casino-profile">
                   <li> 
                        <a href="#"> 
                            <div class="post">
                                 <b> <i class="fa fa-eye-slash" aria-hidden="true"></i> <em>1</em> </b>                                                         
                                 <h2> <a title="Upload Image" id="load_media_files" class="featImageButton featimglink modal-trigger"> 
                                  <i class="icon-line-plus"></i> Casino Logo  </a> </h2>
                                 <span> 178 x 124 </span>
                                 <!-- <img src="http://susanwins.com/uploads/48244_888_v_euro.jpg"> -->
                                  <div id="img_here">
                                    <img src="http://susanwins.com/uploads/48244_888_v_euro.jpg">
                                  </div>   
                            </div>
                        </a>
                    </li>
                    <li> 
                        <a href="#"> 
                            <div class="post">
                                  <b> <i class="fa fa-eye" aria-hidden="true"></i> <em>2</em> </b>                     
                                 <h2>  <a title="Upload Image" id="load_media_files2" class="featImageButton featimglink modal-trigger"> 
                                    <i class="icon-line-plus"></i> Reel Image </a> </h2>
                                 <span> 201 x 250 </span>
                                 <!-- <img src="http://susanwins.com/uploads/13194_888_reel_euro.jpg"> -->
                                  <div id="img_here2">
                                      <img src="http://susanwins.com/uploads/13194_888_reel_euro.jpg">
                                </div>   
                            </div>
                        </a>
                    </li>
                    <li> 
                        <a href="#"> 
                            <div class="post">
                                 <b> <i class="fa fa-eye" aria-hidden="true"></i> <em>2</em> </b>                                   
                                 <h2>  <a title="Upload Image" id="load_media_files4" class="featImageButton featimglink modal-trigger"> 
                                      <i class="icon-line-plus"></i> Claim Bonus Imagee </a>  </h2>
                                  <span> 294 x 236 </span>
                                 <!-- <img src="http://susanwins.com/uploads/86439_888_294x236_euro.jpg"> -->
                                 <div id="img_here4">
                                   <img src="http://susanwins.com/uploads/86439_888_294x236_euro.jpg">
                                </div>   
                            </div>
                        </a>
                    </li>

                    <hr>
                     <li> 
                          <div class="post">
                                 <b> <i class="fa fa-eye-slash" aria-hidden="true"></i> <em>1</em> </b>                                                         
                                 <h2> <a title="Upload Image" id="load_media_files5" class="featImageButton featimglink modal-trigger"> 
                                      <i class="icon-line-plus"></i> SkyScraper Banner AD  </a></h2>
                                 <span> 196 x 405 </span>
                                 <!-- <img src="http://susanwins.com/uploads/48244_888_v_euro.jpg"> -->
                                  <div id="img_here5">
                                   <img src="http://susanwins.com/uploads/48244_888_v_euro.jpg">
                                </div>   
                          </div>

                    </li>


                </ul>             

              
                <ul class="postEntries casino-profile bigbanner">
                    <li> 
                        <a href="#"> 
                            <div class="post">
                                  <b> <i class="fa fa-eye" aria-hidden="true"></i> <em>2</em> </b>                                    
                                 <h2> <a data-toggle="modal" data-target="#myModal"> Article Banner AD  </a> </h2>
                                 <span> 752 x 114 </span>
                                 <img src="http://susanwins.com/uploads/31712_888h_euro.jpg">
                            </div>
                        </a>
                    </li>
                </ul> 
              
              
            
            </div>
    </form>
    </div>

<script src="{{ asset('nexuspress/js/draggabilly.pkgd.js') }}"></script>
<script src="{{ asset('nexuspress/js/modal.js') }}"></script>
<script src="{{ asset('nexuspress/js/jquery.uploadfile.min.js') }}"></script>
<script src="{{ asset('nexuspress/js/rome.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('nexuspress/chosen/chosen.jquery.min.js') }}"></script>

  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>

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


    $('#load_media_files4').on('click',function(){
    Modal.open();
      load_file = 4;
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

     $('#load_media_files5').on('click',function(){
    Modal.open();
      load_file = 5;
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
        else if(load_file == 4)
        {
          $('#img_here4').html("<img src='{{ url('uploads') }}/"+url+"'>");
          $('#claim_image').attr('value',url);
        }
        else if(load_file == 5)
        {
          $('#img_here5').html("<img src='{{ url('uploads') }}/"+url+"'>");
          $('#claim_image').attr('value',url);
        }


    });

  });
</script>
@endsection