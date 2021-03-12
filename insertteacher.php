 <?php
include ("dbcon.php");
if (isset($_POST['submit'])) {
 $a = $_POST['name'];
 $b = $_POST['city'];
 $c = $_POST['address'];

 $data= "INSERT INTO teacher(name,city,address)values('$a' , '$b' , '$c')";
 mysqli_query($con,$data);
}
?>