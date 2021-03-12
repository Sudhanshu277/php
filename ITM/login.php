<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <style>
    	h1{
    		font-family: 'Sriracha', cursive;
    	}
      body{
        background-image: url(https://www.atg.world/public/assets/minified/Frontend/img/landing/world-map.svg);
        background-repeat: no-repeat;
        background-size: cover;
      }  
    </style>
</head>
<body>
    <div class="container-fluid" style="margin-top: 100px;">
    	<div class="row">
    		<div class="col-md-2"></div>
    		<div class="col-md-8 card shadow">
    			<form class="form-group" method="post">
    				<div class="row">

    					<div class="col-md-6">
    						<h1>Sing In</h1>
    						
    						
    						<input type="text" name="email" required="required" style="border: transparent;" placeholder="Enter email" class="form-control"><hr>
    						
    						<input type="password" name="password" style="border: transparent;" required="required" placeholder="Enter password" class="form-control"><hr>
    						
    						<input type="submit" style="border-radius: 20px;" name="login" value="login" class="btn btn-success w-100"><br><br>
                            <p>don't have account</p>
                            <a href="user.php" class="btn btn-dark">sing up</a>
    						
    					</div>
    					<div class="col-md-6">
    						<img src="https://www.atg.world/public/assets/minified/Frontend/img/landing/connect_share.svg" class="w-100 h-100">
    					</div>
    				</div>
    			</form>
    		</div>
    		<div class="col-md-2"></div>
    	</div>
      <!-- <img src="https://www.atg.world/public/assets/minified/Frontend/img/landing/world-map.svg" class="w-100"> -->
    </div>
</body>
</html>

<?php
include 'itmtask.php';

if (isset($_POST['login'])) 
{
 
   $a = $_POST['email'];
   $b = $_POST['password'];

   $data = "SELECT * FROM user WHERE email = '$a' && password = '$b'";
   $result = mysqli_query($con,$data);

   $total = mysqli_num_rows($result);
    //echo $total;
   if ($total==1)
   {
    //$_SESSION['a'] = $a;
    $data = "SELECT * FROM user WHERE email = '$a'";
    $result = mysqli_query($con,$data);
    $a = mysqli_fetch_array($result);
    $name = $a['name'];
    $_SESSION['a'] = $name;
    header('location:h.php');
   }
   else
   {
    header('location:login.php');
   }
}


?>