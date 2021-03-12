 <?php
include ("dbcon.php");
if (isset($_POST['submit'])) {
echo $a = $_POST['name'];
echo $b = $_POST['email'];
echo $c = $_POST['moblie'];
echo $d = $_POST['address'];
echo $e = $_POST['gender'];
echo $f = $_POST['college'];
echo $g = $_POST['qualification'];
echo $h = $_POST['branch'];
echo $i = $_POST['semester'];
echo $j = $_POST['intership'];

$data = "INSERT INTO internship(student,email,moblie,address,gender,college,qualification,branch,semester,intership)values('$a' , '$b' , '$c' , '$d' , '$e' , '$f' , '$g' ,'$h', '$i' , '$j')";
mysqli_query($con,$data);
}

?>