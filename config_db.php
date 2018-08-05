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
//save data dri admin panel
if (isset($_POST['reg_admin'])) {


		mysqli_query($con, "INSERT INTO user_tbl VALUES(NULL, '$uname', '$password', '$email', '$stud_id', '$f_name', '$l_name')"); 
		$_SESSION['message'] = "New Account Registered"; 
	}

//de
if (isset($_GET['del'])) {
$del = $_GET['del'];
$delQ = mysqli_query($con, "DELETE FROM user_tbl WHERE id=$uid");
}

?>