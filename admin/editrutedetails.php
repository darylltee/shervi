<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('../db.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM room where id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$roomtype=$row['roomtype'];
				$roomnumber=$row['roomnumber'];
				$price=$row['price'];

			}
?>
<form action="execeditroute.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	Room Type:<br><select class="ed" name="roomtype">
					<option>Guest</option>
					<option>Residential</option>
					<option>No Available Room</option>
				</select><br>
	Room:<br><select class="ed" name="roomnumber">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option> </option>
				</select><br>
	Price:<br><textarea name="price" class="ed"><?php echo $price ?></textarea><br>
	<input type="submit" value="Edit" id="button1">
</form>