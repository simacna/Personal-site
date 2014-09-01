<?php

class visualizer {
	
		/* Variables */
		public $page;
		
	
		/* Pass constructor variables */
		function __construct($pagetype) {	
			$page = $pagetype;			
		}
		
		
		
		function header() {
			
			

		echo '<div id="banner">
		<a href="index.php"><img src="https://webster.cs.washington.edu/images/kevinbacon/mymdb.png" alt="banner logo" /></a>
		My Movie Database
	</div>';
	
	}

		function footer() {

		echo '<div id="w3c">
			<a href="https://webster.cs.washington.edu/validate-html.php"><img src="https://webster.cs.washington.edu/images/w3c-html.png" alt="Valid HTML5" /></a>
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="https://webster.cs.washington.edu/images/w3c-css.png" alt="Valid CSS" /></a>
		</div>';

		}


	}
?>