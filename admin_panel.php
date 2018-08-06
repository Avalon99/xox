<?php
	session_start();
  $_SESSION["admin_uid"] = '';
	if($_SESSION["admin_uid"] != 1) {
    echo("<center><h1>Access Denied</h1></center><br/>");
    echo "<center><h1><b>Uh oh looks like you're not loggin as admin</b></center><br/>
        <a href='admin_login.php'><center>Admin Login</center></a>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="/site/css/viewtablesearch.css" />
<link rel="stylesheet" type="text/css" href="/site/css/custom11.css" />

</head>

<a href="index.html"><img src="images/logo2.png" alt="gmbr logo"></a>
<div class="topnav">
  <a class="" href="/site/index.php">Home</a>
  <a class="" href="/site/about.php">About</a>
  <a  href="/site/calendar.php">Calendar</a>
  <a  class=""href="/site/login.php">Login</a>
  <a class=""href="/site/signup.php">Signup</a>
  <a class="active" href="/site/admin_panel.php">Admin Panel</a>
  <a href="/site/user_panel.php">User Panel</a>
</div>
					<div class="cari"
 					<form method="post" action="#">
  						  <select name="search">
    						<option>ID</option>
        					</select>

	    				<input type="text" name="txtsearch" placeholder="Enter ID" /><input type="submit" name="search" value="Filter" />
  					</form>
					</div>
				
					<a href="/site/logout.php"><button class="cari" type=submit value=logout>Log out</button></a>	

<?php
 echo "<table border='4'><tr>
 <td><b>User ID</b></td>
 <td><b>Username</b></td>
 <td><b>Password</b></td>
 <td><b>Email</b></td>
 <td><b>Student ID</b></td>
 <td><b>First Name</b></td>
 <td><b>Last Name</b></td>
 <td><b>Action</b></td>
 </tr>";
$con=mysqli_connect("localhost", "root", "root","charitydb") or die("Cannot connect to server.".mysqli_error($con));
$sql="SELECT * FROM user_tbl";
$result=mysqli_query($con,$sql) or die("Cannot execute sql.");
 while($ww=mysqli_fetch_array($result,MYSQL_BOTH))
 {
 $uid=$ww[0];
 $name=$ww[1];
 $pwd=$ww[2];
 $email=$ww[3];
 $studid=$ww[4];
 $fname=$ww[5];
 $lname=$ww[6];

 echo "<tr>
 <td>$uid</td>
  <td>$name</td>
  <td>$pwd</td>
  <td>$email</td>
  <td>$studid</td>
  <td>$fname</td>
  <td>$lname</td>
  <td><button type=submit value=edit>Edit</button><button type=submit value=del>Delete</button> </td>
   

 </tr>";
 }
 echo "</table>";
?>
</body>
</html>