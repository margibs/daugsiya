<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@home');

Route::get('get/me/token', function () {

	if(Request::ajax()){
        // return csrf_token();
        return Request::header('referer');
    }

  });

Route::get('/mobile_view',function(){
	return view('home.mobileView');
});

Route::get('/token/error',function(){
	return 'token Error!';
});

// Route::get('/watermelon/to/the/max',function(){
// 	return phpinfo();
// });

Route::post('test/getChatRoomPaginate','UserController@getChatRoomPaginate');

// Route::get('/test/fakermen',function(){

//     $faker = Faker\Factory::create();

//     $limit = 10;

//     for ($i = 0; $i < $limit; $i++) {
//         echo $faker->firstNameFemale . ', Email Address: ' . $faker->unique()->email . ', LastName' . $faker->lastName . '<br>';
//     }
// });

// Route::get('/watermelon/water/water22', 'AutoPostController@testTime');

Route::get('/all_games', 'PageController@allGames');
Route::post('/ajax_all_games', 'PageController@ajaxAllGamesPaginate');

Route::get('/clubhouse',function(){
	return Redirect::to('clubhouse/home');
});

Route::get('/responsive',function(){
	return view('home.responsive');
});

Route::get('/mobile/allgames',function(){
	return view('mobile.allGames');
});
Route::get('/mobile/category',function(){
	return view('mobile.category');
});
Route::get('/mobile/chatroom',function(){
	return view('mobile.chatRoom');
});
Route::get('/mobile/fronthouse',function(){
	return view('mobile.frontHouse');
});
Route::get('/mobile/homepage',function(){
	return view('mobile.homepage');
});
Route::get('/mobile/login',function(){
	return view('mobile.login');
});
Route::get('/mobile/prizeroom',function(){
	return view('mobile.prizeRoom');
});
Route::get('/mobile/profileroom',function(){
	return view('mobile.profileRoom');
});
Route::get('/mobile/single',function(){
	return view('mobile.single');
});
Route::get('/mobile/slotsroom',function(){
	return view('mobile.slotsRoom');
});

Route::post('home/ajax_get_ads_posts_init', 'PageController@ajaxGetAdsPostsInit');
Route::post('home/ajax_get_ads_posts', 'PageController@ajaxGetAdsPosts');
Route::post('home/ajax_get_reels_post', 'PageController@ajaxGetReelsPosts');
Route::post('home/ajax_get_reels_post2', 'PageController@ajaxGetReelsPosts2');
Route::post('home/ajax_get_reels_post_category', 'PageController@ajaxGetReelPostsCategory');
Route::post('home/ajax_get_filter_posts', 'PageController@ajaxGetFilterPosts');

// Route::get('singlepage', 'PageController@singlepage');
// Route::get('slug_edit', 'PageController@slug_edit');
Route::get('location_sample', 'PageController@sample_location');

// Route::get('register_the_clicks','PageController@registerClick');
// Route::get('ladbrokesroulette','PageController@ladbrokesroulette');


Route::post('home/ajax_get_page','PageController@ajaxGetPage');
Route::post('home/ajax_get_posts','PageController@ajaxGetPosts');
Route::post('home/ajax_get_posts_for_autopost','PageController@ajaxGetPostsforAutoPost');
Route::post('home/ajax_get_posts_for_big_wins','PageController@ajaxGetPostsforBiggestWins');

/*Route::post('home/ajax_tracker_click','PageController@ajaxTrackerClick');*/


// Comment
Route::post('add_comment', 'CommentController@addComment');
Route::post('add_reply', 'CommentController@addReply');

//CRON AUTOPOSTER
Route::get('admin/autoposts/all', 'AdminController@runAutopost');
Route::get('admin/autoposts/facebook', 'AutoPostController@runFacebookPost');
Route::get('admin/autoposts/twitter', 'AutoPostController@runTwitterPost');
Route::get('admin/autoposts/pinterest', 'AutoPostController@runPinterestPost');
Route::get('admin/autoposts/instagram', 'AutoPostController@runInstagramPost');
Route::get('admin/autoposts/check_execute', 'AutoPostController@checkExecute');


Route::post('room/getRoomMessages', 'ChatroomController@getRoomMessages');
Route::get('notification/postCustomNotification', 'NotificationController@postCustomNotification');
Route::post('session/getUserSession', 'UserSessionController@getUserSession');
Route::post('clubhouse/session', 'UserController@session');


