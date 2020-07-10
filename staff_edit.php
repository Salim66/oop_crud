<?php require_once "vendor/autoload.php" ?>
<?php 

	// Class use
	use App\Controller\Staff;


	// Class instant 
	$staff = new Staff;

	// get data from url
	$id="";
	if ( isset($_GET['id']) ) {
		$id = $_GET['id'];

		$single_staff = $staff -> singleStaff($id);

	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $single_staff['name']; ?></title>
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
		if ( isset($_POST['update']) ) {
			// Value get
			$name = $_POST['name'];
			$email = $_POST['email'];
			$cell = $_POST['cell'];

			// File get
			$new_photo = $_FILES['new_photo'];
			$old_photo = $_POST['old-photo'];

			// Form validation staff data
			if ( empty($name) || empty($email) || empty($cell) ) {
				$mess = "<p class=\"alert alert-danger\">All fields are required !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
				$mess = "<p class=\"alert alert-danger\">Invalid email address !<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
			}else{
				// Add new Student
				$mess = $staff -> staffDataUpdate($name, $email, $cell,  $id, $new_photo, $old_photo);
			}
		}



	 ?>

	<div class="wrap">
		<a class="btn btn-primary btn-sm" href="staff_data.php">All Staffs</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Update data of: <?php echo $single_staff['name']; ?></h2>
				<?php 
					/**
					 * Show all message
					 */
					if ( isset($mess) ) {
						echo $mess;
					}

				 ?>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" value="<?php echo $single_staff['name']; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" value="<?php echo $single_staff['email']; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="<?php echo $single_staff['cell']; ?>" type="text">
					</div>
					<div class="form-group">
						<img src="media/img/Staff/<?php echo $single_staff['photo']; ?>" alt="">
						<input name="old-photo" value="<?php echo $single_staff['photo']; ?>" type="hidden">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="new_photo" class="form-control" type="file">
					</div>
					<div class="form-group">
						<input name="update" class="btn btn-primary" type="submit" value="Sign Up">
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