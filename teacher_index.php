<?php require_once "vendor/autoload.php" ?>
<?php 

	// Class use
	use App\Controller\Teacher;


	// Class instant 
	$teacher = new Teacher;

 ?>
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
	
	<?php 

		/**
		 * Student form data manage
		 */
		if ( isset($_POST['submit']) ) {
			// Value get
			$name = $_POST['name'];
			$email = $_POST['email'];
			$cell = $_POST['cell'];

			// File get
			$photo = $_FILES['photo'];

			// Form validation student data
			if ( empty($name) || empty($email) || empty($cell) ) {
				$mess = "<p class=\"alert alert-danger\">All fields are required !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
				$mess = "<p class=\"alert alert-danger\">Invalid email address !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}else{
				// Add new Student
				$mess = $teacher -> addNewTeacher($name ,$email, $cell, $photo);
			}
		}

	 ?>

	<div class="wrap">
		<a class="btn btn-primary btn-sm" href="teacher_data.php">All Teacher</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				<?php 
					/**
					 * Show all message
					 */
					if ( isset($mess) ) {
						echo $mess;
					}

				 ?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>
					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>








	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>