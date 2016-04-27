<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

use App;
use DB;
use Auth;
use Cookie;
use Config;
use Socialite;
use Validator;
use File;
use URL;

use App\Model\Category;
use App\Model\Comments;
use App\Model\Link;
use App\Model\MediaFile;
use App\Model\Post;
use App\Model\PostCategory;
use App\Model\CasinoBanner;
use App\Model\CasinoBannerCountry;

use App\Game_Experience;
use App\User_Rating;

use App\PluginModel\WidgetRating;

use App\CustomQuery;
use App\CommonFunctions;
use App\Global_Notification;
use App\Model\TrackerClick;
use App\Model\TrackerVisit;
use App\Model\Comment;

use App\BiggestWin;
use App\UserActivity;
use App\Friend;

use DirkGroenen\Pinterest\Pinterest;
use Session;

class PageController extends Controller
{
    private $data = array();
    private $banners_array = array();
    private $article_banners_array = array();
    private $top_games_array = array();

    private $customQuery;
    private $commonFunctions;
    //
    private $activities = [];

    public function sample_location()
    {
        $location = Location::get();

        dd($location);
        return 'Hello wordl!';
    }


        public function ajaxGetPostsforAutoPost(Request $request)
    {
        $search_posts = 
        DB::table('posts')
        ->select(DB::raw('posts.slug,posts.id'))
        ->where('posts.title', 'LIKE', '%' . $request->input('searchField') . '%')
        ->where('status',1)
        ->take(5)
        ->get();

        
        return json_encode($search_posts);
    }

        public function ajaxGetPostsforBiggestWins(Request $request)
    {
        $search_posts = 
        DB::table('posts')
        ->select(DB::raw('posts.slug,posts.id'))
        ->where('posts.title', 'LIKE', '%' . $request->input('searchField') . '%')
        ->whereNotExists(function($query){
             $query->select(DB::raw(1))
                      ->from('biggest_wins')
                      ->whereRaw('posts.id = biggest_wins.post_id');
        })
        ->where('status',1)
        ->take(5)
        ->get();

        
        return json_encode($search_posts);
    }

    public function ajaxGetAdsPostsInit(Request $request)
    {

                
                // ->orderBy(DB::raw('RAND('.$request->input('random_sidebar_order_number').')'))

        $articleBannerRatio = Config::get('casino');
        $sidebar_content =  $articleBannerRatio['sidebar_content'];
        $skyScraperBannerRatio = $articleBannerRatio['sky_scrapper_banner_ratio'];

        
        $contentOffset = $request->contentOffset;

        $maxContent = ( $skyScraperBannerRatio * floor($sidebar_content / $skyScraperBannerRatio)  ) * $contentOffset;

        $banners_to_get = floor($maxContent / $skyScraperBannerRatio);

        $skyScrapperBanner = $this->getBanners($banners_to_get);

        


        $counter = 1;
        $counter2 = 0;

        $side_bar_posts = array();

        $latest_reviews = DB::table('posts')
            ->select('posts.slug','posts.feat_image_url','posts.thumb_feature_image','posts.title','posts.created_at','posts.excerpt')
            ->where('posts.status','=',1)
            // ->where('posts.id','!=',$request->input('posts_id'))
            // ->orderBy('posts.id','DESC')
            ->orderBy(DB::raw('RAND('.$request->input('random_sidebar_order_number').')'))
            ->offset($contentOffset * 20)
            ->take($maxContent)
            ->get();


        foreach ($latest_reviews as $latest_review) 
        {
            $side_bar_posts[] = "<a href='".url('')."/".$latest_review->slug."' track-action='56ddbe688790a'> <img src='".url('uploads')."/".$latest_review->thumb_feature_image."' style='display:block; height:117px;'> </a>";

            if( $counter == $skyScraperBannerRatio)
            {
                $side_bar_posts[] = $skyScrapperBanner[$counter2];
                $counter2++;
            }
            elseif(($counter % $skyScraperBannerRatio) == 0 && $counter2 < $banners_to_get)
            {
                $side_bar_posts[] = $skyScrapperBanner[$counter2];
                $counter2++;
            }

            $counter++; 
        }

        return json_encode($side_bar_posts);

    }

    /*public function ajaxGetAdsPostsInit(Request $request)
    {
        // dd(URL::previous());

        $articleBannerRatio = Config::get('casino');
        $skyScraperBannerRatio = $articleBannerRatio['sky_scrapper_banner_ratio'];

        $banners_to_get = floor(14 / $skyScraperBannerRatio);

        $skyScrapperBanner = $this->getBanners($banners_to_get);


        $counter = 1;
        $counter2 = 0;

        $side_bar_posts = array();

        // $latest_reviews = DB::table('posts')
        //     ->join('post_categories','post_categories.post_id','=','posts.id')
        //     ->select('posts.slug','posts.feat_image_url','posts.thumb_feature_image','posts.title','posts.created_at','posts.excerpt')
        //     ->where('posts.status','=',1)
        //     ->where('posts.id','!=',$request->input('posts_id'))
        //     ->where('post_categories.category_id','=',$request->input('posts_category_id'))
        //     ->orderBy('posts.id')
        //     ->take(14)
        //     ->get();

        $latest_reviews = DB::table('posts')
            ->select('posts.slug','posts.feat_image_url','posts.thumb_feature_image','posts.title','posts.created_at','posts.excerpt')
            ->where('posts.status','=',1)
            // ->where('posts.id','!=',$request->input('posts_id'))
            ->orderBy('posts.id','ASC')
            ->take(14)
            ->get();


        foreach ($latest_reviews as $latest_review) 
        {
            $side_bar_posts[] = "<a href='".url('')."/".$latest_review->slug."' class='get_me_sidebar'> <img src='".url('uploads')."/".$latest_review->thumb_feature_image."' style='display:block; height:117px;'> </a>";

            if( $counter == $skyScraperBannerRatio)
            {
                $side_bar_posts[] = $skyScrapperBanner[$counter2];
                $counter2++;
            }
            elseif(($counter % $skyScraperBannerRatio) == 0 && $counter2 < $banners_to_get)
            {
                $side_bar_posts[] = $skyScrapperBanner[$counter2];
                $counter2++;
            }

            $counter++; 
        }


        return json_encode($side_bar_posts);

    }*/

