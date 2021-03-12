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
    		<th>NAME</th>
    		<th>EMAIL</th>
            <th>IMAGE</th>
    		<th>ACTION</th>
    	</tr>
    	<?php
    	include 'dbcon.php';
    	$data = "SELECT * FROM employe";
        $result = mysqli_query($con,$data);
        while ($a= mysqli_fetch_array($result)) {
         	
         

    	?>
    	<tr>
    		<td><?php echo $a['id']?></td>
    		<td><?php echo $a['name']?></td>
    		<td><?php echo $a['email']?></td>
            <td><img src="<?php echo $a['image']?>" style="width: 100px;height: 100px;" ></td>
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