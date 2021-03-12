<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>ID</th>
    		<th>FIRST NAME</th>
    		<th>LAST NAME</th>
    		<th>MOBLIE NUMBER</th>
    		<th>EMAIL</th>
    		<th>ACTION</th>
    	</tr>
    	<?php
    	include 'dbcon1.php';
    	$data = "SELECT * FROM task";
        $result = mysqli_query($con,$data);
        while ($a= mysqli_fetch_array($result)) {
         	
         

    	?>
    	<tr>
    		<td>0905IT181<?php echo $a['id']?></td>
    		<td><?php echo $a['first_name']?></td>
    		<td><?php echo $a['last_name']?></td>
    		<td><?php echo $a['moblie_number']?></td>
    		<td><?php echo $a['email']?></td>
    		<td>
    			<a href="taskshow.php?id=<?php echo $a['id']?>" class="btn btn-info">SHOW</a>
    			<a href="taskedit.php?id=<?php echo $a['id']?>" class="btn btn-success">EDIT</a>
    			<a href="taskdelete.php?id=<?php echo $a['id']?>" class="btn btn-dark">DELETE</a>
    		</td>
    	</tr>
        <?php }?>
    </table>
</body>
</html>