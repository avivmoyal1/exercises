
<?php

include "config.php";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()) {

    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");

}
?>

<?php

$query = "SELECT * FROM tbl_fans_201";
$result = mysqli_query($connection,$query);

if(!$result){
    die("DB query faild.");
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"> 

        <title>some page 1</title>
    </head>
    
    <body>

    <?php
       while($row = mysqli_fetch_row($result)) {//returns standard array of results. keys are ints
            $q ='"';
        //output data from each row

            echo "<section><h2>";

            var_dump($row);

            echo "</h2></section>";
       
            echo "<h1>" .$q. "</h1>";
        }

       
    ?>
    </body>

</html>