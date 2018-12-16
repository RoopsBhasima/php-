<?php
//checking the form is submitteed or not
if(isset($_POST['submit']))
{
	//getting the data from form
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$email=$_POST['email'];
	$role=$_POST['role'];

	//making statement
	$stmt="INSERT INTO users(username, password, email, role, status) VALUES ('$username', '$password', '$email', '$role',  0)";
	//making connection
	include('connection.php');
	//making query
	$qry=mysqli_query($conn, $stmt)or die(mysqli_error());
	//giving the message
	if($qry)
	{
		echo "User Registered";
	}
	else
	{
		echo "Something wrong while register the user";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="" name="formRegister" enctype="multipart/form-data">
	<input type="text" name="username" placeholder="Username"><br/>
	<input type="password" name="password" placeholder="Password"><br/>
	<input type="email" name="email" placeholder="Email"><br/>
	<input type="radio" name="role" value="1"> Admin
	<input type="radio" name="role" value="2" checked> User <br/>
	<input type="submit" name="submit" value="Register"><br/>
</body>
</html>
