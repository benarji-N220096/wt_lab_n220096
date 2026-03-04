<?php
session_start();
require __DIR__ . '/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!$email || !$password) {
        $message = "Email and password are required.";
    }
    else {

        $user = $users->findOne(['email' => $email]);

        if (!$user) {
            $message = "User not found.";
        }
        elseif (!password_verify($password, $user['password'])) {
            $message = "Invalid password.";
        }
        else {
            session_regenerate_id(true);
            $_SESSION['user_id'] = (string)$user['_id'];
            $_SESSION['email'] = $user['email'];

            header("Location: dashboard.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<?php if ($message): ?>
    <p style="color:red;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <button type="submit">Login</button>
</form>

<a href="signup.php">New user? Signup</a>
<a href="google_login.php">signin with google</a>
<hr>
<a href="google_login.php">
    <button style="background:#db4437;color:white;padding:10px 15px;border:none;border-radius:5px;">
        Sign in with Google
    </button>
</a>
</body>
</html>