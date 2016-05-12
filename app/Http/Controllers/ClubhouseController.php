<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

use App\Global_Notification;
use App\Model\Post;
use Session;
use App\Friend;

class ClubhouseController extends Controller
{

	protected $redirectPath = '/clubhouse/home';
	protected $loginPath = '/login';
    protected $old_session_id;
	 use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    protected function authenticated(Request $request, $user){

      /*  $url = url('').':8891/user_login';

        $nodeData['session_id'] = $this->old_session_id;
        $nodeData['user_id'] = $user->id;

        $data_string = json_encode($nodeData);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data_string))                                                                       
        );                                                                                                                   
                                                                                                                             
        $result = curl_exec($ch);

        Session::setId($this->old_session_id);

        $user_session = new User_Session();
        $user_session->user_id = $user->id;
        $user_session->session_id = $this->old_session_id;

        $user_session->save();

        Session::start();*/
        Session::setId($this->old_session_id);
        Session::start(); 

        $url = url('').':8891/user_login';

        $nodeData['user_id'] = $user->id;
        $nodeData['session_id'] = $this->old_session_id;
        $data_string = json_encode($nodeData);

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
            'Content-Type: application/json',                                                                                
            'Content-Length: ' . strlen($data_string))                                                                       
        );                                                                                                                   

        $result = curl_exec($ch);
        curl_close($ch);

        return redirect($this->redirectPath);


    }

	public function postLogin(Request $request)
    
    {
        $this->old_session_id = Session::getId();
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);

        if (Auth::attempt($credentials, $request->has('remember'))) {

        Session::put('user', Auth::user());   

            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }


        $redirectTo = $request->redirect;


         return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
       
    }


    public function getLogout(Request $request){

        if(Auth::check())
        {
            $redirect = $request->input('redirect') ? $request->input('redirect') : '/';
            $url = url('').':8891/user_logout';

            $user_id = Auth::user()->id;

            $nodeData['user_id'] =$user_id;
            $data_string = json_encode($nodeData);
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                'Content-Type: application/json',                                                                                
                'Content-Length: ' . strlen($data_string))                                                                       
            );                                                                                                                   
                                                                                                                                 
            $result = curl_exec($ch);
            curl_close($ch);
            /*$url = url('').':8891/user_logout';

            $user_id = Auth::user()->id;

            $nodeData['session_id'] = Session::getId();
            $nodeData['user_id'] =$user_id;

            $user_session = User_Session::where('user_id', $user_id)->where('session_id', $nodeData['session_id'])->first();
            if($user_session){
                $user_session->forceDelete();
            }

            $remaining_sessions = User_Session::where('user_id', $user_id)->count();
            $nodeData['remaining_sessions'] = $remaining_sessions;
            $data_string = json_encode($nodeData);

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
                'Content-Type: application/json',                                                                                
                'Content-Length: ' . strlen($data_string))                                                                       
            );                                                                                                                   
                                                                                                                                 
            $result = curl_exec($ch);
            
*/
            Auth::logout();
        }

        return redirect('/');

    }


    protected function getGlobalNotificationCount(){

        $user_id = Auth::user()->id;

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

    protected function getUserNotificationCount(){

        $user = Auth::user();

        $unread_friend_requests = $user->accepted_friends()->where('confirmed', 0)->where('read', 0)->count();
       $unread_user_notifications = $user->user_notifications()->where('read', 0)->count();

        return $unread_user_notifications+$unread_friend_requests;
    }
    
    public function home(){

        $user = User::with('user_detail')->find(Auth::user()->id);

        $user_notification_count = $this->getUserNotificationCount();

            $unread_messages_count = count($user->unread_messages()->groupBy('from')->get());

            $global_notification_count = $this->getGlobalNotificationCount();

            $session_id = Session::getId();

            $myFriends = Friend::myFriends();

        return view('clubhouse.home', compact('user', 'unread_messages_count', 'user_notification_count', 'global_notification_count', 'session_id', 'myFriends'));
    }

    public function slot()
    {
        $user = User::with('user_detail')->find(Auth::user()->id);

        $user_notification_count = $this->getUserNotificationCount();

        $unread_messages_count = count($user->unread_messages()->groupBy('from')->get());

        $global_notification_count = $this->getGlobalNotificationCount();

        $posts = Post::select('slug', 'thumb_feature_image')->where('status',1)->orderBy('posts.id','ASC')->get();

        $session_id = Session::getId();

        $myFriends = Friend::myFriends();

        return view('clubhouse.slot', compact('user', 'unread_messages_count', 'user_notification_count', 'global_notification_count','posts', 'session_id', 'myFriends'));
    }

    public function prize()
    {
        $user = User::with('user_detail')->find(Auth::user()->id);

        $user_notification_count = $this->getUserNotificationCount();

        $unread_messages_count = count($user->unread_messages()->groupBy('from')->get());

        $global_notification_count = $this->getGlobalNotificationCount();

        $session_id = Session::getId();

        $myFriends = Friend::myFriends();
        
        return view('clubhouse.prize', compact('user', 'unread_messages_count', 'user_notification_count', 'global_notification_count', 'session_id', 'myFriends'));
    }

}
