<?php
include 'dbcon.php';

if (isset($_GET['id']))
 {
	echo $id = $_GET['id'];
	$data = "SELECT * FROM student WHERE id = $id";
	$result = mysqli_query($con,$data);
	$a = mysqli_fetch_array($result);
}
?>

<!-- <h1><?php echo $a['name']?></h1> -->


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered">
		             <tr>
			            <th>ID</th>
			            <td><?php echo $a['id']?></td>
		            </tr>
		            <tr>
		            	<th>NAME</th>
		            	<td><?php echo $a['name']?></td>
		            </tr>
		            <tr>
		            	<th>EMAIL</th>
		            	<td><?php echo $a['email']?></td>
		            </tr>
		            <tr>
		            	<th>ADDRESS</th>
		            	<td><?php echo $a['address']?></td>
		            </tr>
		            <tr>
		            	<th>GENDER</th>
		            	<td><?php echo $a['gender']?></td>
		            </tr>
		            <tr>
		            	<th>COLLEGE</th>
		            	<td><?php echo $a['college']?></td>
		            </tr>
		            <tr>
		            	<th>IMAGE</th>
		            	<td><img src="<?php echo $a['image']?>" style="width: 100px;height: 100px;"></td>
		            </tr>
	            </table>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	

</body>
</html>