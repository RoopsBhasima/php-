<?php
$stmt="CREATE TABLE IF NOT EXISTS Gallery(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(250) NOT NULL,
    keyword VARCHAR(50) NOT NULL,
    description VARCHAR(250) NOT NULL,
    image VARCHAR(100) NOT NULL,
    user_id TINYINT(4) NOT NULL,
    post_id INT,
    status TINYINT(1) NOT NULL   
)";
include('connection.php');
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
if($qry)
{	echo "Table Created Successfully";}
else {echo "Error Creating table or might be exist";
}
mysqli_close($conn);
?>