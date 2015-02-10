<html>
<body>
<style>
	body
	{
		background-image:url('');
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
<strong>Reservation Details</strong><br><br>
<?php
include('db.php');
if(isset($_GET['date']))
{
$id=$_GET['id'];
$date=$_GET['date'];
//$fname=$_GET['fname'];
//$lname=$_GET['lname'];
//$address=$_GET['address'];
//$contact=$_GET['contact'];
$result = mysql_query("SELECT * FROM customer WHERE date='$id'");
while($row = mysql_fetch_array($result))
	{
		echo 'Date of Reservation: '.$row['date'].'<br>';
		echo 'Name: '.$row['fname'].' '.$row['lname'].'<br>';
		echo 'Address: '.$row['address'].'<br>';
		echo 'Contact: '.$row['contact'].'<br>';
		
	}
}

?>
</div>
<a class="home" href="dashboard.php">Dashboard</a>
</body>
</html>