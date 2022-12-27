<?php session_start();
if (isset($_SESSION["admin"]))
{
	
}
else
{
    header('Location: login.php');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
	<link rel="stylesheet" href="style2.css">
</head>

<body background="img1.jpg">
	<h1>Update collections</h1>
	<?php
	    $_SESSION["id"] = $_GET["id"];
		$con = mysqli_connect("localhost","root","","janitadb","3306");
		if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	
		$sql = "SELECT * FROM `products` WHERE `productID` = ".$_GET["id"].";";
	
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
	
	    ?>
          

		<form action="Updatehandler.php" method="post" enctype="multipart/form-data">
			<label for="txtname" style=color: red>Item Name</label>
			<input type="text1" name="txtitemname" id="txtitemname"  placeholder="item name" value="<?php echo $row["item_name"]; ?>">
			
			<label for="txtname">Item Category</label>
			<input type="text2" name="category" id="category"  placeholder="category" value="<?php echo $row["Item_category"]; ?>">
			
			<label for="txtname">Distributers</label>
			<input type="text3" name="dis" id="dis"  placeholder="distributer name" value="<?php echo $row["distributers"]; ?>">
			
			<label for="txtname">Date of arrival</label>
			<input type="text4" name="doa" id="doa"  placeholder="arrival date" value="<?php echo $row["date_of_arrival"]; ?>">
			
		     <label for="txtname">Distributers Contact</label>
			<input type="text5" name="discon" id="discon"  placeholder="contact number" value="<?php echo $row["d_contact"]; ?>">
			
			 <label for="txtname">Upload an Image</label>
			<input type="file" name="imageFile" placeholder="" value="<?php $_SESSION["imagePath"]=$row["image"]; ?>">
				  
			<button type="submit" name="insert"> Update </button>

				
		</form>
</body>
</html>