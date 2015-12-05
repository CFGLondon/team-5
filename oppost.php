<?php

	include("dbconnect.php");

		session.start();
		
	function opportunity() {
	


    if( isset($_GET['oname']) && isset($_GET['odesc'])){
	
		/** IF MADE UP OF 2 **/

		$a = $_GET['oname']; /* type */
		$b = $_GET['odesc']; /* discipline*/
		$c = $_GET['olocation']; /* qual number */
		
		$username = $_SESSION['userlog'];
		
		print_r($a);
		print_r($b);
		print_r($c);
		
		
        
		$sqlUserName = "INSERT INTO users ('name')
		VALUES('$a') WHERE username = '$username'";
		
		$sqlDesc = "INSERT INTO users ('desc')
        VALUES ('$b') WHERE username = '$username'";
		
		$sqlLoc = "INSERT INTO users ('location')
        VALUES ('$c') WHERE username = '$username'";
		
		
		if(mysql_query($sqlUserName, $conn)) {
			echo "success #1";
		} else {
			echo "critical mission failure #1";
		}
		if(mysql_query($sqlDesc,$conn)) {
			echo "success #2";
		}	else {
			echo "critical mission failure #2";
		}	
		if(mysql_query($sqlLoc,$conn)) {
			echo "success #3";
		}	else {
			echo "critical mission failure #3 ya done snafud";
		}			
		
    }
	else {
		echo "Failed to instanciate";
	}
}
	opportunity();
	
?>
