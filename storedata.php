<body>
<?php
$con=mysqli_connect("localhost", "root", "root","charitydb") or die("Cannot connect to server");

 $f_name=@$_POST["fname"];
 $l_name=@$_POST["lname"];
 $uname=@$_POST["username"];
 $password=@$_POST["password1"];
 $email=@$_POST["email"];
 $stud_id=@$_POST["stud_id"];

$query = "select * from user_tbl where username='$uname' ";
$result = mysqli_query($con , $query);


	if (mysqli_num_rows($result)>0) 
	{
		echo "<center><b>Username Already taken</b></center>";
	 die();
	}
	else
	{
		$insert_sql="INSERT INTO user_tbl VALUES(NULL, '$uname', '$password', '$email', '$stud_id', '$f_name', '$l_name')";
		mysqli_query($con,$insert_sql) or die("Error in inserting data due to ".mysqli_error());
	if($insert_sql)
		echo "Succesfully insert new data. Please log in back";
			else
		echo "Error in inserting new data";
}		 
?>
</a></body>
</html>