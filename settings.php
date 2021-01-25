<?php
// Database connection
include('includes/dataConn.php');

	// ADD
	if(isset($_POST['submit'])) {

		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$category = mysqli_real_escape_string($conn, $_POST['category']);
		$code = mysqli_real_escape_string($conn, $_POST['code']);

		// create sql
		$sql = "INSERT INTO code(name, category, code_module) VALUES('$name', '$category', '$code')";

		// Save to database and check
		if(mysqli_query($conn, $sql)) {
			// Success
			header('Location: settings.php?success=1');
		} else {
			// Error
			echo 'query error: ' . mysqli_error($conn);
		}
	}

	// Delete Trigger
	if(isset($_POST['trigger_del'])) {

		$del_trigger = $_POST['trigger'];

		$sql_del_trigger = "DELETE FROM code WHERE id = '$del_trigger' AND category = 'Trigger'";

		if(mysqli_query($conn, $sql_del_trigger)) {
			// success
			header('Location: settings.php?success=2');
		} else {
			// failure
			echo 'query error: ' . mysqli_error($conn);
		}
	}



	// Delete Action
	if(isset($_POST['action_del'])) {

		echo '<script type="text/javascript">',
		'del();',
		'</script>'
		;

		$del_action = $_POST['action'];

		$sql_del_action = "DELETE FROM code WHERE id = '$del_action' AND category = 'Action'";

		if(mysqli_query($conn, $sql_del_action)) {
			// success
			header('Location: settings.php?success=2');
			mysqli_close($conn);
		} else {
			// failure
			echo 'query error: ' . mysqli_error($conn);
		}
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Script Builder</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/favicon.ico" type="image/png">
	<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
	<!-- Css -->
	<link type="text/css" href="css/bootstrap/bootstrap_min.css" rel="stylesheet">
	<!-- Custom -->
	<link type="text/css" href="css/stylesheet.css" rel="stylesheet">

	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/jquery-1.10.2.js"></script>
</head>

<body>


	<header>
		<div class="container">
			<nav>
				<h1 class="logo">Script Build<span>ar</span></h1>
				<ul>
					<li><a href="index.php">MainPage</a></li>
					<li><a href="about.php">Documentation</a></li>
					<li><a href="#" class="active">DataManagement</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>

		<div class="container">
			<div class="section">
				<div class="inner-section">
					<h1>Page Content</h1>
					<ul>
						<a href="settings.php#1"><li>Add Trigger / Action</li></a>
						<a href="settings.php#2"><li>Delete Trigger / Action</li></a>
						<!-- <a href="settings.php#3"><li>Backup Section</li></a> -->
					</ul>
				</div>

				<!-- ADD DATA -->
				<div id="1" class="inner-section">
					<h1>Add a Trigger / Action</h1>
					<form action="settings.php" method="POST">
					  <div class="form-group">
							<label for="exampleFormControlSelect1">Enter a name</label>
					    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Choose a category</label>
					    <select class="form-control" name="category" id="exampleFormControlSelect1">
								<option>Click here</option>
					      <option value="Trigger">Trigger</option>
					      <option value="Action">Action</option>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Enter code module</label>
					    <textarea type="text" name="code" class="form-control" id="exampleFormControlTextarea1" rows="20"></textarea>
					  </div>
						<button type="submit" name="submit" value="submit" class="btn btn-light btn-lg btn-block">Add</button>
					</form>
				</div>



				<div id="2" class="inner-section">
					<h1>Delete Trigger / Action</h1>

					<div class="row btn-spacing">
						<!-- DELETE TRIGGER -->
						<div class="col">
							<form action="settings.php" method="POST">
								<div class="form-group">
									<select class="form-control" name="trigger">
										<option selected>Choose a Trigger to delete</option>
										<?php
											$sql1 = 'SELECT * FROM code WHERE category = "Trigger" ORDER BY name';
											$triggers = mysqli_query($conn, $sql1);

											if (mysqli_num_rows($triggers) > 0) {
												while($row = mysqli_fetch_assoc($triggers)) {
													$trigger_id = $row['id'];
													$trigger_name = $row['name'];

													echo '<option value="'.$trigger_id.'">'.$trigger_name.'</option>';
												}
											} else {
												// failure
												echo 'query error: ' . mysqli_error($conn);
											}
										?>
									</select>
								</div>
						</div>
						<div class="col">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#trigger_modal">Delete Trigger</button>

							<!-- Modal -->
							<div class="modal fade" id="trigger_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalCenterTitle">Confirm deletion</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        Are you sure you want to remove this data?
							      </div>
							      <div class="modal-footer">
							        <button type="submit" class="btn btn-danger" name="trigger_del">Yes</button>
							        <button type="button" class="btn btn-dark" data-dismiss="modal">No</button>
							      </div>
							    </div>
							  </div>
							</div>

						</form>
						</div>
					</div>




					<div class="row btn-spacing">
						<!-- DELETE ACTION -->
						<div class="col">
							<form action="settings.php" method="POST">
								<div class="form-group">
									<select class="form-control" name="action">
										<option selected>Choose an Action to delete</option>
										<?php
											$sql2 = 'SELECT * FROM code WHERE category = "Action" ORDER BY name';
											$actions = mysqli_query($conn, $sql2);

											if (mysqli_num_rows($actions) > 0) {
												while($row = mysqli_fetch_assoc($actions)) {
													$action_id = $row['id'];
													$action_name = $row['name'];

													echo '<option value="'.$action_id.'">'.$action_name.'</option>';
												}
											} else {
												// failure
												echo 'query error: ' . mysqli_error($conn);
											}
										?>
									</select>
								</div>
						</div>
						<div class="col">
							<!-- Button action modal -->
							<button type="button" class="btn btn-light btn-lg btn-block" data-toggle="modal" data-target="#action_modal">Delete Action</button>

							<!-- Modal -->
							<div class="modal fade" id="action_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalCenterTitle">Confirm deletion</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        Are you sure you want to remove this data?
							      </div>
							      <div class="modal-footer">
							        <button type="submit" class="btn btn-danger" name="action_del">Yes</button>
							        <button type="button" class="btn btn-dark" data-dismiss="modal">No</button>
							      </div>
							    </div>
							  </div>
							</div>
							</form>
						</div>
					</div>

				</div>



			<!-- BACKUP SELECTION -->
			<!-- <div id="3" class="inner-section">
				<h1>Backup Section</h1>
				<div class="row">
					<div class="col">
						<button type="button" class="btn btn-light">Download Backup</button>
					</div>
					<div class="col">
						<div class="form-group">
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
							<div class="btn-spacing">
								<button type="button" class="btn btn-light">Upload Backup</button>
							</div>
						</div>
					</div>
				</div>
			</div> -->

			</div>
		</div>

  </main>

	<!-- External scripts -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- Alert -->
	<script src="js/alert/custom_notify.js" charset="utf-8"></script>
	<!-- Alert -->
	<script>
		function add() {
			$.notify("Data Added", "success");
		};
		function del() {
			$.notify("Data Deleted", "error");
		};
	</script>

	<?php
		if (isset($_GET['success']) && $_GET['success'] == 1) {
			echo "<script type='text/javascript'>add();</script>";
		} else if (isset($_GET['success']) && $_GET['success'] == 2) {
			echo "<script type='text/javascript'>del();</script>";
		}
	 ?>

</body>


</html>
