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
      
          <div class="col-md-2">
                <div class="sortbox">
                <form action="{{url('admin/casino')}}/{{$casino->id}}" method="post" data-casino="{{ $casino->id }}" id="editCasinoForm">
                    <h3> Casino Details </h3>

  
                      <!--    <div style="text-align:center;">
                               <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAACFCAMAAAApQEceAAAADFBMVEXtKTn////5ysvsABNj5NQbAAAAbUlEQVR4nO3awQnAMAzAQLfZf+cuUYgwdxvorxkAAAAAAAAAAG47S8y7xDxLCKkRUiOkRkiNkBohNUJqhNQIqRFSI6RGSI2QGiE1QmqE1AipEVIjpEZIjZCaPS/K7avnL7cvKwAAAAAAAAAA5gPXvylpYRzd6AAAAABJRU5ErkJggg==" class="flag" /> 
                            <input type="text" placeholder="Casino Name"  value="888 AT " />
                        </div>
                        
 -->
                        
                      <!--   <select>
                          <option> Austria  </option>
                      </select>
                       -->
              {!! Form::select('country', 
                [
                  'AF' => 'Afghanistan',
                  'AX' => 'Aland Islands',
                  'AL' => 'Albania',
                  'DZ' => 'Algeria',
                  'AS' => 'American Samoa',
                  'AD' => 'Andorra',
                  'AO' => 'Angola',
                  'AI' => 'Anguilla',
                  'AQ' => 'Antarctica',
                  'AG' => 'Antigua And Barbuda',
                  'AR' => 'Argentina',
                  'AM' => 'Armenia',
                  'AW' => 'Aruba',
                  'AU' => 'Australia',
                  'AT' => 'Austria',
                  'AZ' => 'Azerbaijan',
                  'BS' => 'Bahamas',
                  'BH' => 'Bahrain',
                  'BD' => 'Bangladesh',
                  'BB' => 'Barbados',
                  'BY' => 'Belarus',
                  'BE' => 'Belgium',
                  'BZ' => 'Belize',
                  'BJ' => 'Benin',
                  'BM' => 'Bermuda',
                  'BT' => 'Bhutan',
                  'BO' => 'Bolivia',
                  'BA' => 'Bosnia And Herzegovina',
                  'BW' => 'Botswana',
                  'BV' => 'Bouvet Island',
                  'BR' => 'Brazil',
                  'IO' => 'British Indian Ocean Territory',
                  'BN' => 'Brunei Darussalam',
                  'BG' => 'Bulgaria',
                  'BF' => 'Burkina Faso',
                  'BI' => 'Burundi',
                  'KH' => 'Cambodia',
                  'CM' => 'Cameroon',
                  'CA' => 'Canada',
                  'CV' => 'Cape Verde',
                  'KY' => 'Cayman Islands',
                  'CF' => 'Central African Republic',
                  'TD' => 'Chad',
                  'CL' => 'Chile',
                  'CN' => 'China',
                  'CX' => 'Christmas Island',
                  'CC' => 'Cocos (Keeling) Islands',
                  'CO' => 'Colombia',
                  'KM' => 'Comoros',
                  'CG' => 'Congo',
                  'CD' => 'Congo, Democratic Republic',
                  'CK' => 'Cook Islands',
                  'CR' => 'Costa Rica',
                  'CI' => 'Cote D\'Ivoire',
                  'HR' => 'Croatia',
                  'CU' => 'Cuba',
                  'CY' => 'Cyprus',
                  'CZ' => 'Czech Republic',
                  'DK' => 'Denmark',
                  'DJ' => 'Djibouti',
                  'DM' => 'Dominica',
                  'DO' => 'Dominican Republic',
                  'EC' => 'Ecuador',
                  'EG' => 'Egypt',
                  'SV' => 'El Salvador',
                  'GQ' => 'Equatorial Guinea',
                  'ER' => 'Eritrea',
                  'EE' => 'Estonia',
                  'ET' => 'Ethiopia',
                  'FK' => 'Falkland Islands (Malvinas)',
                  'FO' => 'Faroe Islands',
                  'FJ' => 'Fiji',
                  'FI' => 'Finland',
                  'FR' => 'France',
                  'GF' => 'French Guiana',
                  'PF' => 'French Polynesia',
                  'TF' => 'French Southern Territories',
                  'GA' => 'Gabon',
                  'GM' => 'Gambia',
                  'GE' => 'Georgia',
                  'DE' => 'Germany',
                  'GH' => 'Ghana',
                  'GI' => 'Gibraltar',
                  'GR' => 'Greece',
                  'GL' => 'Greenland',
                  'GD' => 'Grenada',
                  'GP' => 'Guadeloupe',
                  'GU' => 'Guam',
                  'GT' => 'Guatemala',
                  'GG' => 'Guernsey',
                  'GN' => 'Guinea',
                  'GW' => 'Guinea-Bissau',
                  'GY' => 'Guyana',
                  'HT' => 'Haiti',
                  'HM' => 'Heard Island & Mcdonald Islands',
                  'VA' => 'Holy See (Vatican City State)',
                  'HN' => 'Honduras',
                  'HK' => 'Hong Kong',
                  'HU' => 'Hungary',
                  'IS' => 'Iceland',
                  'IN' => 'India',
                  'ID' => 'Indonesia',
                  'IR' => 'Iran, Islamic Republic Of',
                  'IQ' => 'Iraq',
                  'IE' => 'Ireland',
                  'IM' => 'Isle Of Man',
                  'IL' => 'Israel',
                  'IT' => 'Italy',
                  'JM' => 'Jamaica',
                  'JP' => 'Japan',
                  'JE' => 'Jersey',
                  'JO' => 'Jordan',
                  'KZ' => 'Kazakhstan',
                  'KE' => 'Kenya',
                  'KI' => 'Kiribati',
                  'KR' => 'Korea',
                  'KW' => 'Kuwait',
                  'KG' => 'Kyrgyzstan',
                  'LA' => 'Lao People\'s Democratic Republic',
                  'LV' => 'Latvia',
                  'LB' => 'Lebanon',
                  'LS' => 'Lesotho',
                  'LR' => 'Liberia',
                  'LY' => 'Libyan Arab Jamahiriya',
                  'LI' => 'Liechtenstein',
                  'LT' => 'Lithuania',
                  'LU' => 'Luxembourg',
                  'MO' => 'Macao',
                  'MK' => 'Macedonia',
                  'MG' => 'Madagascar',
                  'MW' => 'Malawi',
                  'MY' => 'Malaysia',
                  'MV' => 'Maldives',
                  'ML' => 'Mali',
                  'MT' => 'Malta',
                  'MH' => 'Marshall Islands',
                  'MQ' => 'Martinique',
                  'MR' => 'Mauritania',
                  'MU' => 'Mauritius',
                  'YT' => 'Mayotte',
                  'MX' => 'Mexico',
                  'FM' => 'Micronesia, Federated States Of',
                  'MD' => 'Moldova',
                  'MC' => 'Monaco',
                  'MN' => 'Mongolia',
                  'ME' => 'Montenegro',
                  'MS' => 'Montserrat',
                  'MA' => 'Morocco',
                  'MZ' => 'Mozambique',
                  'MM' => 'Myanmar',
                  'NA' => 'Namibia',
                  'NR' => 'Nauru',
                  'NP' => 'Nepal',
                  'NL' => 'Netherlands',
                  'AN' => 'Netherlands Antilles',
                  'NC' => 'New Caledonia',
                  'NZ' => 'New Zealand',
                  'NI' => 'Nicaragua',
                  'NE' => 'Niger',
                  'NG' => 'Nigeria',
                  'NU' => 'Niue',
                  'NF' => 'Norfolk Island',
                  'MP' => 'Northern Mariana Islands',
                  'NO' => 'Norway',
                  'OM' => 'Oman',
                  'PK' => 'Pakistan',
                  'PW' => 'Palau',
                  'PS' => 'Palestinian Territory, Occupied',
                  'PA' => 'Panama',
                  'PG' => 'Papua New Guinea',
                  'PY' => 'Paraguay',
                  'PE' => 'Peru',
                  'PH' => 'Philippines',
                  'PN' => 'Pitcairn',
                  'PL' => 'Poland',
                  'PT' => 'Portugal',
                  'PR' => 'Puerto Rico',
                  'QA' => 'Qatar',
                  'RE' => 'Reunion',
                  'RO' => 'Romania',
                  'RU' => 'Russian Federation',
                  'RW' => 'Rwanda',
                  'BL' => 'Saint Barthelemy',
                  'SH' => 'Saint Helena',
                  'KN' => 'Saint Kitts And Nevis',
                  'LC' => 'Saint Lucia',
                  'MF' => 'Saint Martin',
                  'PM' => 'Saint Pierre And Miquelon',
                  'VC' => 'Saint Vincent And Grenadines',
                  'WS' => 'Samoa',
                  'SM' => 'San Marino',
                  'ST' => 'Sao Tome And Principe',
                  'SA' => 'Saudi Arabia',
                  'SN' => 'Senegal',
                  'RS' => 'Serbia',
                  'SC' => 'Seychelles',
                  'SL' => 'Sierra Leone',
                  'SG' => 'Singapore',
                  'SK' => 'Slovakia',
                  'SI' => 'Slovenia',
                  'SB' => 'Solomon Islands',
                  'SO' => 'Somalia',
                  'ZA' => 'South Africa',
                  'GS' => 'South Georgia And Sandwich Isl.',
                  'ES' => 'Spain',
                  'LK' => 'Sri Lanka',
                  'SD' => 'Sudan',
                  'SR' => 'Suriname',
                  'SJ' => 'Svalbard And Jan Mayen',
                  'SZ' => 'Swaziland',
                  'SE' => 'Sweden',
                  'CH' => 'Switzerland',
                  'SY' => 'Syrian Arab Republic',
                  'TW' => 'Taiwan',
                  'TJ' => 'Tajikistan',
                  'TZ' => 'Tanzania',
                  'TH' => 'Thailand',
                  'TL' => 'Timor-Leste',
                  'TG' => 'Togo',
                  'TK' => 'Tokelau',
                  'TO' => 'Tonga',
                  'TT' => 'Trinidad And Tobago',
                  'TN' => 'Tunisia',
                  'TR' => 'Turkey',
                  'TM' => 'Turkmenistan',
                  'TC' => 'Turks And Caicos Islands',
                  'TV' => 'Tuvalu',
                  'UG' => 'Uganda',
                  'UA' => 'Ukraine',
                  'AE' => 'United Arab Emirates',
                  'GB' => 'United Kingdom',
                  'US' => 'United States',
                  'UM' => 'United States Outlying Islands',
                  'UY' => 'Uruguay',
                  'UZ' => 'Uzbekistan',
                  'VU' => 'Vanuatu',
                  'VE' => 'Venezuela',
                  'VN' => 'Viet Nam',
                  'VG' => 'Virgin Islands, British',
                  'VI' => 'Virgin Islands, U.S.',
                  'WF' => 'Wallis And Futuna',
                  'EH' => 'Western Sahara',
                  'YE' => 'Yemen',
                  'ZM' => 'Zambia',
                  'ZW' => 'Zimbabwe',
                ], $casino->country_code, ['data-placeholder' => 'Choose a Country...','class' => 'chosen-select','style' => 'width:120px;']) !!}<br />


                        <select>
                            <option> 888-bonus  </option>
                        </select>

                        <p class="rawlink">
                           <input type="text" name="name" placeholder="name" value="{{ $casino->name }}">
                        </p>
                        
                      

                        <ul class="unstyled centered">
                          <li class="control-inline">
                           <!--  <input class="styled-checkbox" id="features-lcd" type="checkbox" value="lcd" checked><label for="features-lcd"> Playtech </label> -->
                            <input class="styled-checkbox" name="category_id[]" type="checkbox"   id="features-lcd"  value="39" {{ $play_tech }}><label for="features-lcd"> Playtech </label>
                             <!-- <input name="category_id[]" type="checkbox" value="39" {{$play_tech}}>  Playtech <br> -->
                          </li>
                          <li class="control-inline">
                            <!-- <input class="styled-checkbox" id="features-touchscreen" type="checkbox" value="touchscreen" checked><label for="features-touchscreen"> Microgaming </label> -->
                            <input class="styled-checkbox" id="features-touchscreen" name="category_id[]" type="checkbox" value="34" {{ $microgaming }}><label for="features-touchscreen"> Microgaming </label>
                            <!-- <input name="category_id[]" type="checkbox" value="34" {{$microgaming}}>  Microgaming <br> -->
                          </li>
                          <li class="control-inline">
                            <!-- <input class="styled-checkbox" id="features-lightweight" type="checkbox" value="lightweight"><label for="features-lightweight"> NetEnt </label> -->
                            <input class="styled-checkbox" id="features-lightweight" name="category_id[]"  type="checkbox" value="43" {{ $netent }}><label for="features-lightweight"> NetEnt </label>
                           <!--  <input name="category_id[]" type="checkbox" value="43" {{$netent}}>  Netent <br> -->
                          </li>
                        </ul>


                       

                        <button> Submit </button>
                  </form>
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
                                    <img src="{{url('uploads')}}/{{ $casino->image_url }}" alt="">
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
                                  <img src="{{url('uploads')}}/{{ $casino->reels_image }}" alt="">
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
                                    <img src="{{url('uploads')}}/{{ $casino->claim_image }}" alt="">
                                </div>   
                            </div>
                        </a>
                    </li>

                    <hr>
                     <li> 
                          <div class="post">
                                 <b> <i class="fa fa-eye-slash" aria-hidden="true"></i> <em>1</em> </b>                                                         
                                 <h2> <a data-toggle="modal" data-target="#myModal"> SkyScraper Banner AD  </a></h2>
                                 <span> 196 x 405 </span>
                                 <img src="http://susanwins.com/uploads/48244_888_v_euro.jpg">
                          </div>

                    </li>

                 @if(count($casino->skyscraper_banners) > 0)
                  <h2>SkyScraper Banners</h2>
                    <table style="text-align:left;">
                    <thead>
                      <th>Banner</th>
                      <th>Banner Link</th>
                      <th>Show Banner</th>
                      <th>Priority</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      @foreach($casino->skyscraper_banners as $articleBanner)
                        <tr>
                          <td>{{$articleBanner->image_url}}</td>
                          <td>{{$articleBanner->image_link}}</td>
                          <td>
                            @if($articleBanner->show_banner == 0)
                            No
                            @else
                            Yes
                            @endif
                          </td>
                          <td>
                            {!! Form::select('priority', $priority_list ,$articleBanner->priority,['get-this' => $articleBanner->id]) !!}
                          </td>
                          <td><a href="{{url('admin/skyscraper_banner')}}/{{$articleBanner->id}}">Edit</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                @endif


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
              
              
              @if(count($casino->article_banners) > 0)
                <h2>Article Banners</h2>
                <table style="text-align: left;">
                  <thead>
                    <th>Banner</th>
                    <th>Banner Link</th>
                    <th>Show Banner</th>
                    <th>Priority</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    @foreach($casino->article_banners as $articleBanner)
                      <tr>
                        <td>{{$articleBanner->image_url}}</td>
                        <td>{{$articleBanner->image_link}}</td>
                        <td>
                          @if($articleBanner->show_banner == 0)
                          No
                          @else
                          Yes
                          @endif
                        </td>
                        <td>
                          {!! Form::select('priority', $priority_list ,$articleBanner->priority,['get-this' => $articleBanner->id]) !!}
                        </td>
                        <td><a href="{{url('admin/article_banner')}}/{{$articleBanner->id}}">Edit</a></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              @endif
            </div>
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


    /*$("#bs_save").on('click',function(){
      banner_type = $( "#bs_select" ).val();
      image_url = $( "#banner_skyscraper" ).val();
      image_link = $( "#image_link" ).val();
      casino_id = $('#editCasinoForm').attr('data-casino');



    });*/

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
          $('#banner_skyscraper').attr('value',url);
        }
        else if(load_file == 4)
        {
          $('#img_here4').html("<img src='{{ url('uploads') }}/"+url+"'>");
          $('#claim_image').attr('value',url);
        }

        

    });

  });
</script>

@endsection