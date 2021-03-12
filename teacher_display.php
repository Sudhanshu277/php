<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<table class="table table-bordered">
		<tr>
			<th>name</th>
			<th>city</th>
			<th>address</th>
		</tr>
		<?php
        include "dbcon.php";
        $data = "SELECT * FROM teacher";
        $result = mysqli_query($con,$data);
        while ($a = mysqli_fetch_array($result)) {
        	
      
		?>
		<tr>
			<td><?php echo $a['name']?></td>
			<td><?php echo $a['city']?></td>
			<td><?php echo $a['address']?></td>
		</tr>
	    <?php }?>
	</table>

</body>
</html>