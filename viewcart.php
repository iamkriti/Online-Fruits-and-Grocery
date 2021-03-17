<?php session_start();
require('database/config.php');
require('include/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
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
  width: 20%;
  padding: 10px;
  height: 300px;
   /* Should be removed. Only for demonstration */
}
.column1 {
  float: right;
  width: 80%;
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
  
}
</style>
<body>
<?php include('includes/link.inc.php'); ?>
<div>
<div class="row">
  <div class="column" >
    <img src="images/logomain.png">
    <div style="margin-left: 10%" >
      <h3 style="background-color: #84c225;text-align: center;font-size: 14px;padding:12px;color: white;font-family: sans-serif;"><b>ALL CATEGORIES</b></h3>
    <ul style="font-family: sans-serif;">
      <li style="padding-top: 7px;font-size: 15px;">
        <a href="fruits.php" style="color: red" ><b>Fruits</b></a>
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
    </ul>
    <img src="images/banner.jpg" width="250px" height="400px">
    </div>

  </div>
  <div class="column1" >
    
    <form style="float: left;margin-left: 3%;width: 40%" action="search_result.php" method="GET">
  <input type="text" placeholder="Search.." id="s" name="s" style="width: 70%;margin-top: 10%; font-family: courier;">
  <button type="submit" id="s" name="s" style="width: 50px;padding: 3px;border-radius: 12px;"><i class="fa fa-search"></i></button>
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
  
  
				
					
							<h1 class="title" style="color: green">Viewcart</h1>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>No
									<td> <b>Category
									<td> <b>Product
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
									<td> <b>Delete
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
								$username = $_SESSION['login'];

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
											<td> <input type="text" size="1" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>


										</tr>
										';
										

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
								<center>
								<button type="submit" value=" Re-Calculate " style="width: 30%;font-size: 17px;background-color: black;" > Re-Calculate</button>
							</center>
							</form>
							<center>
								<a href="home.php"><button style="width: 30% ;font-size: 17px;background-color: #84c225">Continue Shopping</button> 
							</a>
							
							<a href="confirm.php"><button style="width: 30% ;font-size: 17px;background-color: #84c225">Confirm and Proceed</button> 
							</a>

							
</center>
							<br>
							<br><br>
							
							</div>
						</div>
						</div>

					</div>


</body>
</html>
			

				
					
