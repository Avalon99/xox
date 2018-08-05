<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="/site/css/custom11.css" />
<link rel="stylesheet" type="text/css" href="/site/css/jam.css" />



</head>
<body>
  <div id="countdown">
  <div id='tiles'></div>
  <div class="labels">
    <li>Days</li>
    <li>Hours</li>
    <li>Mins</li>
    <li>Secs</li>
  </div>
</div>
<a href="index.html"><img src="images/logo2.png" alt="gmbr logo"></a>
<div class="topnav">
  <a class="" href="/site/index.php">Home</a>
  <a class="" href="/site/about.php">About</a>
  <a  class="active" href="/site/calendar.php">Calendar</a>
  <a  href="/site/login.php">Login</a>
  <a class=""href="/site/signup.php">Signup</a>
  <a class="" href="/site/admin_panel.php">Admin Panel</a>
  <a href="/site/user_panel.php">User Panel</a>
</div>

            <h3>Run Calendar</h3>
            <h2>Date:3 SEPTEMBER 2018</h2> 
            <h2>Location: UNITEN Putrajaya</h2>



<script type="text/javascript">

var target_date = new Date().getTime() + (4231104000); // set the countdown date
var days, hours, minutes, seconds; // variables for time units

var countdown = document.getElementById("tiles"); // get tag element

getCountdown();

setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){

  // find the amount of "seconds" between now and target
  var current_date = new Date().getTime();
  var seconds_left = (target_date - current_date) / 1000;

  days = pad( parseInt(seconds_left / 86400) );
  seconds_left = seconds_left % 86400;
     
  hours = pad( parseInt(seconds_left / 3600) );
  seconds_left = seconds_left % 3600;
      
  minutes = pad( parseInt(seconds_left / 60) );
  seconds = pad( parseInt( seconds_left % 60 ) );

  // format countdown string + set tag value
  countdown.innerHTML = "<span>" + days + "</span><span>" + hours + "</span><span>" + minutes + "</span><span>" + seconds + "</span>"; 
}

function pad(n) {
  return (n < 10 ? '0' : '') + n;
}
    </script>



  </body>
</html>