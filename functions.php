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
?>