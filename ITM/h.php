<?php
//session_start();
include 'session.php';
?>
<?php
include 'itmtask.php';
$a = $_SESSION['a'];
$data = "SELECT * FROM user WHERE name = '$a'";
$result = mysqli_query($con,$data);
$e = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <style>
     	body{
     		/*background-image: url(https://vpassets.infinityfree.net/welcome2017/background.jpg); */
     		background-color: #ccc;
     		background-repeat: no-repeat;
     		background-size: cover;
     	}
     	h1{
    		font-family: 'Sriracha', cursive;
    	}
    	h3{
    		font-family: 'Sriracha', cursive;
    	}
     </style>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-light">
		
			<h3>Welcome! <?php echo $e['name']?></h3>

		<div class="ml-auto">	
			<a href="show.php?id=<?php echo $e['id']?>" class="btn btn-info" >Review</a>
			&nbsp;&nbsp;&nbsp;
			<a href="edit.php?id=<?php echo $e['id']?>" class="btn btn-dark" >Edit</a>
			<a href="logout.php" class="btn btn-success">logout</a>
		</div>
	</nav>

<!--banner -->
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4" style="margin-top: 50px;">
				<br><br><br>
				<!-- <p>Start your new jounrey</p> -->
				<h1>"An investment in knowledge</h1>
				<h3> always pays the best interest." ...</h3>
				<hr>
				<a href="dash.php" class="btn btn-dark">Enrollment</a>
				
			</div>
			<div class="col-md-6">
				<div class="card shadow">
					<img src="https://media.istockphoto.com/photos/business-document-report-on-paper-and-tablet-with-sales-data-and-picture-id1182777182?b=1&k=6&m=1182777182&s=170667a&w=0&h=euKThOcC4xa9sDAqERzjNW7bGGffGdcQQbRAQSGMqG4=" class="w-100" style="height: 500px;">
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				<img src="https://media.istockphoto.com/photos/young-couple-shaking-hands-deal-contract-real-estate-investment-picture-id1203814636?b=1&k=6&m=1203814636&s=170667a&w=0&h=NxFySVN7AW_9a1QsHEe4KBejuNtkiLj_Nk4Vg0_8DJg=" class="w-100">
			</div>
			<div class="col-md-8 card shadow bg-info">
				
					<div class="row">
						<div class="col-md-4">
							<br>
							<strong><p class="text-center">Change yourself with time</p></strong>
							<center><img src="https://cdn.pixabay.com/photo/2017/06/26/00/46/flat-2442462__340.png" style="height: 50px;"></center>
						</div>
						<div class="col-md-8" >
							<br>
							<h3 class="text-center"> "A mind is a fire to be kindled, not a vessel to be filled."</h3>
						</div>
						
					</div>
				
			</div>
		</div>
	</div>
</section>

</body>
</html>