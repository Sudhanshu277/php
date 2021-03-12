<?PHP
include "dbcon1.php";

if (isset($_GET['ID'])) 
{
 $ID = $_GET['ID'];

$data = "DELETE FROM data WHERE ID = $ID";
$delete = mysqli_query($con,$data);

if ($delete) {
	header("Location:displayform.php");
    }
}


?>