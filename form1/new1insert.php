<?php
include 'task2.php';

 if (isset($_POST['submit']))
 {
 echo  $a = $_POST['name'];	
 echo  $b = $_POST['phone'];
 echo $c = $_POST['email'];
 $d = $_POST['education'];
     // print_r($d);
   $edu = implode(",",$d);
      echo $edu;

echo $e = $_POST['college'];
echo $f = $_POST['gender'];
echo $g = $_POST['address'];

$data = "INSERT INTO new(name,phone,email,education,college,gender,address)VALUES('$a','$b','$c','$edu','$e','$f','$g')";
$result = mysqli_query($con,$data);
}
?>