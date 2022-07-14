<?php
    include "config.php";
    define("URL" , "http://se.shenkar.ac.il/students/2021-2022/web1/dev_201/");

    session_start(); 
    if(isset($_SESSION["user_id"]))
    {
        header('Location:' . URL . 'index.php');
    }

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(mysqli_connect_errno()) {

        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"

        );
    }

    if(!empty($_POST["id"])){
        $log = "SELECT * FROM tbl_users_201 WHERE id ='" . $_POST["id"] . "'and password ='". $_POST["pass"]."'";

        $result = mysqli_query($connection , $log);
        $row = mysqli_fetch_row($result);
        if(is_array($row)){
            $_SESSION["user_id"] = $row[0];
            $_SESSION["name"] = $row[2];
            $_SESSION["img"] = $row[6];
            $_SESSION["role"] = $row[5];
            echo $_SESSION["user_id"];
            header('Location:' . URL . 'index.php');
        }
        else
            $errormsg = "Invalid ID or Password";
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>SafeGame - login</title>
        <!-- my-css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- google fonts -->   
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Mulish:wght@300;400;700&display=swap"
            rel="stylesheet">
        <!-- responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="manifest" href="images/site.webmanifest">
        
    </head>

    <body id="form-login">
        <div>
            <article>
                <!-- <h1 ></h1> -->
                <img src="images/logo.png" alt="logo">
                <p>We create safer games.</p>
            </article>
            <form action="#" method="POST">
                <div>
                    <label>ID</label>
                    <span><input type="text" name="id"></span>
                    <label>Password</label>
                    <span><input type="password" name="pass"></span>
                    <button type="submit">Submit</button>
                    <section><?php if(isset($errormsg)){echo $errormsg;} ?></section>
                </div>
            </form>
        </div>
    </body>
</html>

<?php
    mysqli_close($connection);
?>