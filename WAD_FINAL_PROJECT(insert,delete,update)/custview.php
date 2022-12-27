<?php session_start();
if(isset($_SESSION["userName"]))
{
	 
}
else
{
	header("Location:login.php");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <link rel="stylesheet" href="formStyle.css" type="text/css">
    
      <style>
          html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

  body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;

 
} 
div{
  box-sizing: border-box;
}
nav{
  background: #023020;
  display: flex;
  justify-content:space-around;
  align-items: center;
  color: #fff;
}
.search
          {
              width: 25px;
  height: 3px;
  color: #333;
  margin: 5px;
  float: left;
          }
.nav-links {
    display: flex;
    justify-content:space-around;
    width: 50%;
    text-transform: uppercase;
}
.nav-links a{
  display: block;
   text-transform: uppercase;
   text-decoration: none;
   color: #fff;
  border-bottom:2px solid transparent;
  transition:0.5s ease;
  transform: translateX(0%);
}
.nav-links a:hover{
  color:#7CFC00;
  letter-spacing: 5px;
}
.burger{
  display: none;
}
.burger div{
  width: 25px;
  height: 3px;
  background: #fff;
  margin: 5px;
  transition:all 0.5s ease;
}
@media only screen and (max-width: 760px){
   nav{
    justify-content: space-between;
    padding: 0 5vw;
  }
  .nav-links{
    position: absolute;
    right: 0;
    top:8vh;
    min-height:92vh;
    background: #333;
    display: flex;
    flex-direction: column;
    align-items: center;   
    width: 50%;
    margin: 0;
    padding: 0;
    transform: translateX(100%);
    transition:All 0.5s ease-in;
  }
  .nav-links a{
    opacity: 0;
 
  }
  .burger{
    display: block;
  }
 
}
@media only screen and (max-width: 640px){
  nav{
    justify-content: space-between;
    padding: 0 5vw;
  }
}
.nav-active{
  transform: translateX(0);
}
@media only screen and (max-width: 460px){
  .nav-links{
    width: 100%;
    transition:All 0.5s ease;
  }
}
.nav-active{
  transform: translateX(0);
}
@keyframes navLinkFade{
  from{
    opacity: 0;
    transform: translateX(50px);
  }
  to{
    opacity: 1;
    transform: translateX(0);
  }
}
.toggle .line1{
   transform: rotate(-45deg) translate(-5px,6px );
}
.toggle .line2{
   opacity: 0;
}
.toggle .line3{
   transform: rotate(45deg) translate(-5px,-6px );
}
    </style>
</head>

<body>
 
 <nav>
  <div class="logo">
    <h4>Janita Tailors</h4>
  </div>
 
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</nav>
<div align="right"><form method="get" action="">
       <input type="text" name="txtSearch" id="txtSearch" placeholder="search"> <input type="submit" name="btnSubmit" value="Search">
    </form>
    </div>
<?php
	$con = mysqli_connect("localhost","root","","janitadb","3306");
	
	 if(!$con) 
	 {
		die("Cannot connect with DB server"); 
	 }
	 
	 $sql = "SELECT * FROM `products`;";
	 
	 $result = mysqli_query($con,$sql);	
	
	 if(mysqli_num_rows($result)>0)
	 {
		while($row = mysqli_fetch_assoc($result)) 
		{
			
?>

  <div class="row">
  <div class="column">
    <div class="card">
	  <p></p>
      <img src="<?php echo $row["image"]?>"  style="width:100%" >
      <div class="container">
        <h2><?php echo $row["item_name"]?></h2>        
        <p><?php echo $row["Item_category"]?></p>
		<p>Supplied by : <?php echo $row["distributers"]?> </p> 
		

      </div>
    </div>
</div>
<?php
		}
	 }		
	mysqli_close($con);		
?>
	  
</body>
</html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>