    public function ajaxGetAdsPosts(Request $request)
    {

        $articleBannerRatio = Config::get('casino');
        $skyScraperBannerRatio = $articleBannerRatio['sky_scrapper_banner_ratio'];

        $post_content_height = $request->input('post_content_height');

        $banners_to_get_init = floor($post_content_height / 117 - 10);

        $banners_to_get = floor($banners_to_get_init / $skyScraperBannerRatio) ;

        $skyScrapperBanner = $this->getBanners($banners_to_get);



        $counter = floor(14 / $skyScraperBannerRatio) * $skyScraperBannerRatio;
        $counter = 15 - $counter;
        $counter2 = 0;

        $side_bar_posts = array();


        $latest_reviews = DB::table('posts')
            ->select('posts.slug','posts.feat_image_url','posts.thumb_feature_image','posts.title','posts.created_at','posts.excerpt')
            ->where('posts.status','=',1)
            // ->where('posts.id','!=',$request->input('posts_id'))
            ->orderBy('posts.id','DESC')
            ->offset(28)
            ->take($banners_to_get_init - $banners_to_get)
            ->get();


        foreach ($latest_reviews as $latest_review) 
        {
            $side_bar_posts[] = "<a href='".url('')."/".$latest_review->slug."' style='display:block; height:117px;' class='get_me_sidebar'> <img src='".url('uploads')."/".$latest_review->thumb_feature_image."' style='display:block; height:117px;'> </a>";

            if( $counter == $skyScraperBannerRatio)
            {
                $side_bar_posts[] = $skyScrapperBanner[$counter2];
                $counter2++;
            }
            elseif(($counter % $skyScraperBannerRatio) == 0 && $counter2 < $banners_to_get)
            {
                $side_bar_posts[] = $skyScrapperBanner[$counter2];
                $counter2++;
            }

            $counter++; 
        }


        return json_encode($side_bar_posts);
    }

    public function getBanners($banners_to_get)
    {
        if(count($this->banners_array) == $banners_to_get)
        {
            return $this->banners_array;
        }
        else
        {
            $new_banners_to_get = $banners_to_get - count($this->banners_array);
            $collection_of_banners = CasinoBanner::where('banner_type',2)->where('show_banner',1)->orderBy(DB::raw('RAND()'))->take($new_banners_to_get)->get();

            foreach ($collection_of_banners as $collection_of_banner) 
            {
               $this->banners_array[] = "<div class='side_bar_banner'><a href='".$collection_of_banner->image_link."' track-action='56ddbe438a370' campaign-enable='true' class='get_me_skyscraper_banner' get-this-id='".$collection_of_banner->id."'><div class='questionMarkHover hint--top hint--bounce hint--rounded' data-hint='Click to know more'> ? </div><img src='".url('uploads')."/".$collection_of_banner->image_url."'></a></div>" ;
            }

            return  $this->getBanners($banners_to_get);
        }
        
    }

    // public function registerClick()
    // {
    //     // $clicker_daw = CasinoBannerCountry::find(9);
    //     // $clicker_daw->casino_banner_id = $clicker_daw->casino_banner_id + 1;
    //     // $clicker_daw->save();
    //     return redirect()->away('https://www.google.com');
    //     // return redirect()->away('http://online.ladbrokes.com/promoRedirect?key=ej0xMzc3MTY0NSZsPTE0MjYzMTAyJnA9NjcwMTI3&amp;amp;var4=EMNT');
    //     // http://online.ladbrokes.com/promoRedirect?key=ej0xMzc3MTY0NSZsPTE0MjYzMTAyJnA9NjcwMTI3&amp;amp;var4=EMNT
    // }

    // public function ladbrokesroulette()
    // {

    //     return 'Still transfering to alllad.com';
    //     // $clicker_daw = CasinoBannerCountry::find(9);
    //     // $clicker_daw->casino_banner_id = $clicker_daw->casino_banner_id + 1;
    //     // $clicker_daw->save();
    //     // return redirect()->away('http://online.ladbrokes.com/promoRedirect?key=ej0xMzc3MTY0NSZsPTE0MjYzMTAyJnA9NjcwMTI3&amp;amp;var4=EMNT');
    // }

