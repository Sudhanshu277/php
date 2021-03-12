<?php
include "dbcon.php";

if (isset($_GET['id'])) 
{
	echo $id = $_GET['id'];
	$data = "SELECT * FROM tea WHERE id = $id";
	$result = mysqli_query($con,$data);
	$a = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<table class="table table-bordered">
		<tr scope="col">
			<th>NAME</th>
			<td><?php echo $a['name']?></td>
		</tr>
	</table>

</body>
</html>

<!-- <h1><?php echo $a['name']?></h1> -->