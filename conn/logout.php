<?php
session_start();
$log = $_GET['log'];
$ses = $_SESSION["emailuser"];
 if ($log = $ses){
unset($_SESSION["emailuser"]);
}else if ($log = "RTWgw5363783"){
unset($_SESSION["emailadmin"]);
} ?>
<script type="" language="JavaScript">
document.location='../login.php'</script>