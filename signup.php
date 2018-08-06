<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="/site/css/custom11.css" />
  <link rel="stylesheet" href="/css/style123.css">



</head>
<body>
  <?php
session_start();
//buat connection dgn db
$con = mysqli_connect('localhost', 'root', 'root','charitydb') or die("Cannot connect to server");

//initialize variables
 $f_name=@$_POST["fname"];
 $l_name=@$_POST["lname"];
 $uname=@$_POST["username"];
 $password=@$_POST["password1"];
 $email=@$_POST["email"];
 $stud_id=@$_POST["stud_id"];
 $uid=@$_POST['user_uid'];
$del=@$_GET['del'];

$query = "select * from user_tbl where username='$uname' ";
$result = mysqli_query($con , $query);

if (isset($_POST['reg'])) {


   if (mysqli_num_rows($result)>0) 
  {
    echo "<center><b>Username Already taken</b></center><br<br><br><a href='signup.php'><center><b>Go Back</b></center></a>";
   die();
  }
  else
  {
    $insert_sql="INSERT INTO user_tbl VALUES(NULL, '$uname', '$password', '$email', '$stud_id', '$f_name', '$l_name')";
    mysqli_query($con,$insert_sql) or die("Error in inserting data due to ".mysqli_error());
  if($insert_sql)
     header('location:login.php');
      else
    echo "Error Registering New Account";
}
}
?>
  
<a href="index.html"><img src="images/logo2.png" alt="gmbr logo"></a>
<div class="topnav">
  <a class="" href="/site/index.php">Home</a>
  <a class="" href="/site/about.php">About</a>
  <a  href="/site/calendar.php">Calendar</a>
  <a  href="/site/login.php">Login</a>
  <a class="active"href="/site/signup.php">Signup</a>
  <a class="" href="/site/admin_panel.php">Admin Panel</a>
  <a href="/site/user_panel.php">User Panel</a>
</div>



  <div class="login-page">
  <div class="form">

    <form name="daa" class="login-form" method="POST" action=#>
      First Name<input type="text" name="fname"/>
      Last Name<input type="text" name="lname"/>
      UserName<input type="text" name="username"/>
      Password<input type="password" name="password1"/>
        Email<input type="text" name="email"/>
        Student_ID<input type="text" name="stud_id"/>
     <button class="btn" type="submit" name="reg"  >Register</button>
      <p class="message">registered? <a href="/site/login.php">Login</a></p>
    </form>
  </div>
</div>


  </body>
</html>