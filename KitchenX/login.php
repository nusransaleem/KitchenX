
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
						input[type=text],input[type=password]{

							margin: 5px 1px 5px 5px;
						}

						input[type=submit],input[type=reset]{

							margin: 5px 0px 10px 5px;
							width:70px;
							height: 30px;
						}

						#submit{

							color: white;
							background-color: green;
						}

						#reset{

							color: white;
							background-color: red;
						}
						input[type=submit]:hover,input[type=reset]:hover {

						    opacity: 0.8;

						}
						a{
							color: wheat;
						}

</style>

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


				echo "<form action = 'getlogin.php' method = 'POST'>";
				echo"<table>";

				echo"<tr>";
				echo "<td>Email</td><td><input type = 'text' name = 'Email'></td>";
				echo "</tr>";

				echo"<tr>";
				echo "<td>Password</td><td><input type = 'password' name = 'Password'></td>";
				echo "</tr>";

				echo"<tr>";
				echo "<td><input type = 'submit' value = 'Login' id='submit'></td><td><input type = 'reset' value = 'Clear' id='reset'></td>";
				echo "</tr>";

				echo "</table>";

				echo "</form>";

				?>


		</div>

					
	</body>

</html>