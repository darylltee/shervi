<!---inserting rooms to database--->
<?php
	include('../db.php');
	$id = $_POST['id'];
	$roomtype=$_POST['roomtype'];
	$roomnumber=$_POST['roomnumber'];
	//$price=$_POST['price'];
	//$seat=$_POST['seat'];
	//$time=$_POST['time'];
	mysql_query("UPDATE room SET roomtype='$roomtype', roomnumber='$roomnumber' WHERE id='$id'");
	header("location: route.php");
?>