<?php
require_once "db.php";
try {
    $count = $usersCollection->countDocuments();
    echo "Total users in database: " . $count . "\n";
    if ($count == 0) {
        echo "The database is empty. Let's add a test user to create the database/collection.\n";
        $usersCollection->insertOne([
            'name' => 'Demo Student',
            'email' => 'student@learnhub.com',
            'password' => password_hash('password123', PASSWORD_DEFAULT),
            'created_at' => new MongoDB\BSON\UTCDateTime()
        ]);
        echo "Test user 'student@learnhub.com' added successfully!";
    } else {
        $users = $usersCollection->find();
        foreach ($users as $u) {
            echo "User found: " . $u['email'] . "\n";
        }
    }
} catch (Exception $e) {
    echo "Failed: " . $e->getMessage();
}
?>
