<?php
//inserting data to database
include('../db.php');
$roomtype=$_POST['roomtype'];
$roomnumber=$_POST['roomnumber'];
$price=$_POST['price'];

$update=mysql_query("INSERT INTO room (roomtype, roomnumber, price)
VALUES
('$roomtype','$roomnumber','$price')");
header("location: room.php");
?>
