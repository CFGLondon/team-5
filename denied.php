<?php

include('dbconnect.php');

// Start session
session_start();

$user = $_SESSION['userlog'];

$loginquery = mysqli_query($conn, "SELECT email FROM users WHERE email='$user' ");

$row = mysqli_fetch_array($loginquery);

$user_session = $row['email'];

// If correct session exists, login.
if(!isset($user_session)) {	

	header("Location: account.php");
	
}

?>
