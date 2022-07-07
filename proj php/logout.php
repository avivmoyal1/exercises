<?php


    define("URL" , "http://localhost:8080/ex5%20to%20php/");
    session_start(); 
    unset($_SESSION["user_id"]);
    session_destroy();
    header('Location:' . URL . 'login.php');

?>
