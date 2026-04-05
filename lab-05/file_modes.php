<?php
echo "<h2>PHP File Operation Modes Demonstration</h2>";

$file = "sample.txt";
echo "<h3>Mode: r (Read Only)</h3>";
$handle = fopen($file, "r");
echo fread($handle, filesize($file));
fclose($handle);
echo "<h3>Mode: w (Write Only - Erase Old Data)</h3>";
$handle = fopen($file, "w");
fwrite($handle, "Old content erased. New content written using w mode.");
fclose($handle);
echo "File overwritten using w mode.<br>";
echo "<h3>Mode: a (Append Only)</h3>";
$handle = fopen($file, "a");
fwrite($handle, "\nThis line is appended using a mode.");
fclose($handle);
echo "Data appended using a mode.<br>";
echo "<h3>Mode: x (Create New File, Fail If Exists)</h3>";
$newFile = "newfile.txt";
if (!file_exists($newFile)) {
    $handle = fopen($newFile, "x");
    fwrite($handle, "Created using x mode.");
    fclose($handle);
    echo "New file created using x mode.<br>";
} else {
    echo "File already exists. x mode fails.<br>";
}

echo "<h3>Mode: r+ (Read & Write)</h3>";
$handle = fopen($file, "r+");
fwrite($handle, "Modified using r+ mode.");
fclose($handle);
echo "File modified using r+ mode.<br>";

echo "<h3>Mode: w+ (Read & Write, Erase Old Data)</h3>";
$handle = fopen($file, "w+");
fwrite($handle, "New data written using w+ mode.");
fclose($handle);
echo "File erased and rewritten using w+ mode.<br>";
echo "<h3>Mode: a+ (Read & Append)</h3>";
$handle = fopen($file, "a+");
fwrite($handle, "\nAppended using a+ mode.");
fclose($handle);
echo "File appended using a+ mode.<br>";
echo "<h3>Mode: x+ (Create New File for Read & Write)</h3>";
$anotherFile = "anotherfile.txt";
if (!file_exists($anotherFile)) {
    $handle = fopen($anotherFile, "x+");
    fwrite($handle, "Created using x+ mode.");
    fclose($handle);
    echo "New file created using x+ mode.<br>";
} else {
    echo "File already exists. x+ mode fails.<br>";
}
?>
