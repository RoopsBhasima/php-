<?php
include('inc_session.php');?>

<!DOCTYPE html>
<html lang="en">

<head>

    

    <?php include('inc_headsection.php');?>
    <link href="datatable/jquery.dataTables.min.css" type="text/css" rel="stylesheet"> 

</head>

<body>

    <div id="wrapper">

     <?php include('inc_navbar.php');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Posts</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               

            <div class="col-md-12">
            <table class="table" id="myTable" >
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Keyword</td>
                    <td>Description</td>
                    <td>Heading</td>
                    <td>Shortstory</td>
                    <td>Fullstory</td>
                    <td>image</td>
                    <td>CID</td>
                    <td>PostDate</td>
                    <td>UID</td>
                    <td>Status</td>
                    <td>Functions</td>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Keyword</td>
                    <td>Description</td>
                    <td>Heading</td>
                    <td>Shortstory</td>
                    <td>Fullstory</td>
                    <td>image</td>
                    <td>CID</td>
                    <td>PostDate</td>
                    <td>UID</td>
                    <td>Status</td>
                    <td>Functions</td>
                </tr>
            </tfoot>
            <tbody>
            
            <?php
            //Slecting all users
            $stm="SELECT * FROM post";
            //making connection
            include('connection.php');
            //query
            $qry=mysqli_query($conn, $stm);
            //fetching and printing data
            while($row=mysqli_fetch_array($qry))
            {
                echo "<tr>";
                echo "<td>" .$row['id']."</td>";
                echo "<td>" .$row['title']."</td>";
                echo "<td>" .$row['keyword']."</td>";
                echo "<td>" .$row['description']."</td>";
                echo "<td>" .$row['heading']."</td>";
                echo "<td>" .$row['shortstory']."</td>";
                echo "<td>" .$row['fullstory']."</td>";
                echo "<td>" .$row['image']."</td>";
                echo "<td>" .$row['category_id']."</td>";
                echo "<td>" .$row['postdate']."</td>";
                echo "<td>" .$row['user_id']."</td>";
                echo "<td>" .$row['status']."</td>";
                echo "<td> EDIT | DELETE </td>";
                echo "</tr>";
            }
            ?>
         
            </tbody>
            </table>
           
       
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
