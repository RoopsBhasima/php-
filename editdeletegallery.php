<?php
include('inc_session.php');
include('functions.php');
if(isset($_POST['update']))
{
	$utitle=$_POST['utitle'];
	$ustatus=$_POST['ustatus'];
	$udescription=$_POST['udescription'];
	$utype=$_POST['utype'];
	$uuser_id=$_POST['uuser_id'];
	$upost_id=$_POST['upost_id'];
	updateGallery($utitle,$ustatus,$udescription,$utype,$uuser_id,$upost_id);
}
if(isset($_GET['id']) && isset($_GET['action']))
{
$id=$_GET['id'];
$action=$_GET['action'];
if($action=='edit')
{
	editGallery($id);
}
elseif($action=='delete')
{
	$res=deleteGallery($id);
	if($res==1)
	{
		header("Location: allgallery.php?message='Delete Successful'");
	}
	else
	{
		header("Location: allgallery.php?message='Delete UnSuccessful'");
	}
}
else
{
	header('Location: allgallery.php');
}
}
else
{
header('Location: allgallery.php');
}
?>