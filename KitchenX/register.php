<!DOCTYPE html>
session_start();
<html>

<!--this page is the welcome page of our website,register activity and loging activity in this page,style by welcom-style stylesheet
validating by getlogin.php and getreg.php
-->
<link rel="icon" href="Resources\images\title-logo.jpg">
<title>KitchenX</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Resources/Style-sheets/Welcome-style.css">

	<body>
			 <div class="header">

		        <div class="header-box" style="letter-spacing:4px;">

					<table width="100%">
						<tr>
							<td>
								
								<div class="header-head">
					                <img src="Resources\images\xx.jpg" id="title-logo" width="100" height="100" />
					                <font class="title">Kitchen-X</font>
					                <a id="title-sub">Online food ordering system</a>
		            			</div>
							</td>

							<td>
							 	<div class="login">
				            	   <?php
										include("db.php");


										echo "<form action = 'getlogin.php' method = 'POST'>";
										echo"<table>";

										echo"<tr>";
										echo "<td>Email</td><td>Password</td>";
										echo "</tr>";

										echo"<tr>";
										echo "<td><input type = 'text' name = 'Email'></td><td><input type = 'password' name = 'Password'></td>";
							
										echo "<td><input type = 'submit' value = 'Login' id='submit'><input type = 'reset' value = 'Clear' id='reset'></td>";
										echo "</tr>";

										echo "</table>";

										echo "</form>";

									?>
								</div>

							</td>
			
						</tr>

					</table>
		        		
		         </div>
		 	 </div>  


	    <div class="main-container">

	        <label for="form-name" id="register" >Register</label>

				<?php
				include('db.php');

				echo "<form action = 'getreg.php' method = 'POST'>";
				echo"<table>";

				echo"<tr>";
				echo "<td>First Name</td><td><input type = 'text' name = 'FName' required></td>";
				echo "</tr>";

				echo"<tr>";
				echo "<td>Last Name</td><td><input type = 'text' name = 'LName' required></td>";
				echo "</tr>";

				echo"<tr>";
				echo "<td>Email Address</td><td><input type = 'text' name = 'Email' required></td>";
				echo "</tr>";

				echo"<tr>";
				echo "<td>Password</td><td><input type = 'password' name = 'Password' required></td>";
				echo "</tr>";

				echo"<tr>";
				echo "<td>Confirm Password</td><td><input type = 'password' name = 'CPassword' required></td>";
				echo "</tr>";

				echo"<tr>";
				echo "<td><input type = 'submit' value = 'Register' id='submit'></td><td><input type = 'reset' value = 'Clear'  id='reset' required></td>";
				echo "</tr>";

				echo "</table>";

				echo "</form>";
				?>

		</div>		


	</body>
</html>