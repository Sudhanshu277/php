<?php
include 'dbcon1.php';

if (isset($_GET['ID']))
 {
  	$ID = $_GET['ID'];
  $data = "SELECT * FROM data WHERE ID = $ID";
  $result =mysqli_query($con,$data);
  $a = mysqli_fetch_array($result);
}
?>
<!-- upadte code -->
<?php
include 'dbcon1.php';

if (isset($_POST['update'])) 
{
 $a = $_POST['NAME'];
 $b = $_POST['EMAIL'];
 $c = $_POST['MOBLIE_NUMBER'];
 $d = $_POST['ADDRESS'];
 $e = $_POST['GENDER'];
 $f = $_POST['QUALIFICATION'];
 $g = $_POST['BRANCH'];
 $h = $_POST['SEMESTER'];
 $i = $_POST['INTERNSHIP_COURSE'];

$data = "UPDATE data SET NAME = '$a',EMAIL = '$b',MOBLIE_NUMBER = '$c',ADDRESS = '$d' ,GENDER = '$e' ,QUALIFICATION = '$f',BRANCH = '$g',SEMESTER = '$h',INTERNSHIP_COURSE = '$i' WHERE ID = $ID" ;
$update = mysqli_query($con,$data);

if($update)
{
	header("Location:displayform.php"); //DISPLAYFORM
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center">FORM</h1>
	<form method="post">
		
		<div class="form-group">
			<label>NAME</label>
			<input type="text" value="<?php echo $a['NAME']?>" name="NAME" required="required" placeholder="ENTER NAME" class="form-control" >
		</div>
		<div class="form-group">
			<label>EMAIL</label>
			<input type="text" value="<?php echo $a['EMAIL']?>"  name="EMAIL" required="required" placeholder="ENTER EMAIL" class="form-control" >
		</div>
		<div class="form-group">
			<label>MOBLIE NUMBER</label>
			<input type="text" value="<?php echo $a['MOBLIE_NUMBER']?>"  name="MOBLIE_NUMBER" required="required" placeholder="ENTER NUMBER" class="form-control" >
		</div>
		<div class="form-group">
			<label>ADDRESS</label>
			<input type="text" value="<?php echo $a['ADDRESS']?>"  name="ADDRESS" required="required" placeholder="ENTER ADDRESS" class="form-control">
		</div>
		<div class="form-group">
			<label>GENDER</label><br>
			<input type="radio" value="MALE" name="GENDER" required="required" 
			<?php
			if ($a['GENDER'] == 'MALE') 
			{
				echo "checked";
			}
            ?>
            >MALE<br>
			<input type="radio" value="FEMALE" name="GENDER" required="required"
			<?php
			if ($a['GENDER'] == 'FEMALE') {
				echo "checked";
			}
            ?>
            >FEMALE
		</div>
		<div class="form-group">
			<label>QUALIFICATION</label>
			<select name="QUALIFICATION" required="required" class="form-control">
				<option>SELECT</option>
				<option value="B.TECH"
				<?php
                if ($a['QUALIFICATION'] =='B.TECH') 
                {
                	echo "selected";
                }
				?>
				>B.TECH</option>
				<option value="M.TECH"
				<?php
                if ($a["QUALIFICATION" ]=='M.TECH')
                 {
                    echo "selected";
                }
				?>
				>M.TECH</option>
				<option value="10TH"
				<?php
                if($a['QUALIFICATION'] == '10TH')
                {
                	echo "selected";
                }
				?>
			    >10TH</option>
				<option value="12TH"
				<?php
                if($a['QUALIFICATION'] == '12TH')
                {
                   echo "selected";
                }
				?>
			    >12TH</option>
			</select>
		</div>
		<div class="form-group">
			<label>BRANCH</label>
			<select type="text" name="BRANCH" required="required" placeholder="ENTER NAME" class="form-control">
				<option>SELECT</option>
				<option
				<?php
				if ($a['BRANCH'] == 'IT') {
					echo "selected";
				}
                ?>
				>IT</option>
				<option
				<?php
                if ($a['BRANCH'] == 'CSE') {
                	echo "selected";
                }
				?>
				>CSE</option>
				<option
				<?php
                if ($a['BRANCH'] == 'ME') {
                	echo "selected";
                }
				?>
				>ME</option>
				<option
				<?php
                if ($a['BRANCH'] == 'CIVIL') {
                	echo "selected";
                }
				?>
				>CIVIL</option>
		    </select>  
		</div>
		<div class="form-group">
			<label>SEMESTER</label>
			<select type="text" name="SEMESTER" required="required" placeholder="ENTER NAME" class="form-control">
				<option>SELECT</option>
				<option
				<?PHP
				if($a['SEMESTER'] == '1ST')
				{
					echo "selected";
				}

				?>
				>1ST</option>
				<option
				<?PHP
				if($a['SEMESTER'] == '2ND')
				{
					echo "selected";
				}

				?>
				>2ND</option>
				<option
				<?PHP
				if($a['SEMESTER'] == '3RD')
				{
					echo "selected";
				}

				?>
				>3RD</option>
				<option
				<?PHP
				if($a['SEMESTER'] == '4TH')
				{
					echo "selected";
				}

				?>>4TH</option>
		    </select>  
		</div>
		<div class="form-group">
			<label>INTERNSHIP COURSE</label>
			<select type="text" name="INTERNSHIP_COURSE" required="required" placeholder="ENTER NAME" class="form-control">
				<option>SELECT</option>
				<option
				<?PHP
				if($a['INTERNSHIP_COURSE'] == 'WEB DESINING')
				{
					echo "selected";
				}

				?>
				>WEB DESINING</option>
				<option
				<?PHP
				if($a['INTERNSHIP_COURSE'] == 'WEB DEVELOPMENT')
				{
					echo "selected";
				}

				?>
				>WEB DEVELOPMENT</option>
				<option
				<?PHP
				if($a['INTERNSHIP_COURSE'] == 'PYTHON')
				{
					echo "selected";
				}

				?>
				>PYTHON</option>
				<option
				<?PHP
				if($a['INTERNSHIP_COURSE'] == 'JAVASCRIPT')
				{
					echo "selected";
				}

				?>
				>JAVASCRIPT</option>
		    </select>  
		</div>
		<input type="submit" name="update" value="update" class="btn btn-info">
	</form>

</body>
</html>