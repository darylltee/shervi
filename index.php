	<!DOCTYPE html>
	<html>
	<head>
	<link rel="SHORTCUT ICON" href="images/cox.ico" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Home | Cox Rest House and Beach Resort</title>
	<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
	<link rel="icon" type="image/png" href="xres/images/favicon.png" />

	<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
	<script type="text/javascript" src="xres/js/saslideshow.js"></script>
	<script type="text/javascript" src="xres/js/slideshow.js"></script>
	<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">

			<script type="text/javascript">
			$("#slideshow > div:gt(0)").hide();

			setInterval(function() { 
			  $('#slideshow > div:first')
				.fadeOut(1000)
				.next()
				.fadeIn(1000)
				.end()
				.appendTo('#slideshow');
			},  3000);
		</script>
		<!--sa calendar-->	
			<script type="text/javascript" src="js/datepicker.js"></script>
			<link href="css/demo.css"       rel="stylesheet" type="text/css" />
			<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
			<script type="text/javascript">
			//<![CDATA[

			/*
					A "Reservation Date" example using two datePickers
					--------------------------------------------------

					* Functionality

					1. When the page loads:
							- We clear the value of the two inputs (to clear any values cached by the browser)
							- We set an "onchange" event handler on the startDate input to call the setReservationDates function
					2. When a start date is selected
							- We set the low range of the endDate datePicker to be the start date the user has just selected
							- If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

					* Caveats (aren't there always)

					- This demo has been written for dates that have NOT been split across three inputs

			*/

			function makeTwoChars(inp) {
					return String(inp).length < 2 ? "0" + inp : inp;
			}

			function initialiseInputs() {
					// Clear any old values from the inputs (that might be cached by the browser after a page reload)
					document.getElementById("sd").value = "";
					document.getElementById("ed").value = "";

					// Add the onchange event handler to the start date input
					datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
			}

			var initAttempts = 0;

			function setReservationDates(e) {
					// Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
					// until they become available (a maximum of ten times in case something has gone horribly wrong)

					try {
							var sd = datePickerController.getDatePicker("sd");
							var ed = datePickerController.getDatePicker("ed");
					} catch (err) {
							if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
							return;
					}

					// Check the value of the input is a date of the correct format
					var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

					// If the input's value cannot be parsed as a valid date then return
					if(dt == 0) return;

					// At this stage we have a valid YYYYMMDD date

					// Grab the value set within the endDate input and parse it using the dateFormat method
					// N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
					var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

					// Set the low range of the second datePicker to be the date parsed from the first
					ed.setRangeLow( dt );
					
					// If theres a value already present within the end date input and it's smaller than the start date
					// then clear the end date value
					if(edv < dt) {
							document.getElementById("ed").value = "";
					}
			}

			function removeInputEvents() {
					// Remove the onchange event handler set within the function initialiseInputs
					datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
			}

			datePickerController.addEvent(window, 'load', initialiseInputs);
			datePickerController.addEvent(window, 'unload', removeInputEvents);

			//]]>
			</script> 

	</head>
                            
	<style>
		div.homelogo
		{
			position:absolute;
			left:263px;
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
		
				<li class="current"><a href="index.php">Home</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="location.php">Location</a></li>				
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="otherinfo.php">Other Info</a></li>
			</ul>
		</div>
		<div id="content">
		
			<!--image rotator-->
			<div id="rotator">
				  <ul>
						<li class="show"><img src="xres/images/cox4.jpg" width="861" height="379"  alt="Resort" /></li>
						<li><img src="xres/images/cox1.jpg" width="861" height="379"  alt="Pool" /></li>
						<li><img src="xres/images/cox2.jpg" width="861" height="379"  alt="Cottage" /></li>
						<li><img src="xres/images/cox3.jpg" width="861" height="379"  alt="Pathway" /></li>
						<li><img src="xres/images/cox5.jpg" width="861" height="379"  alt="Ocean View" /></li>
				  </ul>
				  
				  
				  <!--reservation-->
				  <div id="logo" style="right: 600px; height: auto; top: 23px; width: 260px; position: absolute; z-index:4;">
						
						<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: Khaki  ; background: none repeat scroll 0px 0px teal;">Get a Reservation</h2>
						<div class="accordion-content" style="margin-bottom: 15px;">
							<form action="selectset.php" method="post" style="margin-bottom:none;">
							<span style="margin-right: 11px;">Select Room <sup>(RoomType:RoomNumber)</sup>:
							<select name="roomnumber" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
							<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM room");
							while($row = mysql_fetch_array($result))
								{
									echo '<option value="'.$row['id'].'">';
									echo $row['roomtype'].'  :'.$row['roomnumber'];
									echo '</option>';
								}
							?> 
							</select>
							</span><br>
							<span style="margin-right: 11px;">Date: 
							<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="10" readonly="readonly" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
							</span><br>
							<span style="margin-right: 11px;">No. of Person(s) with You: 
							<select name="numofperson" style="width: 191px; margin-left: 15px; border: 5px double #CCCCCC; padding:5px 10px;">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>				
							</select>
							</span><br><br>
							<input type="submit" id="submit" value="Next" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
							</form>
						</div>
						
						<!--admin login-->
						<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: Khaki  ; background: none repeat scroll 0px 0px teal;">Admin Login</h2>
						<div class="accordion-content" style="margin-bottom: 15px;">
							<form action="login.php" method="post" style="margin-bottom:none;">
							<span style="margin-right: 11px;">Username: <input type="text" name="username" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br>
							<span style="margin-right: 11px;">Password: <input type="password" name="password" style="width: 165px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/></span><br><br>
							<input type="submit" id="submit" class="medium gray button" value="Login" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
							</form>
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

		<h4>Otavi, Bulan, Sorsogon  </a></h4>
	    <p>"Copyright © 2014 Cox Rest House and Beach Resort. All Rights Reserved.</p>

	</div>
	</div>
	</body>
	</html>
