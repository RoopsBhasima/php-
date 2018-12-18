<?php
include('inc_session.php');
?>
Hello 
<?php echo $_SESSION['username'];?>

<a href="logout.php">Logout</a>
<a href="allusers.php">view_users</a>