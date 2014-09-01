
<!DOCTYPE html>
<html>
	<head>
		<title>My Movie Database (MyMDb)</title>
		<meta charset="utf-8" />
		
		<!-- Links to provided files.  Do not edit or remove these links -->
		<link href="https://webster.cs.washington.edu/images/kevinbacon/favicon.png" type="image/png" rel="shortcut icon" />
		<script src="https://webster.cs.washington.edu/js/kevinbacon/provided.js" type="text/javascript"></script>

		<!-- Link to your CSS file that you should edit -->
		<link href="bacon.css" type="text/css" rel="stylesheet" />
	<style>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300,600);

	
	*{background-color: #F0FFF0;font-family: 'Open Sans', sans-serif;}
	</style>
	</head>

	<body>
		<div id="frame">
			<?php
			include("common.php");
			$visualizer = new visualizer('actor');
			$visualizer->header();
			?>
			<div id="main">
				<h1> Note: I worked on this project using a local server XAMPP, importing the IMDB database. I've had trouble importing the .sql database to the live server (although you can see the code on my GitHub)... Something I could hopefully learn at Hacker School :) </h1>
				<h2>The One Degree of Kevin Bacon</h2>
				<p>Type in an actor's name to see if he/she was ever in a movie with Kevin Bacon!</p>
				<p><img src="https://webster.cs.washington.edu/images/kevinbacon/kevin_bacon.jpg" alt="Kevin Bacon" /></p>

				<!-- form to search for every movie by a given actor -->
				<form action="search-all.php" method="get">
					<fieldset>
						<legend>All movies</legend>
						<div>
							<input name="firstname" type="text" size="12" placeholder="first name" autofocus="autofocus" /> 
							<input name="lastname" type="text" size="12" placeholder="last name" /> 
							<input type="submit" value="go" />
						</div>
					</fieldset>
				</form>

				<!-- form to search for movies where a given actor was with Kevin Bacon -->
				<form action="search-kevin.php" method="get">
					<fieldset>
						<legend>Movies with Kevin Bacon</legend>
						<div>
							<input name="firstname" type="text" size="12" placeholder="first name" /> 
							<input name="lastname" type="text" size="12" placeholder="last name" /> 
							<input type="submit" value="go" />
						</div>
					</fieldset>
				</form>
			</div> <!-- end of #main div -->
		
			<?php
			$foot = new visualizer('foot');
			$foot -> footer();
			?>
		</div> <!-- end of #frame div -->
	</body>
</html>
