<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Adminmanage</title>
	<link rel="stylesheet" href="style2.css">
	<style type="text/css"> </style>
</head>

<body background="img4.jpg">
	<h2>Janita Tailors</h2>
<div class="container" id="container">
	
		<form class="formbox" action="andminhandler.php" method="post">
			<h1>Create Account</h1>
					
			<input type="text" placeholder="Name" name="txtName" id = "txtName"/>
			<input type="email" placeholder="Email" required name="txtEmail" id="txtEmail"/>
			<input type="password" placeholder="Password" id="txtPassword" name="txtPassword" required/>
            	<input type="password" placeholder="Confirm Password" id="txtConfimPassword" name="txtConfimPassword"/>
            <input type="number" placeholder="Contact Number" name="txtContactNo" id="txtContactNo" pattern="[0-9]{10}" required />        
            
			<input type="submit" value="Sign Up" onClick="checkPassword()"  name="btnSubmit" >
            <p><a href="home.html">Home</a></p
		</form>
        
	</div>
</body>
</html>