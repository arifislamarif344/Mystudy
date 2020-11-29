<?php

session_start();

require_once 'vendor/autoload.php';

$facebook = new Facebook\Facebook( [
    'app_id' => '2809887719295073',
    'app_secret' => 'cebac3590cdf75a4f33971032da56589',
    'default_graph_version' => 'v2.10'
] );

$helper = $facebook->getRedirectLoginHelper();
$url = $helper->getLoginUrl( 'http://localhost/login_app/login.php' );

try {
    $accessToken = $helper->getAccessToken();
    if ( $accessToken ) {
        $_SESSION['accessToken'] = (string) $accessToken;
        $facebook->setDefaultAccessToken( $_SESSION['accessToken'] );
        $graphResponse = $facebook->get( "/me?fields=name", $_SESSION['accessToken'] );
        $userInfo = $graphResponse->getGraphUser();
        $id = '';
        echo $userInfo['name'];
        echo $userInfo['id'];

        $curl = "https://graph.facebook.com/{$id}
        ?fields=birthday,email,hometown
        &access_token={$_SESSION['accessToken']}";

    }

} catch ( \Facebook\Exceptions\FacebookResponseException $e ) {
    // When Graph returns an error
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
} catch ( \Facebook\Exceptions\FacebookSDKException $e ) {
    // When validation fails or other local issues
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
}
