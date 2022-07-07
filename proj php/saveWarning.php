<?php 

	include "config.php";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {

        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"

        );

    }

?> 



<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">  

		<title>msg to user</title>


		<!-- <link href="includes/style.css" rel="stylesheet"> -->

	</head>

	<body>

    <?php

        $fanId = $_GET['fanId'];

        $time =  $_GET['time'];

        $date =  $_GET['date'];

        $user =   $_GET['user'];

        $topic = $_GET['topic'];

        $note =   $_GET['details'];

        $query = "insert into tbl_warning_201(fan_id,topic,details,updated_by,w_date,w_time) values ('$fanId', '$topic', '$note', '$user', '$date', '$time')";
        $query2 = "update tbl_fans_201 set w_number = w_number + 1 where id = $fanId";

        $result = mysqli_query($connection, $query);
        
        if(!$result) {
        
           die("DB query failed.");
        
        }
        $result2 = mysqli_query($connection, $query2);
        if(!$result2) {
        
            die("DB query failed.");
         
         }


    ?>
	    <div class="container">

			<h1>Save Product Details</h1>

			<h2>product was saved</h2>

			

			<?php 

				//release returned data

			

			?>

	    </div>

	</body>

</html>

<?php

//close DB connection

mysqli_close($connection);

?>