<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use File;

use Facebook\Facebook;
use Thujohn\Twitter\Facades\Twitter;
use Intervention\Image\Facades\Image;
use DirkGroenen\Pinterest\Pinterest;
use App\CustomClass\Instagram\Instagram;

use App\Model\Post;
use App\Autopost;

use DateTime;
use DateTimeZone;

class AutoPostController extends Controller
{

    public function __construct()
    {
        // date_default_timezone_set("Europe/London");
    }

    public function testTime()
    {
        $current_time = new DateTime();

        dd($current_time->format('Y-m-d H:i:s'));
    }

    public function runFacebookPost()
    {
    	$current_time = new DateTime();
        $autoposts = Autopost::where('date_posting','<=', $current_time)->where('autopost_executed', 0)->get();

        foreach($autoposts as $a)
        {

        	$description = $a->description;
            $custom_image = $a->custom_image;
            $image_url = "http://susanwins.com/uploads/".$a->custom_image;
            $fb_image_url = "http://susanwins.com/uploads/".$a->custom_image;
            $link = 'http://susanwins.com';
            $title = '';
            $caption = 'susanwins.com';
            $twitter_image = 'uploads/'.$a->custom_image;

            if($a->post_id != 0)
            {
              $post = Post::find($a->post_id);
              $link = 'http://susanwins.com/'.$post->slug;
              $title = $post->title;
              $caption = 'susanwins.com';
              $twitter_image = 'uploads/'.$post->thumb_feature_image;
              $image_url = "http://susanwins.com/uploads/".$post->thumb_feature_image;
              $fb_image_url = "http://susanwins.com/uploads/".$post->thumb_feature_image;
            }
            else
            {
                if($a->video_link != '')
                {
                    $link = $a->video_link;
                    $fb_image_url = '';
                }
                elseif($a->link != '')
                {
                    $link = $a->link;
                }
            }



            if($a->fb == 1)
            {
            	$a->fb = 2;
                $a->save();
                
                $linkData = [
                    "message" => $a->description,
                    "link" => $link,
                    "picture" => $fb_image_url,
                    "name" => $title,
                    "caption" => $caption,
                    "description" => $description
                ];

                $config = array();
                $config['app_id'] = '1124598687604895';
                $config['app_secret'] = '22e86ecb2f45e8ac7a8150be55770a0e';
                $config['default_graph_version'] = 'v2.5';
                // $config['fileUpload'] = false; // optional
                 
                $fb = new Facebook($config);
                
                try {
                  // Returns a `Facebook\FacebookResponse` object
                  //716294001804336 new alllad
                  $response = $fb->post('/1558139581098202/feed', $linkData, 'EAAPZB0QlKIJ8BAKWXOwHmR80DtCkazPAZAltvBPCI6ughsZAZAIr9nOKhlIxCjyQ96xpPNcVPyVpbYFLlHC9RbmsCENVyZAIIEokUW5LwXXM7wgjPZATRyIN8PZA3OxJCf6L2fCfscELMJfnqd6EX7O4gmZBVW5ONcEPrPTeECTu76uT7ColGdqJ');

                // $response = $fb->get('/me', 'CAACEdEose0cBAGrZAyAJeuq9Y4W53qQyvNcvejexYCrQuemkgkBZB5wHl9AZAS2xNji79UgEVPHEniEBBeJ0OqvYm9DTVe10ZClxXDUx8H7sdggNCT4xVa31xm6d1ZAdbTciO50BF7jxvNRYAyldfZAFUORifVXSySrnpFubZCncrkSzbh7GzNbclPojJqARtOfjKRyvmNywQZDZD');

                } catch(Facebook\Exceptions\FacebookResponseException $e) {
                  echo 'Graph returned an error: ' . $e->getMessage();
                  exit;
                } catch(Facebook\Exceptions\FacebookSDKException $e) {
                  echo 'Facebook SDK returned an error: ' . $e->getMessage();
                  exit;
                }

                $a->fb = 3;
                $a->save();

                //RENEWING THE ACCESS TOKEN
                // https://graph.facebook.com/oauth/access_token?client_id=1124598687604895&client_secret=22e86ecb2f45e8ac7a8150be55770a0e&grant_type=fb_exchange_token&fb_exchange_token=EAAPZB0QlKIJ8BAKWXOwHmR80DtCkazPAZAltvBPCI6ughsZAZAIr9nOKhlIxCjyQ96xpPNcVPyVpbYFLlHC9RbmsCENVyZAIIEokUW5LwXXM7wgjPZATRyIN8PZA3OxJCf6L2fCfscELMJfnqd6EX7O4gmZBVW5ONcEPrPTeECTu76uT7ColGdqJ
                //END RENEWING THE ACCESS TOKEN
                
            }
        }

    }

