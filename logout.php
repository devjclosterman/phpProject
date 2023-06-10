<?php 
session_start();

//Clear session variables
session_unset();

//Destroy the session
session_destroy();

//Redirect to the login page or display a logout message
  
?>