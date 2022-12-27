<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert</title>
	<link rel="stylesheet" href="style2.css">
</head>

<body background="img1.jpg">
	<h1>Insert collections</h1>
		<form action="producthandler.php" method="post" enctype="multipart/form-data">
			<label for="txtname" style=color: red>Item Name</label>
			<input type="text1" name="txtitemname" id="txtitemname"  placeholder="item name">
			
			<label for="txtname">Item Category</label>
			<input type="text2" name="category" id="category"  placeholder="category">
			
			<label for="txtname">Distributers</label>
			<input type="text3" name="dis" id="dis"  placeholder="distributer name">
			
			<label for="txtname">Date of arrival</label>
			<input type="text4" name="doa" id="doa"  placeholder="arrival date">
			
		     <label for="txtname">Distributers Contact</label>
			<input type="text5" name="discon" id="discon"  placeholder="contact number">
			
			 <label for="txtname">Upload an Image</label>
			<input type="file" name="imageFile" placeholder="" required>
			
				  
		
			
			<button type="submit" name="insert" >Insert</a></button>

			
			
	

				
		</form>
</body>
</html>