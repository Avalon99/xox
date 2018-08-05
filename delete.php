<?php
$con=mysqli_connect("localhost", "root", "root","charitydb") or die("Cannot connect toserver.".mysqli_error($con));
$user_uid=@$_POST["user_uid"];
$sql_delete="DELETE FROM user_tbl WHERE user_uid='$user_uid' ";
$sql_result=mysqli_query($con,$sql_delete) or die("Error in sql due to ".mysql_error());
if($sql_result)
 echo "Succesfully deleted.";
 else
 echo "Error in deleting the data”;
?> 