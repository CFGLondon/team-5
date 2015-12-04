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


<form action="" method="POST">
    <input type="text" name="text" />
    <input type="submit" name="sub"/>
</form>

<?php
    $a = array();

    if( isset($_REQUEST['text']) && !empty($_REQUEST['text'])){
        array_push($a, $_REQUEST['text']);
		


		$package =serialize($a);
        print_r($package);
		$unpack = unserialize($package);
		
		$sqlQual = "INSERT INTO users (qualifications)
        VALUES ('$package')";
    }
?>


























}
?>
