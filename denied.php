<?php

include('dbconnect.php');

session_start();

$user = $_SESSION['userlog'];

$loginquery = mysqli_query($conn, "SELECT username FROM users WHERE username='$user' ");

$row = mysqli_fetch_array($loginquery);

$user_session = $row['username'];

if(!isset($user_session)) {	

	header("Location: index.php");
	
}

?>
