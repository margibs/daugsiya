<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Comment as Comment;
use App\User;
use Illuminate\Support\Facades\Auth as Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addComment(Request $request)
    {
        //

        $comment = new Comment();
        $comment->content_id = $request->content_id;
        $comment->user_id = $request->user_id;
        $comment->content = $request->content;
        $comment->type = $request->type;
        
        
        if($comment->save()){

            $request['id'] = $comment->id;

            $request['user'] = User::with('user_detail')->find($request->user_id);

            return json_encode($request->all());
        }

    }

        public function addReply(Request $request)
    {

        $comment = new Comment();
        $comment->content_id = $request->content_id;
        $comment->user_id = $request->user_id;
        $comment->content = $request->content;
        $comment->parent = $request->parent;
        $comment->type = $request->type;
        
        if($comment->save()){

              $request['id'] = $comment->id;

            return json_encode($request->all());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        echo 'hey';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
