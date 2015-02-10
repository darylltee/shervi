<?php
$mysql_hostname = "localhost";
$mysql_user = "Mine";
$mysql_password = "theone";
$mysql_database = "reserv";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>