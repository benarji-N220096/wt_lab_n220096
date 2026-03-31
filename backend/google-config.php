<?php
/**
 * Google OAuth Configuration
 * Secrets are loaded from environment variables or a local .env file.
 */
require_once __DIR__ . '/../vendor/autoload.php';

// Load .env if it exists (for local dev)
$envFile = __DIR__ . '/../.env';
if (file_exists($envFile)) {
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        if (strpos($line, '=') !== false) {
            [$key, $value] = explode('=', $line, 2);
            putenv(trim($key) . '=' . trim($value));
        }
    }
}

// Google OAuth Credentials (from environment)
$google_client_id     = getenv('GOOGLE_CLIENT_ID');
$google_client_secret = getenv('GOOGLE_CLIENT_SECRET');

// Redirect URI — must match exactly in Google Cloud Console
$google_redirect_url = 'http://localhost:8000/backend/google-callback.php';

// Initialize Google Client
$google_client = new Google\Client();
$google_client->setClientId($google_client_id);
$google_client->setClientSecret($google_client_secret);
$google_client->setRedirectUri($google_redirect_url);
$google_client->addScope("email");
$google_client->addScope("profile");
?>
