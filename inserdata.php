<?php
include('connection.php');
$stmt="INSERT INTO login (username,password,email,role,status)VALUES('rupesh','bhasima','rupeshbhasima@gmail.com',2,2)";
$qry=mysqli_query($conn,$stmt);
if($qry)
{
	echo "Data Inserted";
}
else
{
	echo "Insert Error";
}
?>