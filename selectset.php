	<!DOCTYPE html>
	<html>
	<head>
	<link rel="SHORTCUT ICON" href="images/cox.ico" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Reservation | Cox Rest House and Beach Resort</title>
	<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
	<link rel="icon" type="image/png" href="xres/images/favicon.png" />
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8"/>
	</head>
                            
	<style>
		div.homelogo
		{
			position:absolute;
			left:250px;
			top:5px;
		}
	</style>

	<body>
	<div id="wrapper">

		<!--navigator-->
		<div id="header">
		<div class="homelogo" margin-top: 100px;>
		<a href="index.php"><img src="cox-edited.png" width="861" height="150" ></a>
		</div>


			<ul id="mainnav">
		
				<li><a href="index.php">Home</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href=".php">Location</a></li>				
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="otherinfo.php">Other Info</a></li>
			</ul>
		</div>
		<div id="content">
		
			<!--image rotator-->
			<div id="rotator">
				  <!--<ul>
						<li class="show"><img src="xres/images/cox4.jpg" width="861" height="379"  alt="Resort" /></li>
						<li><img src="xres/images/cox1.jpg" width="861" height="379"  alt="Pool" /></li>
						<li><img src="xres/images/cox2.jpg" width="861" height="379"  alt="Cottage" /></li>
						<li><img src="xres/images/cox3.jpg" width="861" height="379"  alt="Pathway" /></li>
						<li><img src="xres/images/cox5.jpg" width="861" height="379"  alt="Ocean View" /></li>
				  </ul> -->
				  
				  
<!--reservation form-->

<script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{
	border:0; margin:0; padding:0;
}
.spacer{clear:both; height:1px;
}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:72px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:lightgreen;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:cyan;
font-size:13px;
font-weight:italic;
}
</style>

<?php

if(isset($_POST['roomnumber']))
{
	include('db.php');
	$roomtype=$_POST['roomnumber'];
  $roomnumber = "";
	$date=$_POST['date'];
	$numofperson=$_POST['numofperson'];
	$result = mysql_query("SELECT * FROM room WHERE id='$roomtype'");

	while($row = mysql_fetch_array($result))
		{
			//$numofperson=$row['roomnumber'];
			$query = mysql_query("SELECT sum(roomnumber) FROM reserve where date = '$date'");
								while($rows = mysql_fetch_array($query))
								  {
								    $inogbuwin=$rows['sum(roomnumber)'];
								  }
			$avail=$numofperson-$inogbuwin;
			$roomnumber=$inogbuwin+1;
		}

}

?> 

<!--------user data validation----------->
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form"]["fname"].value;
if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }
var y=document.forms["form"]["lname"].value;
if (y==null || y=="")
  {
  alert("Last Name must be filled out");
  return false;
  }
var a=document.forms["form"]["address"].value;
if (a==null || a=="")
  {
  alert("Address must be filled out");
  return false;
  }
var b=document.forms["form"]["contact"].value;
if (b==null || b=="")
  {
  alert("Contact Number must be filled out");
  return false;
  }

}
</script>
<div id="stylized" class="myform">

<form id="form" name="form" action="save.php" method="post"  onsubmit="return validateForm()">
<input type="hidden" value="<?php echo $roomnumber ?>" name="roomnumber" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $numofperson ?>" name="numofperson" />
<br>
<label>First Name
<span class="small">(Enter First Name)</span>
</label>
<input type="text" name="fname"  id="name"/><br>
<label>Last Name
<span class="small">(Enter Last Name)</span>
</label>
<input type="text" name="lname"  id="name"/><br>
<label>Address
<span class="small">(Enter Address)</span>
</label>
<input type="text" name="address"  id="name"/><br>
<label>Contact
<span class="small">(Enter Contact Number)</span>
</label>
<input type="text" maxlength="11" name="contact"  id="name"/><br>
<button type="submit">Confirm</button>
</form>


						
						<!--admin login
						<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: Khaki  ; background: none repeat scroll 0px 0px teal;">Admin Login</h2>
						<div class="accordion-content" style="margin-bottom: 15px;">
							<form action="login.php" method="post" style="margin-bottom:none;">
							<span style="margin-right: 11px;">Username: <input type="text" name="username" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Password: <input type="password" name="password" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
							<input type="submit" id="submit" class="medium gray button" value="Login" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
							</form> -->
						</div> 
					</div>
			</div>
			
		</div>
		
		
		<!--footer-->
		<div id="footer">
		<tr>
		<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>       
        </tr>

		  <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      Otavi, Bulan, Sorsogon  </a></h4>
	    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      "Copyright © 2014 Cox Rest House and Beach Resort. All Rights Reserved.</p>

	</div>
	</div>
	</body>
	</html>
