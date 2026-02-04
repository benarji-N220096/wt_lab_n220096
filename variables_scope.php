<?php
echo "<h2>Task A2: PHP Datatypes</h2>";

/* ---------- Datatypes ---------- */

// String
$name = "Benarji";
echo "String: My name is $name <br>";

// Integer
$age = 20;
echo "Integer: Age = $age <br>";

// Float
$cgpa = 8.45;
echo "Float: CGPA = $cgpa <br>";

// Boolean
$isStudent = true;
echo "Boolean: Is Student = ";
var_dump($isStudent);
echo "<br>";

// Array
$subjects = array("DBMS", "Java", "OS", "CN");
echo "Array: Subjects = ";
print_r($subjects);
echo "<br><br>";

/* ---------- Variable Scope ---------- */

echo "<h2>Task A3: Variable Scope</h2>";

/* 1. Local Scope */
function localScopeExample() {
    $localVar = "I am a local variable";
    echo "Local Scope: $localVar <br>";
}
localScopeExample();


/* 2. Global Scope */
$globalVar = "I am a global variable";

function globalScopeExample() {
    global $globalVar;
    echo "Global Scope: $globalVar <br>";
}
globalScopeExample();


/* 3. Static Scope */
function staticScopeExample() {
    static $count = 0;
    $count++;
    echo "Static Scope Count: $count <br>";
}

staticScopeExample();
staticScopeExample();
staticScopeExample();

?>
