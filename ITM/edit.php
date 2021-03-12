<?php
include 'itmtask.php';

if (isset($_GET['id']))
{
	echo $id = $_GET['id'];
	$data = "SELECT * FROM addmission WHERE a_id = $id";
	$result = mysqli_query($con,$data);
	$q = mysqli_fetch_array($result);

	// echo $name = $_GET['name'];
}

?>
<?php
include 'itmtask.php';

if (isset($_POST['update']))
{
	 $a = $_POST['name'];
	 $b = $_POST['email'];
	 $c = $_POST['phone'];
	 $d = $_POST['father'];
	 $e = $_POST['10th'];
	 $f = $_POST['12th'];
	 $g = $_POST['jee'];
	 $h = $_POST['college'];
	 $i = $_POST['gender'];
	 $j = $_POST['address'];
	 $k = $_POST['city'];

	$data = "UPDATE addmission SET name ='$a',email ='$b',phone ='$c',father='$d',10th ='$e',12th ='$f',jee ='$g',college ='$h',gender ='$i',address ='$j',city ='$k' WHERE a_id = $id";
	$result = mysqli_query($con,$data);
	if ($result) 
	{
		header('loaction:show.php');
	   echo "<script>alert('updated successfully')</script>";
	}
	else
	{
		echo "<script>alert('updated successfully')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		body{
			background-image: url(https://images.pexels.com/photos/3631711/pexels-photo-3631711.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);
			background-attachment: fixed;
			background-position: center;
			
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div style="margin-top: 50px;">
				<h1 class="text-danger" style="background-color: black;">We Give chance to edit but not life!</h1>
				<a href="h.php" class="btn btn-success">Home</a>
				<a href="dash.php" class="btn btn-info">Admission Form</a>
			</div>
		</div>
		<div class="col-md-6 card shadow" style="background-color: #0000009c;">
			<form method="post" class="form-group">
				<strong style="color: white;">Name:</strong>
				<input type="text" name="name" class="form-control" value="<?php echo $q['name']?>"><br>
				<strong style="color: white;">Email:</strong>
				<input type="text" name="email" class="form-control" value="<?php echo $q['email']?>"><br>
				<strong style="color: white;">Phone:</strong>
				<input type="text" name="phone" class="form-control" value="<?php echo $q['phone']?>"><br>
				<strong style="color: white;">Father name:</strong>
				<input type="text" name="father" class="form-control" value="<?php echo $q['father']?>" required="required" placeholder="Enter your father name"><br>
				<strong style="color: white;">10th marks:</strong>
				<input type="text" name="10th" class="form-control" value="<?php echo $q['10th']?>" required="required" placeholder="Enter your 10th marks"><br>
				<strong style="color: white;">12th marks:</strong>
				<input type="text" name="12th" class="form-control" value="<?php echo $q['12th']?>" required="required" placeholder="Enter your 12th marks"><br>
				<strong style="color: white;">Jee mains marks:</strong>
				<input type="text" name="jee" class="form-control" value="<?php echo $q['jee']?>" required="required" placeholder="Enter your father name"><br>
				<strong style="color: white;">College:</strong>
				<select class="form-control" name="college" required="required">
							<option>Select Your College</option>
							<option
							<?php
                            if ($q['college']=="ITM") {
                                  echo "selected";
                                }    
							?> 
							>ITM</option>
							<option 
							<?php
                            if ($q['college']=="MITS") {
                                  echo "selected";
                                }    
							?> 
							>MITS</option>
							<option 
                            <?php
                            if ($q['college']=="RJIT") {
                                  echo "selected";
                                }    
							?> 
							>RJIT</option>
							<option 
							<?php
                            if ($q['college']=="AMITY") {
                                  echo "selected";
                                }    
							?> 
							>AMITY</option>
							<option <?php
                            if ($q['college']=="RUSTOM") {
                                  echo "selected";
                                }    
							?> 
							>RUSTOM</option>
				</select><br>
                <strong style="color: white;">Gender</strong><br>
                <div style="color: white;">
                <input type="radio" name="gender" required="required" value="Male"
                <?php
                 if ($q['gender']=="Male") 
                 {
                 	echo "checked";
                 }
                ?>
                >Male<br>
                <input type="radio" name="gender" required="required" value="Female"
                <?php
                 if ($q['gender']=="Female") 
                 {
                 	echo "checked";
                 }
                ?>
                >Female<br><br>
                </div>
                <strong style="color: white;">Address:</strong><br>
				<input type="text" name="address" class="form-control" required="required" placeholder="Enter your address" value="<?php echo $q['address']?>"><br>
				<strong style="color: white;">City:</strong>
				<input type="text" name="city" class="form-control" value="<?php echo $q['city']?>" required="required" placeholder="Enter your city"><br>
				<input type="submit" name="update" value="update" class="btn btn-info">
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>

</body>
</html>
