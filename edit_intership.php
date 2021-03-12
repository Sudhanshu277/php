<?php
include "dbcon.php";

if (isset($_GET['id'])) 
{
 echo $id= $_GET['id'];
 $data = "SELECT * FROM internship WHERE id = $id";
 $result =mysqli_query($con,$data);
 $a = mysqli_fetch_array($result);

}

?>
<!-- update code -->
<?php
include 'dbcon.php';

if (isset($_POST['update']))
 {
echo $a = $_POST['name'];
echo $b = $_POST['email'];
echo $c = $_POST['moblie'];
echo $d = $_POST['address'];
echo $e = $_POST['gender'];
echo $f = $_POST['college'];
echo $g = $_POST['qulification'];
echo $h = $_POST['branch'];
echo $i = $_POST['semester'];
echo $j = $_POST['intership'];

$data = "UPDATE internship SET student = '$a' , email = '$b' , moblie = '$c' , address = '$d' , gender = '$e' , college = '$f' , qualification = '$g' , branch = '$h' , semester = '$i' , intership = '$j' WHERE id = $id";
$result = mysqli_query($con,$data);
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>pn Infosys</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		*{
			margin:0px;
			padding: 0px;
		}
	
	</style>
</head>
<body>
	
		
		
				<form method="post">
					<h1 class="text-info text-center">Registration Form 2020</h1>
					<div class="form-group">
						<label>Student Name</label>
						<input value="<?php echo $a['student']?>" type="text" name="name" required="required" placeholder="Enter Name" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input value="<?php echo $a['email']?>" type="" name="email" required="required" placeholder="Enter Mail" class="form-control">
					</div>
					<div class="form-group">
						<label>Moblie Number</label>
						<input value="<?php echo $a['moblie']?>" type="number" name="moblie" required="required" placeholder="Enter Moblie Number" class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea  rows="3" cols="80" name="address" required="required" class="form-control"><?php echo $a['address']?></textarea>
					</div>
					<div class="form-group">
						<label>Gender</label><br>
						<input value="male" type="radio" name="gender" required="required" placeholder="Enter Gender"
                        <?php
                        if ($a['gender']=='male'){
                          echo "checked";
                        }

                        ?>


						>Male<br>
		                <input value="female" type="radio" name="gender" required="required" placeholder="Enter Gender">
                         <?php
                        if ($a['gender']=='female'){
                          echo "checked";
                        }

                        ?>

		                female
					</div>
					<div class="form-group">
						<label>College</label><br>
						<select name="college" required="required" class="form-control">
						<option>select</option>
						<option
                         <?php

                        if ($a['college']=='itm')
                        {
                          echo "selected";
                        }

                        ?>
                        >itm</option>
						<option
						<?php

                        if ($a['college']=='mits')
                        {
                          echo "selected";
                        }

                        ?>

						>mits</option>
						<option
						<?php

                        if ($a['college']=='rjit')
                        {
                          echo "selected";
                        }

                        ?>


						>rjit</option>
						<option
						<?php

                        if ($a['college']=='amity')
                        {
                          echo "selected";
                        }

                        ?>


						>amity</option>
						</select>
					</div>
					<div class="form-group">
						<label>Qulification</label><br>
						<select name="qualification" required="required" class="form-control">
							<option>select</option>
							<option value="b.tech"
							<?php

                            if ($a['qualification']=='b.tech')
                            {
                            echo "selected";
                            }
                            ?>

							>b.tech</option>
							<option value="m.tech"
                            <?php

                            if ($a['qualification']=='m.tech')
                            {
                            echo "selected";
                            }
                            ?>


							>m.tech</option>
							<option value="12th"
							<?php

                            if ($a['qualification']=='12th')
                            {
                            echo "selected";
                            }
                            ?>

							>12th</option>
							<option value="10th"
							<?php

                            if ($a['qualification']=='10th')
                            {
                            echo "selected";
                            }
                            ?>

							>10th</option>
						</select>
					</div>
					<div class="form-group">
						<label>Branch</label><br>
						<select name="branch" required="required" class="form-control">
							<option>select</option>
							<option
							<?php

                            if ($a['branch']=='it')
                            {
                            echo "selected";
                            }
                            ?>
                            >it</option>
							<option
							<?php

                            if ($a['branch']=='cse')
                            {
                            echo "selected";
                            }
                            ?>
                            >cse</option>
							<option
							<?php

                            if ($a['branch']=='mech')
                            {
                            echo "selected";
                            }
                            ?>
                            >mech</option>
							<option
							<?php

                            if ($a['branch']=='civil')
                            {
                            echo "selected";
                            }
                            ?>
                            >civil</option>
						</select>
					</div>
					<div class="form-group">
						<label>semester</label><br>
						<select name="semester" required="required" class="form-control">
							<option>select</option>
							<option
							<?php

                            if ($a['semester']=='1st')
                            {
                            echo "selected";
                            }
                            ?>
                            >1st</option>
							<option
							<?php

                            if ($a['semester']=='2nd')
                            {
                            echo "selected";
                            }
                            ?>
                            >2nd</option>
							<option
							<?php

                            if ($a['semester']=='3rd')
                            {
                            echo "selected";
                            }
                            ?>

							>3rd</option>
							<option
							<?php

                            if ($a['semester']=='4th')
                            {
                            echo "selected";
                            }
                            ?>
                            >4th</option>

						</select>
					</div>
					<div class="form-group">
						<label>Intership Course</label><br>
						<select name="intership" required="required" class="form-control">
							<option
							<?php

                            if ($a['intership']=='Web desiging')
                            {
                            echo "selected";
                            }
                            ?>
                            >Web desiging</option>
							<option
							<?php

                            if ($a['intership']=='web Development')
                            {
                            echo "selected";
                            }
                            ?>
                            >web Development</option>
							<option
							<?php

                            if ($a['intership']=='python')
                            {
                            echo "selected";
                            }
                            ?>
                            >python</option>
						</select>
					</div><br>
					<input type="submit" name="update" value="update" class="btn-info">
				</form>
		
</body>
</html>