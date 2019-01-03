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
                    <h1 class="page-header">All Categories</h1>

                    <?php

                    if(isset($_GET['message']))
                    {
                        echo "<span class='alertalert-success'>".$_GET['message']."</span>";
                    }
                    ?>
                    
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
		<td>Name</td>
		<td>Status</td>
		<td>Functions</td>
    </tr>
</thead>
<tfoot>
		<td>UID</td>
		<td>Name</td>
		<td>Status</td>
		<td>Functions</td>
</tfoot>
            <tbody>
            
            <?php
	//selecting all users
	$stm="SELECT * FROM category";
	//making connection
	include('connection.php');
	$qry=mysqli_query($conn,$stm);
	while($row=mysqli_fetch_array($qry))
	{
		echo "<tr>";
		echo "<td>". $row['id']."</td>";
		echo "<td>". $row['name']."</td>";
		echo "<td>". $row['status']."</td>";
        echo "<td>
        <a href=editdeletecategory.php?id=".$row['id']."&action=edit> EDIT <a/>
        <a href=editdeletecategory.php?id=".$row['id']."&action=delete> DELETE <a/>
         </td>"; 
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
