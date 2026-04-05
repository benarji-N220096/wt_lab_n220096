<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit;
}
?>

<h1>Welcome <?php echo $_SESSION['email']; ?> </h1>
<a href="logout.php">Logout</a>