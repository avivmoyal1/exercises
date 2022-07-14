<?php 
	include "config.php";
    define("URL" , "http://se.shenkar.ac.il/students/2021-2022/web1/dev_201/");

    session_start();
    if(empty($_SESSION["user_id"]))
    {
        header('Location:' . URL . 'login.php');
    }

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }
?> 

<?php
        if(!empty($_POST['fanId'])){
            $fname = $_POST['firstName'];

            $fanId = $_POST['fanId'];

            $time =  $_POST['time'];
        
            $date =  $_POST['date'];
        
            $user =   $_POST['user'];
        
            $topic = $_POST['topic'];
        
            $note =   $_POST['details'];
        
            $query_in = "insert into tbl_warning_201(fan_id,topic,details,updated_by,w_date,w_time) values ('$fanId', '$topic', '$note', '$user', '$date', '$time')";
            $query_up = "update tbl_fans_201 set w_number = w_number + 1 where id = $fanId";
        
            $resul_in = mysqli_query($connection, $query_in);
            
            if(!$resul_in) {
            die("DB query failed.");
            }

            $result_up = mysqli_query($connection, $query_up);
            if(!$result_up) {
                die("DB query failed.");
            }

            $u_id = $_SESSION['user_id'];

            if(!empty($_POST["send-info-sg"])){
                $query_task = "INSERT INTO tbl_tasks_201(topic,fan_id,sent_from,sent_to,game_id) values ('$topic', '$fanId', '$u_id', '351', '4196')";
                $result_task = mysqli_query($connection,$query_task);
                if(!$result_task) {
                    die("DB query failed.");
                }
            }
      
            header('Location:' . URL . $_SESSION["prev_page"] .'?ss=1&name=' . $fname . '&id='.$fanId );
        }
    ?>

<?php
    mysqli_close($connection);
?>