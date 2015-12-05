<?php
include("dbconnect.php");

function postIt() {

	$query = "SELECT * FROM opportunities";
	$results = mysql_query($query);
	$row_count = mysql_num_rows($results);
	$row_name = mysql_fetch_array($results);
	
	echo "<table>";
	

	while ($row_name = mysql_fetch_array($results) {
	
		/* $row_name['opportunityname']
		   $row_name['description']   */
	

	}
	

}
postIt();

