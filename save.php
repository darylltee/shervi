<html>
<body>
<p> Your Reservation has been saved. </p>
<button type="button" onclick="window.location.href='index.php'">Home</button>
<?php
include('db.php');
function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}


if(isset($_POST['numofperson']))
{
	$confirmation = createRandomPassword();
	$date=$_POST['date'];
	$fname=$_POST['fname'];
	$numofperson=$_POST['numofperson'];
	$lname=$_POST['lname'];
	$roomnumber=$_POST['roomnumber'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];

}
$result = mysql_query("SELECT * FROM room WHERE id='$roomnumber'");
//while($row = mysql_fetch_array($result))
//	{
//	$price=$row['price'];
//	}
//	$payable=$numofperson*$price;
mysql_query("INSERT INTO customer (date, fname, lname, address, contact, transaction, roomnumber)
VALUES ('$date','$fname', '$lname', '$address', '$contact', '$confirmation', '$roomnumber')");
mysql_query("INSERT INTO reserve (date, roomnumber, transaction)
VALUES ('$date', '$roomnumber', '$numofperson', '$confirmation')");
//header("location: print.php?id=$confirmation&numofperson=$numofperson");
?>
</body>
</html>