<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		username:
		<input type="text" name="username">
		password:
		<input type="password" name="password">
		eamil:
		<input type="text" name="eamil">
		address:
		<textarea name="address"></textarea>
		<br><br>
		<input type="submit" name="submit" value="submit">
	</form>


</body>
</html>

<?php
include 'dbcon.php';

if (isset($_POST['submit']))
 {
 $a = $_POST['username'];
 $b = $_POST['password'];
 $c = $_POST['eamil'];
 $d = $_POST['address'];

 $data = "INSERT INTO login_form(username,password,eamil,address)VALUES('$a','$b','$c','$d')";
 $result = mysqli_query($con,$data);
 
}
?>