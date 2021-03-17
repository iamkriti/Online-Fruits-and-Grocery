<?php
require('database/config.php');
 session_start();
  
  
  

  $query="select * from book where b_cat = 'Fruit' ";
  
  $res=mysqli_query($conn,$query) or die("Can't Execute Query...");

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
<style type="text/css">
  span
  {
    color: red
  }
  p
  {
    font-family: sans-serif;
  }
</style>
<body >

<?php include("includes/link.inc.php");
      include("includes/fruitslogosearch.inc.php");
       ?>
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

  <?php include('includes/footer.inc.php') ?>
</body>
</html>
