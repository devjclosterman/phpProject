<?php

//Establish a database conenction using PDO or mysqli
$host = 'localhost';
$dbname = 'my_database_name';
$username = 'my_username';
$password = 'my_password';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die('Connection failed: '. $e->getMessage());
}

?>