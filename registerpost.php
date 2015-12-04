<?php
		
include 'dbconnect.php';
		
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$forename = mysqli_real_escape_string($conn, $_POST['forename']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
		
$dob = date('Y-m-d', strtotime(str_replace('-', '/', $date)));
		
$sql = "INSERT INTO users (email, password, forename, surname, postcode, dob) VALUES ('$email', '$password', '$forename', '$surname', '$postcode', '$dob')";

if ($conn->query($sql) === TRUE) {
	
    echo "Woo it worked";	
	header("Refresh:3; url=google.co.uk");
	
} else {
	
    echo "It's broke yo Error Information: " . $sql . "<br>" . $conn->error;	
	//header("Refresh:10; url=dashboard.php");
	
}

?>