//Tagging

Route::get('searchHashGame', 'GameController@searchHashGame');
Route::get('searchHashFriend', 'FriendController@searchHashFriend');

Route::get('profile/viewUserProfile', 'GameController@viewUserProfile');

Route::group(['middleware' => 'UserCheck'], function()
{
	//QUESTION BACKEND
	Route::get('admin/question','QuestionController@question');
	Route::post('admin/question', 'QuestionController@addQuestion');
	Route::get('admin/question/edit/{id}', 'QuestionController@editQuestion');
	Route::post('admin/question/edit/{id}', 'QuestionController@postEditQuestion');
	Route::get('admin/question/delete/{id}', 'QuestionController@deleteQuestion');

	Route::get('admin/question/choices/{id}', 'QuestionController@choices');
	Route::post('admin/question/choices/{id}', 'QuestionController@addChoice');
	Route::get('admin/question/choices/edit/{id}', 'QuestionController@editChoice');
	Route::post('admin/question/choices/edit/{id}', 'QuestionController@postEditChoice');
	Route::get('admin/question/choices/delete/{id}', 'QuestionController@deleteChoice');

	//Prize and Notification
	Route::get('admin/prize','PrizeController@prizes');
	Route::post('admin/prize','PrizeController@addPrize');

	Route::get('admin/prize/code','PrizeController@prizeCode');
	Route::get('admin/prize/category','PrizeController@prizeCategory');
	Route::post('admin/prize/category','PrizeController@addPrizeCategory');
	Route::get('admin/prize/editCategory/{id}','PrizeController@editPrizeCategory');
	Route::post('admin/prize/editCategory/{id}','PrizeController@postEditPrizeCategory');
	Route::get('admin/prize/deleteCategory/{id}','PrizeController@deletePrizeCategory');

	Route::post('admin/prize/code','PrizeController@generateCode');

	Route::get('admin/notification','AdminController@notification');
	Route::get('admin/notification/{id}/edit','AdminController@editCustomNotification');
	Route::post('admin/notification/{id}/edit','NotificationController@postEditCustomNotification');
	Route::get('admin/notification/{id}/delete','NotificationController@deleteCustomNotification');

	Route::get('admin/biggest_wins', 'AdminController@biggestWins');
	Route::post('admin/biggest_wins', 'AdminController@post_biggestWins');
	Route::get('admin/biggest_wins/delete/{id}', 'AdminController@delete_biggestWins');
	Route::get('admin/biggest_wins/edit/{id}', 'AdminController@edit_biggestWins');
	Route::post('admin/biggest_wins/edit/{id}', 'AdminController@postEdit_biggestWins');

	//temporary admin
	Route::get('admin/ladbrokes','AdminController@ladbrokes');
	
	//Tracker Controller
	// Route::get('tracker','TrackerController@index');
	// Route::get('tracker/{id}','TrackerController@single_details');

	//CasinoController
	Route::get('admin/casino','CasinoController@casino');
	Route::get('admin/new_casino','CasinoController@newCasino');
	Route::get('admin/casino/{id}','CasinoController@editCasino');
	Route::post('admin/casino/{id?}','CasinoController@addCasino');
	Route::post('admin/casino/{id}/addCasinoBanner','CasinoController@addCasinoBanner');

	Route::get('admin/autoposts','AdminController@autoposts');
	Route::get('admin/autoposts/new_autopost','AdminController@new_autopost');
	Route::post('admin/autoposts/new_autopost','AdminController@post_autopost');
	Route::get('admin/autoposts/{id}/delete','AdminController@delete_autopost');
	Route::get('admin/autoposts/{id}/edit','AdminController@view_editAutopost');
	Route::post('admin/autoposts/{id}/edit','AdminController@edit_autopost');


	Route::post('admin/addNewCustomNotification', 'NotificationController@addNewCustomNotification');

	Route::get('admin/casino_preference','CasinoController@casinoPreference');
	Route::get('admin/casino_preference/{id}','CasinoController@editCasinoPreference');
	Route::post('admin/casino_preference/{id?}','CasinoController@addCasinoPreference');

	Route::get('admin/chatroom','CasinoController@chatroom');
	Route::get('admin/article_banner','CasinoController@articleBanner');
	Route::get('admin/new_article_banner','CasinoController@newArticleBanner');
	Route::get('admin/article_banner/{id}','CasinoController@editArticleBanner');
	Route::post('admin/article_banner/{id?}','CasinoController@addArticleBanner');
	Route::post('admin/article_banner_option','CasinoController@articleBannerOption');

	Route::get('admin/skyscraper_banner','CasinoController@skyScraperBanner');
	Route::get('admin/new_skyscraper_banner','CasinoController@newSkyScraperBanner');
	Route::get('admin/skyscraper_banner/{id}','CasinoController@editSkyScraperBanner');
	Route::post('admin/skyscraper_banner/{id?}','CasinoController@addSkyScraperBanner');
	Route::post('admin/skyscraper_banner_option','CasinoController@skyScraperBannerOption');

	Route::post('admin/casino/ajax/save_sort','CasinoController@saveSort');
	Route::post('admin/casino/ajax/save_priority','CasinoController@savePriority');
	Route::post('admin/casino/ajax/save_casino_preferences_list','CasinoController@saveCasinoPreferencesList');

	//End Casino Controller

	//AdminController
	Route::get('admin','AdminController@posts');
	Route::get('admin/media_file','AdminController@mediaFiles');
	Route::post('admin/media_file_upload', 'AdminController@media_file_upload');
	Route::get('admin/users','AdminController@users');
	
	Route::get('admin/media_gallery','AdminController@mediaGallery');
	
	Route::get('admin/settings','AdminController@adminSettings');

	Route::get('admin/posts','AdminController@posts');
	Route::get('admin/drafts','AdminController@drafts');
	Route::get('admin/trash','AdminController@trash');
	Route::get('admin/posts/media_file','AdminController@mediaFiles');
	Route::get('admin/posts/{id}/delete','AdminController@deletePost');
	Route::get('admin/posts/{id}','AdminController@editPost');

	Route::get('admin/new_post','AdminController@newPost');
	Route::post('admin/new_post/{id?}','AdminController@addPost');

	Route::get('admin/categories','AdminController@categories');
	Route::post('admin/categories','AdminController@addCategory');

	Route::get('admin/links','AdminController@links');

	Route::post('admin/new_link/{id?}','AdminController@addLink');
	Route::get('admin/new_link','AdminController@newLink');
	
	Route::get('admin/edit_link/{id}','AdminController@editLink');

	Route::get('admin/comments','AdminController@comments');

	Route::get('admin/ajax_get_media_file','AdminController@ajaxGetMediaFile');
	Route::post('admin/ajax_delete_image','AdminController@ajaxDeleteImage');
	Route::post('admin/ajax_upload_image','AdminController@ajaxUploadImage');
	Route::post('admin/ajax_check_content','AdminController@ajaxCheckContent');

	// Add Chatroom

	Route::post('admin/addChatroom', 'AdminController@addChatroom');

	//HOME ADS
	Route::get('admin/home_ads','AdminController@homeAds');
	Route::post('admin/insert_image', 'AdminController@insertImage');
	Route::get('admin/homeads/{id}', 'AdminController@getAdds');
	Route::get('admin/edit/homeads/{id}', 'AdminController@editHomeAdds');
	Route::post('admin/edit/imageEdit', 'AdminController@editImageAdd');
	Route::get('admin/delete/imageDelete/{id}', 'AdminController@deleteImageHome');
	Route::get('admin/list/imageAdds', 'AdminController@listImageHome');

	//FUNCTION FOR CHANGE IS MOBILE
	Route::post('admin/posts/ismobile', 'AdminController@ismobile');
	//DATA TABLE FOR USER CONTROLLER
	Route::controller('userdatatable', 'UserController', [
	    'anyData'  => 'userdatatable.data',
	    'getIndex' => 'userdatatable',
	]);


	//DATA TABLE FOR USER CONTROLLER
	Route::controller('homeimagedatatable', 'HomeImagesController', [
	    'anyData'  => 'homeimagedatatable.data',
	    'getIndex' => 'homeimagedatatable',
	]);

	//FUNCTION FOR DYNAMIC PAGE
	Route::get('admin/dynamic/link', 'AdminController@getLink');

});

