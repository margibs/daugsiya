<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\HomeImage;
use App\Model\CasinoBanner;
use App\Autopost;
use DB;
use App\Model\Comment;



class HomeImagesController extends Controller
{
   
    /*
    *   FUNCTION FOR DATA TABLE
    *   AUTHOR: IAN ROSALES
    *   DATE: 4-28-2016
    */

    public function getIndex() 
    {
        return view('admin.user');
    }

    public function anyData() 
    {
        $home_image = HomeImage::select(['id', 'image', 'link', 'redirect_link', 'show_add', 'position', 'created_at', 'updated_at'])
                                ->where('is_boolean', '=', 0)
                                ->get();
        return Datatables::of($home_image)
                 ->addColumn('action', function ($home_image) {
                                            return 
                                            "<a href='".url("admin/homeads/edit")."/".$home_image->id."' >Edit</a>
                                            <a href='".url("admin/homeads/delete/imageDelete")."/".$home_image->id."' >Delete</a>
                                            ";
                                        })
                ->editColumn('created_at', '{!! $created_at->diffForHumans() !!}')
                ->editColumn('updated_at', '{!! $created_at->diffForHumans() !!}')
                ->make(true);
    }

    public function trashedData() 
    {
        $home_image = HomeImage::select(['id', 'image', 'link', 'position', 'created_at', 'updated_at'])->onlyTrashed()->get();
        return Datatables::of($home_image)
                 ->addColumn('action', function ($home_image) {
                                            return 
                                            "<a href='".url("admin/homeads/undo")."/".$home_image->id."' >Undo</a>
                                            ";
                                        })
                ->editColumn('created_at', '{!! $created_at->diffForHumans() !!}')
                ->editColumn('updated_at', '{!! $created_at->diffForHumans() !!}')
                ->make(true);
    }

    public function anyDataCasino() 
    {
        $home_image = HomeImage::select(['id', 'image', 'link', 'position', 'created_at', 'updated_at'])->get();
        return Datatables::of($home_image)
                 ->addColumn('action', function ($home_image) {
                                            return 
                                            "<a href='".url("admin/homeads/edit")."/".$home_image->id."?redirect=admin/dynamic/link' >Edit</a>
                                            <a href='".url("admin/homeads /delete/imageDelete")."/".$home_image->id."?redirect=admin/dynamic/link' >Delete</a>
                                            ";
                                        })
                ->editColumn('created_at', '{!! $created_at->diffForHumans() !!}')
                ->editColumn('updated_at', '{!! $created_at->diffForHumans() !!}')
                ->make(true);
    }

    
    public function skypscrapperGet()
    {
       $casino_banners = CasinoBanner::select('casino_banners')
                    ->select(
                        'casino_banners.id', 
                        'casino_banners.image_url', 
                        'casino_banners.image_link',
                        'casino_banners.banner_description',
                        'casino_banners.show_banner',
                        'casino_banners.banner_type',
                        'casino_banners.created_at', 
                        'casino_banners.updated_at'
                        )
                    ->where('casino_banners.banner_type', '=', 2)
                    ->where('casino_banners.show_banner', '=', 1)
                    ->get();
        return Datatables::of($casino_banners)
               ->addColumn('action', function ($casino_banners) {
                                                return 
                                                "
                                                <a href='".url("admin/skyscraper_banner")."/".$casino_banners->id."?redirect=admin/dynamic/link' >Edit</a>
                                                ";
                                            })
                ->editColumn('created_at', '{!! $created_at->diffForHumans() !!}')
                ->editColumn('updated_at', '{!! $created_at->diffForHumans() !!}')
                ->make(true);
    }

   

    public function articleGet()
    {
         $casino_banners = CasinoBanner::select('casino_banners')
                    ->select(
                        'casino_banners.id', 
                        'casino_banners.image_url', 
                        'casino_banners.image_link',
                        'casino_banners.banner_description',
                        'casino_banners.show_banner',
                        'casino_banners.banner_type',
                        'casino_banners.created_at', 
                        'casino_banners.updated_at'
                        )
                    ->where('casino_banners.banner_type', '=', 1)
                    ->where('casino_banners.show_banner', '=', 1)
                    ->get();
        return Datatables::of($casino_banners)
               ->addColumn('action', function ($casino_banners) {
                                                return 
                                                "<a href='".url("admin/article_banner")."/".$casino_banners->id."?redirect=admin/dynamic/link' >Edit</a>
                                                ";
                                            })
                ->editColumn('created_at', '{!! $created_at->diffForHumans() !!}')
                ->editColumn('updated_at', '{!! $created_at->diffForHumans() !!}')
                ->make(true);
    }

