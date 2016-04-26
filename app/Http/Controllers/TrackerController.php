<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\TrackerClick;
use App\Model\TrackerVisit;
use App\Model\Post;

use DB;


class TrackerController extends Controller
{
    public function index()
    {

        //Tracker Visit
        //Type 1 homepage
        //Type 2 category
        //Type 3 post

        $posts = 
        DB::table('tracker_visits')
        ->join('posts','posts.id','=','tracker_visits.link_id')
        ->where('type',3)
        ->select(DB::raw('posts.id,posts.slug,COUNT(posts.id) as counter'))
        ->groupBy('posts.id')
        ->get();


        $categories =
        DB::table('tracker_visits')
        ->join('categories','categories.id','=','tracker_visits.link_id')
        ->where('type',2)
        ->select(DB::raw('categories.slug,COUNT(categories.id) as counter'))
        ->groupBy('categories.id')
        ->get();

        $homepage = TrackerVisit::where('type',1)->count();

        return view('tracker.tracker',compact(['posts','categories','homepage']));
    }

    public function single_details($id)
    {
        $post = Post::find($id);

        if($post == null)
        {
            App::abort(404);
        }

    // 1 postcontent image
    // 2 yes option 
    // 3 no option
    // 4 casino option 
    // 5 sidebar games
    // 6 related games
    // 7 Article Banner
    // 8 Skyscraper Banner

        $post_contents = 
        DB::table('tracker_clicks')
        ->where('post_id',$post->id)
        ->where('type',1)
        ->select(DB::raw('image_url,COUNT(image_url) as counter'))
        ->groupBy('image_url')
        ->get();

        $yes_options = 
        DB::table('tracker_clicks')
        ->where('post_id',$post->id)
        ->where('type',2)
        ->select(DB::raw('COUNT(id) as counter'))
        ->get();

        $no_options = 
        DB::table('tracker_clicks')
        ->where('post_id',$post->id)
        ->where('type',3)
        ->select(DB::raw('COUNT(id) as counter'))
        ->get();

        $casino_options = 
        DB::table('tracker_clicks')
        ->join('casinos','casinos.id','=','tracker_clicks.casino_id')
        ->where('tracker_clicks.post_id',$post->id)
        ->where('tracker_clicks.type',4)
        ->select(DB::raw('casinos.name,COUNT(casinos.id) as counter'))
        ->groupBy('casinos.id')
        ->get();

        $sidebar_games = 
        DB::table('tracker_clicks')
        ->where('tracker_clicks.post_id',$post->id)
        ->where('type',5)
        ->select(DB::raw('site_url,COUNT(site_url) as counter'))
        ->groupBy('site_url')
        ->get();

        $related_games = 
        DB::table('tracker_clicks')
        ->where('tracker_clicks.post_id',$post->id)
        ->where('type',6)
        ->select(DB::raw('site_url,COUNT(site_url) as counter'))
        ->groupBy('site_url')
        ->get();
        
        $article_banners = 
        DB::table('tracker_clicks')
        ->join('casino_banners','casino_banners.id','=','tracker_clicks.casino_id')
        ->where('post_id',$post->id)
        ->where('type',7)
        ->select(DB::raw('casino_banners.image_url,COUNT(casino_banners.id) as counter'))
        ->get();


        $skyscraper_banners = 
        DB::table('tracker_clicks')
        ->join('casino_banners','casino_banners.id','=','tracker_clicks.casino_id')
        ->where('post_id',$post->id)
        ->where('type',8)
        ->select(DB::raw('casino_banners.image_url,COUNT(casino_banners.id) as counter'))
        ->get();



        return view('tracker.singleDetails',compact(['post','post_contents','yes_options','no_options','casino_options','sidebar_games','related_games','article_banners','skyscraper_banners']));
    }
}
