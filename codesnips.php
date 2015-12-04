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

		$a = $_REQUEST['text1']; /* type */
		$b = $_REQUEST['text2']; /* discipline*/
		$c = $_REQUEST['textNo']; /* qual number */
		
		$username = $_SESSION['userlog'];
		
		$qualificationTypeNO = "qualificationType" . $c);
        
		$sqlQualType = "INSERT INTO users ('$qualificationTypeNO')
		VALUES('$b') WHERE username = '$username'";
		
		$sqlQual = "INSERT INTO users ('$qualificationTypeNO')
        VALUES ('$a') WHERE username = '$username'";
		
		
		if(mysql_query($sqlQualType, $conn)) {
			echo "success #1";
		} else {
			echo "critical mission failure #1"
		if(mysql_query($sqlQual,$conn)) {
			echo "success #2";
		}	else {
			echo "critical mission failure #2"
		}
		
		
		
    }
?>

/** End Form Example **/


/** SELECT OPTION Example **/

see list.html, it works better. will have to integrate the form example into it

/** End SELECT OPTION Example **/













































}
?>
