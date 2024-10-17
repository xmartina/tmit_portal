<?php
	//////////Establishing Database connection
	$server = "localhost";
	$username = "matagram_portal_tmit_1";
	$password = "portal_tmit_1";
	$dbname = "matagram_portal_tmit_1";
	
	$connection = mysqli_connect($server, $username, $password, $dbname);
	
	if(!$connection){
		die("Awaiting Resources");
	}
?>