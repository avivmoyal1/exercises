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

    $type = $_GET['type'];
    $w_num = $_GET['w_num'];
    $f_id = $_GET['fanId'];

    if($type == "delete")
    {
        $query1 = "DELETE FROM tbl_warning_201 where num = " .$w_num;
        $result1 = mysqli_query($connection,$query1);
        if(!$result1){
            die("DB query faild.");
        }
        $query_down = "UPDATE tbl_fans_201 set w_number = w_number - 1 where id =". $f_id;
        $result2 = mysqli_query($connection,$query_down);
        if(!$result2){
            die("DB query faild.");
        }
        header('Location:' . URL . 'object.php?ss=2&id=' .$f_id);

    }
    else if($type == "edit"){

        $details = $_GET['details'];
        $topic = $_GET['topic'];

        $query2 = "UPDATE tbl_warning_201 set details ='" .$details. "', topic ='" .$topic. "' where num =" .$w_num;
        echo "<script>alert('$query2');</script>";
        $result2 = mysqli_query($connection,$query2);
        if(!$result2){
            die("DB query faild.");
        }
        header('Location:' . URL . 'object.php?ss=3&id=' .$f_id);
    }
    
?>

<?php
    mysqli_close($connection);
?>