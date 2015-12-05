<?php
		
include 'dbconnect.php';
		
// Get all the data stored
$email = mysqli_real_escape_string($conn, $_POST['email']);

$password = mysqli_real_escape_string($conn, $_POST['password']);
$pass = password_hash($password, PASSWORD_DEFAULT);

$forename = mysqli_real_escape_string($conn, $_POST['forename']);
$surname = mysqli_real_escape_string($conn, $_POST['surname']);
$postcode = mysqli_real_escape_string($conn, $_POST['postcode']);

$dob = date("Y-m-d", strtotime($_POST['dob']));

// Make the query
$sql = "INSERT INTO users (email, password, forename, surname, postcode, dob) VALUES ('$email', '$pass', '$forename', '$surname', '$postcode', '$dob')";

// Check if it worked.
if ($conn->query($sql) === TRUE) {
	
    echo "Woo it worked";	
	header("Refresh:3; url=google.co.uk");
	
} else {
	
    echo "It's broke yo Error Information: " . $sql . "<br>" . $conn->error;	
	//header("Refresh:10; url=dashboard.php");
	
}

?>