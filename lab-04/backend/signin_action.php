<?php
session_start();
require_once "db.php";

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Please fill all fields.']);
        exit;
    }

    try {
        // Find user by email
        $user = $usersCollection->findOne(['email' => $email]);

        if ($user && password_verify($password, $user['password'])) {
            // Success: Store user ID or email in session
            $_SESSION['user'] = (string)$user['email'];
            $_SESSION['name'] = (string)$user['name'];
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid email or password.']);
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
}
?>
