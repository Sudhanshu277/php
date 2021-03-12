<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form class="form-group" method="post" action="image_insert.php" enctype="multipart/form-data">
    	name:<br>
    	<input type="text" name="name" required="required" class="form-control"><br>
    	email:<br>
    	<input type="text" name="email" required="required" class="form-control"><br>
    	image:<br>
    	<input type="file" name="image" class="form-control"><br>
    	<input type="submit" name="submit" value="submit">


    </form>
</body>
</html>