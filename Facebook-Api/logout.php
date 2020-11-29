<?php
session_start();
$_SESSION['accessToken'] = '';
session_destroy();
header( 'location:fb.php' );
