<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use AWeberAPI;

class AweberApiSusan extends Controller
{
    public $consumerKey;
    public $consumerSecret;
    public $accessToken;
    public $accessSecret;
    public $appID;
    public $authorize_url;
    public $callbackURL;
    public $application;
    public $account;
    public $list;
    public $tokenSecret;
    public $requestToken;
    public $accessKey;
  


    public function __construct() {
        $this->consumerKey = 'Ak9V4ZZ4OCGavgygp54H9055';
        $this->consumerSecret = 'xlKjAbONuqfapGvDpBFD9QGYMp70moCLevR6P7ht';
        $this->accessToken = '';
        $this->accessSecret = '';
        $this->appID = '0701ff65';
        $this->authorize_url = 'https://auth.aweber.com/1.0/oauth/authorize_app/AzdAma10ItQha1ARNt24gVvh|noDQhh0mu75Axr1ZYNVeKzzmqRPcBGVJ84srPsLs|AqZN5RN4TOBMjWiq3R26bxPH|AB0f6clqt5F6OyOjl40tPmBkKd3u38nqokSesTmj|djga6r|';
        $this->callbackURL='http://susanwins.com';

        $this->application = new AWeberAPI($this->consumerKey, $this->consumerSecret);
        // get a request token
        list($key, $secret) = $this->application->getRequestToken($this->callbackURL);
        
        // get the authorization URL
        $authorizationURL = $this->application->getAuthorizeUrl();


        $auth = AWeberAPI::getDataFromAweberID($authorizationURL);
        dd($auth);

        // store the request token secret
        setcookie('secret', $secret);

        try
        {

            $account = $this->application->getAccount($this->consumerKey, $this->consumerSecret);
            $account_id = $account->id;
            dd("Hello");
        }
        catch(AWeberAPIException $exc) {
            dd($exc);

        }
        dd("Hello");

    }

    public function connectToAWeberAccount() {
   

    }
}
