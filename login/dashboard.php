<?php
//session_start();
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>welcome dashbord</h1>
<hr>
<h2>WEelcome <?php echo $_SESSION['a']?></h2>
<a href="logout.php" class="btn btn-dark">logout</a>
</body>
</html>