 <?php
session_start();

  if (isset($_SESSION["emailuser"]))
{
?>
<script type="" language='javascript'>
document.location='../profile.php'</script> <?php
} else {
if (!isset($_SESSION["emailadmin"]))
{
?>
<script type="" language='javascript'>
document.location='../login.php'</script> <?php
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/npm.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/bootstrap-theme.css" rel="stylesheet" />
<title>Nusanet TV</title>
</head> 
<form action="../conn/updatepassword.php" method="post">
<body>
<div class="container">
<div class="btn-group btn-group-justified" role="group">
  <div class="btn-group" role="group">
    <h5>PT Media Andalan Nusa, PT DNS TV <a href="../conn/logout.php"><span class="label label-default pull-right" role="button">Logout</span> </a></h5>
    
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
        <li><a href="index.php">Daftar Pesanan<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="editpassword.php">Ganti Password<span class="sr-only">(current)</span></a></li>
      <ul class="nav navbar-nav navbar-left">
        </li>
  </ul>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="panel panel-default">
  <div class="panel-heading">Silahkan Ganti Password Anda</div>
<div class="container">
  <input name = "pas0" id = "pas0" type="password" size = "62 " class="form-control" placeholder="Masukan Password Anda" aria-describedby="sizing-addon1" required>
  <input name = "pas1" id = "pas1" type="password" size = "62 " class="form-control" placeholder="Masukan Password Baru Anda" aria-describedby="sizing-addon1" required>
  <input name = "pas2" id = "pas2" type="password" size = "62 " class="form-control" placeholder="Masukan Lagi Password Baru Anda" aria-describedby="sizing-addon1" required>
<p> </p> <h2> <input name="simpan1" id="simpan1" type="submit" class="btn btn-default" value="Simpan"> </form></h2>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
                   <div class="panel panel-default">
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
</body>
</html>
<?php } } ?>