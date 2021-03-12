<?php
include 'dbcon1.php';
if (isset($_GET['id']))
{
 $id = $_GET['id'];
 $data = "SELECT * FROM task WHERE id = $id";
 $result = mysqli_query($con,$data);
 $a = mysqli_fetch_array($result);
}

?>
<?php
include 'dbcon1.php';
if (isset($_POST['update'])) {
echo $a = $_POST['first_name'];
echo $b = $_POST['last_name'];
echo $c = $_POST['moblie_number'];
echo $d = $_POST['email'];
echo $e = $_POST['10th_marks'];
echo $f = $_POST['course'];
echo $g = $_POST['gender'];

$data = "UPDATE task SET first_name='$a',last_name='$b',moblie_number='$c',email='$d',10th_marks='$e',course='$f',gender='$g' WHERE id=$id";
$update = mysqli_query($con,$data);

if ($update) 
{
	header("Location:taskdisplay.php");
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		body{
			background: #e1edef;
		}
	</style>
</head>
<body>
	<h1 class="text-center">Pre-Registration Form</h1>
	<form class="form-group" method="post">
		FIRST NAME:
		<input type="text" value="<?php echo $a['first_name']?>" name="first_name" required="required" placeholder="ENTER NAME" class="form-control"><br>
		LAST NAME:
		<input type="text" value="<?php echo $a['last_name']?>" name="last_name" required="required" placeholder="ENTER LAST NAME" class="form-control"><br>
		MOBLIE NUMBER:
		<input type="text" value="<?php echo $a['moblie_number']?>" name="moblie_number" required="required" placeholder="ENTER YOU MOBLIE NUMBER" class="form-control"><br>
		EMAIL:
		<input type="text" value="<?php echo $a['email']?>" name="email" required="required" placeholder="ENETR YOUR EMAIL" class="form-control"><br>
		10TH MARKS:
		<input type="text" value="<?php echo $a['10th_marks']?>" name="10th_marks" required="required" placeholder="ENTER YOUR MARKS" class="form-control"><br>
		COURSE:
		<select type="text" name="course" required="required" class="form-control">
			<option>select course type</option>
			<option
			<?php
			if ($a['course'] == 'Full-Time 3 year diploma') {
				echo "selected";
			}
			?>
			>Full-Time 3 year diploma</option>
			<option
			<?php
			if ($a['course'] == 'Full-Time 4 year diploma') {
				echo "selected";
			}
			?>
			>Full-Time 4 year diploma</option>
			<option
			<?php
			if ($a['course'] == 'Full-Time 5 months diploma') {
				echo "selected";
			}
			?>
			>Full-Time 5 months diploma</option>
			<option
			<?php
			if ($a['course'] == 'Full-Time 6 year diploma') {
				echo "selected";
			}
			?>
			>Full-Time 6 year diploma</option>
		</select><br>
        GENDER:<br>
        <input required="required" type="radio" name="gender" value="Male"
        <?php
			if ($a['gender'] == 'Male') {
				echo "checked";
			}
			?>
		>Male<br>
        <input required="required" type="radio" name="gender" value="Female"
        <?php
			if ($a['gender'] == 'Female') {
				echo "checked";
			}
			?>
		>Female<br>
        <input required="required" type="radio" name="gender" value="Other"
        <?php
			if ($a['gender'] == 'Other') {
				echo "checked";
			}
			?>
        >Other<br>
        <br>
        <input type="submit" name="update" value="update">
	</form>
<center><a href="taskdisplay.php" class="text-center">Click Here to See the list of Pre-Registered Students</a></center>
</body>
</html>