    public function runTwitterPost()
    {
    	$current_time = new DateTime();
        $autoposts = Autopost::where('date_posting','<=', $current_time)->where('autopost_executed', 0)->get();

        foreach($autoposts as $a)
        {
        	$description = $a->description;
            $link = 'http://susanwins.com';
            $twitter_image = 'uploads/'.$a->custom_image;

            if($a->post_id != 0)
            {
              $post = Post::find($a->post_id);
              $link = 'http://susanwins.com/'.$post->slug;
              $twitter_image = 'uploads/'.$post->thumb_feature_image;
            }
            else
            {
                if($a->video_link != '')
                {
                    $link = $a->video_link;
                }
                elseif($a->link != '')
                {
                    $link = $a->link;
                }
            }

            if($a->twitter == 1)
            {
            	$a->twitter = 2;
                $a->save();
                //For Twitter
                $shorten_url = $this->google_shorten($link);

                $twitter_message = $description.' '.$shorten_url;

                if(strlen($description) > 90)
                {
                    $twitter_message = substr($description,0,85).'... '.$shorten_url;
                }

                $uploaded_media = Twitter::uploadMedia(['media' => File::get(public_path($twitter_image))]);
                Twitter::postTweet(['status' => $twitter_message, 'media_ids' => $uploaded_media->media_id_string]);

                $a->twitter = 3;
                $a->save();
            }
        }
    }

    public function runPinterestPost()
    {
    	$current_time = new DateTime();
        $autoposts = Autopost::where('date_posting','<=', $current_time)->where('autopost_executed', 0)->get();

        foreach($autoposts as $a)
        {

        	$description = $a->description;
            $image_url = "http://susanwins.com/uploads/".$a->custom_image;
            $link = '';

            if($a->post_id != 0)
            {
              $post = Post::find($a->post_id);
              $link = 'http://susanwins.com/'.$post->slug;
              $image_url = "http://susanwins.com/uploads/".$post->thumb_feature_image;
            }
            else
            {
                if($a->video_link != '')
                {
                    $link = $a->video_link;
                }
                else
                {
                    $link = $a->link;
                }
            }

            if($a->pinterest == 1)
            {
            	$a->pinterest = 2;
                $a->save();

                $pinterest = new Pinterest('4825781658326156511', '1f898c0906ae4e99ec357c15e4e0ebb7d2a2157ddf34e8bee5d384ae1e5e5907');
                $pinterest->auth->setOAuthToken('AcCO6UVKm-hbFrJiQU2lpa6G_ld0FD-4GAF8KddC-J72zUArhwAAAAA');
                
                $pinterest->pins->create(array(
                    "note"   => $description,
                    "image_url" => $image_url,
                    "board"  => "susanwins_/susanwins",
                    "link" => $link
                ));

                $a->pinterest = 3;
                $a->save();
            }
        }
    }

    public function runInstagramPost()
    {
    	$current_time = new DateTime();
        $autoposts = Autopost::where('date_posting','<=', $current_time)->where('autopost_executed', 0)->get();

        foreach($autoposts as $a)
        {

        	$description = $a->description;
            $link = '';
            $twitter_image = 'uploads/'.$a->custom_image;

            if($a->post_id != 0)
            {
              $post = Post::find($a->post_id);
              $link = 'http://susanwins.com/'.$post->slug;
              $twitter_image = 'uploads/'.$post->thumb_feature_image;
            }
            else
            {
                if($a->video_link != '')
                {
                    $link = $a->video_link;
                    $fb_image_url = '';
                }
                else
                {
                    $link = $a->link;
                }
            }

            if($a->instagram == 1)
            {

                $a->instagram = 2;
                $a->save();

                $username = 'susanwinsofficial';
                $password = 'Hello101!';
                $insta = new Instagram($username, $password,$debug = false);

                $img = Image::make($twitter_image);

                $img->fit(1080, 1080, function ($constraint) {
                    $constraint->upsize();
                });

                $img->save('uploads/for_instagram.jpg');

                $description .= ' '.$link;

                $insta->login();

                $insta->uploadPhoto(public_path('uploads/for_instagram.jpg'), $caption = $description);
                
                $a->instagram = 3;
                $a->save();
            }
        }
    }

    public function checkExecute()
    {
    	$current_time = new DateTime();
        $autoposts = Autopost::where('date_posting','<=', $current_time)->where('autopost_executed', 0)->get();

        foreach($autoposts as $a)
        {
        	if($a->fb > 1 && $a->twitter > 1 && $a->pinterest > 1 && $a->instagram > 1)
        	{
        		$a->autopost_executed = 1;
            	$a->save();
        	}
        }

    }

    public function google_shorten($url)
    {
        // Get API key from : http://code.google.com/apis/console/
        $apiKey = 'AIzaSyACvNKMmB7-WpRRL_bRSXLm7YSCAM4CmB4';

        $postData = array('longUrl' => $url);
        $jsonData = json_encode($postData);

        $curlObj = curl_init();

        curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url?key='.$apiKey);
        curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlObj, CURLOPT_HEADER, 0);
        curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
        curl_setopt($curlObj, CURLOPT_POST, 1);
        curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

        $response = curl_exec($curlObj);
        // Change the response json string to object
        $json = json_decode($response);

        curl_close($curlObj);

        return $json->id;
    }
}
