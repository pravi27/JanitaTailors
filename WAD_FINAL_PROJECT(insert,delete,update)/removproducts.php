<?php session_start();
$con = mysqli_connect("localhost", "root", "","janitadb", "3306");
       if(!$con){
		   die("Cannot connect to DB server");
	   }

       $sql = "DELETE FROM `products` WHERE `products`.`productID` = ".$_GET["id"];


        if(mysqli_query($con,$sql))
		{
				header("Location: showall.php");
		}
 ?>