    public function __construct(CustomQuery $customQuery,CommonFunctions $commonFunctions)
    {
        $this->customQuery = $customQuery;
        $this->commonFunctions = $commonFunctions;
        $customQuery->per_page = 30;

        $this->data['categories'] = 
        Category::where('id','!=',1)
        ->where('slug','!=','microgaming')
        ->where('slug','!=','playtech')
        ->where('slug','!=','netent')
        ->where('slug','!=','luxury')
        ->where('slug','!=','luxuryroyalty')
        ->where('slug','!=','pirate')
        ->where('slug','!=','aztec')
        ->where('slug','!=','gladiators')
        ->where('slug','!=','native-american')
        ->where('slug','!=','football')
        ->where('slug','!=','memory-lane')
        ->orderBy('name')->get();
        
        // $user_ip = Location::get()->ip;

        // $this->data['side_bar_posts'] = DB::table('posts')
        //     ->join('post_categories','post_categories.post_id','=','posts.id')
        //     ->join('categories','post_categories.category_id','=','categories.id')
        //     ->where('categories.slug','!=','lol')
        //     ->where('posts.status',1)
        //     ->select('posts.slug','posts.feat_image_url','posts.thumb_feature_image','posts.title','categories.slug as cat_slug','categories.name as cat_name')
        //     // ->orderBy('posts.id','DESC')
        //     ->orderBy(DB::raw('RAND()'))
        //     ->groupBy('posts.id')
        //     ->take(5)
        //     ->get();

            //             ->whereNotIn('posts.id',function($query) use ($user_ip)
            // {
            //     $query->select(DB::raw('posts_id'))
            //           ->from('ip_posts_vieweds')
            //           ->whereRaw("ip = '".$user_ip."'");
            // })
        
        
    }

    public function slug_edit()
    {
        $posts = Post::where('status','1')->get();

        echo '<table>';
        foreach ($posts as $post) {
            echo '<tr><td>';
            echo $post->id;
            echo '</td><td>';
            echo $post->title;
            echo '</td><td>';
            echo $post->slug;
            echo '</td></tr>';
        }

        echo '</table>';
    }


    public function allGames()
    {
        $category_randomizer = $this->categoryImageList();
        $random_order_number = rand(1, 50);
        $reel_posts = 
            DB::table('posts')
            ->select('posts.id','posts.slug','posts.reels_image')
            ->where('status',1)
            ->where('posts.reels_image','!=','')
            ->orderBy(DB::raw('RAND()'))
            ->take(20)
            ->get();

        $reel_post_buffers = 
            DB::table('posts')
            ->select('posts.id','posts.slug','posts.reels_image')
            ->where('status',1)
            ->where('posts.reels_image','!=','')
            ->orderBy(DB::raw('RAND('.$random_order_number.')'))
            ->take(4)
            ->get();

        $posts = Post::where('status',1)->orderBy('posts.id','ASC')->get();

        $comments = Comment::where('type', 1)->where('parent', '=', 0)->with('user', 'allgames_replies')->get();

        $comment_type = 1;
        $content_id = 0;
        $user = Auth::user();
        return view('home.allGames',compact(['posts','random_order_number','reel_posts','reel_post_buffers','category_randomizer', 'comments','comment_type','content_id', 'user']));
    }

    public function ajaxAllGamesPaginate(Request $request)
    {
        $posts = Post::where('status',1)->orderBy('posts.id','ASC')->take(20)->offset($request->input('page')*20)->get();

        return json_encode($posts);
    }


    protected function getUserNotificationCount(){

        $user = Auth::user();

        $unread_friend_requests = $user->accepted_friends()->where('confirmed', 0)->where('read', 0)->count();
       $unread_user_notifications = $user->user_notifications()->where('read', 0)->count();

        return $unread_user_notifications+$unread_friend_requests;
    }

    protected function getGlobalNotificationCount(){

        $user_id = Auth::user();

        $not_custom_notifications = Global_Notification::whereNotExists(function($query){

            $query->select('global_notification_id')
                ->from('globalnotification_reads')
                ->whereRaw('globalnotification_reads.global_notification_id = global_notifications.id');
        })->where('type', '!=', 4)->count();

        $custom_notifications = Global_Notification::where('type', 4)

        ->whereExists(function($query){

            $query->select('global_notification_id')
                    ->from('custom_notifications')
                    ->whereRaw('custom_notifications.global_notification_id = global_notifications.id AND executed = 1');

    
        })->whereNotExists(function($query){

            $query->select('global_notification_id')
                ->from('globalnotification_reads')
                ->whereRaw('globalnotification_reads.global_notification_id = global_notifications.id');
        })->count();

        return $not_custom_notifications+$custom_notifications;

    }

    public function home()
    {

        $this->data['category_randomizer'] = $this->categoryImageList();

    	$this->data['current_category_id'] = 0;
        $this->data['query_string'] = '';
        // $this->data['posts'] = Post::where('status',1)->orderBy('posts.id','ASC')->take(36)->get();
        $this->data['posts'] = 
        DB::table('posts')
        ->join('post_categories','post_categories.post_id','=','posts.id')
        ->where('post_categories.category_id',20)
        ->where('posts.status',1)
        ->orderBy(DB::raw('RAND()'))
        ->take(36)
        ->get();


        $this->data['categories'] = Category::where('id','!=','1')->orderBy('name')->get();


        $this->data['reel_posts'] = 
        DB::table('posts')
        ->select('posts.id','posts.slug','posts.reels_image')
        ->where('status',1)
        ->where('posts.reels_image','!=','')
        ->orderBy(DB::raw('RAND()'))
        // ->orderBy('posts.id','ASC')
        ->take(20)
        ->get();

        $this->data['random_order_number'] = rand(1, 50);

        $this->data['reel_post_buffers'] = 
        DB::table('posts')
        ->select('posts.id','posts.slug','posts.reels_image')
        ->where('status',1)
        ->where('posts.reels_image','!=','')
        ->orderBy(DB::raw('RAND('.$this->data['random_order_number'].')'))
        // ->orderBy('posts.id','ASC')
        ->take(4)
        ->get();

        if(Auth::check()){

            $user = Auth::user();
            $this->data['user'] = $user;
            $this->data['random_order_number'] = count($user->unread_messages()->groupBy('from')->get());

            $this->data['user_notification_count'] = $this->getUserNotificationCount();

            $this->data['global_notification_count'] = $this->getGlobalNotificationCount(); 
        }

        $this->data['session_id'] = Session::getId();

        $this->data['biggest_wins'] = BiggestWin::with('post')->take(4)->get();

        

        return view('home.homepage',$this->data);
    }


