<?php
	
	$server = "localhost";
	$user = "sabkakni_Aman";
	$psw = "Aman@123";
	$db = "sabkakni_thecomputersdr";

	$con = mysqli_connect($server,$user,$psw,$db);
	if(!$con){
		echo "Connection Failed";
	}

?>