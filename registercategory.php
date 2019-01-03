<?php
include('inc_session.php');?>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$status=$_POST['status'];
// String function md5 encryption
if(empty($name) )
{
    echo "<b>Fill up the Form Completely</b>";
}
else
{
include('connection.php');
$input="INSERT INTO category(name,status) VALUES ('$name','$status')";
$qry=mysqli_query($conn,$input) or die(mysqli_error());
if($qry)
{
    echo "Category Registered";
}
else
{
    echo "Something Wrong";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php 
    include('inc_headsection.php');
    ?>

    <link href="datatable/jquery.dataTables.min.css" type="text/css" rel="stylesheet"> 
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>

    <div id="wrapper">

     <?php include('inc_navbar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Categories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               

            <div class="col-md-12">
            
 
       
            </div>
<form method="post" action="" name="frmRegister" enctype="multipart/form_data"><input type="text" name="name" placeholder="name"><br/>
<input type="radio" name="status" value="0">Status 0
<input type="radio" name="status" value="1" checked>Status 1<br/>
<input type="submit" name="submit" value="Register"><br/>   
</form>
            


            </div>
            <!-- /.row -->
      
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('inc_footerscript.php');?>
    <script src="datatable/jquery.dataTables.min.js">
    </script>

    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>

</body>

</html>
