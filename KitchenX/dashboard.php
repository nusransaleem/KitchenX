<?php
session_start();

?>
<!DOCTYPE html>


<html>
<!-- user can place order from this page, and user can check thier ordered items from this page
this page style by dashbord style sheet
get user detais from database
-->
<link rel="icon" href="Resources\images\title-logo.jpg">
<title>Dashboard</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="Resources\Style-sheets\Main-style.css">
<link rel="stylesheet" href="Resources\Style-sheets\Dashbord-style.css">

<style>
    body {
        font-family: "Times New Roman", Georgia, Serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Playfair Display";
        letter-spacing: 5px;
    }
</style>

<body>

    <div class="header">

        <div class="header-box" style="letter-spacing:4px;">
            <div class="header-head">
                <img src="Resources\images\xx.jpg" id="title-logo" width="100" height="100" />
                <font class="title">Kitchen-X</font>
                <a id="title-sub">Online food ordering system</a>
            </div>

            <div class="header-buttons">
                <a href="home.html" class="header-links">Home</a>
                <a href="dashboard.php" class="header-links">Dashboard</a>
                <a href="contact_Us.html" class="header-links">Contact</a>
                <a href="about_Us.html" class="header-links">About</a>

                <div class="dropdown">

                    <button class="header-links">::

                    </button>
                    <div class="dropdown-content">
                        
                        <a href="logout.php">Logout</a>
                    </div>

                </div>


            </div>


        </div>

    </div>


    <aside class="aside-navigation">
        <nav class="side-navigation">
            <div class="side-navigation-bar">

                <div class="side-navigation-title">
                    Kitchen-X
                </div>

                <div class="side-navigation-item">
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                        Place Oreder
                    </button>
                </div>


            </div>
        </nav>
    </aside>

    <div class="body-content">
<?php
include('detectlogin.php');
?>
<?php

include ("db.php");

$SQL="select * from Ordertable";

$exeSQL=mysqli_query($conn,$SQL) or die (mysqli_error());


while ($arrayprod=mysqli_fetch_array($exeSQL))
{
    echo "<br>";
    echo "<p>Item :".$arrayprod['order_name']." </p>";
    echo "<p>Jar id : ".$arrayprod['id']."</p>";
    echo "<img src=images/img.jpg style='width:10%;'>"; 
    echo "<br>";
    echo "<p>Quantity : ".$arrayprod['order_quantity']."</p>";  
    echo "<br>";
    echo "<p>Date : ".$arrayprod['order_date_of_delivery']."</p>";  
    echo "<br><br>";
    echo "<hr>";
	//here all of the variables passed by string ,because its prevent mysql injection
}
mysqli_close($conn);//to avoid data leackage

?>

    </div>





    <div id="id01" class="modal">

        <form class="modal-content animate" action="place_order.php" method="POST">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="Resources/images/Place-order.png" alt="Place order" class="img">
            </div>

            <div class="container">
                <label for="item" class="popup">
                    <b>Your item</b>
                </label>
                <input type="text" placeholder="Enter Your item" name="itemName" required>
                    <br>
                <!--select id="items" onchange="setItem">
                    <option value="">Select</option>
                    <option value="sugar">Sugar</option>
                    <option value="rice">Rice</option>
                    <option value="dhal">Dhal</option>
                    <option value="flour">Flour</option>
                </select-->
                <label for="qty" class="popup">
                    <b>Quantity..</b>
                </label>
                <input type="text" placeholder="qty" name="qty" required>

                <br>
                <label for="date" class="popup">
                    <b>Date of delivery.</b>
                </label>
                <button class="calendar" onclick="calendar()">
                </button>
                <input type="date" id="dateOfDelivery" placeholder="date of delivery" name="dateOfDelivery"/>
                <br>
                <label>
                    <input type="checkbox" name="robot"> I am not robot
                </label>

            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="submit" class="Submitbtn">Submit</button>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>

    <footer>
        <font>Product by SN
            <sup>2</sup> KIWI @ 2018</font>

    </footer>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";

            }
        }



    </script>
</body>

</html>