<?php
session_start();
require_once 'vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setClientId( '245656434909-51csa22bs8b3m5its97he9u24i0ptpt9.apps.googleusercontent.com' );
$google_client->setClientSecret( 'oc_JbpEuVYw5d_5xiIERjm-K' );
$google_client->setRedirectUri( 'http://localhost/login_app/index.php' );

$google_client->addScope( 'email' );
$google_client->addScope( 'profile' );
