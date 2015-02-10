<html>
<body>
<script src = "../js/jquery-2.1.1.min.js"> </script>
<script src = "../js/jquery.print.js"> </script>


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
	
	@media print {

		{
			background: url("../xres/images/cox3.jpg") !important;
			

		}
		*{
			background: transparent;
			color: black !important;
			text-shadow: none !important;
			filter:none !important;
			-ms-filter: none !important;
			text-align:center !important;
		}
		.hide_for_print
		{
			display: block !important;
		}
		a, a:visited {
			text-decoration: underline;
		}

		a[href]:after {
			content: " " !important;
		}
		abbr[title]:after {
			content: " (" attr(title) ")";
		}
		 .ir a:after, a[href^="javascript:"]:after, a[href^="#"]:after {
		content: "";
		}
		pre, blockquote {
			border: 1px solid #999;
			page-break-inside: avoid;
		}
		thead {
			display: table-header-group;
		}
		tr, img {
			page-break-inside: avoid;
		}
		img {
			max-width: 100% !important;
		}
		 @page 
		 {
		   margin:1.5cm;
		   size:8.5in 11in;
		   orphans:4; 
		   widows:2;

		 } 

		.no_print
		{
			display: none !important;
		}
		p, h2, h3 {
			orphans: 3;
			widows: 3;
		}
		h2, h3 {
			page-break-after: avoid;
		}
		table:before 
		{ 
			/*content: url("../image_core/ssc-a.png");*/
			position: fixed;left:100%;top:100%;opacity:0.1; 
			margin-left:100px;
		}
		table:nth-child(odd)
		{
			margin-top: 3%;
			margin-bottom: 5% !important;
		}

		table:nth-child(even)
		{
			margin-bottom: 3% !important;
		}
		table tr td,table th
		{
			font-size: 14px !important;
			white-space: pre;
			padding:0px !important;
		}
		fieldset
		{
			border:none !important;

		}
		table
		{
			margin: 0% !important;
			
			border:none !important;
		}
		table:last-child
		{
			margin-bottom: 0% !important;
		}
		table { page-break-inside : avoid }

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
   docprint.document.write('<html><head><title>Cox Rest House and Beach Resort</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<br><br>
<a class="home" href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<strong>Reservation Details</strong><br><br>
<?php

if(isset($_GET['id']))
{
include('../db.php');
$id=$_GET['id'];

//$fname=$_GET['fname'];
//$lname=$_GET['lname'];
//$address=$_GET['address'];
//$contact=$_GET['contact'];
$result = mysql_query("SELECT * FROM customer WHERE id= $id") or die(mysql_error());


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