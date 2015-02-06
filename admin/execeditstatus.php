<!--inserting statue to database -->
<?php
	include('../db.php');
	

	$transaction = $_POST['id'];
	$status=$_POST['status'];


	mysql_query("UPDATE customer SET status='$status' WHERE id='$transaction'") or die(mysql_error());

	header("location: dashboard.php");

?>