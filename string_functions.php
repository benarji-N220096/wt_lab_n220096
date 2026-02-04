<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body>

<h2>PART B – STRING FUNCTIONS</h2>

<form method="post">
    Enter a string: 
    <input type="text" name="userString" required>
    <input type="submit" value="Submit">
</form>

<?php
echo "<hr>";
$hardString = "hello php programming";
if (isset($_POST['userString'])) {
    $userString = $_POST['userString'];
    echo "<h3>Hardcoded String:</h3>";
      echo $hardString . "<br><br>";
    echo "<h3>User Input String:</h3>";
    echo $userString . "<br><br>";
     echo "<h3>Basic String Functions</h3>";
     echo "strlen(): " . strlen($userString) . "<br>";
    echo "str_word_count(): " . str_word_count($userString) . "<br>";
     echo "strrev(): " . strrev($userString) . "<br><br>";
    echo "<h3>Case Conversion</h3>";
       echo "strtoupper(): " . strtoupper($userString) . "<br>";
    echo "strtolower(): " . strtolower($userString) . "<br>";
     echo "ucfirst(): " . ucfirst($userString) . "<br>";
        echo "ucwords(): " . ucwords($userString) . "<br><br>";
    echo "<h3>Search & Replace</h3>";
       echo "strpos('php'): " . strpos($userString, "php") . "<br>";
      echo "str_replace('php','JAVA'): " . str_replace("php", "JAVA", $userString) . "<br><br>";
    echo "<h3>Substring & Trimming</h3>";
        echo "substr(0,5): " . substr($userString, 0, 5) . "<br>";
    echo "trim(): '" . trim($userString) . "'<br>";
       echo "ltrim(): '" . ltrim($userString) . "'<br>";
    echo "rtrim(): '" . rtrim($userString) . "'<br><br>";
       echo "<h3>String Comparison</h3>";
    echo "strcmp(): " . strcmp($userString, $hardString) . "<br>";
      echo "strcasecmp(): " . strcasecmp($userString, $hardString) . "<br><br>";
    echo "<h3>Special Characters & Security</h3>";
     echo "htmlspecialchars(): " . htmlspecialchars($userString) . "<br>";
      echo "addslashes(): " . addslashes($userString) . "<br>";
}
?>

</body>
</html>
