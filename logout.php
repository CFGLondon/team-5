<?php

session_start();


// Kill the sessions
if(session_destroy()){	

	header("Location: index.php");
	
}

?>