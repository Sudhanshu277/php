<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center">FORM</h1>
	<form method="post" action="insert.php" >
		
		<div class="form-group">
			<label>NAME</label>
			<input type="text" name="NAME" required="required" placeholder="ENTER NAME" class="form-control" >
		</div>
		<div class="form-group">
			<label>EMAIL</label>
			<input type="text"  name="EMAIL" required="required" placeholder="ENTER EMAIL" class="form-control" >
		</div>
		<div class="form-group">
			<label>MOBLIE NUMBER</label>
			<input type="text"  name="MOBLIE_NUMBER" required="required" placeholder="ENTER NUMBER" class="form-control" >
		</div>
		<div class="form-group">
			<label>ADDRESS</label>
			<input type="text"  name="ADDRESS" required="required" placeholder="ENTER ADDRESS" class="form-control">
		</div>
		<div class="form-group">
			<label>GENDER</label><br>
			<input type="radio" value="MALE" name="GENDER" required="required">MALE<br>
			<input type="radio" value="FEMALE" name="GENDER" required="required">FEMALE
		</div>
		<div class="form-group">
			<label>QUALIFICATION</label>
			<select name="QUALIFICATION" required="required" class="form-control">
				<option>SELECT</option>
				<option>B.TECH</option>
				<option>M.TECH</option>
				<option>10TH</option>
				<option>12TH</option>
			</select>
		</div>
		<div class="form-group">
			<label>BRANCH</label>
			<select type="text" name="BRANCH" required="required" placeholder="ENTER NAME" class="form-control">
				<option>SELECT</option>
				<option>IT</option>
				<option>CSE</option>
				<option>ME</option>
				<option>CIVIL</option>
		    </select>  
		</div>
		<div class="form-group">
			<label>SEMESTER</label>
			<select type="text" name="SEMESTER" required="required" placeholder="ENTER NAME" class="form-control">
				<option>SELECT</option>
				<option>1ST</option>
				<option>2ND</option>
				<option>3RD</option>
				<option>4TH</option>
		    </select>  
		</div>
		<div class="form-group">
			<label>INTERNSHIP COURSE</label>
			<select type="text" name="INTERNSHIP_COURSE" required="required" placeholder="ENTER NAME" class="form-control">
				<option>SELECT</option>
				<option>WEB DESINING</option>
				<option>WEB DEVELOPMENT</option>
				<option>PYTHON</option>
				<option>JAVASCRIPT</option>
		    </select>  
		</div>
		<input type="submit" name="submit" value="submit" class="btn btn-info">
	</form>

</body>
</html>