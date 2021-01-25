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
					<li><a href="index.php">MainPage</a></li>
					<li><a href="#" class="active">Documentation</a></li>
					<li><a href="settings.php">DataManagement</a></li>
				</ul>
			</nav>
		</div>
	</header>

  <main>
		<div class="container">
			<div class="section link">
				<div class="inner-section">
					<h1>Content Table</h1>
					<ul>
						<a href="about.php#1"><li>What is Script BuildAR?</li></a>
						<a href="about.php#2"><li>First Use</li></a>
						<a href="about.php#3"><li>Generate Section</li></a>
						<a href="about.php#4"><li>Add Data</li></a>
						<a href="about.php#5"><li>Delete Data</li></a>
						<a href="about.php#6"><li>Database Maintenance</li></a>
					</ul>
				</div>

				<div id="1" class="row inner-section">
					<div class="col">
						<h1>What is Script BuildAR?</h1>
					</div>
					<div class="col">
						<p>Script BuildAR is a tool designed to improve and optimise the development workflow of Spark AR Studio. Thanks to the easy to use UI you can generate scripts in no time and build amazing AR experiences for Facebook!</p>
					</div>
				</div>

				<div id="2" class="row inner-section">
					<div class="col">
						<h1>First Use</h1>
					</div>
					<div class="col">
						<p>Is it the first time using Script BuildAR? <a target="_blank" href="#">This document</a> will tell you how to host Script BuildAR, use it with a localhost and setup the database so it’s ready for its first use!</p>
					</div>
				</div>

				<div id="3" class="row inner-section">
					<div class="col">
						<h1>Generate Section</h1>
					</div>
					<div class="col">
						<p>The generate section is the heart of Script BuildAR, here you can generate a script suited to your needs. It can be found on the <a href="index.php">mainpage</a>. Select a trigger, select an action or both. Press generate and the script will be build for you. Use copy or download to import the code into Spark AR Studio.</p>
						<video src="documentation/generate_section.mov" autoplay muted loop type="video/mov"></video>
					</div>
				</div>

				<div id="4" class="row inner-section text">
					<div class="col">
						<h1>Add Data</h1>
					</div>
					<div class="col">
						<p>Did you create some new triggers or actions? Add it to the Script BuildAR database! It can be found in the <a href="settings.php#1">datamanagement</a> tab.</p>
						<video src="documentation/add.mov" autoplay muted loop type="video/mov"></video><br><br>

						<h4>Guidelines</h4>
						<ul>
							<li>Give the trigger/action a clear name</li>
							<li>Make sure it belongs to the triggers or the actions. The code is a trigger, when it triggers an event [examples: tap on screen, hold tap, mouth open, smile, blink]. The code is an action when it executes an event after it got triggered [examples: toggle show/hide, hide, show, animate, toggle animation, change colour, change material, change mesh].</li>
							<li>Make sure the code is structured:</li>
							<ul>
								<li>Start the code with a commented title so the user can see from the code what has to happen.</li>
								<li>Comment a list with elements that have to be in the project in order for the code to work.</li>
								<li>Good spacing</li>
								<li>Make good use of comments such as [IGNORE], [EDIT], [EDIT HERE], [PASTE HERE], [COPY THIS], etc…</li>
								<li>Check this <a target="_blank" href="documentation/script_tap_change.js">default script</a> for a good example. In the example you’ll see the code of a tap trigger and a material toggle.</li>
							</ul>
						</ul>
					</div>
				</div>

				<div id="5" class="row inner-section">
					<div class="col">
						<h1>Delete Data</h1>
					</div>
					<div class="col">
						<p>The delete section can be found in the <a href="settings.php#2">datamanagement</a> tab. Here you can delete a trigger or an action from the Script BuildAR database. Use it wisely!</p>
						<video src="documentation/delete.mov" autoplay muted loop type="video/mov"></video>
					</div>
				</div>

				<div id="6" class="row inner-section">
					<div class="col">
						<h1>Database Maintenance</h1>
					</div>
					<div class="col">
						<p>It’s important to maintain the database every now and then. These steps explain how you can maintain the database. If the database isn’t set up yet we recommend to read <a target="_blank" href="#">this document</a> first.</p>

						<p>Download/export backup</p>
						<video src="documentation/export.mov" autoplay muted loop type="video/mov"></video>
						<p>Go to you database host [in this case phpMyAdmin] > select the database “script_buildar” > export > select “Custom - display all possible options” > select “Save output to a file” > Make sure you select “Add DROP TABLE / VIEW / PROCEDURE / FUNCTION / EVENT / TRIGGER statement”, this can be found under “Object creation options“ > press “Go”</p>

						<p>Restore/import backup</p>
						<video src="documentation/import.mov" autoplay muted loop type="video/mov"></video>
						<p>Go to you database host [in this case phpMyAdmin] > select the database “script_buildar” > import > choose the backup file [ends with sql] > press “Go”</p>
					</div>
				</div>

			</div>
		</div>
  </main>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

</body>

</html>
