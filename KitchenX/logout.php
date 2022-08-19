<?php

//this file handle log out functions in whole website
session_start();

$pagename="Log Out";

//call in the style 

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
//include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

unset($_SESSION['c_userid']);
unset($_SESSION['c_firstname']);
unset($_SESSION['c_lastname']);

session_destroy();
echo "You have successfully logged out";


header('location:register.php');


?>
