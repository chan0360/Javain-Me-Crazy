<!DOCTYPE html>
	<html>
		<head>
			<title>Buffs Sports Scores</title>
			<!-- link to main stylesheet -->
			<link rel="stylesheet" type="text/css" href="../css/main.css">
		</head>
		<body>
			<nav>
	    		<ul>
	        		<li><a href="./index.html">Home</a></li>
		        	<li><a href="./sportsscores.php">Sports Scores</a></li>
	        		<li><a href="./campusmap.html">Campus Map</a></li>
	        		<li><a href="./campusevents.php">Events</a></li>
				<li><a href="./busroutes.html">Bus Routes</a></li>
				<li><a href="./about.html">About</a></li>
	    		</ul>
			</nav>
		<div class="container">
	 	<h1>CU Buffs Sports Scores</h1>
	<h2>Football</h2>
	<ul class="posts">
		<?php
			echo "\n";
                        $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        		if($db->connect_errno > 0){
           			die('Unable to connect to database [' . $db->connect_error . ']');
       			}
        		$result = $db->query("SELECT * FROM sportsscores WHERE sport='football'");
        		while ($row = $result->fetch_assoc()){
            			echo "\t\t".'<li><span>'.$row['opponent'].'</span> - '.$row['score']."</li> <br/> \n";
        		}
		?>
 
	</ul>
	<h2>VollyBall</h2>
	<ul class="posts">
		<?php
			echo "\n";
                        $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        		if($db->connect_errno > 0){
           			die('Unable to connect to database [' . $db->connect_error . ']');
       			}
        		$result = $db->query("SELECT * FROM sportsscores WHERE sport='volleyball'");
        		while ($row = $result->fetch_assoc()){
            			echo "\t\t".'<li><span>'.$row['opponent'].'</span> - '.$row['score']."</li> <br/> \n";
        		}
		?>
 
	</ul>
	<h2>Soccer</h2>
	<ul class="posts">
		<?php
			echo "\n";
                        $db = new mysqli('138.68.46.83', 'root', 'javainmecrazy', 'javainmecrazy');
        		if($db->connect_errno > 0){
           			die('Unable to connect to database [' . $db->connect_error . ']');
       			}
        		$result = $db->query("SELECT * FROM sportsscores WHERE sport='soccer'");
        		while ($row = $result->fetch_assoc()){
            			echo "\t\t".'<li><span>'.$row['opponent'].'</span> - '.$row['score']."</li> <br/> \n";
        		}
		?>
 
	</ul>
			
			</div><!-- /.container -->
			<footer>
	    		<ul>
	        		<li><a href="jonah.jacobsen@colorado.edu">email</a></li>
				<li>Phone: 801-717-8177</li>
				</ul>
			</footer>
		</body>
	</html>
