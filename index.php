<?php

	// Database connection
	include('includes/dataConn.php');

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


</head>

<body>

	<header>
		<div class="container">
			<nav>
				<h1 class="logo">Script Build<span>ar</span></h1>
				<ul>
					<li><a href="#" class="active">MainPage</a></li>
					<li><a href="about.php">Documentation</a></li>
					<li><a href="settings.php">DataManagement</a></li>
				</ul>
			</nav>
		</div>
	</header>

  <main>

		<div class="container">
			<div class="section">

				<form action="index.php" method="POST">
					<div class="inner-section">
						<h1>Generate a script</h1>
						<div class="row">
							<div class="col">
								<select class="form-control" name="trigger">
									<option selected>Choose a Trigger</option>
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
							<div class="col">
								<select class="form-control" name="action">
									<option selected>Choose an Action</option>
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

						<div class="btn-spacing">
							<button type="submit" name="generate_code" class="btn btn-light btn-lg btn-block">Generate</button>
						</div>
					</div>

					<div class="inner-section">

						<div class="btn-spacing-bottom">
							<button type="button" name="copy" id="copy_button" class="btn btn-light copy-notification">Copy</button>
							<button type="button" name="download" id="download_button" class="btn btn-light down-notification">Download</button>
						</div>

						<div class="form-group">

							<?php

							  if(isset($_POST['generate_code'])) {

							    $show_trigger_code = $_POST['trigger'];
									$show_action_code = $_POST['action'];

							    $sql3 = "SELECT code_module FROM code WHERE category = 'Trigger' AND id = '$show_trigger_code'";
									$sql4 = "SELECT code_module FROM code WHERE category = 'Action' AND id = '$show_action_code'";

							    $trigger_data = mysqli_query($conn, $sql3);
									$action_data = mysqli_query($conn, $sql4);

							    if (mysqli_num_rows($trigger_data) > 0) {
							      while($row = mysqli_fetch_assoc($trigger_data)) {

											?>

											<textarea class="form-control" id="exampleFormControlTextarea1" type="text" rows="20" name="codeBox"><?php
												echo "// TRIGGER CODE";
												echo "\n\n\n";
												echo $row['code_module'];

											while ($rows = mysqli_fetch_assoc($action_data)) {

													echo "\n\n\n\n\n";
													echo "// ACTION CODE";
													echo "\n\n\n";
													echo $rows['code_module'];

											}
											?></textarea>

										<?php
							      }
							    } elseif (mysqli_num_rows($action_data) > 0) {
										while($row = mysqli_fetch_assoc($action_data)) {

											?>
											<textarea class="form-control" id="exampleFormControlTextarea1" type="text" rows="20" name="codeBox"><?php
												echo "// ACTION CODE";
												echo "\n\n\n";
												echo $row['code_module'];
											?></textarea>

										<?php
							      }
							    }
							    else {
							      // failure
							      ?>
										<textarea class="form-control" id="exampleFormControlTextarea1" type="text" rows="20" name="codeBox"><?php echo "Select a Trigger and or Action!" ?></textarea>
										<?php
							    }
							  }
								?>

					  </div>
					</div>
				</form>

			</div>
		</div> <!-- /container -->

  </main>

	<!-- External scripts -->
	<script src="js/jquery-min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<!-- Alert -->
	<script src="js/alert/custom_notify.js" charset="utf-8"></script>
	<!-- Copy -->
	<script src="js/button/copy.js" charset="utf-8"></script>
	<!-- Download Button -->
	<script src="js/button/download.js" charset="utf-8"></script>

	<!-- Alert -->
	<script>
		$('.copy-notification').click(function(e) {
			$.notify("Generated Script Copied", "info");
		});
		$('.down-notification').click(function(e) {
			$.notify("Generated Script Downloaded", "info");
		});
	</script>

</body>

</html>
