<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title></title>
</head>
<body>
    <table class="table table-bordered">
    	<tr>
            <th>id</th>
    		<th>name</th>
    		<th>email</th>
    		<th>moblie</th>
    		<th>address</th>
    		<th>action</th>

    	</tr>
        <?php
        include "dbcon.php";
        $data = "SELECT * FROM internship";
        $result =mysqli_query($con,$data);
        while($a =mysqli_fetch_array ($result)){
        	

        ?>

    	<tr>
            <td><?php echo $a['id']?></td>
    		<td><?php echo $a['student']?></td>
    		<td><?php echo $a['email']?></td>
    		<td><?php echo $a['moblie']?></td>
    		<td><?php echo $a['address']?></td>
    		<td>
    			<a href="show.php?id=<?php echo $a['id']?>">show</a>
    			<a href="edit_intership.php?id=<?php echo $a['id']?>"?>edit</a>
    			<a href="">delete</a>
    		</td>
    	</tr>
        <!-- show.php?id=1 -->
    	<?php } ?>
    </table>    
</body>
</html>