<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;

class mediacontroller extends Controller
{
    //
    public function connect_twitter(Request $req)
    {

        $callback = '';

       /*  Carrying consumer key and secret */
        $_twitter_connect = new TwitterOAuth('Yq5LHcGjERjX6hCABvbAc4RrlX','EEsIBLGuHqgYl6Tz45XVuhwvNlNObCLZ2vNd0tEIDIuAbq5NSlH');

        /* Access token  */
        $_access_token = $_twitter_connect->oauth('oauth/request_token',['oauth_callback'=>$callback]);

        $_route = $_twitter_connect->url('oauth/authorize',['oauth_token'=>$_access_token['oauth_token']]);
    }
}
