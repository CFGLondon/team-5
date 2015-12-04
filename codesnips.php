<?php


include("dbconnect.php");

session.start();

function profile() {

/** Test **/

$username = $_SESSION['userlog'];

println("<div> $username </div>");

/*** End Test **/

/** Queries **/

$forename = "SELECT forename FROM users WHere username = '$username'";

$surname = "SELECT username FROM users WHERE username = '$username'";

$location = "SELECT location FROM users WHERE username = '$username'";
	
$age = "SELECT age FROM users WHERE username = '$username'";

$qualifications = "SELECT qualifications FROM users WHERE username = '$username'";
	
$experience = "SELECT experience FROM users WHERE username = '$username'";

$skills = "SELECT skills FROM users WHERE username = '$username'";

/** End Queries **/

/** Form example **/


<form action="" method="POST">
    <input type="text" name="text" />
    <input type="submit" name="sub"/>
</form>

<?php

    if( isset($_REQUEST['text']) && !empty($_REQUEST['text'])){

		$a = $_REQUEST['text'];
        
		$sqlQual = "INSERT INTO users (qualification1)
        VALUES ('$a')";
    }
?>

/** End Form Example **/

























}
?>
