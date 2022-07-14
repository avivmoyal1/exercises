<?php
    include "config.php";
    define("URL" , "http://se.shenkar.ac.il/students/2021-2022/web1/dev_201/");

    session_start();
    if(empty($_SESSION["user_id"]))
    {
        header('Location:' . URL . 'login.php');
    }
    
    $_SESSION['prev_page'] = 'object.php';
    $q = "'";
    $p = '"';

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }
?>

<?php
    $Fan_id = $_GET["id"];
    $query = "SELECT * FROM tbl_fans_201 where id=" .$Fan_id;
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        die("DB query faild.");
    }
    else{
        $row = mysqli_fetch_array($result);
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>SafeGame - Object</title>
    <meta charset="UTF-8">
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Mulish:wght@300;400;700&display=swap"
        rel="stylesheet">

    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/b3eb067be7.js" crossorigin="anonymous"></script>
    <!-- my-css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- my-js -->
    <script src="js/scripts.js"></script>
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="manifest" href="images/site.webmanifest">

</head>

<body onload="load_functions()">

    <div class="container">
        <header>
            <a href="index.php" id="logo"></a>
            <span id="hello"> <?php echo $_SESSION["name"] ?> </span>
            <img <?php echo "src='" .$_SESSION["img"] . "'  alt='" . $_SESSION["name"] . "' title='" . $_SESSION["name"] ."'"; ?> >

            <nav class="navbar">
                <div class="navbar-container">
                    <ul class="menu-items">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Map</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Cameras</a></li>
                        <li><a href="#">Drones</a></li>
                        <li><a href="#">Alerts</a></li>
                        <li id="selected"><a href="list.php">Fans</a></li>
                        <li><a href="#">Guards</a></li>
                        <div>
                            <li><a href="#">Settings<i class="fa-solid fa-sliders"></i> </a></li>
                            <li><a href="logout.php">Logout<i class="fa-solid fa-right-from-bracket"></i></a></li>
                        </div>
                    </ul>

                </div>
            </nav>
            <div class="mobile">
                <div class="humburger" id="hambuger_menu">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>

                <section class="menu_body" id="menubody">
                    <div class="menu_body__item_wrapper">
                        <ul class="menu_list">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Map</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Drones</a></li>
                            <li><a href="#">Alerts</a></li>
                            <li><a href="list.php">Fans</a></li>
                            <li><a href="#">Guards</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>

                </section>
            </div>
        </header>

        <main id="main-profile">
            <div>
                <span><a href="index.php" class="breadcrumbs"> Home page </a> >> <a href="list.php"
                        class="breadcrumbs"> Fans </a>>> Profile </span>

                <h1>Profile</h1>
                <h3>General</h3>
                <article class="profile-general">
                    <img <?php echo "src='".$row["img"]."' alt='" . $row["f_name"] . " " . $row["l_name"] . "' title='" . $row["f_name"] . " " . $row["l_name"] . "'";?>>
                    <section class="profile-info">
                        <span>First Name</span>  <?php echo $row["f_name"]; ?>
                        <span>Last Name</span> <?php echo $row["l_name"]; ?>
                        <span>Gender</span> <?php echo $row["gender"]; ?>
                        <span>Age</span> <?php echo $row["age"]; ?>
                        <span>ID</span> <?php echo $row["id"]; ?>
                        <span>Address</span> <?php echo $row["address"]; ?>
                        <span>Phone</span> <?php echo $row["phone"]; ?>
                        <span>Email</span> <?php echo $row["email"]; ?>
                        <span>Fan Of</span> <?php echo $row["fan_of"]; ?>
                        <span>Member Since</span> <?php echo $row["registration"]; ?>
                    </section>
                </article>
                <div class="profile-bottom">
                    <article class="profile-status">
                        <h3> Status</h3>
                        <div>
                            <span>GPS</span>Activated
                            <span>Last Profile Update</span><?php 
                     
                                $query_date = "SELECT * FROM tbl_warning_201 where fan_id=" .$Fan_id. " order by num DESC limit 1";
                                $result_date = mysqli_query($connection,$query_date);
                                if(!$result_date){
                                    die("DB query faild.");
                                }
                                else{

                                    $row_date = mysqli_fetch_array($result_date);
                                    echo $row_date['w_date'];          
                                }        
                            ?>
                            <span>Face Recognition</span> Available
                            <span>Gate</span>G5
                            <span>Risk Level</span>

                            <?php
                                if($row['w_number'] < 3)
                                echo "Low";
                                elseif($row['w_number'] >= 3 && $row[9] <= 5)
                                echo "Medium";
                                elseif($row['w_number'] >= 6)   
                                echo "High";
                            ?>

                        </div>
                    </article>
                    <article class="profile-history">
                        <h3> History</h3>
                        <section>
                            <span>Games</span> <?php echo $row["num_games"]; ?>
                            <span>Warnings</span> <?php echo $row["w_number"];  ?>
                        </section>
                        <span onclick='Lightbox.show("hii")'>Top repeated topics of warnings:</span>
                        <ul>
                            <?php
                                $query2 = "SELECT topic FROM tbl_warning_201 WHERE fan_id =" .$Fan_id. " GROUP BY topic ORDER BY count(*) DESC LIMIT 3";
                                $result2 = mysqli_query($connection,$query2);
                                if(!$result2){
                                    die("DB query faild.");
                                }
                                else{
                                   while($row2 = mysqli_fetch_array($result2))
                                   {
                                        echo "<li>" . $row2["topic"] . "</li>";
                                   }  
                                }    
                            ?>
                        </ul>
                    </article>
                </div>
            </div>
            <div class="profile-aside">
                <h3>Warnings<a href=<?php echo "form.php?f_id=".$Fan_id;?>><i class="fa-regular fa-square-plus"></i></a></h3>
                
                <?php
                        if(isset($_GET['ss']) and $_GET['ss'] == "1"){

                            echo "<section id='message'>Warning has saved</section>";
                        }
                        else if(isset($_GET['ss']) and $_GET['ss'] == "2"){

                            echo "<section id='message'>Warning has deleted</section>";
                            
                        }
                        else if(isset($_GET['ss']) and $_GET['ss'] == "3"){
                            
                            echo "<section id='message'>Warning's edition has saved</section>";
                        }
                        ?>

                <section>

                    <?php

                        $query = "SELECT w.*, f.f_name, f.l_name FROM tbl_warning_201 AS w INNER JOIN tbl_fans_201 AS f ON f.id = w.fan_id and w.fan_id =" .$Fan_id. " ORDER BY w.num DESC";
                        $result = mysqli_query($connection,$query);
                        if(!$result){
                            die("DB query faild.");
                        }
                        while($row = mysqli_fetch_array($result)){

                            $ed =  "location.href='form.php?type=edit&num=".$row['num']."&f_id=".$Fan_id."'";

                            $box = "`<h2>Notice</h2><p>This action will delete " .$row['f_name']. " " .$row['l_name']. " warning number: " .$row['num']. "<br> Are you sure you want to delete?</p><section ><button onclick=closebox(); >No</button><button onclick=location.href=\"ed_del.php?type=delete&w_num=".$row['num']."&fanId=".$Fan_id."\">Yes</button><section>`";
                            echo "<article>";
                            echo "<h4>" .$row["topic"] . "</h4>";
                            if($_SESSION["role"] == "Security Manager"){
                                echo "<section><i class='fa-solid fa-pen-to-square' onclick=".$ed.";></i><i class='fa-solid fa-trash-can'  onclick='Lightbox.show(".$box.")'></i></section>";
                            }
                            echo "<h5>Warned by " .$row["updated_by"]. " - " .$row["w_date"] . "</h5>";
                            echo "<p>" .$row["details"]. "</p>";
                            echo "</article>";
                        }
                    ?>
                </section>
            </div>
        </main>
        <footer>
            <span>&copy; All rights reserved to SafeGame</span>
        </footer>
    </div >

</body>

</html>

<?php
    mysqli_close($connection);
?>
