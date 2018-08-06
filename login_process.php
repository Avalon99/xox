<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost", "root", "root","charitydb") or die("Cannot connect to server");

$username=@$_POST["username"];
$password=@$_POST["password1"];
$masuk=@$_POST["user_uid"];

$sql="SELECT * FROM user_tbl WHERE username ='$username'";
$result=mysqli_query($con,$sql);


if(mysqli_num_rows($result)== 0)
echo "<center><h1>User Does Not Exist In Database</h1></center></br><a href='/site/login.php'><center><h2>Go Back</h2></center></a>";
else
{
$row=mysqli_fetch_array($result,MYSQL_BOTH);
if($row["user_pwd"] == $password)
{
session_start();

  $_SESSION['masuk'] = true;
  $_SESSION['user_uid'] = $row['user_uid'];
  header('location:user_panel.php');
}
else
echo "<center><h1>Wrong Password Combination </h1></center></br><a href='/site/login.php'><center><h2>Go Back</h2></center></a>";
}
?>
</body>
</html>