    public function categoryImageList()
    {
        $categories =  array(
            '<li><a href="http://susanwins.com/adventure"><img src="http://susanwins.com/uploads/76393_adventure.png"></a></li>',
            '<li><a href="http://susanwins.com/animal"><img src="http://susanwins.com/uploads/63125_animals.png "></a></li>',
            '<li><a href="http://susanwins.com/celebs"><img src="http://susanwins.com/uploads/49000_celebs.png"></a></li>',
            '<li><a href="http://susanwins.com/classic"><img src="http://susanwins.com/uploads/66321_classic.png"></a></li>',
            '<li><a href="http://susanwins.com/comic"><img src="http://susanwins.com/uploads/27452_comic.png "></a></li>',
            '<li><a href="http://susanwins.com/cowboywestern"><img src="http://susanwins.com/uploads/71559_cowboy.png"></a></li>',
            '<li><a href="http://susanwins.com/cute"><img src="http://susanwins.com/uploads/63299_cute.png"></a></li>',
            '<li><a href="http://susanwins.com/egyptian"><img src="http://susanwins.com/uploads/76342_egyptian.png"></a></li>',
            '<li><a href="http://susanwins.com/fantasy"><img src="http://susanwins.com/uploads/48873_fantasy.png"></a></li>',
            '<li><a href="http://susanwins.com/medieval"><img src="http://susanwins.com/uploads/43173_medieval.png"></a></li>',
            '<li><a href="http://susanwins.com/movie"><img src="http://susanwins.com/uploads/18354_movies.png"></a></li>',
            '<li><a href="http://susanwins.com/mysterious"><img src="http://susanwins.com/uploads/32493_mystery.png"></a></li>',
            '<li><a href="http://susanwins.com/myths-legends"><img src="http://susanwins.com/uploads/26569_myths.png"></a></li>',
            '<li><a href="http://susanwins.com/party"><img src="http://susanwins.com/uploads/30641_party.png"></a></li>',
            '<li><a href="http://susanwins.com/pirates"><img src="http://susanwins.com/uploads/70833_pirate.png"></a></li>',
            '<li><a href="http://susanwins.com/relaxingsoothing"><img src="http://susanwins.com/uploads/49793_relaxing.png"></a></li>',
            '<li><a href="http://susanwins.com/romance"><img src="http://susanwins.com/uploads/33566_romantic.png"></a></li>',
            '<li><a href="http://susanwins.com/sea"><img src="http://susanwins.com/uploads/42258_sea.png"></a></li>',
            '<li><a href="http://susanwins.com/seasonal"><img src="http://susanwins.com/uploads/52845_seasonal.png"></a></li>',
            '<li><a href="http://susanwins.com/vegas"><img src="http://susanwins.com/uploads/35722_vegas.png"></a></li>',
            '<li><a href="http://susanwins.com/sorcery"><img src="http://susanwins.com/uploads/88737_sorcery.png"></a></li>',
            '<li><a href="http://susanwins.com/superheroes"><img src="http://susanwins.com/uploads/28203_superhero.png"></a></li>',
            '<li><a href="http://susanwins.com/tropicaljungle"><img src="http://susanwins.com/uploads/41272_tropical.png"></a></li>',
            '<li><a href="http://susanwins.com/television"><img src="http://susanwins.com/uploads/28435_television.png"></a></li>',
            '<li style="position: relative; top: 10px;"><a href="http://susanwins.com/sexy"><img src="http://susanwins.com/uploads/24631_sexy.png"></a></li>',
        );


        shuffle($categories);

        return $categories;
    }

    public function singlepage()
    {
        $this->data['current_category_id'] = 0;
        $this->data['query_string'] = '';
        $this->data['posts'] = $this->customQuery->getPosts();

        if(Auth::check()){

            $user = Auth::user();
            $this->data['user'] = $user;
            $this->data['random_order_number'] = count($user->unread_messages()->groupBy('from')->get());

            $this->data['user_notification_count'] = $this->getUserNotificationCount();

            $this->data['global_notification_count'] = $this->getGlobalNotificationCount(); 
        }

        $this->data['session_id'] = Session::getId();

        return view('home.singlepage',$this->data);
    }


    protected function getGameRating($post_id)
    {
        
        $gamePlayers = User_Rating::where('post_id', $post_id)->get();

        $totalRating = 0;

        $data['totalRating'] = 0;
        $data['voters'] = 0;
        if(count($gamePlayers) > 0){

        foreach($gamePlayers as $player){
            $totalRating+= $player->rating;
        }

            $totalRating = $totalRating / count($gamePlayers);

            $data['totalRating'] = $totalRating;
            $data['voters'] = count($gamePlayers);  
        }


        return $data;
    }


