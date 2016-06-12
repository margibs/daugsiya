<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Session;
use App\User_Detail;
use Input;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/admin';
    protected $loginPath = '/login';
    
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    protected function signupValidator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'custom_Password' => 'required|min:6',
            'name_(awf_first)' => 'required|min:2',
            'name_(awf_last)' => 'required|min:2',
        ]);
        /*return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
        ]);*/
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    public function signup(Request $request){

        $validator = $this->signupValidator($request->all());

        if ($validator->fails()) {

            return redirect('signup')->withErrors($validator)
                        ->withInput();
        } 

        //dd($request->Input('custom_Password'));
        //dd($request->all());
        $data = [
                'password' => $request->Input('custom_Password'),
                'email' => $request->Input('email'),
                'firstname' =>  $request->Input('name_(awf_first)'),
                'lastname' =>  $request->Input('name_(awf_last)')
            ];

      /*  $data = [
                'password' => $request->Input('password'),
                'email' => $request->Input('email'),
                'firstname' =>  $request->Input('firstname'),
                'lastname' =>  $request->Input('lastname')
            ];*/



      Auth::login($this->create($data));

       /*$user_detail = new User_Detail();
        $user_detail->firstname = $request->firstname;
        $user_detail->lastname = $request->lastname;*/

        $user_detail = new User_Detail();
        $user_detail->firstname = $request->Input('name_(awf_first)');
        $user_detail->lastname = $request->Input('name_(awf_last)');

        $user = Auth::user();
 
       $user->user_detail()->save($user_detail);
     
     
       return redirect('clubhouse/home');
        //return redirect('https://www.aweber.com/scripts/addlead.pl');

    }

    public function userSignup(Request $request) {

        $validator = $this->signupValidator($request->all());

        if ($validator->fails()) {

           /* return redirect('signup')->withErrors($validator)
                        ->withInput();*/

                         return json_encode($validator);
        }


        $data = [
                'password' => $request->Input('password'),
                'email' => $request->Input('email'),
                'firstname' =>  $request->Input('firstname'),
                'lastname' =>  $request->Input('lastname')
            ];

      Auth::login($this->create($data)); 

        $user_detail = new User_Detail();
        $user_detail->firstname = $request->Input('firstname');
        $user_detail->lastname = $request->Input('lastname');

        $user = Auth::user();
 
       $user->user_detail()->save($user_detail);
     
    
      $data = [
        'error' => false,
        'status' => 200,
        'data' => $user,
      ];
      return json_encode($data);

       /*return redirect('clubhouse/home');*/
    }

}
