<?php  
include "dbcon.php";

if (isset($_POST['submit'])) 
{
  echo   $a = $_POST['name'];
  echo	$b = $_POST['email'];
  echo	$c = $_POST['address'];
  echo	$d = $_POST['gender'];
  echo	$e = $_POST['college'];
  echo	$filename = $_FILES['image']['name'];
	$tmpname = $_FILES['image']['tmp_name'];

	$file = "upload/".$filename;
	move_uploaded_file($tmpname,$file);

	$data = "INSERT INTO student(name,email,address,gender,college,image)VALUES('$a','$b','$c','$d','$e','$file')";
	$result = mysqli_query($con,$data);

	if ($result) {
		echo '<script>alert("data insersed sucessfully")</script>';
		header('Location:studentimgdisplay.php');
	}

}
?>