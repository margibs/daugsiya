(function(window, document, $){

	gameExpUrl = BASE_URL+'/gameExp';
	profileUrl = BASE_URL+'/profile';
	notifUrl = BASE_URL+'/notification';


		POST_ID = $('#maincontainer').data('post');

		$.fn.attachSinglePageEvents = function(){

			return this.each(function(){
					page = this;

			$(page).on('click', '.toggleLoginModal', function(){
					$(page).find('#loginModal').openModal();
			});

			recommendFriendAJAX = false;

			$(page).on('click', '#recommendToFriend', function(){
				
				$(page).find('#recommendFriendModal').openModal();
				if(!recommendFriendAJAX){
	                recommendFriendAJAX = true;

	                friendRecommentList = $(page).find('#friendRecommentList');
	                friendRecommentList.html('').append($('<li>').text('Loading...'));
	                $.ajax({
	                     url : profileUrl+'/getMyFriends',
	                     data : { _token : CSRF_TOKEN },
	                     dataType : 'json',
	                     type : 'POST',
	                     success : function(data){
	                        recommendFriendAJAX = false;
	                        $('#friendRecommentList').html('');
	                        if(data && data.length){
	                          $.each(data, function(){
	                            f = this;

	                                friendRecommentList.append(
	                                  $('<li>')
	                                      .append(
	                                        $('<div>').addClass('msgImgcont')
	                                            .append(
	                                              $('<img>').attr('src', f.friend.user_detail.profile_picture ? BASE_URL+'/'+ f.friend.user_detail.profile_picture : defaultProfilePic )
	                                              )
	                                        )
	                                      .append(
	                                        $('<h6>').text(f.friend.user_detail.firstname+' '+f.friend.user_detail.lastname)
	                                        )
	                                      .append(
	                                        $('<input type="checkbox" name="friends[]" value="'+f.friend.user_detail.user_id+'">').addClass('recommendCheck')
	                                        )
	                                  )
	                          });
	                        }
	                     },error : function(xhr){
	                      console.log(xhr.responseText);
	                     }
	                  });
	              } 

			});

			$(page).on('click','#recommendBtn', function(){

		            theButton = this;

		           

		        friends = [];

		          $(page).find('#friendRecommentList').find('input[name="friends[]"]').each(function(){
		                if($(this).is(':checked')){
		                    friends.push($(this).val());
		                }
		          });

		          if(friends.length){

		          	 $(theButton).attr('disabled', 'disabled').text('Sending...');

		              $.ajax({
		                url : notifUrl+'/recommendGame',
		                data : { friends : friends, post_id : POST_ID, _token : CSRF_TOKEN },
		                type : 'POST',
		                dataType : 'json',
		                success : function(data){
		                  $(theButton).text('Recommendation Sent!');
		                  setTimeout(function(){
		                       $(page).find('#recommendFriendModal').closeModal();
		                        $(theButton).html('<i class="ion-android-happy"> </i> Recommend Game').removeAttr('disabled');
		                        $(page).find('#friendRecommentList').html('');
		                  }, 800);
		                },error : function(xhr){
		                  console.log(xhr.responseText);
		                }
		              });

		          }else{
		            alert('Please select atleast 1 friend');
		          }

		      });
			

				$(page).find('#ratingDiv').jRate(null, rateGameFunc);

			$(page).on('click','#claimBonus', function(){
						$(page).find('.bonusCasino').slideDown();
				});

				function rateGameFunc(value){

       					if(USER_ID && POST_ID){

					          $.ajax({
					              url: gameExpUrl+'/rateGame',
					              type : 'POST',
					              data : { user_id : USER_ID, rating : value , post_id : POST_ID, _token : CSRF_TOKEN  },
					              dataType : 'json',
					              success : function(data){
					                if(data){

					                	$(page).find('#ratingPlayedNotif').text('Thanks for rating!');
					                  setTimeout(function(){
					                  	$(page).find('#ratingPlayedNotif').text(' ');
					                  }, 1000);

					                }

					              },error : function(xhr){
					                console.log(xhr.responseText);
					              }

					            });
					        }
				}

					$(page).on('click', '#addToFavorite', function(){

					_this = $(this).attr('disabled', 'disabled');

					if(USER_ID && POST_ID){

						$.ajax({
				            url: gameExpUrl+'/addFavorite',
				            type : 'POST',
				            data : { user_id : USER_ID , post_id : POST_ID, _token : CSRF_TOKEN  },
				            dataType : 'json',
				            success : function(data){
				              console.log(data);
				              if(data && data.id){

				              	_this.replaceWith(
									$('<button>').attr('type', 'button').addClass('added').data('id', data.id).attr('id', 'removeToFavorite')
										.append( $('<i>').addClass('ion-close-round') )
										.append( $('<span>').text('Remove to Favourites') )
									)
				              }

				            },error : function(xhr){
				              console.log(xhr.responseText);
				            }

				          });
					}

					
			});

			$(page).on('click', '#removeToFavorite', function(){

					_this = $(this).attr('disabled', 'disabled');

					data_id = $(_this).data('id');
					if(data_id){

						$.ajax({
				            url: gameExpUrl+'/removeFavorite',
				            type : 'POST',
				            data : { id : data_id , _token : CSRF_TOKEN  },
				            dataType : 'json',
				            success : function(data){

				                _this.replaceWith(
									$('<button>').attr('type', 'button').addClass('added').attr('id', 'addToFavorite')
										.append( $('<i>').addClass('ion-ios-heart') )
										.append( $('<span>').text('Add to Favourites') )
									)

				            },error : function(xhr){
				              console.log(xhr.responseText);
				            }

				          });

						   	
					}

					
			});

			$(page).on('click','#playedGame', function(){

			        _this = $(this).attr('disabled', 'disabled');
			        if(USER_ID && POST_ID){
			        	
			          $.ajax({
			            url: gameExpUrl+'/playedGame',
			            type : 'POST',
			            data : { user_id : USER_ID , post_id : POST_ID, _token : CSRF_TOKEN  },
			            dataType : 'json',
			            success : function(data){
			              if(data && data.id){
			                 $(page).find('.notPlayedGame').hide();
			        			$(page).find('.playedGame').show().find('#ratingDiv').jRate(null, rateGameFunc);

			              }

			            },error : function(xhr){
			              console.log(xhr.responseText);
			            }

			          });

			        }

			    });

			  var total_image = $( page ).find("#postcontent img").length;

				    if(total_image >= 1)
				    {

				      var banner_type = 1;

				      $.ajax({
				        type: 'post',
				        url: BASE_URL+"/casino/ajax/get_article_banner",
				        data: {_token: CSRF_TOKEN,'articleBannerRatio' : articleBannerRatio,'total_image' : total_image,'banner_type' : banner_type}, 
				        success: function(response)
				        {
				        	console.log(response);
				          var parsed = JSON.parse(response),
				              no_total = articleBannerRatio;

				          $.each( parsed, function( i, l){

				            if(total_image < articleBannerRatio)
				            {
				              no_total = total_image;
				            }

				            no_total -= 1;
				            var every_nth = "img:eq("+no_total+")";
				            $( page ).find('#postcontent').find(every_nth).parent().after(l);
				            no_total += articleBannerRatio + 2;

				          });

				        }
				      });
				    }


				 $(page).on('click','#postcontent img',function(){

					var $this = $(this);
					var image_parent = $this.parent();

					if(!$this.hasClass( "not_count" ))
					{
						image_parent.css( "position", "relative" );
						image_parent.append('<span class="overlay_ni_men" style="display: block; position: absolute; z-index: 2; top: 0; width: 100%; height: 100%; text-align: center; background-color:rgba(255, 255, 255, 0.9); "><div class="outer"><div class="middle"><div class="inner"><p>Do you want to play this game?</p> <br /><a href="#" class="casino_yes" track-action="56ddbe4fe6b07" track-value="Yes Count"> <div class="glossy"> Yes </div> </a> <a href="#" class="casino_no" track-action="56ddbe560574d" track-value="No Count"> <div class="glossy" style="float: left;"> No </div> </a></div></div></div> </span>');
					}

				});

				$(page).on('click','#postcontent .casino_no',function(e){
			      e.preventDefault();
			      var $this = $(this);
			      var casino_no_parent = $this.closest('.overlay_ni_men');
			      casino_no_parent.remove();
			    });

			    $(page).on('click','#postcontent .casino_yes',function(e){

				      e.preventDefault();
				      var $this = $(this);
				      var casino_yes_parent = $this.parent();
				       casino_yes_parent.html("<div class='cssload-loader'></div><p style='position:relative;top:30px;'> Searching for Casinos... </p>");
				            

				      $.ajax({
				          type: 'post',
				          url: BASE_URL+"/casino/ajax/get_casino",
				          data: {_token: CSRF_TOKEN,'category_id' : get_casino_category,'post_id' : POST_ID}, 
				          success: function(response)
				          {
				            var parsed = JSON.parse(response);
				            var casino = '<p class="popupheading">Casino List</p> <ul class="casinolist">';
				           
				            $.each( parsed, function( index, obj){
				              var casino_url = '';

				              casino_url = obj.link_desktop;

				              casino += "<li><a href='"+casino_url+"' track-action='56ddbe5eb51c9' track-value='"+obj.name+"' class='casino_option' get-this-id="+obj.id+"><img src='"+BASE_URL+'/uploads/'+obj.image_url+"' style='width:auto;'></a></li>";

				            });

				            casino += "</ul>";

				            setTimeout(function() {
				             casino_yes_parent.html(casino);
				            }, 3000);

				          }
				        });

				    });


	

				$(page).find('#share_via_pinterest').sharrre({
				    share : 
				    {
				      pinterest : true
				    },
				    template : '<img src="http://susanwins.com/uploads/76008_pinterestubtton.png" style="left:4px!important;top: -3px;">',
				    enableHover: false,
				    enableTracking: true,
				    click: function(api, options)
				    {
				      api.openPopup('pinterest');
				    }
				  });

				  $(page).find('#share_via_facebook').sharrre({
				    share : 
				    {
				      facebook : true
				    },
				    template : '<img src="http://susanwins.com/uploads/34329_fb-button.png" style="left: 2px!important;top: -4px;">',
				    enableHover: false,
				    enableTracking: true,
				    click: function(api, options)
				    {
				      api.openPopup('facebook');
				    }
				  });

				  $(page).find('#share_via_twitter').sharrre({
				    share : 
				    {
				      twitter : true
				    },
				    template : '<img src="http://susanwins.com/uploads/70478_twitter-icon.png" style="top: -3px;left: 1px;">',
				    enableHover: false,
				    enableTracking: true,
				    click: function(api, options)
				    {
				      api.openPopup('twitter');
				    }
				  });

				  $(page).find('#share_via_googlePlus').sharrre({
				    share : 
				    {
				      googlePlus : true
				    },
				    template : '<img src="http://susanwins.com/uploads/79339_g+button.png" style="left: 3px;top: -2px;">',
				    enableHover: false,
				    enableTracking: false,
				    click: function(api, options)
				    {
				      api.openPopup('googlePlus');
				    }
				  });

				$(page).find('#api_count').sharrre({
					share : 
					{
						pinterest : true,
						facebook : true,
						twitter : true,
						googlePlus : true
					},
					template :'{total}',
					enableHover: false
				});

						});
		}



})(window, document, jQuery);