//Ajax Call
Route::post('casino/ajax/get_casino','PageController@ajaxGetCasino');
Route::post('casino/ajax/get_article_banner','PageController@ajaxGetArticleBanner');


Route::group(['middleware' => 'ClubMiddleware'], function()
{
	Route::get('clubhouse/home', 'ClubhouseController@home');
	Route::get('clubhouse/profile', 'UserController@profile');
	Route::post('clubhouse/profile/changePassword', 'UserController@changePassword');
	Route::post('clubhouse/profile/userDetails', 'UserController@userDetails');
	Route::get('clubhouse/findPeople', 'UserController@findPeople');

	Route::get('clubhouse/slotsroom', 'ClubhouseController@slot');

	Route::get('clubhouse/prizeroom',function(){
		return Redirect::to('prizes');
	});

	Route::get('prizes', 'ClubhouseController@prize');

	Route::get('clubhouse/chatroom/{name?}', 'UserController@chatroom');
	

		//Game Exp

	//Game Exp

	Route::post('gameExp/addFavorite', 'GameController@addFavorite');
	Route::post('gameExp/removeFavorite', 'GameController@removeFavorite');
	Route::post('gameExp/playedGame', 'GameController@playedGame');
	Route::post('gameExp/rateGame', 'GameController@rateGame');
	Route::post('gameExp/uploadProfilePic', 'GameController@uploadProfilePic');
	Route::post('gameExp/playNow', 'GameController@playNow');

	//Profile AJAX

	Route::post('profile/viewFriendProfile', 'GameController@viewFriendProfile');
	Route::post('profile/getFriendRequests', 'GameController@getFriendRequests');
	Route::post('profile/readFriendRequests', 'GameController@readFriendRequests');
	Route::post('profile/getMyFriends', 'GameController@getMyFriends');

	//Message AJAX

	Route::post('message/getPrivateMessages', 'MessageController@getPrivateMessages');
	Route::post('message/sendPrivateMessage', 'MessageController@sendPrivateMessage');
	Route::post('message/getInbox', 'MessageController@getInbox');

	//Chatroom AJAX
	Route::post('chatroom/postMessage', 'ChatroomController@postMessage');
	Route::post('chatroom/getChatroom', 'ChatroomController@getChatroom');
	Route::post('chatroom/getUnreadCount', 'ChatroomController@getUnreadCount');
	Route::post('chatroom/userChatRead', 'ChatroomController@userChatRead');


	// Friend AJAX
	Route::post('friends/addFriend', 'FriendController@addFriend');
	Route::post('friends/cancelFriendRequest', 'FriendController@cancelFriendRequest');
	Route::post('friends/acceptFriendRequest', 'FriendController@acceptFriendRequest');
	Route::post('friends/unFriend', 'FriendController@unFriend');


	Route::post('notification/addNewGameNotification', 'NotificationController@addNewGameNotification');
	Route::post('notification/addNewRoomNotification', 'NotificationController@addNewRoomNotification');
	Route::post('notification/moderatorJoinedChatroom', 'NotificationController@moderatorJoinedChatroom');
	Route::post('notification/getGlobalNotifications', 'NotificationController@getGlobalNotifications');
	Route::post('notification/readGlobalNotifications', 'NotificationController@readGlobalNotifications');
	Route::post('notification/recommendGame', 'NotificationController@recommendGame');


	Route::post('prize/checkPrizeCode', 'PrizeController@checkPrizeCode');
	Route::post('prize/claimPrize', 'PrizeController@claimPrize');


	//Interview AJAX

	Route::post('question/answer', 'QuestionController@answer');

	//Tour AJAX
	Route::post('endTour', 'UserController@endTour');

});


Route::get('login', 'PageController@login');
Route::post('login/post', 'ClubhouseController@postLogin');
Route::get('signup', 'PageController@signup');
Route::post('signup/post', 'Auth\AuthController@signup');
Route::get('logout', 'ClubhouseController@getLogout');
// Authentication routes...
/*Route::get('login', 'Auth\AuthController@getLogin');*/
/*Route::post('login', 'Auth\AuthController@postLogin');*/
/*Route::get('logout', 'Auth\AuthController@getLogout');*/

// Registration routes...
// Route::get('register', 'Auth\AuthController@getRegister');
// Route::post('register', 'Auth\AuthController@postRegister');

//Single BLog
Route::get('{category}','PageController@category');
Route::get('{category}/{slug?}','PageController@single');
