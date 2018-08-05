<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost", "root", "root","charitydb") or die("Cannot connect to server");

$username=@$_POST["username"];
$password=@$_POST["password1"];

$sql="SELECT * FROM admin_tbl WHERE admin_user ='$username'";
$result=mysqli_query($con,$sql);


if(mysqli_num_rows($result)== 0)
echo "<center><h1>User Does Not Exist In Database</h1></center></br><a href='/site/admin_login.php'><center><h2>Login</h2></center></a>";
else
{
$row=mysqli_fetch_array($result,MYSQL_BOTH);
if($row["admin_pwd"] == $password)
{
session_start();
  $_SESSION["masuk"] = true;
  $_SESSION['username'] = $row['admin_user'];
  $_SESSION['password'] = $row['admin_pwd'];
  $_SESSION["admin_uid"] = $row['admin_uid'];
  header('location:admin_panel.php');
}
else
echo "<center><h1>Wrong Password Combination </h1></center></br><a href='/site/admin_login.php'><center><h2>Login</h2></center></a>";
}
?>
</body>
</html>