<?php
include('connection.php');
$stmt="CREATE TABLE IF NOT EXISTS post(
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(250) NOT NULL,
keyword VARCHAR(50) NOT NULL,
description VARCHAR(250) NOT NULL,
heading VARCHAR(250) NOT NULL,
shortstory VARCHAR(250) NOT NULL,
fullstory text NOT NULL,
image VARCHAR(100) NOT NULL,
category_id tinyint(4) NOT NULL,
postdate VARCHAR(50) NOT NULL,
user_id tinyint(4) NOT NULL,
status TINYINT(1) NOT NULL,
UNIQUE (heading)
)";
$qry=mysqli_query($con,$stmt) or die(mysqli_error());
if($qry)
{
	echo "Table Created Successfully";
}
else
{
	echo "Error Creating table or might exist";
}
?>