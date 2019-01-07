<?php
include('inc_session.php');
include('functions.php');
if(isset($_POST['update']))
{
	$utitle=$_POST['utitle'];
	$ustatus=$_POST['ustatus'];
	$ukeyword=$_POST['ukeyword'];
	$udescription=$_POST['udescription'];
	$uheading=$_POST['uheading'];
	$ushortstroy=$_POST['ushortstroy'];
	$ufullstory=$_POST['ufullstory'];
	$ucategory_id=$_POST['ucategory_id'];
	$uuser_id=$_POST['uuser_id'];
	updatePost($utitle,$ustatus,$ukeyword,$udescription,$uheading,$ushortstroy,$ufullstory,$ucategory_id,$uuser_id);
}
if(isset($_GET['id']) && isset($_GET['action']))
{
$id=$_GET['id'];
$action=$_GET['action'];
if($action=='edit')
{
	editPost($id);
}
elseif($action=='delete')
{
	$res=deletePost($id);
	if($res==1)
	{
		header("Location: allpost.php?message='Delete Successful'");
	}
	else
	{
		header("Location: allpost.php?message='Delete UnSuccessful'");
	}
}
else
{
	header('Location: allpost.php');
}
}
else
{
header('Location: allpost.php');
}
?>