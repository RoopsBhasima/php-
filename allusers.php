<?php
include('inc_session.php');
?>
<div class="col-md-5">
<table>
<tfoot>
<tr>
<td>UserId</td>
<td>Username</td>
<td>password</td>
<td>email</td>
<td>Functions</td>
</tr>
</foot>
</tbody>

<?php
//Selecting all users
$stm="SELECT *FROM users";
//making connection
include('connection.php');
//query
$qry=mysqli_query($conn, $stm);
//fetching and printing data
while ($row=mysqli_fetch_array($qry))
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
</tfoot>
</table>