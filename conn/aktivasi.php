<?php
 $email=$_GET['email'];
 $proses=$_GET['proses'];
include('koneksi.php');
$update=$col->update(array("email"=>$email),array('$set'=>array("aktiv"=>$proses)));
if($update){ ?>
<script type="" language="JavaScript">
document.location='../staff/index.php'</script>
<?php }
 ?>