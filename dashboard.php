<?php
session_start();

//Check if the user is logged in
if(!isset($SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

?>


<!-- HTML content for the dashboard page -->
<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
<p>This is your dashboard.</p>
<!-- Additional content and features for the dashboard page -->