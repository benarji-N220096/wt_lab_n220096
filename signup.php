<?php
// show errors (very useful for beginners)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// include DB connection
include "db.php";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (email, password)
              VALUES ('$email', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Signin details stored successfully');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Insert Error: " . mysqli_error($conn);
    }
}
?>
