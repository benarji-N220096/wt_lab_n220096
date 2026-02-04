<?php
$message = "";   // message holder

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $storedEmail = "n220096@rguktn.ac.in";
    $storedPassword = "98765";

    if (strcasecmp($email, $storedEmail) != 0) {
        die("Login Failed: Invalid Email");
    }

    if (strcmp($password, $storedPassword) != 0) {
        die("Login Failed: Invalid Password");
    }

    // If control reaches here → login success
    $message = "Yes, successfully logged in!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LearnHub | Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">

<div class="login-container">
    <h2>Login</h2>

    <!-- SUCCESS MESSAGE -->
    <?php if ($message != "") { ?>
        <p style="color: green; font-weight: bold;">
            <?php echo $message; ?>
        </p>
    <?php } ?>

    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">signin</button>
    </form>
</div>

</body>
</html>
