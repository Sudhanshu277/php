<?php
$con = mysqli_connect('localhost' , 'root' , '' , 'task2');

if ($con) 
{
	echo "connected";
}
else
{
	echo 'not connected';
}
?>