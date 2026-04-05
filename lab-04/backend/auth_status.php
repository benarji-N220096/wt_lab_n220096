<?php
session_start();
header('Content-Type: application/json');

if (isset($_SESSION['user']) || isset($_SESSION['logged_in'])) {
    echo json_encode([
        'loggedIn' => true,
        'user' => $_SESSION['user'] ?? $_SESSION['email'] ?? 'User'
    ]);
} else {
    echo json_encode([
        'loggedIn' => false
    ]);
}
?>
