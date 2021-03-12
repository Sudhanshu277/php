<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <style>
    	h1{
    		font-family: 'Sriracha', cursive;
    	}
        
    </style>
</head>
<body>
    <div class="container-fluid" style="margin-top: 100px;">
    	<div class="row">
    		<div class="col-md-2"></div>
    		<div class="col-md-8 card shadow">
    			<form class="form-group" method="post">
    				<div class="row">

    					<div class="col-md-6">
    						<h1>Sing up</h1>
    						<input type="text" required="required" style="border: transparent;" name="name" placeholder="Enter name" class="form-control"><hr>
    						
    						<input type="text" name="email" required="required" style="border: transparent;" placeholder="Enter email" class="form-control"><hr>
    						
    						<input type="password" name="password" style="border: transparent;" required="required" placeholder="Enter password" class="form-control"><hr>
    						<input type="text" name="phone" style="border: transparent;" required="required" placeholder="Enter phone no." class="form-control"><hr><br>
    						<input type="submit" style="border-radius: 20px;" name="submit" value="Sing up" class="btn btn-success w-100"><br><br>
    						<p>Already have account</p><hr>
    						<a href="login.php" class="btn btn-info">Sing in</a>
    					</div>
    					<div class="col-md-6">
    						<img src="https://cdn.pixabay.com/photo/2021/01/21/16/49/books-5937823__340.jpg" class="w-100 h-100">
    					</div>
    				</div>
    			</form>
    		</div>
    		<div class="col-md-2"></div>
    	</div>
    </div>
</body>
</html>

<?php
include 'itmtask.php';

if (isset($_POST['submit'])) {
 $a = $_POST['name'];
 $b = $_POST['email'];
 $c = $_POST['password'];
 $d = $_POST['phone'];

 $data = "INSERT INTO user(name,email,password,phone)VALUES('$a','$b','$c','$d')";
 $result = mysqli_query($con,$data);

 if ($result) 
 {
    header('loaction:login.php');
 }
}


?>