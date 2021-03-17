<?php session_start();
                    error_reporting(E_PARSE);

	require('database/config.php');
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
		
</head>
<?php 
include('include/config.php');


  
  
  require('database/config.php');
$username = $_SESSION['login'];
$que = "select status from userlog where username = '".$_SESSION['login']."' and status = 1"  ;
$ret=mysqli_query($bd, $que);
$num=mysqli_fetch_array($ret);
if($num>0)
{
                          include('includes/link.inc.php');
                        }
                        else
                        {
                                                   include('includes/link1.inc.php');

                        }
#echo $username;
#$id= $_SESSION['id'];
#echo $id;
#$status = $_SESSION['status'];
#echo $status;
 #   if($username == "onvideo55@gmail.com")
  #                       {
   #                       include('includes/link.inc.php');
    #                    }
     #                   else
      #                  {
       #                                            include('includes/link1.inc.php');}

                         ?>
<?php 
include('includes/detailologosearch.inc.php'); ?>

<body>
		<br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    
  
    
<hr>
<?php include('includes/footer.inc.php'); ?>
						
</body>
</html>
