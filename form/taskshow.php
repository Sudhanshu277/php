<?php
include 'dbcon1.php';
if (isset($_GET['id']))
{
 $id = $_GET['id'];
 $data = "SELECT * FROM task WHERE id = $id";
 $result = mysqli_query($con,$data);
 $a = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>FIRST NAME</th>
			<td><?php echo $a['first_name']?></td>
		</tr>
		<tr>
			<th>LAST NAME</th>
			<td><?php echo $a['last_name']?></td>
		</tr>
		<tr>
			<th>MOBLIE NUMBER</th>
			<td><?php echo $a['moblie_number']?></td>
		</tr>
		<tr>
			<th>EMAIL</th>
			<td><?php echo $a['email']?></td>
		</tr>
		<tr>
			<th>10TH MARKS</th>
			<td><?php echo $a['10th_marks']?></td>
		</tr>
		<tr>
			<th>COURSE</th>
			<td><?php echo $a['course']?></td>
		</tr>
		<tr>
			<th>GENDER</th>
			<td><?php echo $a['gender']?></td>
		</tr>
	</table>

</body>
</html>