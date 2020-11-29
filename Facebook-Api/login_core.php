<?php

session_start();
require_once "vendor/autoload.php";

$facebook = new Facebook\Facebook( [
    'app_id' => '356029152402944',
    'app_secret' => '6b66fcfb40aa61e9361a479c56e1b655',
    'default_graph_version' => 'v2.10'
] );

$helper = $facebook->getRedirectLoginHelper();
$url = $helper->getLoginUrl( "http://localhost/fbAPI/fb.php" );

// print_r( $url );

try {
    $accessToken = $helper->getAccessToken();
    if ( isset( $accessToken ) ) {
        $_SESSION['accessToken'] = (string) $accessToken;

        header( 'location:fb.php' );
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

if ( isset( $_SESSION['accessToken'] ) ) {
    // $facebook->setDefaultAccessToken( $_SESSION['accessToken'] );
    // $responce = $facebook->get( '/me?locale=en_US&fields=name,email', $_SESSION['accessToken'] );
    $responce = $facebook->get( '/me', $_SESSION['accessToken'] );
    $user = $responce->getGraphUser();
    // echo "Hello " . $user->getField( 'name' );
    echo "Hello " . $user->getName();

}
