<?php
include 'dbcon1.php';

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$data = "DELETE FROM task WHERE id=$id";
	$delete = mysqli_query($con,$data);
  
  if ($delete) {
  	header("Location:taskdisplay.php");
  }
}


?>