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
                    <h1 class="page-header">All Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
               

            <div class="col-md-12">
            <table class="table" id="myTable" >
            <thead>
                <tr>
                    <td>UID</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Status</td>
                    <td>Functions</td>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td>UID</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td>Status</td>
                    <td>Functions</td>
                </tr>
            </tfoot>
            <tbody>
            
            <?php
            //Slecting all users
            $stm="SELECT * FROM users";
            //making connection
            include('connection.php');
            //query
            $qry=mysqli_query($conn, $stm);
            //fetching and printing data
            while($row=mysqli_fetch_array($qry))
            {
                echo "<tr>";
                echo "<td>" .$row['id']."</td>";
                echo "<td>" .$row['username']."</td>";
                echo "<td>" .$row['email']."</td>";
                echo "<td>" .$row['role']."</td>";
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
