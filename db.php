<?php
require __DIR__ . '/vendor/autoload.php';

try {
    $client = new MongoDB\Client("mongodb://localhost:27017");

    $db = $client->learnhub;     // Database name
    $users = $db->users;        // Collection name

} catch (Exception $e) {
    die("MongoDB Connection failed: " . $e->getMessage());
}
?> 