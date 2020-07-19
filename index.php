<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap">
		<a class="btn btn-sm btn-primary" href="table.php">All Data</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				<form action="">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Location</label>
						<select class="form-control" name="" id="">
							<option value="">--Select--</option>
							<option value="">Gazipur</option>
							<option value="">Mirpur</option>
							<option value="">Gulshan</option>
							<option value="">Badda</option>
							<option value="">Rampura</option>
							<option value="">Banani</option>
							<option value="">Mohakhali</option>
							<option value="">Others</option>
						</select>
						
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Gender</label>
						<br>
						<input name="gender" type="radio" value="Male" id="mmm"> <label for="mmm">Male</label>
						<input name="gender" type="radio" value="Female" id="fff"> <label for="fff">Female</label>
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input class="form-control" type="File">
					</div>
					<div class="form-group">
						<input type="Checkbox" id="Status"> <label for="Status">Published</label>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Add Your Information">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>