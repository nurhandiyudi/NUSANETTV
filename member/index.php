<?php
session_start();

if (!isset($_SESSION["emailuser"]))
{
?>
<script type="" language='javascript'>
document.location='login.php'</script> <?php
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
<form action="editpassword.php" method="post">
<body>
<div class="container">
<div class="btn-group btn-group-justified" role="group">
  <div class="btn-group" role="group">
    <h5>PT Media Andalan Nusa, PT DNS TV <a href="conn/logout.php?log=<?php echo $_SESSION["emailuser"] ?>"><span class="label label-default pull-right" role="button">Logout</span> </a></h5>
    
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
        <li class="active"><a href="../member/">Profile <span class="sr-only">(current)</span></a></li>

      <ul class="nav navbar-nav navbar-left">
        </li>
  </ul>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="panel panel-default">
  <div class="panel-heading">Berikut Data Pesanan Anda</div>
    <?php
include('../conn/koneksi.php');
$email = $_SESSION["emailuser"];
$res = $col->find(array("email"=>$email));
foreach($res as $row)
{ ?>
  <ul class="list-group">
  <li class="list-group-item">Nama : <?php echo $row['nama'] ?></li>
  <li class="list-group-item">No Telp : <?php echo $row['notelp'] ?></li>
  <li class="list-group-item">Email : <?php echo $row['email'] ?></li> <input type = "hidden" name="email" id = "email" value = <?php echo $row['email'] ?>>
  <li class="list-group-item">Paket : <?php echo $row['paket'] ?></li>
  <li class="list-group-item">Tempat : <?php echo $row['tempat'] ?></li>
  <li class="list-group-item">Keterangan Tempat : <?php echo $row['keterangan'] ?></li>
  <li class="list-group-item">Alamat : <?php echo $row['alamat'] ?></li>
  <li class="list-group-item">Kota : <?php echo $row['kota'] ?></li>
  <li class="list-group-item">Ubah Password : <input type="submit" class="btn btn-default" value="Ganti Password"> 
</button> </a></li>
</ul>
 <?php } ?>
                   <div class="panel panel-default">
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
<?php } ?>