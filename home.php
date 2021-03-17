<?php
error_reporting(E_PARSE);

include('include/config.php');

 session_start();
  
  
  require('database/config.php');
       $query="select * from book ";
  
  $res=mysqli_query($conn,$query) or die("Can't Execute Query...");

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>N-Basket</title>
  <meta charset="utf-8">
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    
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

                         ?>
<?php 
      include("includes/logosearch.inc.php");
       ?>
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

<hr>



    <div >
      <h3 style="text-align: center;font-family: sans-serif;color: red">All product list</h3>
      <?php
      
                        $count=0;
                        while($row=mysqli_fetch_assoc($res))
                        {
                          
                          echo '

                <div style="border:solid 1px #aaa;width: 250px ; height: 350px; margin: 35px;float:left;">
               <img src="'.$row['b_img'].'" width="250px" height="200px" >
         <br>
         <b><p style="font-family: sans-serif;">'.$row['b_nm'].'<span> - 1kg</span><br><br>
          MPR - Rs <span>'.$row['b_price'].'</span><br>

          Your Saving - <span> Rs 2.00</span>

         </p></b>
         <a href="detail.php?id='.$row['b_id'].'"><button>Buy Now</button></a>
        </div>
      ';
                        
                          $count++;             
                          
                          if($count==4)
                          {
                            
                            $count=0;
                          }
                        }
                      ?>
                      
</div>
  <div style="padding: 20px;">
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
      <a>kriti55@gmail.com</a>
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
    Designed by Syangmay @2020</b>
  </p>
</div>
</body>
</html>