    public function single($category,$slug)
    {
        $agent = new Agent();
        // $this->data['is_mobile'] = $agent->isMobile();


        //FOR DEBUGGING
        // $begin = microtime(true);

        if($category == 'nocategory')
        {
            $this->data['post'] = $this->customQuery->getPostNoCat($slug);
        }
        else
        {
            $this->data['post'] = $this->customQuery->getPost($slug,$category);
        }

        if($this->data['post'] == null)
        {
            App::abort(404);
        }

        $this->data['comments'] = Post::find($this->data['post']->id)->post_comments()->with('user', 'post_replies')->get();
        $this->data['session_id'] = Session::getId();
        $this->data['category'] = $category;
        $this->data['slug'] = $slug;

        if(Auth::check())
        {
            $user = Auth::user();
            $this->data['user'] = $user;
            $this->data['random_order_number'] = count($user->unread_messages()->groupBy('from')->get());
            $this->data['user_notification_count'] = $this->getUserNotificationCount();
            $this->data['global_notification_count'] = $this->getGlobalNotificationCount(); 
            $this->data['favorite'] = Auth::user()->game_experiences()->where('post_id', $this->data['post']->id)->where('type', 2)->first();
            $this->data['played_game'] = Auth::user()->game_experiences()->where('post_id', $this->data['post']->id)->where('type', 1)->first();
            $this->data['user_rating'] = Auth::user()->user_rating()->where('post_id', $this->data['post']->id)->first();
            $this->data['gameRating'] = $this->getGameRating($this->data['post']->id);

           /*
            *   ADDING USER ACTIVITIES
            *   AUTHOR: IAN U ROSALES
            *   DATE: 4-28-2016
            *   TYPE 3 STATIC
            *   CONTENT ID FOR PRIZE ID 
            */

            $id = Auth::user()->id;
              $data = DB::table('user_activities')
                    ->select(
                        'user_activities.user_id', 
                        'user_activities.id',
                        'users.email', 
                        'users.id as user_id',
                        'user_activities.type', 
                        'user_activities.content_id',
                        'posts.slug',
                        'prizes.name as prizename',
                        DB::raw('CONCAT(user_details.firstname, " ", user_details.lastname) AS full_name'),
                        'user_details.profile_picture'
                        )
                    ->join('users','user_activities.user_id','=','users.id')
                    ->join('friends', function($join) use ($id){
                        $join->on('friends.user_id', '=', 'user_activities.user_id')->where('friends.friend_id','=', $id)
                        ->orOn('friends.friend_id', '=', 'user_activities.user_id')->where('friends.user_id','=', $id);
                    })
                    ->join('user_details', function($join2) use($id){
                         $join2->on('friends.user_id', '=', 'user_details.user_id')->where('friends.friend_id','=', $id)
                           ->orOn('friends.friend_id', '=', 'user_details.user_id')->where('friends.user_id','=', $id);
                       })
                    ->leftJoin('posts', function($join3){
                        $join3->on('user_activities.content_id', '=', 'posts.id')->where('user_activities.type', '=', 2);
                    })
                    ->leftJoin('prizes', function($join3){
                        $join3->on('user_activities.content_id', '=', 'prizes.id')->where('user_activities.type', '=', 3);
                    })
                    ->get();
           //dd($data);          
           $this->data['user_activities'] = $data;
        
        }

        
        $articleBannerRatio = Config::get('casino');
        $this->data['articleBannerRatio'] = $articleBannerRatio['article_banner_ratio'];
        $this->data['skyScraperBannerRatio'] = $articleBannerRatio['sky_scrapper_banner_ratio'];
        $this->data['random_single_page'] = Post::where('status','1')->orderBy(DB::raw('RAND()'))->first();

        $this->data['random_sidebar_order_number'] = rand(1, 50);

        $this->data['posts_category_id'] = PostCategory::where('post_id',$this->data['post']->id)->first();

        $this->data['widget_ratings'] = WidgetRating::where('post_id',$this->data['post']->id)->first();

        $get_casino_category = PostCategory::where('post_id',$this->data['post']->id)->where('category_id',39)->orWhere('post_id',$this->data['post']->id)->where('category_id',34)->orWhere('post_id',$this->data['post']->id)->where('category_id',43)->first();

        
        $this->data['get_casino_category'] = $get_casino_category != null ? $get_casino_category->category_id : 39;
        $this->data['comment_type'] = 3;
        $this->data['content_id'] = $this->data['post']->id;
        $casino_lists = 
        DB::table('casino_preferences')
        ->join('casino_preference_lists','casino_preference_lists.casino_preference_id','=','casino_preferences.id')
        ->join('casinos','casinos.id','=','casino_preference_lists.casino_id')
        ->select('casinos.name','casinos.image_url','casinos.link_desktop','casinos.link_mobile','casinos.bonus_offer','casinos.reels_image','casinos.claim_image')
        ->where('casino_preferences.category_id',$this->data['get_casino_category'])
        ->take(4)
        ->get();

        $this->data['casino_lists'] = array();
        $this->data['casino_lists2'] = array();

        foreach ($casino_lists as $casino_list) 
        {
            $this->data['casino_lists'][] = '<a href="'.$casino_list->link_desktop.'" target="_blank"><img src="'.url('uploads').'/'.$casino_list->reels_image.'"></a>';
            // $this->data['casino_lists'][] = '<div class="slotwrapper"><div class="details"><a href="'.$casino_list->link_desktop.'" target="_blank"><img src="'.url('uploads').'/'.$casino_list->reels_image.'"></a></div></div>';
            $this->data['casino_lists2'][] = '<li> <a href="'.$casino_list->link_desktop.'" target="_blank"> <img src="http://susanwins.com/uploads/87911_casinobonusribbon.png" class="ribbon" /> <img src="'.url('uploads').'/'.$casino_list->claim_image.'" > </a> </li>';
        }

        $get_yt_image = DB::table('casino_preferences')->where('casino_preferences.category_id',$this->data['get_casino_category'])->first();

        $this->data['yt_image_url'] = $get_yt_image->yt_image_url;
        $this->data['yt_image_link'] = $get_yt_image->yt_image_link;

        $this->data['category_randomizer'] = $this->categoryImageList();
        array_pop($this->data['category_randomizer']);

        // $get_category_id_men = PostCategory::where('post_id',$this->data['post']->id)->orderBy(DB::raw('RAND()'))->first();
        // $this->data['related_posts'] =
        //     DB::table('posts')
        //     ->join('post_categories','post_categories.post_id','=','posts.id')
        //     ->where('posts.status',1)
        //     ->where('posts.id','!=',$this->data['post']->id)
        //     ->where('post_categories.category_id',$get_category_id_men->category_id)
        //     ->select('posts.thumb_feature_image','posts.slug')
        //     ->orderBy(DB::raw('RAND()'))
        //     ->take(10)
        //     ->get();

        
        if($agent->isMobile())
        {
            echo "IS MOBILE";
            echo "<br/>".$agent->device();
        }
        elseif($agent->isTablet())
        {
            return "Tablet here";
        }
        else
        {
            return view('home.single',$this->data); 
        }
        // dd(microtime(true) - $begin);
        // return view('home.single',$this->data);
    }

