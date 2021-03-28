<!DOCTYPE html>
<html>

<head><title>Karen Car Rental Service</title>
<script src="js/myJavascript.js"></script>
<link rel="stylesheet" type="text/css" href="css/myStyles.css">
</head>
<body>

<div id="header">
<div id="topicLogoAlign">
	<div>
	<img src="images/yak1.png" width="200px">
</div>
<div>
	<h1 id="topic">KAREN CAR RENTAL SERVICE</h1>
</div>
<div>
	<p align="right">
		<a class="head1" href="login.html">Sign in</a>
	 |
		<a class="head1" href="#">Sign up</a><br>
		<input type="text" id="searchBar" maxlength="5"><br>
		<input type="button" value="search" class="searchButton" id="topUp">
</p>
</div>
</div>

<div>
<ul class="menu">
	<li class="menu"><a href="home.html">Home</a></li>
	<li class="menu"><a href="branches.html">Branches</a></li>
	<li class="menu"><a href="packages.html">Packages</a></li>
	<li class="menu"><a href="help.html">Help</a></li>
	<li class="menu"><a href="ContactUs.html">Contact Us</a></li>
	<li class="menu"><a href="aboutUs.html">About Us</a></li>
</ul>
</div>
</div>

<div class="orderConfirmDesign">

<?php

require 'config.php';

$required_date = $_POST["requDate"];
$required_time = $_POST["requTime"];
$pickup_location = $_POST["pickup"];
$drop_location = $_POST["destination"];
$payment_method = $_POST["paymentMethod"];
$accountNumber = $_POST["account"];
$vehicle_num = $_POST["vehicleNum"];

$sql = "INSERT INTO order_details(requiredDate, requiredTime, pickupLocation, dropLocation, paymentMethod, accountNumber, vehicleNo) VALUES('$required_date', '$required_time', '$pickup_location', '$drop_location', '$payment_method', '$accountNumber', '$vehicle_num')";

if($con->query($sql)){
		echo "<center><h3 class='whoWeAre'>THANK YOU...<br></h1>Order details and payment details confirmed successfully</h1></center>";
}
	else{
		echo "Error occured:". $con->error;
	}
$con->close();

?>
<br>
<center><a href="userAccount.html"><input type="button" value="Go back to user Profile" class="searchButton"></a></center>
</div>

<footer>
<div class="gridFooter">
  <div class="g1">
  <h2>Copyrights@2020</h2><br>
  <input type="button" value="TOP" onclick="backToTopFunction()" id="TopUp" class="searchButton" >

  </div>
  <div class="g2">
  <center><h2>Download us at</h2>
  <br>
  <a href="https://play.google.com/store/movies"><img src="images/playstore.png" id="playstoreIcon" class="imgIcons" height="100px" width="auto"></a></br>
  <a href="https://www.apple.com/ios/app-store/"><img src="images/appstore.png" id="appstoreIcon" class="imgIcons" height="84px" width="auto"></a><br>
  <a href="ContactUs.html" class="head1">Contact us</a>  |  <a href="aboutUs.html" class="head1">About us</a><br>

  </center>
  </div>
  <div class="g3">
  <div align="right" id="follow"><h2>Follow us:</h2><br><br>
    <a href="https://www.facebook.com/"><img src="images/facebook.png" class="social" id="facebookIcon" height="50px" width="auto"></a>
    <a href="https://www.instagram.com/"><img src="images/Instagram.png" class="social" height="50px" width="auto"></a>
    <a href="https://twitter.com/explore"><img src="images/Twitter.png" class="social" height="50px" width="auto"></a>
  </div>
  </div>
</div>

</footer>
</body>
</html>
