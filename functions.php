<?php
function deleteCategory($id)
{
	$stmt="DELETE FROM category WHERE id=$id";
	include('connection.php');
	$qry=mysqli_query($conn,$stmt);
	if($qry)
	{
		return 1;
	}
	else
	{
		return 0;
	}
mysqli_free_result;
mysqli_close($conn);
}
function editCategory($id)
{
	$stmt="SELECT *FROM category WHERE id=$id";
	include('connection.php');
	$qry=mysqli_query($conn,$stmt);
	while($row=mysqli_fetch_assoc($qry))
	{
		$uid=$row['id'];
		$uname=$row['name'];
		$ustatus=$row['status'];
	}
	echo "<form method='post' name='editCategory' action='' enctype='multipart/form-data'>
	<fieldset>
	<legend>EDIT CATEGORY $uid </legend>
	<input type='hidden' name='uid' value='$uid'>
	<input type='text' name='uname' value='$uname'><br>
	<input type='text' name='ustatus' value='$ustatus'><br>
	<input type='submit' name='update' value='UPDATE' >
	</fieldset>
	</form>";
}

function updateCategory($uid, $uname, $ustatus)
{
	$stmt="UPDATE category SET name='$uname', status='$ustatus' WHERE id=$uid";
	include('connection.php');
	$qry=mysqli_query($conn,$stmt);
	if($qry)
	{
		header("Location: allcategory.php?message='Update Success'");
	}
	else
	{
		header("Location: allcategory.php?message='Update Error'");
	}
	mysqli_close($conn);
}
?>