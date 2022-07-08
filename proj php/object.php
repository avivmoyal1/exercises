<?php
    include "config.php";
    define("URL" , "http://localhost:8080/proj%20php/");

    session_start();
    if(empty($_SESSION['user_id']))
    {
        header('Location:' . URL . 'login.php');
        exit;
    }

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
        // $row = mysqli_fetch_row($result);
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

</head>

<body>
    <div class="container">
        <header>
            <a href="index.php" id="logo"></a>
            <span>Good evening <?php echo $_SESSION["name"] ?> </span>
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Map</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Drones</a></li>
                            <li><a href="#">Alerts</a></li>
                            <li><a href="list.html">Fans</a></li>
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
                            <span>Last Profile Update</span>26/12/21 - 5 min ago
                            <span>Face Recognition</span> Available
                            <span>Gate</span>G5
                            <span>Risk Level</span>
                            <?php
                                
                                // $query = "SELECT * FROM tbl_fans_201 where id=" .$Fan_id;
                                // $result = mysqli_query($connection,$query);
                                // if(!$result){
                                //     die("DB query faild.");
                                // }
                                // else{
                                //     $row = mysqli_fetch_array($result);
                                if($row['w_number'] < 3)
                                echo "Low";
                                elseif($row['w_number'] >= 3 && $row[9] <= 5)
                                echo "Medium";
                                elseif($row['w_number'] >= 6)   
                                echo "High";
                                    // }

                            
                            
                            ?>
                        </div>
                    </article>
                    <article class="profile-history">
                        <h3> History</h3>
                        <section>
                            <span>Games</span>39
                            <span>Warnings</span> <?php echo $row["w_number"];  ?>
                        </section>
                        <span>Top repeated topics of warnings:</span>
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
                            <!-- <li>Physical violence against rival team's fan</li>
                            <li>Vandalism</li>
                            <li>Throwing a smoke grenade</li> -->
                        </ul>
                    </article>
                </div>

            </div>

            <div class="profile-aside">
                <h3>Recent Warnings<i class="fa-regular fa-square-plus"></i></h3>

            <?php

                $query = "SELECT * FROM tbl_warning_201 where fan_id=" .$Fan_id;
                $result = mysqli_query($connection,$query);
                if(!$result){
                    die("DB query faild.");
                }

                while($row = mysqli_fetch_array($result)){

                    echo "<article>";
                    echo "<h4>" .$row["topic"] . "</h4>";
                    if($_SESSION["role"] == "Security Manager"){
                        echo "<section><i class='fa-solid fa-pen-to-square'></i><i class='fa-solid fa-trash-can'></i></section>";
                    }
                    echo "<h5>Warned by " .$row["updated_by"]. " - " .$row["w_date"] . "</h5>";
                    echo "<p>" .$row["details"]. "</p>";
                    echo "</article>";
                }
            ?>


         

<!--                
                <article>
                    <h4>Physical violence against rival team's fan</h4>
                    <section><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></section>
                    <h5>Warned by Noah - 30/9/21</h5>
                    <p>Fan insulted riva's fan through the gate, crossed the gate and began punching him. </p>
                </article>
                <article>
                    <h4>Breakout to the pitch</h4>
                    <section><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></section>
                    <h5>Warned by Kobi - 15/01/21</h5>
                    <p>Fan managed to cross the block and ran into the pitch.</p>
                </article>
                <article>
                    <h4>Vandalism</h4>
                    <section><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></section>
                    <h5>Warned by Eliezer - 12/11/20</h5>
                    <p>Fan burned seats down and threw them away.</p>
                </article>
                <article>
                    <h4>Throwing a smoke grenade</h4>
                    <section><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></section>
                    <h5>Warned by Mor - 09/10/20</h5>
                    <p>Fan snitched into the gate a smoke grenade and lit it at the begging of the match. </p>
                </article>
                <article>
                    <h4>Throwing trash on the pitch</h4>
                    <section><i class="fa-solid fa-pen-to-square"></i><i class="fa-solid fa-trash-can"></i></section>
                    <h5>Warned by Mor - 02/10/20</h5>
                    <p>Fan was warned twice without a formal warning to stop throwing his trash on the pitch, but kept
                        throwing. </p>
                </article> -->


            </div>
        </main>
        <footer>
            <span>&copy; All rights reserved to SafeGame</span>
        </footer>
    </div>
    <script>


    </script>
</body>

</html>

<?php

//close DB connection

mysqli_close($connection);

?>