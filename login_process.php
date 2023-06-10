<?php
session_start();
include 'db.php';

//Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

//Query the database for the user
$stmt = $conn->prepare('SELECT * FROM users WHERE username = ?');
$stmt->execute([$username]);
$user = $stmt->fetch();

//Verify the password
if($user && password_verify($password, $user['password'])) {
    //Login successful, set session variables
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    //Additional session variable as needed

    //Redirect to the dashboard or diplay a success message
} else {
    //Login failed, redirect back
}

?>