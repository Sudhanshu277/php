<?php
include ("dbcon.php");
if(isset($_POST['submit']))
{
$a = $_POST ['username'];
$b = $_POST ['password'];

$data = "INSERT INTO user(username,password)values('$a' , '$b')";
mysqli_query($con, $data);
}
?>