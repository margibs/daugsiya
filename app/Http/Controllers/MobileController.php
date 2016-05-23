<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App;
use DB;
use Auth;
use Config;

use App\Model\Post;
use App\Model\PostCategory;
use App\PluginModel\WidgetRating;
use App\Game_Experience;
use App\User_Rating;

use App\Friend;

use App\CustomQuery;
use App\CommonFunctions;
use App\Model\Category;
use App\Global_Notification;

use Session;

class MobileController extends Controller
{

	public $data = array();
      private $customQuery;
	 private $top_games_array = array();



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

	    public function categoryImageList($num = 0)
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

            '<li><a href="http://susanwins.com/copsthiefs"><img src="http://susanwins.com/uploads/cops_cat2.png"></a></li>',
            '<li><a href="http://susanwins.com/food"><img src="http://susanwins.com/uploads/90975_food.png"></a></li>',
            '<li><a href="http://susanwins.com/girl-power"><img src="http://susanwins.com/uploads/71220_girlpower.png"></a></li>',
            '<li><a href="http://susanwins.com/sports"><img src="http://susanwins.com/uploads/18251_sports.png "></a></li>',
            '<li><a href="http://susanwins.com/magic"><img src="http://susanwins.com/uploads/55816_magic.png"></a></li>',

            '<li><a href="http://susanwins.com/sexy"><img src="http://susanwins.com/uploads/sexy_cat.png"></a></li>',
        );


        shuffle($categories);



        return $num > 0 ? array_slice($categories, 0, $num) : $categories;
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

    public function getNotificationCounts(){

    	if(Auth::check()){

            $user = Auth::user();
            $this->data['user'] = $user;
            $this->data['random_order_number'] = count($user->unread_messages()->groupBy('from')->get());

            $this->data['user_notification_count'] = $this->getUserNotificationCount();

            $this->data['global_notification_count'] = $this->getGlobalNotificationCount(); 
            $this->data['myFriends'] = Friend::myFriends();
        }
    }


	public function home(){

		 $this->data['posts'] = 
        DB::table('posts')
        ->join('post_categories','post_categories.post_id','=','posts.id')
        ->where('post_categories.category_id',20)
        ->where('posts.status',1)
        ->orderBy(DB::raw('RAND()'))
        ->take(10)
        ->get();

        $this->getNotificationCounts();

         $this->data['category_randomizer'] = $this->categoryImageList(15);
         //dd($this->data);
		return view('home.homepage', $this->data);
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
            ->select(DB::raw('posts.slug,posts.reels_image,posts.title,( (widget_ratings.music_sounds + widget_ratings.long_term_play + widget_ratings.fun_rate + widget_ratings.graphics) / 40 * 100  ) as total_rating'))
            ->where('posts.status',1)
            ->where('post_categories.category_id',$id)
            ->orderBy('total_rating')
            ->take($new_top_games)
            ->get();

            foreach ($collection_of_top_games as $collection_of_top_game) 
            {
               // $this->top_games_array[] = "<div class='slotwrapper'><div class='details'><a href='".url('/')."/".$collection_of_top_game->slug."'><img src='".url('uploads')."/".$collection_of_top_game->thumb_feature_image."' stlye='width: 100%;'></a></div></div>";

                // $this->top_games_array[] = "<div class='text-center'><img src='".url('/')."/".$collection_of_top_game->slug."'><img src='".url('uploads')."/".$collection_of_top_game->thumb_feature_image."'></div>";
                $this->top_games_array[] = "<div class='text-center'><img src='http://susanwins.com/uploads/".$collection_of_top_game->reels_image."'></div>";
            }

            return  $this->getTopGamesCategory($id);
        }
        
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

            $this->getNotificationCounts();

            /*dd($this->data);*/

             $this->data['session_id'] = Session::getId();

            return view('home.singlepage',$this->data);

        }

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


    public function single($category,$slug){


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

        $this->data['widget_ratings'] = WidgetRating::where('post_id',$this->data['post']->id)->first();

        $this->data['comments'] = $this->data['post']->post_comments()->with('user', 'post_replies')->get();

        $this->data['session_id'] = Session::getId();
        $this->data['category'] = $category;
        $this->data['slug'] = $slug;

        $this->data['comment_type'] = 3;
        $this->data['content_id'] = $this->data['post']->id;


         $articleBannerRatio = Config::get('casino');
        $this->data['articleBannerRatio'] = $articleBannerRatio['article_banner_ratio'];

         $get_casino_category = PostCategory::where('post_id',$this->data['post']->id)->where('category_id',39)->orWhere('post_id',$this->data['post']->id)->where('category_id',34)->orWhere('post_id',$this->data['post']->id)->where('category_id',43)->first();

         $this->data['get_casino_category'] = $get_casino_category != null ? $get_casino_category->category_id : 39;
        
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

        $this->getNotificationCounts();

        if(isset($this->data['user'])){

            $user = $this->data['user'];

            $this->data['favorite'] = $user->game_experiences()->where('post_id', $this->data['post']->id)->where('type', 2)->first();
            $this->data['played_game'] = $user->game_experiences()->where('post_id', $this->data['post']->id)->where('type', 1)->first();
            $this->data['user_rating'] = $user->user_rating()->where('post_id', $this->data['post']->id)->first();
            $this->data['gameRating'] = $this->getGameRating($this->data['post']->id);
        }

    	 return view('home.single', $this->data);
    }
}