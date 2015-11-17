<?php
session_start();
if (!isset($_SESSION["emailbilling"]))
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
<form action="" method="post">
<body>
<div class="container">
<div class="btn-group btn-group-justified" role="group">
  <div class="btn-group" role="group">
    <h5>PT Media Andalan Nusa, PT DNS TV <a href="../conn/logout.php?log=RTWgw5363783"><span class="label label-default pull-right" role="button">Logout</span> </a></h5>
    
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
        <li class="active"><a href="../billing/">Daftar Pesanan<span class="sr-only">(current)</span></a></li>
        <li><a href="../billing/">Daftar Pembayaran<span class="sr-only">(current)</span></a></li>
        <li><a href="editpassword.php">Ganti Password<span class="sr-only">(current)</span></a></li>
      <ul class="nav navbar-nav navbar-left">
        </li>
  </ul>
    </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="panel panel-default">
  <div class="panel-heading">Berikut Data Pesanan</div>
  <table class="table">


                  <tr>
                    <th width="10%" >Nama</th>
                    <th width="10%">No Telpon</th>
                    <th width="13%">Email</th>
                    <th width="10%">Paket</th>
                    <th width="10%">Status Pembayaran</th>
                    <th width="5%">Aktivasi</th>
                    <th width="10%">Kirim Email</th>
                  </tr>
                   <?php
include('../conn/koneksi.php');
$res = $col->find(array("level"=>"0"));
foreach($res as $row)
{ 
  ?>

                  <tr>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['notelp'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['paket'] ?></td>
                    <td></td>
                        <?php if($row['aktiv'] == 'AKTIF') { ?>
                <td><a href="../conn/aktivasi.php?email=<?php echo $row['email'] ?>&proses=UNAKTIF"<button type="button" class="btn btn-default" aria-label="Left Align">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> </a></td>
              <td><a href="mailto:<?php echo $row['email'] ?>?subject=Nusanet TV&body=Akun Anda Aktif, Berikut Alamat Email: <?php echo $row['email'] ?>, Password: <?php echo $row['password'] ?>, silahkan mengganti password untuk keamanan anda, Untuk login Silahkan Klik Link Berikut : Localhost/nusanettv/login, Terimakasih sudah menjadi custommer nusanettv"><button type="button" class="btn btn-default" aria-label="Left Align">
              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              </button> </a></td>
                    <?php } else { ?>
                    <td><a href="../conn/aktivasi.php?email=<?php echo $row['email'] ?>&proses=AKTIF"<button type="button" class="btn btn-default" aria-label="Left Align">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></a></td> <?php } ?>
                    <td></td>  
                   <!-- <td><a href="../conn/aktivasi.php?email=<?php echo $row['email'] ?>&nama=<?php echo $row['nama'] ?>"><button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
</button> </a></td> -->
                  </tr>
                    <?php } ?>
                    </table>
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