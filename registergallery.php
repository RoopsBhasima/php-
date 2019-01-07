<?php
include('inc_session.php');?>
<?php
//checking the form is submitted or not
if(isset($_POST['submit']))
{
    //getting the data from form
    $title=$_POST['title'];
    $description=$_POST['description'];
    $type2=$_POST['type'];
    $user_id=$_POST['user_id'];
    $post_id=$_POST['post_id'];
    $status=$_POST['status'];
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
$stmt="INSERT INTO gallery(title,description,image,type,user_id,post_id,status) VALUES ('$title','$description', '$name' ,'$type2','$user_id','$post_id','$status')";
//making connection
include('connection.php');
//making query
$qry=mysqli_query($conn, $stmt) or die(mysqli_error());
//giving the message
if($qry)
{ echo "Gallery Registered";}
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
    <title>Gallery Registration</title>
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
                    <h1 class="page-header">Add Gallery</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               

            <div class="col-md-12">
            
    <form method="post" action="" name="frmRegister" enctype="multipart/form-data">
    <textarea rows="2" cols="30" type="text" name="title" placeholder="Title"></textarea>
    <br/>
    <textarea rows="2" cols="50" type="text" name="description" placeholder="Description"></textarea><br/>
   Type: <select name="type">
    <option value="0">Banner</option>
    <option value="1">Gallery</option>
    <option value="2">Slider</option>
</select>
<br><br>

Status:  <input type="radio" name="status" value="1">Active
<input type="radio" name="status" value="0" checked>Deactive<br/><br/>
            User_id: <select size=1 name="user_id">
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
           <br><br>
           Post_id:   
            <select size=1 name="post_id">
           <?php
           $stmt="SELECT * FROM post WHERE status=0";
           include ('connection.php');
           $qry=mysqli_query($conn,$stmt);
           while($row=mysqli_fetch_array($qry))
           {
            echo "<option value=".$row['id'].">".$row['title']."</option>";
           }
           mysqli_close($conn);?>
           </select> 
       </br></br>
Upload Image</br>
<form method="POST" name="ImgUpload" action="" enctype="multipart/form-data">
  <input type="file" name="Upload"/>
  <br/>
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