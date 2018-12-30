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
    $category_id=$_POST['category_id'];
    $user_id=$_POST['user_id'];
$tmpname=$_FILES['Upload']['tmp_name'];
$size=$_FILES['Upload']['size'];
$name=$_FILES['Upload']['name'];
$type=$_FILES['Upload']['type'];
$path="../uploads/";
//Use that or .
$fpath=$path.$name;
if(!empty($name))
{
if($type=="image/jpeg" OR $type=="image/jpg" OR $type=="image/png" )
{
if(move_uploaded_file($tmpname,$path.$name))
{
  echo "File Uploaded";
  echo "<img src=$path$name>";
}
else
{
  echo "Something Wrong";
}
}
else
{
  echo "Unknown image type";
}
}
else
{
  echo "Please Choose a file";
}
    //making statement
$stmt="INSERT INTO post(title,keyword,description,heading,shortstory,fullstory,image,category_id,postdate,user_id,status) VALUES ('$title','$keyword','$description','$heading','$shortstory','$fullstory', '$name' ,$category_id,$postdate,$user_id,0)";
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

    

    <?php include('inc_headsection.php');?>
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
    <textarea rows="2" cols="30" type="text" name="title" placeholder="Title"></textarea>
    <br/>
    <textarea rows="2" cols="30" type="text" name="keyword" placeholder="Keyword"></textarea><br/>
    <textarea rows="2" cols="50" type="text" name="description" placeholder="Description"></textarea><br/>
    <textarea rows="1" cols="50" type="text" name="heading" placeholder="Heading"></textarea><br/>
    <textarea rows="4" cols="50" type="text" name="shortstory" placeholder="Shortstory"></textarea><br/>
    <textarea rows="6" cols="50" type="text" name="fullstory" placeholder="Fullstory"></textarea><br/>
    <input type="text" name="postdate" placeholder="PostDate"><br/>
    <select size=1 name="category_id">
           <?php
           $stmt="SELECT * FROM category WHERE status=1";
           include ('connection.php');
           $qry=mysqli_query($conn,$stmt);
           while($row=mysqli_fetch_array($qry))
           {
            echo "<option value=".$row['id'].">".$row['name']."</option>";
           }
           mysqli_close($conn);?>

           </select>
            <select size=1 name="user_id">
           <?php
           $stmt="SELECT * FROM users WHERE status=0";
           include ('connection.php');
           $qry=mysqli_query($conn,$stmt);
           while($row=mysqli_fetch_array($qry))
           {
            echo "<option value=".$row['id'].">".$row['username']."</option>";
           }
           mysqli_close($conn);?>
           </select>      
       </br></br>

<form method="POST" name="ImgUpload" action="" enctype="multipart/form-data">
  <input type="file" name="Upload"/>
  <input type="submit" name="submit" value="Register" />
</form>
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