 <?php
include "dbcon.php";

if (isset($_GET['id'])) 
{
 echo $id= $_GET['id'];
 $data = "SELECT * FROM internship WHERE id = $id";
 $result =mysqli_query($con,$data);
 $a = mysqli_fetch_array($result);

}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title></title>
	<style type="text/css">
		/*.a{
			background-color: black;
		}*/
	</style>
</head>
<body>
	<table class="table table-bordered bg-dark">
		<tr style="color: white">
			<th>ID</th>
			<th>STUDENT</th>
			<th>EMAIL</th>
			<th>MOBLIE</th>
			<th>ADDRESS</th>
			<th>GENDER</th>
			<th>COLLEGE</th>
			<th>QULIFICATION</th>
			<th>BRANCH</th>
			<th>SEMESTER</th>
			<th>INTERNSHIP</th>
		</tr>
		<tr style="color: white">
			<td><?php echo $a['id']?></td>
			<td><?php echo $a['student']?></td>
			<td><?php echo $a['email']?></td>
			<td><?php echo $a['moblie']?></td>
			<td><?php echo $a['address']?></td>
			<td><?php echo $a['gender']?></td>
			<td><?php echo $a['college']?></td>
			<td><?php echo $a['qualification']?></td>
			<td><?php echo $a['branch']?></td>
			<td><?php echo $a['semester']?></td>
			<td><?php echo $a['intership']?></td>

		</tr>
	</table>

</body>
</html>
<!-- <h2><?php echo $a['student']?></h2>
<h2><?php echo $a['email']?></h2>
<h2><?php echo $a['moblie']?></h2>
<h2><?php echo $a['student']?></h2>
<h2><?php echo $a['student']?></h2> -->