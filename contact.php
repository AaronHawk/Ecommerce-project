<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");

?>
<html>
	<head>
		<title>Contact Us</title>
		
		
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
<h1 style= "color: cornsilk";> Contact Us! </h1>
<h2 style= "color: cornsilk";>Name: <input type="text" name="name"> </h2>

<h2 style= "color: cornsilk";> E-mail: <input type="text" name="email"> </h2>

<h2 style= "color: cornsilk";>Subject: <input type="text" name="subject"> </h2>

<h2 style= "color: cornsilk";> Comment: <textarea name="comment" rows="5" cols="40"> </textarea> </h2>

<button style = "padding:5px 15px; 
    background:#ccc; 
    border:4 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; "> Submit </button>


<!--Main Container ends here-->


</body>
</html>