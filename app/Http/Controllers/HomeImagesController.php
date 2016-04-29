<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\HomeImage;


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
                                            "<a href='".url("admin/homeads")."/".$home_image->id."' >View</a>
                                            <a href='".url("admin/edit/homeads")."/".$home_image->id."' >Edit</a>
                                            <a href='".url("admin/delete/imageDelete")."/".$home_image->id."' >Delete</a>
                                            ";
                                        })
                ->editColumn('created_at', '{!! $created_at->diffForHumans() !!}')
                ->editColumn('updated_at', '{!! $created_at->diffForHumans() !!}')
                ->make(true);
    }

}