    public function category($category)
    {
        $check_slug = Category::where('slug','=',$category)->first();

        if($check_slug == null)
        {
            // App::abort(404);
            return $this->single('nocategory',strtolower($category));
        }
        else
        {

            $category_images_array = 
            [
                'tropicaljungle' => 'http://susanwins.com/uploads/40832_tropical.png',
                'vegas' => 'http://susanwins.com/uploads/94591_vegas.png',
                'romance' => 'http://susanwins.com/uploads/65124_romantic.png',
                'television' => 'http://susanwins.com/uploads/29552_television.png',
                'seasonal' => 'http://susanwins.com/uploads/78618_seasonal.png',
                'superheroes' => 'http://susanwins.com/uploads/16974_superhero.png',
                'sorcery' => 'http://susanwins.com/uploads/50933_sorcery.png',
                'sea' => 'http://susanwins.com/uploads/72390_sea.png',
                'relaxingsoothing' => 'http://susanwins.com/uploads/92030_relaxing.png',
                'mysterious' => 'http://susanwins.com/uploads/99370_mysteru.png',
                'myths-legends' => 'http://susanwins.com/uploads/47026_myths.png',
                'party' => 'http://susanwins.com/uploads/40622_party.png',
                'pirates' => 'http://susanwins.com/uploads/46528_pirate.png',
                'movie' => 'http://susanwins.com/uploads/38275_movies.png',
                'cute' => 'http://susanwins.com/uploads/45977_cute.png',
                'egyptian' => 'http://susanwins.com/uploads/85394_egyptian.png',
                'fantasy' => 'http://susanwins.com/uploads/90928_fantasy.png',
                'medieval' => 'http://susanwins.com/uploads/87307_medieval.png',
                'animal' => 'http://susanwins.com/uploads/38371_animal.png',
                'celebs' => 'http://susanwins.com/uploads/90657_celebs.png',
                'classic' => 'http://susanwins.com/uploads/69738_classic.png',
                'comic' => 'http://susanwins.com/uploads/71226_comic.png',
                'adventure' => 'http://susanwins.com/uploads/87246_adventure-header.png',
                'netent' => 'http://susanwins.com/uploads/43121_netent.png',
                'playtech' => 'http://susanwins.com/uploads/54792_playtech.png',
                'sexy' => 'http://susanwins.com/uploads/89166_sexy.png',
                'sports' => 'http://susanwins.com/uploads/43127_sports.png',
                'susans-favourites' => 'http://susanwins.com/uploads/28378_susansfavs.png',
                'food' => 'http://susanwins.com/uploads/28763_food.png',
                'aztec' => 'http://susanwins.com/uploads/43690_aztec.png',
                'girl-power' => 'http://susanwins.com/uploads/79948_girlpower.png',
                'magic' => 'http://susanwins.com/uploads/52112_magic.png',
                'memory-lane' => 'http://susanwins.com/uploads/73931_memory-lane.png',
                'sci-fi' => 'http://susanwins.com/uploads/47918_scifi.png',
                'oldies' => 'http://susanwins.com/uploads/36728_oldies.png',
                'native-american' => 'http://susanwins.com/uploads/20643_nativeamerican.png',
                'microgaming' => 'http://susanwins.com/uploads/27498_microgaming.png',
                'luxuryroyalty' => 'http://susanwins.com/uploads/64831_luxury.png',
                'gladiators' => 'http://susanwins.com/uploads/86764_gladiators.png',
                'football' => 'http://susanwins.com/uploads/29008_football.png',
                'copsthiefs' => 'http://susanwins.com/uploads/18188_cops.png',
                'cartoon-style' => 'http://susanwins.com/uploads/58777_cartoon.png',
                'asian' => 'http://susanwins.com/uploads/80081_asian.png',
                'cowboywestern' => 'http://susanwins.com/uploads/55876_cowboy.png'
            ];


            $this->data['category_randomizer'] = $this->categoryImageList();
            $this->data['category_image'] = $category_images_array[$category];
            $this->data['query_string'] = '';
            $this->data['posts'] = 
                DB::table('posts')
                ->join('post_categories','post_categories.post_id','=','posts.id')
                ->where('post_categories.category_id',$check_slug->id)
                ->where('posts.status',1)
                ->orderBy(DB::raw('RAND()'))
                ->get();
            // $this->customQuery->getPosts(0,$check_slug->id,'','ASC');

            $this->data['current_category_id'] = $check_slug->id;
            $this->data['comment_type'] = 2;
            $this->data['content_id'] = $check_slug->id;
            $this->data['category_name'] = $check_slug->name;
            $this->data['cat_slug'] = $category;
            $this->data['comments'] = $check_slug->category_comments()->with('user', 'category_replies')->get();

            $this->data['top_games'] = $this->getTopGamesCategory($check_slug->id);

             if(Auth::check()){

                $user = Auth::user();
                $this->data['user'] = $user;
                $this->data['random_order_number'] = count($user->unread_messages()->groupBy('from')->get());

                $this->data['user_notification_count'] = $this->getUserNotificationCount();

                $this->data['global_notification_count'] = $this->getGlobalNotificationCount(); 
            }

         $this->data['session_id'] = Session::getId();

            return view('home.singlepage',$this->data);
        }

    }

