<?php require_once "vendor/autoload.php" ?>
<?php 

	// Class use
	use App\Controller\Teacher;


	// Class instant 
	$teacher = new Teacher;

	// get data url
	if ( isset($_GET['delete']) ) {
		// get value
		$id = $_GET['delete'];

		$mess = $teacher -> deleteTeacher($id);
	}

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
	
	

	<div class="wrap-table">
		<?php 

			if (isset($mess)) {
				echo $mess;
			}

		 ?>
		<a class="btn btn-primary btn-sm" href="teacher_index.php">Add new Teacher</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
						<?php 


							$data = $teacher -> allTeacher();

							$id = 1;
							while($fdata = $data -> fetch_assoc()):

						 ?>

						<tr>
							<td><?php echo $id; $id++; ?></td>
							<td><?php echo $fdata['name']; ?></td>
							<td><?php echo $fdata['email']; ?></td>
							<td><?php echo $fdata['cell']; ?></td>
							<td><img src="media/img/Teacher/<?php echo $fdata['photo']; ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="teacher_view.php?id=<?php echo $fdata['id']; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="teacher_edit.php?id=<?php echo $fdata['id']; ?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete=<?php echo $fdata['id']; ?>">Delete</a>
							</td>
						</tr>


						<?php endwhile; ?>
						
						

					</tbody>
				</table>
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