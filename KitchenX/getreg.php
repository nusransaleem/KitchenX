

<!DOCTYPE html>
session_start();
<html>
<!--this file handle register page,this page shows successful or unsuccessful registration message for the user
this page style with internal css styling
-->
<link rel="icon" href="Resources\images\title-logo.jpg">
<title>KitchenX</title>
<meta charset="UTF-8">

<style type="text/css">

			body{
				float: left;
				background-image: url("Resources\\images\\background-image.jpg");
			}
			.header-box{

			color: wheat;
		    width: 170%;
		    text-align: left;
		    font-style: normal;
		    font-weight: bold;
		    border-bottom-style: solid;
		    border-bottom-color: wheat;

			}
			.title{
				font-family:Georgia, 'Times New Roman', Times, serif;
			    margin: 22px 5px 0px 0px;
			    font-size:90px;
			    align-content: center;  
			    color:white; 
			}
			#title-sub{
				color: wheat;
			}

			.body-message{
				width: 120%;
				padding-top: 50px;
				color: wheat;
				text-align: left;
				font-size: 20px;
			}
			#home-link{
				color: white;
				font-size: 25px;
				font-family: cursive;
			}
			a{
				color: wheat;
			}

</style>>

	<body>


		<div class="header" widt="100">

		        <div class="header-box" style="letter-spacing:4px;">

		
					<div class="header-head">
					      <img src="Resources\images\xx.jpg" id="title-logo" width="100" height="100" />
					          <font class="title">Kitchen-X</font>
					           <a id="title-sub">Online food ordering system...</a>
		            </div>
							
				</div>
		</div>

		<div class="body-message">



<?php
session_start();
include("db.php");

$FName = $_POST['FName'];
$LName = $_POST['LName'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$CPassword = $_POST['CPassword'];
if(isEmpty($FName)){
	echo "Please enter First Name!";
	echo "<br>";
	echo "Go back to <a href = 'register.php'>Register</a>";	
}else if(isEmpty($LName)){
	echo "Please enter Last Name!";
	echo "<br>";
	echo "Go back to <a href = 'register.php'>Register</a>";
}else if(isEmpty($LName)){
	echo "Please enter Last Name!";
	echo "<br>";
	echo "Go back to <a href = 'register.php'>Register</a>";
}else if(isEmpty($Email)){
	echo "Please enter Email!";
	echo "<br>";
	echo "Go back to <a href = 'register.php'>Register</a>";
}else if(isEmpty($Password)){
	echo "Please enter Password!";
	echo "<br>";
	echo "Go back to <a href = 'register.php'>Register</a>";
}else if(isEmpty($CPassword)){
	echo "Please re-enter Password!";
	echo "<br>";
	echo "Go back to <a href = 'register.php'>Register</a>";
}else{
	if(!isValid($Email)){
		echo "Email is not valid!";
		echo "<br>";
		echo "Go back to <a href = 'register.php'>Register</a>";
	}else{
		if($Password != $CPassword){
			echo "Passwords not matching!";
			echo "<br>";
			echo "Go back to <a href = 'register.php'>Register</a>";
		}else{
			$sql = "INSERT INTO users(userFName, userSName,  userEmail, userPassword)
				VALUES('".$FName."','".$LName."','".$Email."','".$Password."')";

			if(mysqli_query($conn,$sql)){
				echo "Registered Successsfully!";
				echo "<br>";
				echo "Registered workedUp Members <a href = 'login.php'>Login</a>";
			}else{
				$sqlEmail = "SELECT * FROM users WHERE userEmail = '".$Email."'";
				$resultEmail = mysqli_query($conn,$sqlEmail) or die(mysqli_error());
				$count = mysqli_num_rows($resultEmail);
				if($count >= 1){
					echo "Email address has been taken.";
					echo "<br>";
					echo "Go back to <a href = 'register.php'>Register</a>";
					echo "<br>";
				}else{
					echo "Error code:".mysqli_connect_errno($conn)."<br>".mysqli_error($conn);
				}
			}
			mysqli_close($conn);//to avoid data leackage
		}
	}
	
}

function isEmpty($strValue){
	return $strValue == null;
}

function isValid($strEmail){
	$reg =  "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/" ;
	return (bool)preg_match($reg,$strEmail);
}

?>



		</div>

					
	</body>

</html>