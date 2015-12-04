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
	<input type="text" name="textNo" value="1">
    <input type="text" name="text" />
	<input type="text" name="text2" />
    <input type="submit" name="sub"/>
</form>

<?php


    if( isset($_REQUEST['text1']) && isset($_REQUEST['text2'])){
	
		/** IF MADE UP OF 2 **/

		$a = $_REQUEST['text1'];
		$b = $_REQUEST['text2'];
		$c = $_REQUEST['textNo'];
		
		$username = $_SESSION['userlog'];
		
		$qualificationTypeNO = "qualificationType" . $c);
        
		$sqlQualType = "INSERT INTO users ('$qualificationTypeNO')
		VALUES('$b') WHERE username = '$username'";
		
		$sqlQual = "INSERT INTO users ('$qualificationTypeNO')
        VALUES ('$a') WHERE username = '$username'";
    }
?>

/** End Form Example **/

























}
?>
