<?php
include 'task2.php';

if (isset($_GET['id']))
{
    echo $id = $_GET['id'];
    $data = "SELECT * FROM new WHERE id = $id";
    $result = mysqli_query($con,$data);
    $a = mysqli_fetch_array($result);

     $b = $a['education'];
    $c = explode(",",$b);
    //print_r($c);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<form class="form-group" method="post">
		NAME:<br>
		<input type="text" name="name" required="required" value="<?php echo $a['name']?>"  class="form-control"><br>
        PHONE:<br>
        <input type="text" name="phone" required="required" value="<?php echo $a['phone']?>" class="form-control"><br>
        EMAIL:<br>
        <input type="text" name="email" required="required" value="<?php echo $a['email']?>" class="form-control"><br>
        EDUCATION:<br>
        <input type="checkbox" name="education[]" value="10th"
        <?php
        if (in_array("10th",$c)) {
        	echo "checked";
        }
        ?>
        >10th<br>
        <input type="checkbox" name="education[]" value="12th"
                <?php
        if (in_array("12th",$c)) {
        	echo "checked";
        }
        ?>
        >12th<br>
        <input type="checkbox" name="education[]" value="graduation"
                <?php
        if (in_array("graduation",$c)) {
        	echo "checked";
        }
        ?>
        >graduation<br> 
        COLLEGE:<br>
        <select type="text" name="college" required="required" class="form-control">
        	<option>select</option>
        	<option 
        	<?php
        	if ($a['college'] == 'itm') {
        	    echo "selected";
        	}

        	?>

        	>itm</option>
        	<option
        	<?php
        	if ($a['college'] == 'mits') 
        	{
        	    echo "selected";
        	}

        	?>
        	>mits</option>
        	<option
        	<?php
        	if ($a['college'] == 'rjit')
        	 {
        	    echo "selected";
        	}

        	?>
        	>rjit</option>
        </select><br>
        GENDER:<br>
        <input type="radio" name="gender" value="Male" required="required"
        <?php
        if ($a['gender'] == 'Male') {
             echo "checked";
        }
        ?>
        >MALE<br>
        <input type="radio" name="gender" value="Female" required="required"
        <?php
        if ($a['gender'] == 'Female') {
             echo "checked";
        }
        ?>
        >FEMALE<br>
        ADDRESS:<br>
        <textarea type="text" name="address" required="required" class="form-control"><?php echo $a['address']?></textarea><br>
        <input type="submit" name="submit" required="required" value="submit" class="btn btn-dark">
	</form>

</body>
</html>