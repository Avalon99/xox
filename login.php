<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="/site/css/custom11.css" />
<link rel="stylesheet" href="/css/style123.css">


<script type=text/javascript>
function checkemp(){
if ((document.getElementById('username').value == "") || (document.getElementById('password1').value == "")){
  alert("Pls enter all fields");
  return false;
    }
}

</script>
</head>
<body>
  
<a href="index.html"><img src="images/logo2.png" alt="gmbr logo"></a>
<div class="topnav">
  <a class="" href="/site/index.php">Home</a>
  <a class="" href="/site/about.php">About</a>
  <a  href="/site/calendar.php">Calendar</a>
  <a  class="active "href="/site/login.php">Login</a>
  <a class=""href="/site/signup.php">Signup</a>
  <a class="" href="/site/admin_panel.php">Admin Panel</a>
  <a href="/site/user_panel.php">User Panel</a>
</div>


 <div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action=login_process.php onsubmit="return checkemp();">
      Username<input type="text" name="username"/>
      Password<input type="password" name="password1"/>
      <button onclick="checkemp()">login</button>
      <p class="message">Not registered? <a href="/site/signup.php">Create Account</a></p>
    </form>
  </div>
</div>


  </body>
</html>