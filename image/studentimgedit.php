<?php
include 'dbcon.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$data = "SELECT * FROM student WHERE id = $id";
	$result = mysqli_query($con,$data);
	$a = mysqli_fetch_array($result);
}
?>
<?php
include 'dbcon.php';

if (isset($_POST['submit'])) 
{
	$a = $_POST['name'];
	$b = $_POST['email'];
	$c = $_POST['address'];
	$d = $_POST['gender'];
	$e = $_POST['college'];
	$filename = $_FILES['image']['name'];
	$tmpname = $_FILES['image']['tmp_name'];

	$file = "upload/".$filename;
	move_uploaded_file($tmpname,$file);

	$data = "UPDATE student SET name='$a',email='$b',address='$c',gender='$d',college='$e',image='$file' WHERE id = $id";
	$result = mysqli_query($con,$data);
	if ($result) {
		header('Location:studentimgdisplay.php');
	}else{

	}
	if ($result) {
		echo '<script>alert("Data Inserted sucessfully")</script>';
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<center><h3>Form</h3></center>
	    <form class="form-group" method="post"  enctype="multipart/form-data">
		Name:<br>
		<input type="text" name="name" value="<?php echo $a['name']?>" placeholder="Enter your Name" required="required" class="form-control"><br>
		Email:<br>
		<input type="text" name="email" value="<?php echo $a['email']?>" placeholder="Enter your email" required="required" class="form-control"><br>
		Address:<br>
		<textarea  cols="5" rows="5" name="address" placeholder="Enter your Address" class="form-control">
			<?php echo $a['address']?>
		</textarea><br>
		Gender:<br>
		<input type="radio" name="gender" value="Male"
		<?php
		if($a['gender'] == 'Male')
		{
			echo "checked";
		}?>
		>Male<br>
		<input type="radio" name="gender" value="Female"
		<?php
		if($a['gender'] == 'Female')
		{
			echo "checked";
		}?>
		>Female<br>
		College:<br>
		<select name="college" type="text" required="required" class="form-control" >
			<option>select</option>
			<option
			<?php
             if ($a['college'] == 'ITM')
              {
             	echo "selected";
             }
			?>
			>ITM</option>
			<option
			<?php
             if ($a['college'] == 'MITS')
              {
             	echo "selected";
             }
			?>
			>MITS</option>
			<option
			<?php
             if ($a['college'] == 'RJIT')
              {
             	echo "selected";
             }
			?>
			>RJIT</option>
		</select>
		Image:<br>
		<input type="file" name="image" ><br><br>
       
		<input type="submit" name="submit" value="submit" class="btn btn-primary w-100">


	</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	

</body>
</html>