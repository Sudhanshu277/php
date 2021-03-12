<?php
include "dbcon.php";
if (isset($_POST['submit']))
{
echo $a = $_POST['name'];
echo $b = $_POST['email'];
    $filename = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];

    $file = "upload/".$filename;
    move_uploaded_file($tmpname,$file);
//print_r($file);
    $data = "INSERT INTO employe(name,email,image)VALUES('$a','$b','$file')";
    $result = mysqli_query($con,$data);
    
}
?>