<?php
//session_start();
include 'session.php';
?>
<?php
include 'itmtask.php';
$a = $_SESSION['a'];
$data = "SELECT * FROM user WHERE name = '$a'";
$result = mysqli_query($con,$data);
$e = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/3e0c251e14.js" crossorigin="anonymous"></script>
	<style>
		body{
			
			background-color: #e9ecef;
		}
		h1{
    		font-family: 'Sriracha', cursive;
    	}
    	.b{
    		background-image: url(https://images.pexels.com/photos/4778611/pexels-photo-4778611.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);
    		background-size: cover;
    		background-repeat: no-repeat;
    	}
    	.b1{
    		margin-bottom: 100px;
    		margin-top: 100px;
    	}
	</style>
</head>
<body>
<section>
<div class="container-fluid">
	<nav class="navbar navbar-expand-md bg-light">
		<h1>welcome! <?php echo $e['name']?></h1>
		<div class="ml-auto">
		<a href="h.php" class="btn btn-success">Home</a>	
		<a href="edit.php?id=<?php echo $e['id']?>" class="btn btn-info">Edit</a>
		<a href="show.php?id=<?php echo $e['id']?>" class="btn btn-dark">Review</a>
	    </div>
	</nav>
</div>
</section>
<!-- <section>
	<div class="container-fluid b">
		<div class="row">
			<div class="col-md-12">
				
					<div class="b1">
					<center><h1>welcome!<?php echo $e['name']?></h1></center>
					</div>

			</div>
		</div>
	</div>
</section> -->
<div class="container-fluid b">
<div class="container">
	<br><br>
	<h1 class="text-center">Admission Form</h1>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 card shadow" style="background-color: #0000009c;">
			<form method="post" class="form-group" style="margin-top: 50px;" >
				<strong style="color: white;">Name:</strong>
				<input type="text" name="name" class="form-control" value="<?php echo $e['name']?>"><br>
				<strong style="color: white;">Email:</strong>
				<input type="text" name="email" class="form-control" value="<?php echo $e['email']?>"><br>
				<strong style="color: white;">Phone:</strong>
				<input type="text" name="phone" class="form-control" value="<?php echo $e['phone']?>"><br>
				<strong style="color: white;">Father name:</strong>
				<input type="text" name="father" class="form-control" required="required" placeholder="Enter your father name"><br>
				<strong style="color: white;">10th marks:</strong>
				<input type="text" name="10th" class="form-control" required="required" placeholder="Enter your 10th marks"><br>
				<strong style="color: white;">12th marks:</strong>
				<input type="text" name="12th" class="form-control" required="required" placeholder="Enter your 12th marks"><br>
				<strong style="color: white;">Jee mains marks:</strong>
				<input type="text" name="jee" class="form-control" required="required" placeholder="Enter your father name"><br>
				<strong style="color: white;">College:</strong>
				<select class="form-control" name="college" required="required">
							<option>Select Your College</option>
							<option >ITM</option>
							<option >MITS</option>
							<option >RJIT</option>
							<option >AMITY</option>
							<option >RUSTOM</option>
				</select><br>
                <strong style="color: white;">Gender</strong><br>
                <div style="color: white;">
                <input type="radio" name="gender" required="required" value="Male">Male<br>
                <input type="radio" name="gender" required="required" value="Female">Female<br><br>
                </div>
                <strong style="color: white;">Address:</strong><br>
				<input type="text" name="address" class="form-control" required="required" placeholder="Enter your address"><br>
				<strong style="color: white;">City:</strong>
				<input type="text" name="city" class="form-control" required="required" placeholder="Enter your city"><br>
				<input type="submit" name="submit" value="submit" class="btn btn-info">
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</div>
</body>
</html>

<?php
include 'itmtask.php';

if (isset($_POST['submit']))
{
	echo $a = $_POST['name'];
	echo $b = $_POST['email'];
	echo $c = $_POST['phone'];
	echo $d = $_POST['father'];
	echo $e = $_POST['10th'];
	echo $f = $_POST['12th'];
	echo $g = $_POST['jee'];
	echo $h = $_POST['college'];
	echo $i = $_POST['gender'];
	echo $j = $_POST['address'];
	echo $k = $_POST['city'];

$data = "INSERT INTO addmission(name,email,phone,father,10th,12th,jee,college,gender,address,city)VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
	$result = mysqli_query($con,$data);

	if ($result) 
	{
		header('loaction:show.php');
	}

}
?>