    public function get_mobile_adds() {

         $home_image = HomeImage::select(['id', 'image', 'link', 'redirect_link', 'show_add', 'position', 'created_at', 'updated_at'])
                                ->where('is_boolean', '=', 1)
                                ->get();
        return Datatables::of($home_image)
                 ->addColumn('action', function ($home_image) {
                                            return 
                                            "<a href='".url("admin/homeads/edit")."/".$home_image->id."' >Edit</a>
                                            <a href='".url("admin/homeads/delete/imageDelete")."/".$home_image->id."' >Delete</a>
                                            ";
                                        })
                ->editColumn('created_at', '{!! $created_at->diffForHumans() !!}')
                ->editColumn('updated_at', '{!! $created_at->diffForHumans() !!}')
                ->make(true);
    }

    //DATA TABLE FOR AUTOPOST
    public function getAllJson() {
         $autoposts = Autopost::select(['id', 'description', 'fb', 'twitter', 'pinterest', 'instagram', 'date_posting'])->get();
      /*  $autoposts = DB::table('autoposts')
                        select(['id', 'description', 'fb', 'twitter', 'pinterest', 'instagram', 'date_posting'])
                        ->get();;*/
         return Datatables::of($autoposts)
                              ->addColumn('action', function ($autoposts) {
                                            return 
                                            "<a href='".url("admin/homeads/edit")."/".$autoposts->id."' >Edit</a>
                                            <a href='".url("admin/homeads/delete/imageDelete")."/".$autoposts->id."' >Delete</a>
                                            ";
                                        })
                              ->editColumn('fb', function($autoposts){
                                 return (($autoposts->fb == 1) ? '<span style="color:yellow;">Not Posted</span>'  : 
                                        (($autoposts->fb == 2) ? '<span style="color:red;">ERROR POSTING</span>' :
                                        '<span style="color:green;">POSTED</span>'));
                              })
                              ->editColumn('twitter', function($autoposts){
                                 return (($autoposts->twitter == 1) ? '<span style="color:yellow;">Not Posted</span>'  : 
                                        (($autoposts->twitter == 2) ? '<span style="color:red;">ERROR POSTING</span>' :
                                        '<span style="color:green;">POSTED</span>'));
                              })
                               ->editColumn('pinterest', function($autoposts){
                                 return (($autoposts->pinterest == 1) ? '<span style="color:yellow;">Not Posted</span>'  : 
                                        (($autoposts->pinterest == 2) ? '<span style="color:red;">ERROR POSTING</span>' :
                                        '<span style="color:green;">POSTED</span>'));
                              })
                              ->editColumn('instagram', function($autoposts){
                                 return (($autoposts->instagram == 1) ? '<span style="color:yellow;">Not Posted</span>'  : 
                                        (($autoposts->instagram == 2) ? '<span style="color:red;">ERROR POSTING</span>' :
                                        '<span style="color:green;">POSTED</span>'));
                              })
                              ->make(true);
    }

    public function getAllComments() {


        $comments = Comment::join('users','comments.user_id','=','users.id')
                            ->join('posts','comments.content_id','=','posts.id')
                            ->select(['users.name','comments.content','comments.created_at','comments.approved','posts.slug','posts.id'])
                            ->where('comments.type',3)->get();

        return Datatables::of($comments)
                            ->addColumn('action', function ($comments) {
                                        return 
                                        "<a href='".url("admin/editComment/")."/".$comments->id."' ><i class='fa fa-pencil'></i></a>
                                        <a href='".url("admin/homeads/delete/imageDelete")."/".$comments->id."' ><i class='icon-trash'></i></a>
                                        ";
                                    })
                            ->editColumn('approved', function($comments) {
                                return $comments->approved ==  0 ? '<a href=""><i class="icon-thumbs-down"></i></a>' : '<a href="" style="color:green;"><i class="icon-thumbs-up"></i></a>';
                            })
                            ->make(true);

    }

    public function getAllCommentsPending() {

        $comments = Comment::join('users','comments.user_id','=','users.id')
                            ->join('posts','comments.content_id','=','posts.id')
                            ->select(['users.name','comments.content','comments.created_at','comments.approved','posts.slug','posts.id'])
                            ->where('comments.type',3)
                            ->where('approved', 0)
                            ->get();

        return Datatables::of($comments)
                            ->addColumn('action', function ($comments) {
                                        return 
                                        "<a href='".url("admin/editComment/")."/".$comments->id."' ><i class='fa fa-pencil'></i></a>
                                        <a href='".url("admin/homeads/delete/imageDelete")."/".$comments->id."' ><i class='icon-trash'></i></a>
                                        ";
                                       /* <a href="{{ url('/') }}/{{ $comment->slug }}" traget="_blank" style="font-size: 13px;">{{ url('/') }}/{{ $comment->slug }}</a> </td>
                                            <td style="text-align: center;"><a href="#"><i class="icon-trash"></i></a></td>*/
                                    })
                            ->editColumn('approved', function($comments) {
                                return $comments->approved ==  0 ? '<a href=""><i class="icon-thumbs-down"></i></a>' : '<a href="" style="color:green;"><i class="icon-thumbs-up"></i></a>';
                            })
                            ->make(true);

    }
}