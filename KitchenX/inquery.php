

<!DOCTYPE html>
session_start();
<html>


<!--this is back end file of contact us page handle validation of inquery
style with internal css
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

							include("db.php");

							$name = $_POST['name'];
							$email = $_POST['email'];
							$rate = $_POST['rate'];
							$message = $_POST['subject'];

							if(isEmpty($name)){
									echo "Please enter your name!";
									echo "<br>";
									echo "Go back to <a href = 'contact_Us.html'>Contact Us</a>";
							}elseif (isEmpty($email)) {
									echo "Please enter Email!";
									echo "<br>";
									echo "Go back to <a href = 'contact_Us.html'>Contact Us</a>";
							}elseif (isEmpty($message)) {
									echo "Please enter message";
									echo "<br>";
									echo "Go back to <a href = 'contact_Us.html'>Contact Us</a>";
							}/*elseif (isValid($email)) {
								echo "Email is not valid!";
								echo "<br>";
								echo "Go back to <a href = 'contact_Us.html'>Contact Us</a>";
							}*/else{
									$query = "INSERT INTO customer_inquery(name,email,rate,message) VALUES('".$name."','".$email."','".$rate."','".$message."')";

											$message=mysqli_query($conn,$query);

							echo "We got your inquery details, Thank you!";
							echo "<br>";
							echo "Go back to <a href = 'home.html'>Home</a>";

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