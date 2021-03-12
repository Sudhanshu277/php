<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<table class="table table-bordered">
     <tr>
     	<th>NAME</th>
     	<th>PHONE</th>
     	<th>EMAIL</th>
     	<th>EDUCATION</th>
     	<th>ACTION</th>
     </tr>
     <?php
     include 'task2.php';
     $data = "SELECT * FROM new";
     $result = mysqli_query($con,$data);
     while ($a= mysqli_fetch_array($result)) {
     
    

     ?>
     <tr>
     	<td><?php echo $a['name']?></td>
     	<td><?php echo $a['phone']?></td>
     	<td><?php echo $a['email']?></td>
     	<td><?php echo $a['education']?></td>
     	<td>
     		<a href="newedit.php?id=<?php echo $a['id']?>">edit</a>
     	</td>
     </tr>
 <?php }?>

 </table>
</body>
</html>