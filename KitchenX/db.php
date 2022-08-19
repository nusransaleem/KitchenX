<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass) ;
if (!$conn)
  {
  	echo mysql_error();
  	die('Could not connect: ' . mysql_error());
  }
mysqli_select_db($conn, "id5012554_db");
?>
