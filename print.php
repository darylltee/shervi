<html>
<body>
<style>
	body
	{
		background-image:url('bg.jpg');
		background-attachment:fixed;
	}
	a.home:hover
	{
		font-size:150%;
	}
	a.home:link,a.home:visited
	{
		display:block;
		font-weight:bold;
		color:#FFFFFF;
		background-color:#000066;
		width:160px;
		text-align:center;
		padding:4px;
		text-decoration:none;
	}
</style>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
Print <br><br>
<a class="home" href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<strong>Ticket Reservation Details</strong><br><br>
<?php
include('db.php');
if(isset($_POST['roomnumber']))
{
$id=$_GET['id'];
$roomnumber=$_GET['roomnumber'];
$result = mysql_query("SELECT * FROM customer WHERE id='$id'");
while($row = mysql_fetch_array($result))
	{
		echo 'Transaction Number: '.$row['transaction'].'<br>';
		echo 'Name: '.$row['fname'].' '.$row['lname'].'<br>';
		echo 'Address: '.$row['address'].'<br>';
		echo 'Contact: '.$row['contact'].'<br>';
		//echo 'Payable: '.$row['payable'].'<br>';
	}
}
/*$results = mysql_query("SELECT * FROM reserve WHERE transaction='$id'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['room'];
		echo 'Route and Type of Bus: ';
		$resulta = mysql_query("SELECT * FROM room WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo $rowa['route'].'     :'.$rowa['type'];
			$time=$rowa['time'];
			}
		echo 'Time of Departure: '.$time;
		echo '<br>';
		echo 'Seat Number: '.$setnum.'<br>';
		echo 'Date Of Travel: '.$rows['date'].'<br>';
		
	}*/
?>
</div>
<a class="home" href="index.php">Home</a>
</body>
</html>