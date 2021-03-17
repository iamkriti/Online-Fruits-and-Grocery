<?php
error_reporting(E_PARSE);

include('include/config.php');

 session_start();
  
  
  require('database/config.php');

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>N-Basket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  href="home.css">
  <link rel="stylesheet"  href="includes/includes.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body >
<?php 
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
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  href="home.css">
  <link rel="stylesheet" type="text/css" href="includes.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
  * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px;
   /* Should be removed. Only for demonstration */
}
.column1 {
  float: right;
  width: 75%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a{
  color: black;
}
a:hover
{
color: green;
text-decoration: none;
}
span
{
  font-family:sans-serif;
  font-size: 14px;
}
</style>
<div>
<div class="row">
  <div class="column" >
    <img src="images/logomain.png">
    <div style="margin-left: 10%" >
      <h3 style="background-color: #84c225;text-align: center;font-size: 14px;padding:12px;color: white;font-family: sans-serif;"><b>ALL CATEGORIES</b></h3>
    <ul style="font-family: sans-serif;">
      <li style="padding-top: 7px;font-size: 15px;">
        <a href="fruitswithdatabase.php" ><b>Fruits</b></a>
      </li>
      <hr>
      <li style="font-size: 15px;">
        <a href="#"><b>Vegetables</b></a>
      </li>
      <hr>
      <li style="font-size: 15px;">
        <a href="#"><b>Groceries</b></a>
      </li>
      <hr>
    </ul><b>
    
  <br>
  <div style="border: solid 2px #aaa;font-family: sans-serif;">
     <h3 style="background-color: #84c225;text-align: center;font-size: 14px;padding:12px;color: white;font-family: sans-serif;"><b>SHIPPING DETAILS</b></h3>
    <form style="margin:10px;" action="process_shipping.php" method="POST">
      Receiver Name:<span style="color: red">*</span><br>
      <input type="text" name="receivername" style="background-color:#eee;height: 10px;" required ><br>
      E-mail:<span style="color: red">*</span><br>
      <input type="text" name="email" required style="height: 10px;" value= <?php echo $username ?>><br>
      
      
      Phone:<span style="color: red">*</span><br>
      <input type="text" name="phone" style="height: 10px;" required><br>
      Street Address:<span style="color: red">*</span><br>
      <input type="text" name="streetaddress" style="height: 10px;" required><br>
      Address 1:<span style="color: red">*</span><br>
      <input type="text" name="address1" style="height: 10px;" required><br>
      Address 2:<br>
      <input type="text" name="address2" style="height: 10px;"><br>
      City:<span style="color: red">*</span><br>
      <input type="text" name="city" style="height: 10px;" required><br>
      State:<span style="color: red">*</span><br>
      <input type="text" name="state" style="height: 10px;" required><br>
      
      <button style="font-size: 17px;background-color: #84c225">Order Now</button> 
             

    </form>
</div></b>
    </div>

  </div>
  <div class="column1" >
    
    <form style="float: left;margin-left: 3%;width: 40%" action="search_result.php" method="GET">
  <input type="text" placeholder="Search.." id="s" name="s" style="width: 70%;margin-top: 10%; font-family: courier;">
  <button type="submit" style="width: 50px;padding: 3px;border-radius: 12px;"><i class="fa fa-search"></i></button>
   </form>
   <div   style= "margin-top: 4%;padding: 5px;" >

   <img src="images/call.png" width="35px" height="35px">
   <b style="color: green;font-family: courier;font-size: 20px;margin-right: 10%" >061-531485</b>
  <img src="images/shopping-cart.png" width="35px" height="35px">
   <b style="color: red;font-family: courier;font-size: 20px;margin-left: 10px" >My Cart(0 items)</b>
    
   </div>
   <br>

   <div style="padding: 15px;">
  

<div style="float: left ; font-family: sans-serif; " >
  <ul class="nav nav-tabs" >
    <li style="padding: 10px;"><a  href="#" style="border-radius: 12px; color: black; font-size: 14px"><b>HOME</b></a></li>
    <li style="padding: 10px;"><a  href="#" style="border-radius: 12px;color: black; font-size: 14px"><b>ABOUT</b></a></li>
    <li style="padding: 10px;" ><a style="color: black; border-radius: 12px;  font-size: 14px" href="#"><b>CONTACT US</b></a></li>
    <li style="padding: 10px;"><a style="color: black; border-radius: 12px;font-size: 14px;" href="#"><b>OFFER<span style="color: red"> New</span></b></a></li>
  </ul>
</div>
<div style="float: right;font-family: sans-serif;background-color: red;margin-right: 5%;border-radius: 12px;">
  <li style="padding: 5px;"><a  href="#" style="border-radius: 12px; color: white; font-size: 14px;"><b>SPECIAL OFFER</b></a></li>
</div>
</div>
<br>
<br>
<br>

<div class="w3-content w3-display-container" style="max-width:800px ; font-family: sans-serif;">
  
  
        
          
              <h1 class="title" style="color: green">Shopping Cart</h1>
              <div class="entry">
            
              <pre><?php
              //  print_r($_SESSION);
              ?></pre>
            
              <form action="process_cart.php" method="POST">
              <table width="100%" border="0">
                <tr >
                  <Td> <b>No
                  <td> <b>Category
                  <td> <b>Product
                  <td> <b>Qty(In KG)
                  <td> <b>Rate
                  <td> <b>Price
                </tr>
                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
              
                <?php
                  $tot = 0;
                  $i = 1;
                  if(isset($_SESSION['cart']))
                  {

                  foreach($_SESSION['cart'] as $id=>$x)
                  { 
                    echo '
                      <tr>
                      <Td> '.$i.'
                      <td> '.$x['cat'].'
                      <td> '.$x['nm'].'
                      <td> '.$x['qty'].'
                      <td> '.$x['rate'].'
                      <td> '.($x['qty']*$x['rate']).'
                      <br>
                    <br>

                    </tr>

                    ';
                    $query = "delete from orders where id = '".$id."' and uid ='".$_SESSION['id']."'";
                    $res = mysqli_query($conn,$query);
                    $query = "insert into orders (uid, id,username, name,quantity) values('".$_SESSION['id']."','".$id."','".$username."','".$x['nm']."', '".$x['qty']."')";
                    $res = mysqli_query($conn , $query);
                    
                    $tot = $tot + ($x['qty']*$x['rate']);
                    $i++;
                  }
                  }
                
                ?>
              <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                
              <tr>
              <td colspan="6" align="right">
              <h4>Total:</h4>
              
              </td>
              <td> <h4><?php echo $tot; ?> </h4></td>
              </tr>
              <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
              
              <br>
                </table>            

                <br><br>
             
              <br>
              <br><br>
              </form>
              </div>
            </div>
            </div>

          </div>


</div>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>





    
  <div style="padding: 20px;">
  
   
    <br>
    <br><br><br>
    <br><br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br><br>
    
    <br>
    <br>
    <br>
    
    <hr>

    <h1 style="padding-bottom: 50px;text-align: center;">Shop by Categories</h1>
    
  
    <a href="#" style="padding-right:20px"><img src="images/fruit.jpg" width="350px" height="300px"></a>
    <a href="#" style="padding-right: 20px"><img src="images/vege.jpg" width="500px" height="300px"></a>
    <a href="#" style="padding-right:20px"><img src="images/gro.jpg" width="375px" height="300px"></a>

  </div>
  <br>
  <div style="padding: 15px">
    <img src="images/horibanner.png">
    <img src="images/horibanner1.png">
  </div>
<div class="col-md-3" style="font-family: sans-serif;">
  <b><h3 style="font-family: sans-serif;"><a>Contact Info</a></h3>
  <br>
  <ul>
    <li style="font-family: sans-serif;">
     <a> Pokhara,Nepal</a>
    </li>
    <br>
    <li style="font-family: sans-serif;">
      <a>onvideo55@gmail.com</a>
    </li>
    <br>
    <li style="font-family: sans-serif;">
      <a>+977 9825150100</a>
    </li>
    <br>
    <li style="font-family: sans-serif;">
      <a>Open time: 8:00</a>
    </li>
  </ul></b>
</div>
<div class="col-md-3">
  <b><h3 style="font-family: sans-serif;"><a>Information</a></h3>
  <br>
  <ul>
    <li style="font-family: sans-serif;">
    <a href="#">Home</a>
    </li>
    <br>
    <li style="font-family: sans-serif;">
    <a href="#">About</a></li>
    <br>
    <li style="font-family: sans-serif;">
      <a href="#">Contact Us</a>
    </li>
    <br>
    <li style="font-family: sans-serif;">
     <a href="#"> Our Products</a>
    </li>
  </ul></b>
</div>
<div class="col-md-3">
  <b><h3 style="font-family: sans-serif;"><a>Services</a></h3>
  <br>
  <ul>
    <li style="font-family: sans-serif;">
      <a href="#">Terms and Conditions</a>
    </li>
    <br>
    <li style="font-family: sans-serif;">
    <a href="#">Shipping Policies</a>    </li>
    <br>
    <li style="font-family: sans-serif;">
      <a href="#">Return Policy</a>
    </li>
    <br>
    <li style="font-family: sans-serif;">
      <a href="#">Refund Policies</a>
    </li>
  </ul></b>
</div>
<div class="col-md-3">
  <h3><a>Our Store</a></h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.1244597003583!2d84.00602311471995!3d28.203531010118713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595224b618fc7%3A0x18eec9599550d6fe!2sBakeland+Marketing+Pvt+Ltd+(Biscuit+Company)!5e0!3m2!1sen!2snp!4v1559321968690!5m2!1sen!2snp" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div style="text-align: center;">
  <p style="font-family: sans-serif;color: green"> <b>
    Designed by Syangmay @2019</b>
  </p>
</div>
</body>
</html>
