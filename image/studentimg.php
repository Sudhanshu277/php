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
	    <form class="form-group" method="post" action="studentimginsert.php" enctype="multipart/form-data">
		Name:<br>
		<input type="text" name="name" placeholder="Enter your Name" required="required" class="form-control"><br>
		Email:<br>
		<input type="text" name="email" placeholder="Enter your email" required="required" class="form-control"><br>
		Address:<br>
		<textarea cols="5" rows="5" name="address" placeholder="Enter your Address" class="form-control"></textarea><br>
		Gender:<br>
		<input type="radio" name="gender" value="Male">Male<br>
		<input type="radio" name="gender" value="Female">Female<br>
		College:<br>
		<select name="college" type="text" required="required" class="form-control" >
			<option>select</option>
			<option>ITM</option>
			<option>MITS</option>
			<option>RJIT</option>
		</select>
		Image:<br>
		<input type="file" name="image" required="required" ><br><br>
       
		<input type="submit" name="submit" value="submit" class="btn btn-primary w-100">


	</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	

</body>
</html>