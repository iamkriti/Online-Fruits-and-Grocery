<?php
session_start();
include('include/config.php');
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($bd,"UPDATE userlog  SET logout = '$ldate'  WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
mysqli_query($bd,"UPDATE userlog  SET status = 0  WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();
session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="./home.php";
</script>
