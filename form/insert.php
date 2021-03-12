<?php
include 'dbcon1.php';
if (isset($_POST['submit'])) {
	
 $a = $_POST['NAME'];
 $b = $_POST['EMAIL'];
 $c = $_POST['MOBLIE_NUMBER'];
 $d = $_POST['ADDRESS'];
 $e = $_POST['GENDER'];
 $f = $_POST['QUALIFICATION'];
 $g = $_POST['BRANCH'];
 $h = $_POST['SEMESTER'];
 $i = $_POST['INTERNSHIP_COURSE'];

$data = "INSERT INTO data(NAME,EMAIL,MOBLIE_NUMBER,ADDRESS,GENDER,QUALIFICATION,BRANCH,SEMESTER,INTERNSHIP_COURSE)values('$a' , '$b' , '$c' , '$d' , '$e' , '$f' , '$g' , '$h' , '$i')";
$result = mysqli_query($con,$data);
if ($result) {
	echo "<script>alert('Data Save')</script>";
}else{
	echo "<script>alert('Data Not Save')</script>";
}
}
?>

