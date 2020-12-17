<?php 

ini_set('display_errors',1);
error_reporting(E_ALL);

$from = "amansagarjet@gmail.com";
$to = "support@thecomputersdr.com";
$subject = "Regarding Testing Mail";
$msg = "Hey I Am Vivek..";
$headers = "From:" . $from;

if(mail($to,$subject,$msg,$headers)){
	echo "Send successfully by, $headers";
}else{
	echo "Sending Failed";
}

?>