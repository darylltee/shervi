<?php
	require_once('auth.php');
?>
<html>
<head>
<title>Room | Cox Rest House and Beach Resort</title>

<!--css/jq/js-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	

<!--Edit pop up menu-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
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
</head>
<body>

	<!--main container--->
	<div id="container">
		
		<!--admin-->
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/images.jpg">
					</a>
					<div class="tcenter">
					Hi
					<strong>Admin</strong>
					!
					<br>
					<a class="alightred" href="../index.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		
		<!------container or dashboard------->
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
			
				<!--navigator-->
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a href="dashboard.php">
							<img alt="Dashboard" src="img/dboard1.png">
							<span>Dashboard</span>
						</a>
					</li>
					
					<li>
						<a class="active" href="room.php">
							<img alt="Statistics" src="img/room1.png">
							<span>Room</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				
				<!--dashboard table-->
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter">
					<a rel="facebox" href="addroute.php">Add Room</a>
					
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Room Type </th>
								<th> Room Number </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						
						<!-------retrieve data from database------>
						<?php
							include('../db.php');
							$result = mysql_query("SELECT * FROM room");
							
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['roomtype'].'</td>';
									echo '<td><div align="right">'.$row['roomnumber'].'</div></td>';
									/*echo '<td><div align="right">'.$row['price'].'</div></td>'; */
									echo '<td><div align="center"><a rel="facebox" href="editrutedetails.php?id='.$row['id'].'">edit</a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>'; 
								}
							?> 
						</tbody>
					</table>
				</div>

				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
<!--warning in deleting because of important data lost-->
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteroute.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>