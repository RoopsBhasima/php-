<?php
session_start();
if(!isset($_SESSION['sid']))
{
    header('Location: index.php');
}

$ctime=time();
if($ctime-$_SESSION['logintime']>=600)
{
    session_destroy();
    header('Location: index.php');
}
?>