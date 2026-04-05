<?php
require_once "db.php";
try {
    $client->listDatabases();
    echo "Successfully connected to MongoDB server!";
} catch (Exception $e) {
    echo "Failed to connect: " . $e->getMessage();
}
?>
