
<br>

<h2 style="text-align:center; ">Do you really want to DELETE your account?</h2>

<form action="" method="post">

<br>
<input type="submit" name="yes" value="Yes, delete my account" /> 
<input type="submit" name="no" value="No, don't delete my account" />


</form>

<?php 
include("includes/db.php"); 

	$user = $_SESSION['customer_email']; 
	
	if(isset($_POST['yes'])){
	
	$delete_customer = "delete from customers where customer_email='$user'";
	
	$run_customer = mysqli_query($con,$delete_customer); 
	
	echo "<script>alert('Account successfully deleted.')</script>";
	echo "<script>window.open('../index.php','_self')</script>";
	}
	if(isset($_POST['no'])){
	
	echo "<script>alert('Account not deleted.')</script>";
	echo "<script>window.open('my_account.php','_self')</script>";
	
	}
	


?>