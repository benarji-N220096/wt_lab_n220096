<?php
echo "<h2>PHP File Functions Demonstration</h2>";

$file = "test.txt";
echo "<h3>1. File Read/Write</h3>";

$handle = fopen($file, "a+");
fwrite($handle, "\nNew line added using fwrite().");
fclose($handle);

$handle = fopen($file, "r");
echo "<strong>fread():</strong><br>";
echo fread($handle, filesize($file));
fclose($handle);

echo "<br><strong>file_get_contents():</strong><br>";
echo file_get_contents($file);

echo "<br><strong>file():</strong><br>";
print_r(file($file));

file_put_contents("newfile.txt", "Created using file_put_contents()");

echo "<h3>2. File Information</h3>";

if (file_exists($file)) {
    echo "File exists<br>";
      echo "Size: " . filesize($file) . " bytes<br>";
    echo "Type: " . filetype($file) . "<br>";
      echo "Last Access: " . date("Y-m-d H:i:s", fileatime($file)) . "<br>";
    echo "Last Modified: " . date("Y-m-d H:i:s", filemtime($file)) . "<br>";
      echo "Created Time: " . date("Y-m-d H:i:s", filectime($file)) . "<br>";
     echo "Permissions: " . fileperms($file) . "<br>";
    echo "Owner: " . fileowner($file) . "<br>";
      echo "Group: " . filegroup($file) . "<br>";
    echo "Inode: " . fileinode($file) . "<br>";
}

echo "<h3>3. File & Folder Management</h3>";

copy($file, "copy_test.txt");
echo "File copied<br>";

rename("copy_test.txt", "renamed_test.txt");
echo "File renamed<br>";

mkdir("newfolder");
echo "Folder created<br>";

if (is_file($file)) echo "test.txt is a file<br>";
if (is_dir("newfolder")) echo "newfolder is a directory<br>";

unlink("renamed_test.txt");
echo "File deleted<br>";

rmdir("newfolder");
echo "Folder removed<br>";

echo "<h3>4. Directory Handling</h3>";

echo "Current Directory: " . getcwd() . "<br>";

$files = scandir(".");
echo "<strong>scandir():</strong><br>";
print_r($files);

$dir = opendir(".");
echo "<strong>opendir() & readdir():</strong><br>";
while (($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}
closedir($dir);
echo "<h3>5. File Locking</h3>";

$handle = fopen("lockfile.txt", "w");
if (flock($handle, LOCK_EX)) {
    fwrite($handle, "File locked and written safely.");
    flock($handle, LOCK_UN);
}
fclose($handle);

echo "File locking demonstrated.";
?>
