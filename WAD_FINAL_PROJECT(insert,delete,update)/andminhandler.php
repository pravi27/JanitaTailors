<?php session_start();
 if(isset($_POST["btnSubmit"]))
 {
	 $name = $_POST["txtName"];
	 $email = $_POST["txtEmail"];
	 $password = $_POST["txtPassword"];
	 $contact = $_POST["txtContactNo"];
	 
	 $con = mysqli_connect("localhost","root","","janitadb","3306");
	 
	 if(!$con) 
	 {
		die("Sorry !!! we are facing technical issue"); 
	 }
	 
	 $sql = "INSERT INTO `customer` (`email`, `name`, `password`, `contact_number`) VALUES ('".$email."', '".$name."', '".$password."', '".$contact."');";
	 
	 mysqli_query($con,$sql);	
	
     header('Location:login.php');

 }
?>
