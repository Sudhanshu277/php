<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<form class="form-group" method="post" action="new1insert.php">
		NAME:<br>
		<input type="text" name="name" required="required" placeholder="enter your name" class="form-control"><br>
        PHONE:<br>
        <input type="text" name="phone" required="required" placeholder="enter your phone number" class="form-control"><br>
        EMAIL:<br>
        <input type="text" name="email" required="required" placeholder="enter your email" class="form-control"><br>
        EDUCATION:<br>
        <input type="checkbox" name="education[]" value="10th">10th<br>
        <input type="checkbox" name="education[]" value="12th">12th<br>
        <input type="checkbox" name="education[]" value="graduation">graduation<br> 
        COLLEGE:<br>
        <select type="text" name="college" required="required" class="form-control">
        	<option>select</option>
        	<option>itm</option>
        	<option>mits</option>
        	<option>rjit</option>
        </select><br>
        GENDER:<br>
        <input type="radio" name="gender" value="Male" required="required">MALE<br>
        <input type="radio" name="gender" value="Female" required="required" >FEMALE<br>
        ADDRESS:<br>
        <textarea type="text" name="address" required="required" class="form-control"></textarea><br>
        <input type="submit" name="submit" required="required" value="submit" class="btn btn-dark">
	</form>

</body>
</html>