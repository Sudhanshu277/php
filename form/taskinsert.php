<?php
include 'dbcon1.php';

if (isset($_POST['submit'])) 
{
 $a = $_POST['first_name'];
 $b = $_POST['last_name'];
 $c = $_POST['moblie_number'];
 $d = $_POST['email'];
 $e = $_POST['10th_marks'];
 $f = $_POST['course'];
 $g = $_POST['gender'];

$data = "INSERT INTO task(first_name,last_name,moblie_number,email,10th_marks,course,gender)values('$a' , '$b' , '$c' , '$d' , '$e' , '$f' , '$g')";
$result = mysqli_query($con,$data);
if ($result)
{
   
   header("Location:taskdisplay.php");
}else{
		
}
if ($result) {
	echo "<script>alert('DATA SAVED')</script>";	
}else{
	echo "<script>alert('DATA NOT SAVED')</script>";
}

}
?>