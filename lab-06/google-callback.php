<?php
/**
 * Google OAuth Callback - Handles the OAuth response from Google
 */

require_once __DIR__ . '/google-config.php';
require_once __DIR__ . '/db.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['code'])) {
    try {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
        
        if (isset($token['error'])) {
            die("Error fetching token: " . htmlspecialchars($token['error']));
        }
        
        $google_client->setAccessToken($token);

        // Get profile info
        $google_oauth = new Google\Service\Oauth2($google_client);
        $google_account_info = $google_oauth->userinfo->get();
        
        $email = $google_account_info->email;
        $name = $google_account_info->name;
        $google_id = $google_account_info->id;
        $picture = $google_account_info->picture;

        // Upsert user in one operation
        $usersCollection->updateOne(
            ['email' => $email],
            ['$set' => [
                'google_id' => $google_id,
                'name' => $name,
                'picture' => $picture,
                'last_login' => new MongoDB\BSON\UTCDateTime()
            ]],
            ['upsert' => true]
        );

        $user = $usersCollection->findOne(['email' => $email]);

        // Create session
        $_SESSION['user_id'] = (string)$user['_id'];
        $_SESSION['email'] = $email; 
        $_SESSION['name'] = $name;
        $_SESSION['google_id'] = $google_id;
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $email;

        header('Location: ../home.html');
        exit();

    } catch (Exception $e) {
        die("Authentication error: " . $e->getMessage());
    }
} else {
    // If no code, maybe error
    if (isset($_GET['error'])) {
        die("Google OAuth Error: " . htmlspecialchars($_GET['error']));
    }
    // Redirect to login if accessed directly
    header('Location: ../signin.html');
    exit();
}
?>
