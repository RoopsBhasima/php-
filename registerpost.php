<?php
include('inc_session.php');?>
<?php
//checking the form is submitted or not
if(isset($_POST['submit']))
{
    //getting the data from form
    $title=$_POST['title'];
    $keyword=$_POST['keyword'];
    $description=$_POST['description'];
    $heading=$_POST['heading'];
    $shortstory=$_POST['shortstory'];
    $fullstory=$_POST['fullstory'];
    $postdate=$_POST['postdate'];
    //making statement
$stmt="INSERT INTO post(title,keyword,description,heading,shortstory,fullstory,image,category_id,postdate,user_id,status) VALUES ('$title','$keyword','$description','$heading','$shortstory','$fullstory', 0 ,2,$postdate,1,0)";
//making connection
include('connection.php');
//making query
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
//giving the message
if($qry)
{ echo "Post Registered";}
else {echo "Somthing wrong while register the user";}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('inc_headsection.php');
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
                    <h1 class="page-header">Add Posts</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               

            <div class="col-md-12">
            
    <form method="post" action="" name="frmRegister" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Title"><br/>
    <input type="text" name="keyword" placeholder="Keyword"><br/>
    <input type="text" name="description" placeholder="Description"><br/>
    <input type="text" name="heading" placeholder="Heading"><br/>
    <input type="text" name="shortstory" placeholder="Shortstory"><br/>
    <input type="text" name="fullstory" placeholder="Fullstory"><br/>
    <input type="date" name="postdate" placeholder="PostDate"><br/>
    <input type="submit" name="submit" value="Register"><br/>
</form>
           
       
            </div>

            


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
