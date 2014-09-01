<?php
	include("common.php");
	$top = new Visualizer('actors');
	$top -> header();
	
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "365663";
	$db_name = "imdb";
	
	//Parameters passed from myimdb homepage
	
	$actor_name = $_GET["firstname"];
	$actor_lastname = $_GET["lastname"];
	
	#PDO('database_driver:host.)
	try{
	//$db = new PDO('mysql:host='.$db_host.';dbname'.$db_name,$db_user,$db_pass);
	$db = new PDO("mysql:dbname=imdb; host=localhost","root","365663");
} catch(PDOException $e){
	error(false, 'PDO ERROR: ' . $e->getMessage());
}
?>
<h1> Results for <?=$actor_name, $actor_lastname ?> </h1>
<ol>
	<?php
	$db = new PDO("mysql:dbname=imdb;host=localhost", "root","365663");
	$rows =  $db -> query("SELECT m.name, m.year FROM movies m 
												JOIN roles r ON m.id = r.movie_id
												JOIN actors a ON a.id = r.actor_id
												WHERE a.first_name= '$actor_name'
												AND a.last_name='$actor_lastname'
												ORDER BY year DESC");
	
	foreach($rows as $row){
	?>
	<li> Title: <?=$row["name"]?>,
			 Year: <?=$row["year"]?> </li>
	
	<?php
}
?>
</ol>