    public function getTopGamesCategory($id)
    {
        if(count($this->top_games_array) == 8)
        {
            return $this->top_games_array;
        }
        else
        {
            $new_top_games = 8 - count($this->top_games_array);
            $collection_of_top_games = DB::table('posts')
            ->join('widget_ratings','posts.id','=','widget_ratings.post_id')
            ->join('post_categories','posts.id','=','post_categories.post_id')
            ->select(DB::raw('posts.slug,posts.thumb_feature_image,posts.title,( (widget_ratings.music_sounds + widget_ratings.long_term_play + widget_ratings.fun_rate + widget_ratings.graphics) / 40 * 100  ) as total_rating'))
            ->where('posts.status',1)
            ->where('post_categories.category_id',$id)
            ->orderBy(DB::raw('RAND()'))
            ->take($new_top_games)
            ->get();

            foreach ($collection_of_top_games as $collection_of_top_game) 
            {
               $this->top_games_array[] = "<div class='slotwrapper'><div class='details'><a href='".url('/')."/".$collection_of_top_game->slug."'><img src='".url('uploads')."/".$collection_of_top_game->thumb_feature_image."' stlye='width: 100%;'></a></div></div>";
            }

            return  $this->getTopGamesCategory($id);
        }
        
    }

    public function ajaxGetPosts(Request $request)
    {
        $searchField = trim($request->input('searchField'));
        $search_exploded = explode (" ", $searchField); 
        $search_posts = 
        DB::table('posts')
        ->join('widget_ratings','posts.id','=','widget_ratings.post_id')
        ->select(DB::raw('posts.slug,posts.icon_feature_image,posts.title,( (widget_ratings.music_sounds + widget_ratings.long_term_play + widget_ratings.fun_rate + widget_ratings.graphics) / 40 * 100  ) as total_rating'))
        ->where('status',1)
        ->where(function($query) use ($search_exploded,$searchField)
        {
            $x = 1;
    
            foreach($search_exploded as $search_each) 
            {
                if($x==1) {
                    $query->where('posts.title','LIKE','%' . $search_each . '%');
                } else {
                    $query->orWhere('posts.title','LIKE','%' . $search_each . '%');
                }
                $x++;
            }

            // $query->where('posts.title','LIKE','%' . $searchField . '%');
        })
        ->take(10)
        ->get();
        // $search_posts = 
        // DB::table('posts')
        // ->join('widget_ratings','posts.id','=','widget_ratings.post_id')
        // ->select(DB::raw('posts.slug,posts.icon_feature_image,posts.title,( (widget_ratings.music_sounds + widget_ratings.long_term_play + widget_ratings.fun_rate + widget_ratings.graphics) / 40 * 100  ) as total_rating'))
        // ->where('posts.title', 'LIKE', '%' . $request->input('searchField') . '%')
        // ->where('status',1)
        // ->take(10)
        // ->get();

        
        return json_encode($search_posts);
    }

    public function forDebugging()
    {
        $search = 'cherry ball crazy';
        $search_exploded = explode (" ", $search);
        
        $construct = '';
        DB::enableQueryLog();
        $search_posts = 
        DB::table('posts')
        ->join('widget_ratings','posts.id','=','widget_ratings.post_id')
        ->select(DB::raw('posts.slug,posts.icon_feature_image,posts.title,( (widget_ratings.music_sounds + widget_ratings.long_term_play + widget_ratings.fun_rate + widget_ratings.graphics) / 40 * 100  ) as total_rating'))
        // ->where('posts.title', 'LIKE', '%' . $request->input('searchField') . '%')
        ->where('status',1)
        ->where(function($query) use ($search_exploded)
        {
             // $query->where('posts.title','LIKE','%' . $search_each . '%');
            $x = 1;

            foreach($search_exploded as $search_each) 
            {
                if($search_each == '')
                {
                    continue;
                }
                if($x==1) 
                {
                    $query->where('posts.title','LIKE','%' . $search_each . '%');
                } else 
                {
                    $query->orWhere('posts.title','LIKE','%' . $search_each . '%');
                }
                $x++;
            }

            
        })
        ->take(10)
        ->get();



        $query = DB::getQueryLog();
        $lastQuery = end($query);
        print_r($lastQuery);
        dd($search_posts);
// return 'watermelon!!';

    }

    public function ajaxTrackerClick(Request $request)
    {
        // 1 postcontent image
        // 2 yes option 
        // 3 no option
        // 4 casino option 
        // 5 sidebar games
        // 6 related games
        // 7 Article Banner
        // 8 Skyscraper Banner

        $tracker_click = new TrackerClick();
        $tracker_click->post_id = $request->input('post_id');
        $tracker_click->type = $request->input('type');
        $tracker_click->image_url = $request->input('image_url');
        $tracker_click->casino_id = $request->input('casino_id');
        $tracker_click->site_url = $request->input('site_url');
        $tracker_click->save();

        return '1';

    }

