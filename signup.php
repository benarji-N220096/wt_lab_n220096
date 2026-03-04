<?php
session_start();
require __DIR__ . '/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (!$username || !$email || !$password) {
        $message = "All fields are required.";
    }
    else {

        $existingUser = $users->findOne(['email' => $email]);

        if ($existingUser) {
            $message = "User already exists.";
        }
        else {

            // ⚠ Storing plain password (not secure)
            $users->insertOne([
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'createdAt' => new MongoDB\BSON\UTCDateTime()
            ]);

            $message = "Signup successful!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>

<h2>Signup</h2>

<?php if ($message): ?>
    <p style="color:red;"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST"> 
    <input type="text" name="usename" placeholder="Enter name" required><br><br>
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <input type="password" name="password" placeholder="Enter Password" required><br><br>
    <button type="submit">Signup</button>
</form>

<a href="signin.php">Already have account? Login</a>

</body>
</html>