<?php
session_start();
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

//counting the records
$rec=mysqli_num_rows($qr);

//if success go to dashboard or stay in this form
if($rec==1)
{
    $_SESSION['sid']=md5(rand(1,9999));
    $_SESSION['username']=$uname;
    $_SESSION['logintime']=time();
    header('Location: dashboard.php');
}
else{
    echo "Unable to login";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form method="POST" action="" name="userLogin" enctype="multipart/form-data">
<fieldset>
    <legend>
    Login
    </legend>
        <input  type="text" name="name" placeholder="Username"><br/>
        <input type="password" name="password" placeholder="password"><br/>
        <input type="submit" name="login" value="Login">
</fieldset>
</form>
    
</body>
</html>