
<style type="text/css">

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

</style>

<!--fields to be filed-up -->
<form action="addexec.php" method="post">
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
	<input type="submit" value="Save" id="button1">
</form>
