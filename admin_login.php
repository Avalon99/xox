<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="/site/css/custom11.css" />
  <link rel="stylesheet" href="/css/style123.css">



</head>
<body>
  <script>alert("Admin Only")</script>
  
<a href="index.html"><img src="images/logo2.png" alt="gmbr logo"></a>
<div class="topnav">
  <a class="" href="/site/index.php">Home</a>
  <a href="/site/about.php">About</a>
  <a  href="calendar.php">Calendar</a>
  <a class="active" href="/site/login.php">Login</a>
  <a href="/site/signup.php">Signup</a>
  <a class=" href="admin">Admin Panel</a>
  <a href="/site/user_panel.php">User Panel</a>
</div>


 <div class="login-page">
  <div class="form">
     <form class="login-form" method="POST" action=admin_login-s.php>
    <form class="login-form">
      Username<input type="text" name="username"/>
      Password<input type="password" name="password1"/>
      <button>login</button>
      <p class="message">Not registered? <a href="/site/signup.php">Create Account</a></p>
    </form>
  </div>
</div>


  </body>
</html>