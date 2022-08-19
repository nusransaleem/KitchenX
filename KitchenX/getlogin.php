

<!DOCTYPE html>
session_start();
<html>
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

					$flagEmail = false;
					$flagPass = false;


					$Email = $_POST['Email'];
					$Password = $_POST['Password'];

					if(isEmpty($Email) || isEmpty($Password)){
						echo "Your form is incomplete";
						echo "<br>";
						echo "Please fill in all the required details";
						echo "<br>";
						echo "Go back to <a href = 'login.php'>Login</a>";
					}else{
						if(!isValid($Email)){
							echo "email is not valid";
							echo "<br>";
							echo "Go back to <a href = 'login.php'>Login</a>";
						}else{
							$sqlEmail = "SELECT * FROM users";
							$retrievedValue = mysqli_query($conn,$sqlEmail) or die(mysqli_error());
							$count = mysqli_num_rows($retrievedValue);
							if($count >= 1){
								while($result = mysqli_fetch_array($retrievedValue)){
									if($result['userEmail'] == $Email){
										$flagEmail = true;
										if($result['userPassword'] == $Password){

											$_SESSION['c_userid'] = $result['userId'];
											$_SESSION['c_firstname'] = $result['userFName'];
											$_SESSION['c_lastname'] = $result['userSName'];

											echo "<h3>Hello, ".$_SESSION['c_firstname']." ".$_SESSION['c_lastname']."</h3>";
											echo "<br>";
											echo "You have successfully logged into the system!";
											echo "<br>";
											echo "The email you entered is $Email";
											echo "<br>";
											echo "The password you entered is secret";
											echo "<br>";
											echo "<br>";
											echo "To continue <a id='home-link' href = 'home.html'>Home</a>";
											echo "<br>";
											$flagPass = true;
										}
									}
								}

								if(!$flagEmail){
									echo "Sorry, the email you entered was not recognized";
									echo "<br>";
									echo "Go back to <a href = 'login.php'>Login</a>";
								}

								if(!$flagPass){
									echo "Sorry, the password you entered is not valid";
									echo "<br>";
									echo "Go back to <a href = 'login.php'>Login</a>";
								}

							}else{
								echo "No user got registered!";
								echo "<br>";
								echo "Go back to <a href = 'register.php'>Register</a>";
							}
							mysqli_close($conn);
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