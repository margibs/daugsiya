<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Friend;
use App\User_Notification;

class FriendController extends Controller
{
    

    public function addFriend(Request $request){

        $friend = Friend::firstOrCreate([ 'user_id'=> $request->user_id, 'friend_id' => $request->friend_id ]);

        echo json_encode($friend);
    }

    public function cancelFriendRequest(Request $request){
        $friend = Friend::findOrFail($request->id);

        echo json_encode($friend->forceDelete());
    }


    public function acceptFriendRequest(Request $request){

        $friend = Friend::find($request->id);

        $accepted = false;

        if($friend->confirmed != 1){
           $friend->confirmed = 1; 
           $friend->save();
           $accepted = true;

           $un = new User_Notification();
           $un->user_id = $friend->friend_id;
           $un->friend_id = $friend->user_id;
           $un->type = 1;

           $un->save();

        }
        

        echo json_encode( $accepted );
    }


    public function unFriend(Request $request){

        $friend = Friend::findOrFail($request->id);

        echo json_encode($friend->forceDelete());
    }

}
