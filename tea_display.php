<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title></title>
</head>
<body>
    <table class="table table-bordered">
    	<tr>
            <th>ID</th>
    		<th>name</th>
    		<th>tea no.</th>
    		<th>address</th>
    		<th>phone</th>
    		<th>action</th>

    	</tr>
        <?php
        include "dbcon.php";
        $data = "SELECT * FROM tea";
        $result =mysqli_query($con,$data);
        while($a =mysqli_fetch_array ($result)){
        	//echo $a['name'];
        
        
       // print_r($a);

        ?>

    	<tr>
            <td><?php echo $a['id']?></td>
    		<td><?php echo $a['name']?></td>
    		<td><?php echo $a['tea']?></td>
    		<td><?php echo $a['address']?></td>
    		<td><?php echo $a['phone']?></td>
    		<td>
    			<a href="">edit</a>
    			<a href="">delete</a>
    			<a href="teashow.php?id=<?php echo $a['id']?>">show</a>
    		</td>
    	</tr>
    	<?php } ?>
    </table>    
</body>
</html>