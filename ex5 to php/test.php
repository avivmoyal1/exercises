
<?php

include "config.pjp";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_errno()) {

    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"

    );

}
?>

<?php

$query = "SELECT * FROM tbl_fans_201";
$result = mysqli_query($connection,$query);

if(!$result){
    die("DB query faild.");
}

?>
<
