<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

if (isset($_POST['login'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (strlen($email) < 8) {
        die("Error: Email is too short");
    }

    if (strlen($password) < 6) {
        die("Error: Password must be at least 6 characters");
    }

    $email = htmlspecialchars(strtolower($email));
    $password = addslashes($password);

    $query = "INSERT INTO users (email, password)
              VALUES ('$email', '$password')";

    if (mysqli_query($conn, $query)) {

        echo "Registration Successful<br>";
        print "User Email: $email";

    } else {
        die("Database Error: " . mysqli_error($conn));
    }
}
?>
