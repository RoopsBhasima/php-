<?php
if(isset($_POST['login']))
{
	$uname=$_POST['name'];
	$upass=md5($_POST['password']);
	//making statement
	$stm="SELECT * FROM users WHERE username='$uname' AND password='$upass'";
	//making connection
	include('connection.php');
	//making query
	$qr=mysqli_query($conn, $stm);

	//counting the query
	$rec=mysqli_num_rows($qr);

	//if success go to dashboard or stgay in this form
	if($rec==1)
	{
		header('Location: dashboard.php');
	}
	else{
		echo "Login Error";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="" name="userLogin" enctype="multipart/form-data">
		<fieldset>
			<legend>
				Login
			</legend>
			<input type="text" name="name" placeholder="Username"><br/>
			<input type="password" name="password" placeholder="password"><br/>
			<input type="submit" name="login" value="Login">
		</fieldset>
	</form>

</body>
</html>