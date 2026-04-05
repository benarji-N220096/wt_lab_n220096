<?php
session_start();
require 'vendor/autoload.php';
require 'db.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new Google_Client();
$client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
$client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
$client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);

if (isset($_GET['code'])) {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $oauth = new Google_Service_Oauth2($client);
    $google_user = $oauth->userinfo->get();

    $email = $google_user->email;
    $name  = $google_user->name;

    // Check if user already exists
    $existingUser = $users->findOne(['email' => $email]);

    if (!$existingUser) {

        $users->insertOne([
            'username' => $name,
            'email' => $email,
            'google_auth' => true,
            'createdAt' => new MongoDB\BSON\UTCDateTime()
        ]);

        $existingUser = $users->findOne(['email' => $email]);
    }

    // Start session
    $_SESSION['user_id'] = (string)$existingUser['_id'];
    $_SESSION['email'] = $existingUser['email'];
    $_SESSION['username'] = $existingUser['username'];

    header("Location: dashboard.php");
    exit();
}