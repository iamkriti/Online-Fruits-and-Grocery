<?php session_start();
require('database/config.php');
	if(isset($_GET['nm']) and isset($_GET['cat']) and isset($_GET['rate']))
	{
		//add item
		$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"cat"=>$_GET['cat'],"rate"=>$_GET['rate'],"qty"=>"1");
		header("location: viewcart.php");
		echo '<br>' ;
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		$query = "delete from orders where id = '".$id."' and uid = '".$_SESSION['id']."'" ;
		$res = mysqli_query($conn,$query);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{
			foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;

			
			$query = "update orders set quantity = '".$_SESSION['cart'][$id]['qty']."' where id = '".$id."'" ;
			$res  = mysqli_query($conn,$query);
			header("location: viewcart.php");
		}
	}


?>