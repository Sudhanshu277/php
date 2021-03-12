<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		userame:
		<input type="name" name="username">
		password:
		<input type="password" name="password">
		<input type="submit" name="login" value="login">
		<a href="registration_form.php" class="btn btn-dark">sign in</a>
	</form>

</body>
</html>

<?php
include 'dbcon.php';

if (isset($_POST['login'])) {
	
	$a = $_POST['username'];
	$b = $_POST['password'];


	$data = "SELECT * FROM login_form WHERE username = '$a' && password = '$b'";
	$result = mysqli_query($con,$data);

	$total  = mysqli_num_rows($result);
	//echo $total;

	if($total==1)
	{
        $_SESSION['a'] = $a;
		header('Location:dashboard.php');
	}
	else
	{
		header('Location:login.php');
	}
}
?>