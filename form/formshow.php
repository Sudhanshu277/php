<?php
include "dbcon1.php";

if(isset($_GET['ID'])) 
{
  $ID = $_GET['ID'];
$data = "SELECT * FROM data WHERE ID = $ID";
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
    		<th>NAME</th>
    		<td><?php echo $a['NAME']?></td>
    	</tr>
    	<tr>
    		<th>EMAIL</th>
    		<td><?php echo $a['EMAIL']?></td>
    	</tr>
    	<tr>
    		<th>MOBLIE NUMBER</th>
    		<td><?php echo $a['MOBLIE_NUMBER']?></td>
    	</tr>
    	<tr>
    		<th>ADDRESS</th>
    		<td><?php echo $a['ADDRESS']?></td>
    	</tr>
    	<tr>
    		<th>GENDER</th>
    		<td><?php echo $a['GENDER']?></td>
    	</tr>
    	<tr>
    		<th>QUALIFICATION</th>
    		<td><?php echo $a['QUALIFICATION']?></td>
    	</tr>
    	<tr>
    		<th>BRANCH</th>
    		<td><?php echo $a['BRANCH']?></td>
    	</tr>
    	<tr>
    		<th>SEMESTER</th>
    		<td><?php echo $a['SEMESTER']?></td>
    	</tr>
    	<tr>
    		<th>INTERNSHIP COURSE</th>
    		<td><?php echo $a['INTERNSHIP_COURSE']?></td>
    	</tr>
    </table>
</body>
</html>
