<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<style>
		body{
			background: #e1edef;
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
	<h1 class="text-center">Pre-Registration Form</h1>
	<form class="form-group" method="post" action="taskinsert.php">
		
		<div class="input-container">
			FIRST NAME:
			<i class="fa fa-user" aria-hidden="true" style="color: black;"></i>
		<input class="input-field" type="text"  name="first_name" required="required" placeholder="ENTER NAME" class="form-control"><br>
		</div>
		LAST NAME:
		<input type="text" name="last_name" required="required" placeholder="ENTER LAST NAME" class="form-control"><br>
		MOBLIE NUMBER:
		<input type="text" name="moblie_number" required="required" placeholder="ENTER YOU MOBLIE NUMBER" class="form-control"><br>
		EMAIL:
		<input type="text" name="email" required="required" placeholder="ENETR YOUR EMAIL" class="form-control"><br>
		10TH MARKS:
		<input type="text" name="10th_marks" required="required" placeholder="ENTER YOUR MARKS" class="form-control"><br>
		COURSE:
		<select type="text" name="course" required="required" class="form-control">
			<option>select course type</option>
			<option>Full-Time 3 year diploma</option>
			<option>Full-Time 4 year diploma</option>
			<option>Full-Time 5 months diploma</option>
			<option>Full-Time 6 year diploma</option>
		</select><br>
        GENDER:<br>
        <input required="required" type="radio" name="gender" value="Male">Male<br>
        <input required="required" type="radio" name="gender" value="Female">Female<br>
        <input required="required" type="radio" name="gender" value="Other">Other<br>
        <br>
        <input class="btn btn-dark w-100" type="submit" name="submit" value="submit">
	</form>
     <center><a href="taskdisplay.php" class="text-center">Click Here to See the list of Pre-Registered Students</a></center>
     </div>
     <div class="col-md-3"></div>
 </div>

    
</div>
</body>
</html>