<!DOCTYPE html>
<html>
<head>
<title>
     Process-Shipping
</title>
</head>
<body>
<?php
session_start();
 
  
  require('database/config.php');


$receivername = filter_input(INPUT_POST, 'receivername');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$streetaddress = filter_input(INPUT_POST, 'streetaddress');
$address1 = filter_input(INPUT_POST, 'address1');
$address = filter_input(INPUT_POST, 'address2');
$city = filter_input(INPUT_POST, 'city');
$state =filter_input(INPUT_POST, 'state');
$query = "INSERT INTO orderdup
SELECT * FROM orders";
$res = mysqli_query($conn,$query);
$sql = "INSERT INTO order_details(receivername,email,phone,streetaddress,address1,address2,city,state) values('$receivername','$email','$phone','$streetaddress','$address1','$address2','$city','$state')";
     			                   if($conn->query($sql))
     			                {
     				              $suc = "Successfully registered";
                                       $query = "delete from orders where uid = '".$_SESSION['id']."'";
                                        $res = mysqli_query($conn,$query);
                                        include("logout.php");
                                       

     			                }
     			                   else
     			                       {
     				                     echo 'Error:',$sql."<br>".$conn->error;
     			                       }
     			                       $conn->close();
     			                       echo ($suc);
?>
 
</body>
</html>