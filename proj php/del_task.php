<?php 

	include "config.php";
    define("URL" , "http://localhost:8080/proj%20php/");
    session_start();
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {

        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"

        );

    }

?> 

<?php

    if(isset($_GET['tasks_num'])){
        $list = $_GET['tasks_num'];
        foreach($list as $number){
            
            $query = "DELETE FROM tbl_tasks_201 where t_id =" .$number;
            $result = mysqli_query($connection,$query);
            if(!$result)
            {
                die("DB query failed.");
                
            }
        }
        
    }
    header('Location:' . URL . 'index.php');
    
?>