<?php
include('koneksi.php');
		session_start();
$pas0=$_POST['pas0'];
$pas1=$_POST['pas1'];
$pas2=$_POST['pas2'];
  if (isset($_POST['simpan']))
    {
    	$email=$_SESSION["emailuser"];
    	echo $email;
    } else if (isset($_POST['simpan1'])) {
    	$email=$_SESSION["emailadmin"];
    }
    echo $email;
$res = $col->find(array("email"=>$email));
foreach($res as $row)
{ 
	$pas= $row['password'];
	$level = $row['level'];
}
	if (($pas == $pas0) && ($pas1 == $pas2)){
$update=$col->update(array("email"=>$email),array('$set'=>array("password"=>$pas1)));
	if($update){
		if ($level == '0'){
unset($_SESSION["emailuser"]);
} else if ($level == '1'){
unset($_SESSION["emailadmin"]);
} ?>
<script type="" language="JavaScript"> alert('Anda Berhasil Mengganti Password, Silahkan Login Kembali');
document.location='../login.php'</script>
<?php } else {
if ($level == '0'){ ?>
<script type="" language="JavaScript"> alert('Anda Tidak Berhasil Mengganti Password, Mohon Isi Data Dengan Benar');
document.location='../profile.php'</script>
<?php } else if ($level == '1'){ ?>
<script type="" language="JavaScript"> alert('Anda Tidak Berhasil Mengganti Password, Mohon Isi Data Dengan Benar');
document.location='../staff/editpassword.php'</script>
<?php } } } else { ?>
<?php if ($level == '0'){ ?>
<script type="" language="JavaScript"> alert('Anda Tidak Berhasil Mengganti Password, Mohon Isi Data Dengan Benar');
document.location='../profile.php'</script>
<?php } else if ($level == '1'){ ?>
<script type="" language="JavaScript"> alert('Anda Tidak Berhasil Mengganti Password, Mohon Isi Data Dengan Benar');
document.location='../staff/editpassword.php'</script>
<?php } } ?>