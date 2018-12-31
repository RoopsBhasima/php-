<?php
include('inc_session.php');
include('functions.php');

if(isset($_POST['update']))
{
	$uid=$_POST['uid'];
	$uname=$_POST['uname'];
	$ustatus=$_POST['ustatus'];

	updateCategory($uid, $uname, $ustatus);
}

if(isset($_GET['id'])&&isset($_GET['action']))
{
	//do something
	$id=$_GET['id'];
	$action=$_GET['action'];
	if ($action=='edit')
	{
		editCategory($id);
		//echo "edit";

	}
	elseif($action=='delete')
	{
		$res=deleteCategory($id);
		if($res==1)
		{
			header("Location: allcategory.php?message='Delete Success'");
		}
	}
	else
	{
		header("Location: allcategory.php?message='Delete Fail'");
	}
}
else
{
	header("Location: allcategory.php");
}
?>