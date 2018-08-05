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

//save datad dri normal user
if (isset($_POST['reg'])) {


    mysqli_query($con, "INSERT INTO user_tbl VALUES(NULL, '$uname', '$password', '$email', '$stud_id', '$f_name', '$l_name')"); 
    $_SESSION['message'] = "New Account Registered"; 
    header('location: index.html');
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


 <script type=text/javascript>
function message(){
  alert("Record successfully added!");
  return true;
}
</script>
  <div class="login-page">
  <div class="form">

    <form class="login-form" method="POST" action=#>
      First Name<input type="text" name="fname"/>
      Last Name<input type="text" name="lname"/>
      UserName<input type="text" name="username"/>
      Password<input type="password" name="password1"/>
        Email<input type="text" name="email"/>
        Student_ID<input type="text" name="stud_id"/>
     <button class="btn" type="submit" name="reg" onclick="return message()" >Register</button>
      <p class="message">registered? <a href="/site/login.php">Login</a></p>
    </form>
  </div>
</div>


  </body>
</html>