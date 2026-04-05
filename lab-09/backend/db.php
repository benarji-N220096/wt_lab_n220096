<?php
require_once __DIR__ . '/../vendor/autoload.php';

// MongoDB Connection
try {
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $db = $client->learnhub;
    $usersCollection = $db->users;
} catch (Exception $e) {
    die("Error connecting to MongoDB: " . $e->getMessage());
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>