<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '577527960483-c98tgtsj6vciqj1aotcgkt2mb9eovpi1.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'S7z0F0p-mbwLDcICRMjPAbmH'; //Google client secret
$redirectURL = 'http://localhost/googlelogin/index.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>