    public function ajaxGetFilterPosts(Request $request)
    {
    	//type
    	//ASC or DESC
    	//Category ID

    	$ajax_posts = array();


         $posts = DB::table('posts')
        ->join('widget_ratings','posts.id','=','widget_ratings.post_id')
        ->join('post_categories','posts.id','=','post_categories.post_id')
        ->select(DB::raw('posts.title,posts.slug,posts.thumb_feature_image,( (widget_ratings.music_sounds + widget_ratings.long_term_play + widget_ratings.fun_rate + widget_ratings.graphics) / 40 * 100  ) as total_rating'))
        ->where('posts.status',1)
        ->where('post_categories.category_id',$request->input('category_id'))
        ->orderBy($request->input('type'),$request->input('order_by'))
        ->take(30)
        ->get();


        foreach ($posts as $post) 
        {
        	$ajax_posts[] = '<div class="col-lg-8" style="height: 162px;"><div class="game"><a href="'.url('').'/'.$post->slug.'" class="icon"><img src="'.url('uploads').'/'.$post->thumb_feature_image.'"></a></div></div>';
        }
        
        return json_encode($ajax_posts);
    }

    public function ajaxGetReelsPosts(Request $request)
    {

    	$reel_posts = 
    	DB::table('posts')
    	->select('posts.id','posts.slug','posts.reels_image')
    	->where('status',1)
    	->take(4)
        ->orderBy(DB::raw('RAND('.$request->input('random_order_number').')'))
    	->offset($request->input('page') * 4)
    	->get();

    	return json_encode($reel_posts);

    }

    public function ajaxGetReelsPosts2(Request $request)
    {

        $reel_posts = 
        DB::table('posts')
        ->select('posts.id','posts.slug','posts.reels_image')
        ->where('status',1)
        ->take(3)
        ->offset($request->input('page') * 3)
        ->get();

        return json_encode($reel_posts);

    }



    public function ajaxGetReelPostsCategory(Request $request)
    {
            $reel_posts = DB::table('posts')
            ->join('widget_ratings','posts.id','=','widget_ratings.post_id')
            ->join('post_categories','posts.id','=','post_categories.post_id')
            ->select(DB::raw('posts.slug,posts.thumb_feature_image,posts.title,( (widget_ratings.music_sounds + widget_ratings.long_term_play + widget_ratings.fun_rate + widget_ratings.graphics) / 40 * 100  ) as total_rating'))
            ->where('posts.status',1)
            ->where('post_categories.category_id',$request->input('category_id'))
            ->orderBy(DB::raw('RAND()'))
            ->take(3)
            ->offset($request->input('page') * 3)
            ->get();

            return json_encode($reel_posts);
    }


    public function ajaxGetPage(Request $request)
    {
        if($request->input('current_category_id') == 0)
        {
            $getPage = $this->customQuery->getPosts($request->input('page'));
        }
        elseif($request->input('query_string') != '')
        {
            $getPage = $this->customQuery->getPosts($request->input('page'),null,$request->input('query_string'));
        }
        else
        {
            $getPage = $this->customQuery->getPosts($request->input('page'),$request->input('current_category_id'));
        }
        

        if(!empty($getPage))
        {
            return json_encode($getPage);
        }

        return 'false';

    }

    //AJAX CASINO
    public function ajaxGetCasino(Request $request)
    {
        $casino_lists = 
        DB::table('casino_preferences')
        ->join('casino_preference_lists','casino_preference_lists.casino_preference_id','=','casino_preferences.id')
        ->join('casinos','casinos.id','=','casino_preference_lists.casino_id')
        ->select('casinos.name','casinos.image_url','casinos.link_desktop','casinos.link_mobile','casinos.bonus_offer','casinos.id')
        ->where('casino_preferences.category_id',$request->input('category_id'))
        ->get();

        return json_encode($casino_lists);
    }

    public function ajaxGetArticleBanner(Request $request)
    {
        $no_of_banner = 1;

        if($request->input('total_image') > $request->input('articleBannerRatio'))
        {
            $no_of_banner = floor($request->input('total_image') / $request->input('articleBannerRatio'));
        }
        

        $artcleBanner = $this->getArticleBanners($request->input('banner_type'),$no_of_banner);

        return json_encode($artcleBanner);
    }

    public function getArticleBanners($banner_type,$no_of_banner)
    {

        if(count($this->article_banners_array) == $no_of_banner)
        {
            return $this->article_banners_array;
        }
        else
        {
            $new_banners_to_get = $no_of_banner - count($this->article_banners_array);
            $collection_of_banners = CasinoBanner::where('banner_type',$banner_type)->where('show_banner',1)->orderBy(DB::raw('RAND()'))->take($new_banners_to_get)->get();

            foreach ($collection_of_banners as $collection_of_banner) 
            {
               $this->article_banners_array[] = "<p><a href='".$collection_of_banner->image_link."' track-action='56ddbe3996ada' class='get_me_article_banner' get-this-id='".$collection_of_banner->id."'><div class='questionMarkHover hint--top hint--bounce hint--rounded' data-hint='Click to know more'> ? </div><img class='not_count' src='".url('uploads')."/" .$collection_of_banner->image_url. "' style='width:100%;'></a></p>" ;
            
            }

            return  $this->getArticleBanners($banner_type,$no_of_banner);
        }

    }

    
    public function signup(){

        if(Auth::check()){
            return redirect('clubhouse/home');
        }

        return view('clubhouse.signup');

    }

    public function login(){

        if(Auth::check()){
            return redirect('clubhouse/home');
        }

        $session_id = Session::getId();

        return view('clubhouse.login', compact('session_id'));
    }
}
