<!DOCTYPE html>
<html>
<head>
	<title>Insert Data on Category</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
// String function md5 encryption
if(empty($name) )
{
	echo "<b>Fill up the Form Completely</b>";
}
else
{
include('connection.php');
$input="INSERT INTO category(name,status) VALUES ('$name',0)";
$qry=mysqli_query($con,$input) or die(mysqli_error());
if($qry)
{
	echo "Category Registered";
}
else
{
	echo "Something Wrong";
}
}
}
?>
<form method="post" action="" name="frmRegister" enctype="multipart/form_data"><input type="text" name="name" placeholder="name"><br/>
<input type="radio" name="role" value="1">Admin
<input type="radio" name="role" value="2" checked>User<br/>
<input type="submit" name="submit" value="Register"><br/>	
</form>
</body>
</html>