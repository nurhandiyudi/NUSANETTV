<?php
session_start();

if (isset($_SESSION["emailuser"]))
{
?>
<script type="" language='javascript'>
document.location='member/'</script> <?php

} else if (isset($_SESSION["emailbilling"]))
{
?>
<script type="" language='javascript'>
document.location='billing/'</script> <?php
} else if (isset($_SESSION["emailadmin"]))
{
?>
<script type="" language='javascript'>
document.location='staff/'</script> <?php
} else if (isset($_SESSION["emailsupport"]))
{
?>
<script type="" language='javascript'>
document.location='support/'</script> <?php
} else {

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/npm.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
<title>Nusanet TV</title>
</head>
<script>
 $(document).ready(function(){
$("#valid").hide(); 
  $("#ket1").hide(); 
  $("#kota1").hide(); 
   $("#alamat1").hide();     
    $("#paket1").change(function(){
        $("#tempat1").prop( "disabled", false );
 });
    $("#tempat1").change(function(){
      var d =  $("#email1").val()
      var a =  $("#tempat1").val();
      var b = "0";
if (a == b) {
      $("#alamat1").show();
      $("#ket1").hide();
      $("#kota1").show();
      $("#ket1").val('');

} else {
   $("#alamat1").hide();
   $("#ket1").show();
      $("#kota1").hide();
      $("#kota1").val('Kota');
      $("#alamat1").val('');
}})

$("#daftar").click(function(){
var b1 = "";
var b2 = "Pilih Paket";
var b3 = "0";
var c =  $("#nama1").val();
var d =  $("#email1").val();
var e =  $("#notelp1").val();
var f =  $("#paket1").val();
var g =  $("#tempat1").val();
var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

if ((b1 == c) || (b1 == d) || (b1 == e) || (f == b2) || !(filter.test(d))){
$("#valid1").hide(); 
$("#valid2").hide(); 
$("#valid").show(); 
} else {
 $("#valid").hide(); 



if(g == b3){
  if($("#alamat1").val()== b1 || $("#kota1").val()=="Kota"){
    $("#valid").show();
    $("#valid1").hide(); 
    $("#valid2").hide(); 
  }
  else{
       
    $("#valid").hide();
     $("#daftar_form").submit();
  }
 } 
 else{
  if($("#ket1").val()== b1){
    $("#valid").show();
    $("#valid1").hide(); 
    $("#valid2").hide(); 

  }
  else{
      
    $("#valid").hide();
      $("#daftar_form").submit();
  }

} }})})

</script>

<form method = "post" action = "<?php $_SERVER['PHP_SELF'] ?>" id = "daftar_form">
<body> 

<div class="container">
<div class="btn-group btn-group-justified" role="group">
  <div class="btn-group" role="group">
    <h5>PT Media Andalan Nusa, PT DNS TV <a href="login.php"><span class="label label-default pull-right" role="button">Login</span> </a></h5>
    
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
        <li class="active"><a href="index.php">Beranda<span class="sr-only">(current)</span></a></li>
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
<div class="container pull-center">
<div class="row">
  <div class="col-xs-6 col-md-5">
    <a class="thumbnail">
      <img src="pictures/Untitled.jpg"> </img>
    </a>
  </div>
  <h1>Data yang Lengkap di Perlukan untuk Pemesanan TV Berbayar Ini</h1>
<div class="input-group input-group-lg">
  <span id="sizing-addon1"></span>
  <input name = "nama1" id = "nama1" type="text"size = "62 " class="form-control" placeholder="Nama Lengkap" aria-describedby="sizing-addon1">
  <td><label for="nama" class="error"></label></td>
</div>
<p> </p>

<div class="input-group input-group-lg">
  <span id="sizing-addon1"></span>
  <input name = "email1" id = "email1" type="email" size = "62 " class="form-control" placeholder="Email" aria-describedby="sizing-addon1">
  <p class="help-block"></p>
</div>
<p> </p>
  <div class="form-group">
  <div class="input-group input-group-lg">
  <span id="sizing-addon1"></span>
  <input name = "notelp1" id = "notelp1" type="text" size = "62" class="form-control" placeholder="No Telepon" aria-describedby="sizing-addon1">
</div>
</div>
    
<p> </p>
 
<div class="row">
  <form class="form-inline" role="form" id="myForm">
<div class="form-group">
    <div class="input-group input-group-lg">
      <span id="sizing-addon1" type ="hidden"></span>
      <select name = "paket1" id = "paket1" class="form-control form-group-lg" aria-describedby="sizing-addon1">
                <option disabled="disabled" selected>Pilih Paket</option>
        <option>Paket 1</option>
        <option>Paket 2</option>
        <option>Paket Promo</option>
      </select>
    </div>
<div class="form-group">
    <div class="input-group input-group-lg">
      <span id="sizing-addon1"></span>
      <select name = "tempat1" id="tempat1" disabled="disabled" type="hidden" class="form-control form-group-lg" aria-describedby="sizing-addon1">
                <option  disabled="disabled" selected>Tempat Pemasangan</option>
        <option>Apartemen Rajawali</option>
        <option>Apartemen Kalibata City</option>
        <option value="0">Lainnya</option>
      </select>
    </div>
    <div class="form-group">
    <div class="input-group input-group-lg">
      <span id="sizing-addon1"></span>
      <select name = "kota1" id="kota1" class="form-control form-group-lg" aria-describedby="sizing-addon1" >
                <option disabled="disabled" selected>Kota</option>
        <option>Jakarta Selatan</option>
        <option>Jakarta Pusat</option>
        <option>Jakarta Timur</option>
        <option>Jakarta Barat</option>
        <option>Jakarta Utara</option>
        <option>Bandung</option>
      </select>
    </div>
</div> </form>
    </div><!-- /input-group -->
<p> </p>
<div class="input-group input-group-lg">
  <span id="sizing-addon1"></span>
  <input name = "ket1" id = "ket1" type="hiden" size = "62 " class="form-control" placeholder="Keterangan Tempat (Blok, Tower, Lantai)" aria-describedby="sizing-addon1">
</div>
<p> </p> 
        <div class="form-group form-group-lg">
  <span id="sizing-addon1"></span>
      <textarea name = "alamat1" id = "alamat1" placeholder="Alamat Lengkap (Nama Tempat, Jalan, Blok, Tower, Lantai)" rows="2" cols = "54 " class="form-control" id="comment"></textarea>
    </div>
</div>

<span id = "valid" class="alert alert-danger">Data Belum Lengkap Atau Salah, Lengkapi dan Perbaiki Dulu !</span>
 <?php
  if (isset($_POST['daftar']))
    {
  $text = 'abcdefghijklmnopqrstuvwxyz123457890';
  $panjang = 10;
 
  $txtlen = strlen($text)-1;
  $result = '';
  for($i=1; $i<=$panjang; $i++){
    $result .= $text[rand(0, $txtlen)];
  }
$nama= $_POST['nama1'];
$email=$_POST['email1'];
$notelp=$_POST['notelp1'];
$paket=$_POST['paket1'];
$tempat=$_POST['tempat1'];
$kota=$_POST['kota1'];
$ket=$_POST['ket1'];
$alamat=$_POST['alamat1'];

include('conn/koneksi.php');
$res = $col->find(array("email"=>$email));
foreach($res as $row)
{ 
$email1=$row['email'];
}

if ($email1==$email){
 ?>
<span id = "valid2" class="alert alert-warning">Anda Sudah Melakukan Pemesan, Silahkan Hubungi Call Center Kami untuk Informasi Lebih Lanjut!</span> 
<?php
}else {
$insert=$col->insert(array("nama"=>$nama, "email"=>$email, "notelp"=>$notelp, "paket"=>$paket, "tempat"=>$tempat, "kota"=>$kota, "keterangan"=>$ket, "alamat"=>$alamat, "level"=>"0", "password" =>$result, "aktiv"=>"UNAKTIF"));
 ?> <span id = "valid1" class="alert alert-info">Anda Sukses Melakukan Pemesanan, Aktivasi Akan Kami Kirim Ke Email Anda!</span> <?php
}}?>
  <p> </p> <h2><input name="daftar" class="btn btn-default" id="daftar" value="DAFTAR"> </h2></form>
<p></p>
  </div><!-- /.row -->
</div>
  </div>
  </div><!-- /input-group -->
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
<?php } ?>