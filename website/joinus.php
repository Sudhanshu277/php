<?php include 'header.php';
?>
<section><!-- form section -->
	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-6">
				<div class="card shadow">
					<img src="img/join.jpg" class="w-100">
				</div>	
			</div>
			<div class="col-md-6">
				<h1>JOIN US TO SUPPORT US.... </h1>
				<form>
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="" placeholder="ENTER YOUR NAME" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="" name="" placeholder="ENTER YOUE EMAIL" class="form-control">
					</div>
					<div class="form-group">
						<label>Phone Number</label>
						<input type="Number" name="" placeholder="ENTER YOUR PHONE NUMBER" class="form-control">
					</div>
					<div class="form-group">
						<label>D.O.B</label>
						<input type="date" name="" placeholder="D.O.B" class="form-control">
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea rows="3" cols="30" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>Field</label>
						<select class="form-control">
							<option>select</option>
							<option>volunteer</option>
							<option>Teachers</option>
							<option>Marketing Assistant</option>
							<option>Photographer</option>
							<option>Content Writer</option>
						</select>
					</div>
					<button class="btn btn-warning">SUBMIT</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php';
?>