<?php
//session_start();
//this page used for detect user 
//this page used in dashbord page
if(isset($_SESSION['c_userid'])){

	echo "<p style = 'text-align:right; font-style:italic;'>Name: ".$_SESSION['c_firstname']." ".$_SESSION['c_lastname']." / Customer No.: ".$_SESSION['c_userid']."</p>";

	//here all of the variables passed by string ,because its prevent mysql injection

	}

?>