	<?php session_start();
 if(isset($_POST["btn"]))
 {
	 $userName = $_POST["txtEmail"];
	 $password = $_POST["txtPassword"];
	 
	 $con = mysqli_connect("localhost","root","","janitadb","3306");
	 
	 if(!$con) 
	 {
		die("Sorry !!! we are facing technical issue"); 
	 }
	 
	 
	 $sql =  "SELECT * FROM `admin` WHERE `Email`= '".$userName."' and `password`='".$password."'";
	  $sql1 =  "SELECT * FROM `customer` WHERE `email`= '".$userName."' and `password`='".$password."'";
	 
	 $result = mysqli_query($con,$sql);	
	 $result1 = mysqli_query($con,$sql1);	
	 
	 if(mysqli_num_rows($result)>0)
	 {
		 //Create session 
		 $_SESSION["admin"] = $userName;
		 header('Location:management.php');
	 }
	 else if (mysqli_num_rows($result1)>0)
	 {
		 $_SESSION["userName"]= $userName;
		  header('Location:customerAccount.php');
	 } 
	 else
	 {
		 header('Location:login.php');
	 }
 }
?>