<?php
include 'itmtask.php';

if (isset($_GET['id']))
{
	echo $id = $_GET['id'];
	$data = "SELECT * FROM addmission WHERE a_id = $id";
	$result = mysqli_query($con,$data);
	$q = mysqli_fetch_array($result);

	// echo $name = $_GET['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		body{
			background-color: #ccc;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<a href="h.php" class="btn btn-info">Home</a>
			</div>
			<div class="col-md-8">
				<table class="table table-bordered">
		            <tr>
			            <th>NAME</th>
			            <td><?php echo $q['name']?></td>
		            </tr>
		            <tr>
		            	<th>EMAIL</th>
		            	<td><?php echo $q['email']?></td>
		            </tr>
		            <tr>
		            	<th>PHONE</th>
		            	<td><?php echo $q['phone']?></td>
		            </tr>
		            <tr>
		            	<th>FATHER NAME</th>
		            	<td><?php echo $q['father']?></td>
		            </tr>
		            <tr>
		            	<th>10th marks</th>
		            	<td><?php echo $q['10th']?></td>
		            </tr>
		            <tr>
		            	<th>12th marks</th>
		            	<td><?php echo $q['12th']?></td>
		            </tr>
		            <tr>
		            	<th>JEE MAINS marks</th>
		            	<td><?php echo $q['jee']?></td>
		            </tr>
		            <tr>
		            	<th>College</th>
		            	<td><?php echo $q['college']?></td>
		            </tr>
		            <tr>
		            	<th>Gender</th>
		            	<td><?php echo $q['gender']?></td>
		            </tr>
		            <tr>
		            	<th>Addrees</th>
		            	<td><?php echo $q['address']?></td>
		            </tr>
		            <tr>
		            	<th>City</th>
		            	<td><?php echo $q['city']?></td>
		            </tr>
	            </table>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	

</body>
</html>