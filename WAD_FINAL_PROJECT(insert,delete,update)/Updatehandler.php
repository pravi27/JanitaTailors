<?php session_start();
		$itemName = $_POST["txtitemname"];
		$itemCategory = $_POST["category"];
		$distributers = $_POST["dis"];
		$dateOfArrival = $_POST["doa"];
		$distributerContact = $_POST["discon"];
		
		if (!file_exists($_FILES['imageFile']['tmp_name']) ||
		   !is_uploaded_file($_FILES['imageFile']['tmp_name']))
			{
				$image = $_SESSION["imagePath"];
			}
			else
			{
				$image = "uploads/".basename($_FILES["imageFile"]["name"]);
				move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);
			}
		
		$con = mysqli_connect("localhost","root","","janitadb","3306");
		
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
		
		$sql = "UPDATE `products` SET `item_name` = '".$itemName."', `Item_category` = '".$itemCategory."', `distributers` = '".$distributers."', `date_of_arrival` = '".$dateOfArrival."', `d_contact` = '".$distributerContact."', `image` = '".$image."' WHERE `products`.`productID` = ".$_SESSION["id"].";";
		
		if (mysqli_query($con, $sql) )
		{
				header('Location:editview.php');
		}
		else
		{
			echo "Sorry!! We are facing a technical issue! try again later!";
		}
?>