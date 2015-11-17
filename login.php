 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/npm.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
<title>Nusanet TV</title>
</head> 
<form action ="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<body>
<div class="container">
<div class="btn-group btn-group-justified" role="group">
  <div class="btn-group" role="group">
    <h5>PT Media Andalan Nusa, PT DNS TV </h5>
    
</button>
  </div>
</div>
</div>
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="#">NusanetTV</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Beranda<span class="sr-only">(current)</span></a></li>
<li><a href="about.php">Tentang Kami</a></li>
      <li class="dropdown">
          <a href="paket.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daftar Paket <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="paket.php?paket=1">Paket 1</a></li>
            <li><a href="paket.php?paket=2">Paket 2</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="paket.php?paket=promo">Paket Promo</a></li>
          </ul>
        </li> 
        <li><a href="contactus.php">Kontak Kami</a></li>
      <ul class="nav navbar-nav navbar-left">
        </li>
  </ul>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
if(isset($_POST['login'])) {
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

include('conn/koneksi.php'); 
$res = $col->find(array("email"=>$email, "password"=>$password, "aktiv"=>"AKTIF"));
foreach($res as $row)
{ 
$level = $row['level'];
$email1 = $row['email'];

if ($level == "0") {
$_SESSION["emailuser"]=$email1;
?>
<script type="" language="JavaScript"> 
document.location='member/'</script>
<?php
} else if ($level == "1"){
$_SESSION["emailadmin"]=$email1;
?>
<script type="" language="JavaScript">
document.location='staff/'</script>
<?php
} else if ($level == "2"){
$_SESSION["emailbilling"]=$email1;
?>
<script type="" language="JavaScript">
document.location='billing/'</script>
<?php
} else if ($level == "3"){
$_SESSION["emailsupport"]=$email1;
?>
<script type="" language="JavaScript">
document.location='support/'</script>
<?php
} } ?>
<div class="container"> <span id = "valid" class="alert alert-danger">Email dan Password yang Anda masukkan tidak cocok!</span> </div>
<?php } ?>
<div class="container">
<div class="alert alert-info" role="alert">
  <p><input name = "email" id = "email "type="email" class="form-control" placeholder="Email" required></p>
 <p><input name ="password" id = "password" type="Password" class="form-control" placeholder="Password" required></p>
  <p><button id = "login" name = "login" type="submit" class="btn btn-default navbar-btn">Sign in</button></p>
</div>
</div>
  <div class="label-default">
  <p></p>
  <p></p>
  <p></p>
  <p></p>
</div>
    <footer class="footer navbar-inverse">
      <div class="container ">
        <p class="text-muted">Nusanet TV</p>
      </div>
    </footer>
    </form>
</body>
</html>