
<?php

include "config.php";
define("URL" , "http://localhost:8080/proj%20php/");
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()) {

    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"

    );



}
?>

<?php

            session_start(); 
      

            if(isset($_SESSION["user_id"]))
            {
                header('Location:' . URL . 'index.php');
            }
        
            if(!empty($_POST["id"])){
                $log = "SELECT * FROM tbl_users_201 WHERE id ='" . $_POST["id"] . "'and password ='". $_POST["pass"]."'";
                //echo $log;
            
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
                    $errormsg = "Invalid id or password";
            }


        ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>php Login</title>
    </head>
    <body>
    <form action="#" method="post">
        <label>use id:</label> 
        <input type="text" name="id" value="">
        <label>Password:</label> 
        <input type="text" name="pass" value="">
        
        <input type="submit" value="Submit form">
        <div class="error"><?php if(isset($errormsg)){echo $errormsg;} ?></div>
    </form>
    <body>
</html>


<?php

//close DB connection

mysqli_close($connection);




?>