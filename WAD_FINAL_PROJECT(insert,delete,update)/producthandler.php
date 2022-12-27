<?php session_start();
 if(isset($_POST["insert"]))
 {
	 $name = $_POST["txtitemname"];
	 $cat = $_POST["category"];
	 $distributer = $_POST["dis"];
	 $arrival = $_POST["doa"];
	 $contact = $_POST["discon"];
	 
	 $image ="uploads/".basename($_FILES["imageFile"]["name"]);
	 move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
	
	 
	 $con = mysqli_connect("localhost","root","","janitadb","3306");
	 
	 if(!$con) 
	 {
		die("Sorry !!! we are facing technical issue"); 
	 }
	 
	 $sql = "INSERT INTO `products` (`productID`,`item_name`, `Item_category`, `distributers`, `date_of_arrival`,`d_contact`,`image`) VALUES (NULL,'".$name."', '".$cat."', '".$distributer."', '".$arrival."', '".$contact."','".$image."');";
	 
	 if(mysqli_query($con,$sql))
		{
			echo "Product updated successfully";
			
		}
     else
		{
			echo "Oops somehting is wrong";
		}

 }
?>	