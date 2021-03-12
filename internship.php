<!DOCTYPE html>
<html>
<head>
	<title>pn Infosys</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		*{
			margin:0px;
			padding: 0px;
		}
	
	</style>
</head>
<body>
	
		
		
				<form method="post" action="internshipinsert.php">
					<h1 class="text-info text-center">Registration Form 2020</h1>
					<div class="form-group">
						<label>Student Name</label>
						<input type="text" name="name" required="required" placeholder="Enter Name" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="" name="email" required="required" placeholder="Enter Mail" class="form-control">
					</div>
					<div class="form-group">
						<label>Moblie Number</label>
						<input type="number" name="moblie" required="required" placeholder="Enter Moblie Number" class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea rows="3" cols="80" name="address" required="required" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Gender</label><br>
						<input type="radio" name="gender" value="male" required="required" placeholder="Enter Gender">Male<br>
		                <input type="radio" name="gender" value="female" required="required" placeholder="Enter Gender">female
					</div>
					<div class="form-group">
						<label>College</label><br>
						<select name="college" required="required" class="form-control">
						<option>select</option>
						<option>itm</option>
						<option>mits</option>
						<option>rjit</option>
						<option>amity</option>
						</select>
					</div>
					<div class="form-group">
						<label>Qulification</label><br>
						<select name="qualification" required="required" class="form-control">
							<option>select</option>
							<option>b.tech</option>
							<option>m.tech</option>
							<option>12th</option>
							<option>10th</option>
						</select>
					</div>
					<div class="form-group">
						<label>Branch</label><br>
						<select name="branch" required="required" class="form-control">
							<option>select</option>
							<option>it</option>
							<option>cse</option>
							<option>mech</option>
							<option>civil</option>
						</select>
					</div>
					<div class="form-group">
						<label>semester</label><br>
						<select name="semester" required="required" class="form-control">
							<option>select</option>
							<option>1st</option>
							<option>2nd</option>
							<option>3rd</option>
							<option>4th</option>

						</select>
					</div>
					<div class="form-group">
						<label>Intership Course</label><br>
						<select name="intership" required="required" class="form-control">
							<option>Web desiging</option>
							<option>web Development</option>
							<option>python</option>
						</select>
					</div><br>
					<input type="submit" name="submit" value="submit" class="btn-info">
				</form>
		
</body>
</html>