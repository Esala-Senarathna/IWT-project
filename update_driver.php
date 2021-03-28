<!DOCTYPE html>
<html>
  <head>
    <title>Karen Car Rental Service</title>

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
<h3 class="whoWeAre"><center>Admin - Edit Driver Details</center></h3><br>
<?php
//linling with the Database
require 'config.php';

$driver_ID = $_POST["updateID"];
$sql= "SELECT * FROM driver_details where driverID = $driver_ID";
  if($result=$con->query($sql)){
      if($result->num_rows > 0){
        echo ("<center>");
        echo ("<table border='1'>");
        echo ("<tr>");
        echo ("<th>Driver ID</th>");
        echo ("<th>First Name</th>");
        echo ("<th>Last Name</th>");
        echo ("<th>Gender</th>");
        echo ("<th>Phone No.</th>");
        echo ("<th>E-mail</th>");
        echo ("<th>Address</th>");
        echo ("<th>Licence No.</th>");
        echo ("<th>Password</th>");
        echo ("<th>Birthday</th>");
        echo ("</tr>");
        while($record = $result->fetch_assoc()){
          ?>
          <form  action="process_update_driver.php" method="post">
          <tr>
          <td><input type="text" id="fname" class="textboxDec" name="driverID" value="<?php echo $record["driverID"];?>" required></td>
          <td><input type="text" id="fname" class="textboxDec" name="fname" value="<?php echo $record['firstName'];?>" required></td>
          <td><input type="text" id="lname" class="textboxDec" name="lname" value="<?php echo $record['lastName'];?>" required></td>
          <td><input type="text" id="female" class="textboxDec" name="gender" value="<?php echo $record['gender'];?>" required></td>
          <td><input type="text" id="teleNo" class="textboxDec" name="teleNo" pattern='[0-9]{9}' value="<?php echo $record['phoneNo'];?>" required></td>
          <td><input type="email" id="emailAddress" class="textboxDec" name="emailAddress" value="<?php echo $record['email'];?>" required></td>
          <td><input type="text" id="address" class="textboxDec" name="address" value="<?php echo $record['address'];?>" required></td>
          <td><input type="text" id="licence" class="textboxDec" name="licence" value="<?php echo $record['licenceNo'];?>" required></td>
          <td><input type="password" id="pswd" class="textboxDec" name="pswd" value="<?php echo $record['password'];?>" required></td>
          <td><input type="date" name="dob" class="textboxDec" value="<?php echo $record['DOB'];?>" required></td>
          </tr>

          <input type="submit" name="updatedDriver" value="Update Details">
          </form>
          <?php
        }
        echo ("</table>");
        echo ("</center>");
      }else{
        echo "no results";
      }
  }
  else{
    echo "Error:". $con->error;
  }
$con->close();
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
<script src="js/myJavascript.js"></script>
</body>
</html>
