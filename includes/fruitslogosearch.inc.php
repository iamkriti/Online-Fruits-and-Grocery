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
<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="images/fruit banner.jpg" style="width:100%;height: 400px">
  
  
</div>
<br>
<br>
<div style="margin-left: 3%; text-align: center">
  <div class="menu">
    <img src="images/shipping.png" width="30px" height="30px">
   <p style="font-family: sans-serif;font-size: 15px"><b>Free Shipping</b>
   <br><span>From Rs 500</span></p>
</div>
<div class="menu">
      <img src="images/guarantee.png" width="30px" height="30px">
   <p style="font-family: sans-serif;font-size: 15px"><b>Money Gurantee</b><br><span>30 Days Back</span></p>
</div>
<div class="menu">
      <img src="images/cod.jpg" width="30px" height="30px">
<p style="font-family: sans-serif;font-size: 15px"><b >Payment Method</b><br><span>Secure System</span></p>  
</div>
<div class="menu">
      <img src="images/online.jpg" width="30px" height="30px">
<p style="font-family: sans-serif;font-size: 15px"><b>Online Support</b><br><span>24 hours</span></p></div>

<div class="menu">
      <img src="images/secure.png" width="30px" height="30px">
<p style="font-family: sans-serif;font-size: 15px"><b>100% Sale</b><br><span>Secure Shopping</span></p>  
</div>
</div>

</div>

</div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
