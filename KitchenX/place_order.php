
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
include("db.php");
$item = $_POST['itemName'];
$qty = $_POST['qty'];
$date = $_POST['dateOfDelivery'];

if (isEmpty($item)) {
	echo "Please enter your item";
	echo "<br>";
	echo "Go back to <a href='dashboard.php'>Dashboard</a>";
}elseif (isEmpty($qty)) {
	echo "Please enter your quantity";
	echo "<br>";
	echo "Go back to <a href='dashboard.php'>Dashboard</a>";
}elseif (isEmpty($date)) {
	echo "Please enter your date of delivery";
	echo "<br>";
	echo "Go back to <a href='dashboard.php'>Dashboard</a>";
}else{

	$query="INSERT INTO Ordertable(order_name,order_quantity,order_date_of_delivery) 
	VALUES('".$item."','".$qty."','".$date."')";

	$val=mysqli_query($conn,$query) or die(mysqli_error());
	
	echo "we got your order ";
	echo "<br>";
	echo "Go back to <a href = 'home.html'>Home</a>";
}

function isEmpty($strValue){
	return $strValue == null;
}
?>



						

	</div>

					
	</body>

</html>