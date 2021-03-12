<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<table class="table table-bordered table-striped table-dark table-hover">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>MOBLIE NUMBER</th>
			<th>ADDRESS</th>
			<th>ACTION</th>
		</tr>
        <?php
        include "dbcon1.php";
        $data = "SELECT * FROM data";
        $result =mysqli_query($con,$data);
        while($a =mysqli_fetch_array ($result)){
        	

        ?>
		<tr>
			<td><?php echo $a['ID']?></td>
			<td><?php echo $a['NAME']?></td>
			<td><?php echo $a['EMAIL']?></td>
			<td><?php echo $a['MOBLIE_NUMBER']?></td>
			<td><?php echo $a['ADDRESS']?></td>
			<td>
				<a href="formshow.php?ID=<?php echo $a['ID']?>">SHOW</a>
				<a href="formedit.php?ID=<?php echo $a['ID']?>">EDIT</a>
				<a href="formdelete.php?ID=<?php echo $a['ID']?>">DELETE</a>
			</td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>