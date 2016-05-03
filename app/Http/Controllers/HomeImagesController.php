<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\HomeImage;
use App\Model\CasinoBanner;


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
        $home_image = HomeImage::select(['id', 'image', 'link', 'position', 'created_at', 'updated_at'])->get();
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

}