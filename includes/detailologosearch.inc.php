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
  
  <div id="page" style="border: solid 1px #aaa ;padding:20px;">
            <!-- start content -->
              <div id="content">
                <div class="post">
                  <h1 class="title"><?php echo $row['b_nm'];?></h1>
                  <div class="entry" style="font-family: sans-serif;">
                    <?php
                    include('include/config.php');
                    error_reporting(E_PARSE);
                      echo ' <b> <table border="0" width="100%">
                         <tr>
                          <td><hr color="purple"></td>
                        </tr>
                         <tr align="center" bgcolor="#EEE9F3">
                           <td style="font-size:20px;">Item Details</td>
                        </tr>
                        <tr>
                          <td><hr color="purple"></td>
                        </tr>
                       </table>
                      
                      <table border="0"  width="100%" bgcolor="#ffffff">
                        <tr> 
                          
                          <td width="15%" rowspan="3">
                            <img src="'.$row['b_img'].'" width="100">
                          
                          </td>
                        </tr>
                      
                      
                        <tr style="font-size:17px;";> 
                          <td width="50%" height="100%">
                            <table border="0"  width="100%" height="100%">
                              <tr valign="top">
                                <td align="right" width="20%" style="font-family:sans-serif";><b> Name</b></td>
                                <td width="6%">: </td>
                                <td align="left">'.$row['b_nm'].'</td>
                              </tr>

                              
                              
                              
                                          
                              
                              
                              
                              <tr>
                                <td align="right" style="font-family:sans-serif";><b> Price</b></td>
                                <td>: </td>
                                <td align="left">'.$row['b_price'].'</td>
                              </tr>
                            </table>
                    
                            
                          </td>
                        </tr>
                      </table>
                    
                        
                      
                      <table border="0" width="100%">
                         <tr>
                          <td><hr color="purple"></td>
                        </tr>
                         <tr align="center" bgcolor="#EEE9F3">
                           <td>DESCRIPTION</td>
                        </tr>
                        <tr>
                          <td><hr color="purple"></td>
                        </tr>
                                    
                       </table>
                       
                                        

                       
                       <tr><td colspan=2><hr color="purple"></td></tr>
                      
                      <table border="0" width="100%">
                        
                         <tr align="center" bgcolor="#EEE9F3"></b>';
                         
                         if(($_SESSION['login']))
                         {
                          echo  ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&cat='.$row['b_cat'].'&rate='.$row['b_price'].'">
                            <img src="images/addcart.png" width="50px" height="50px"><h3><span style="color:red">Add Cart</span></h3>
                          </a></td>';
                        }
                        else
                        {
                          echo '<td><img src="images/addcart.png" width="50px" height="50px" ><br><a href="user-login.php"> <h4>Please Login..</h4></a></td>';
                        }
                        echo '</tr>
                      </table>';
                    ?>
                  </div>
        
                </div>
      
              </div>
            </div>
            
  
</div>
<br>
<br>


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
