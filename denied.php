<?php

include('dbconnect.php');

session_start();

$user = $_SESSION['userlog'];

$loginquery = mysqli_query($conn, "SELECT email FROM users WHERE email='$user' ");

$row = mysqli_fetch_array($loginquery);

$user_session = $row['email'];

if(!isset($user_session)) {	

	header("Location: account.php");
	
}

?>
