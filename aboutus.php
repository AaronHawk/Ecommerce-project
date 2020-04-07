<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title>About Us</title>
		
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>
	
<body>
	
	<!--Main Container starts here-->
	<div class="main_wrapper">
	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			<a href="index.php"><img id="logo" src="images/hawksnestlogo.png" /> </a>
			
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="customer_register.php">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="aboutus.php"> About Us </a></li>
				
				<li><a href="contact.php">Contact Us</a></li>
			
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ > 
					<input type="submit" name="search" value="Search" />
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
	
	<h1 style= "color: cornsilk";> About Us </h1>	
	<h2 style="color: cornsilk";> The idea for Hawk's Nest came to Aaron Hawkins in a fever-dream. A world where refrigerators are desperately needed; this was the world as seen by Aaron.<br>
	Come along into a world of adventure, where your ice cream never melts and the meat is always nicely chilled. </h2>
	</div> 
<!--Main Container ends here-->


</body>
</html>