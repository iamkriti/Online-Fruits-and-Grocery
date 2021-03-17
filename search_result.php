<?php
require('database/config.php');
 session_start();
	
	
	
	$search=$_GET['s'];
	$query="select * from book where b_nm like '%$search%'";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		
</head>

<body>
			

				<?php include('includes/search.inc.php'); ?>
</body>
</html>
