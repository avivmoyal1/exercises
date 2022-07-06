<!DOCTYPE html>
<html>
	<head>
	        <meta charset="utf-8"> 
	    	<title>PHP - Form submitted </title>
	    	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->
	</head>
	<body>
        <p>
			<?php 
				$fname = $_GET["firstName"];
				$lname = $_GET["lastName"];
				$user = $_GET["user"];

				
				echo "Hello " . $user . "<br>";
				echo "Your warning about " . $fname . " " . $lname ." has been added to the datebase"; 

			?>
        </p>
	</body>
</html>
