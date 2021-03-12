<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body{
			background: #e1edef;
		}
	</style>
</head>
<body>
	<table class="table table-bordered table-striped thead-dark">
		<thead class="thead-dark">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>ADRESS</th>
			<th>IMAGE</th>
			<th>ACTION</th>
		</tr>
	</thead>
		<?php
		include 'dbcon.php';
        $data = "SELECT * FROM student";
        $result = mysqli_query($con,$data);
        while ($a = mysqli_fetch_array($result)) {
        	
        
       ?>
		<tr>
			<td><?php echo $a['id']?></td>
			<td><?php echo $a['name']?></td>
			<td><?php echo $a['email']?></td>
			<td><?php echo $a['address']?></td>
			<td><img src="<?php echo $a['image']?>" style="height: 100px;width: 100px;"></td>
			<td>
				<a href="studentimgview.php?id=<?php echo $a['id']?>" class="btn btn-info">VIEW</a>
				<a href="studentimgedit.php?id=<?php echo $a['id']?>" class="btn btn-dark">EDIT</a>
				<a href="studentimgdel.php?id=<?php echo $a['id']?>" class="btn btn-warning">DELETE</a>
			</td>
		</tr>
	    <?php }?>
	</table>

</body>
</html>