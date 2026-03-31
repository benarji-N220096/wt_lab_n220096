<?php
session_start();
require_once __DIR__ . '/google-config.php';

header('Location: ' . filter_var($google_client->createAuthUrl(), FILTER_SANITIZE_URL));
exit();
?>