<?php
   define("URL" , "http://se.shenkar.ac.il/students/2021-2022/web1/dev_201/");
    session_start(); 
    unset($_SESSION["user_id"]);
    session_destroy();
    header('Location:' . URL . 'login.php');

?>
