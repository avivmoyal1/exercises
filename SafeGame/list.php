<?php
    include "config.php";
    define("URL" , "http://se.shenkar.ac.il/students/2021-2022/web1/dev_201/");

    session_start();
    if(empty($_SESSION["user_id"]))
    {
        header('Location:' . URL . 'login.php');
    }

    $_SESSION['prev_page'] = 'list.php';
    $q = '"';

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

<!DOCTYPE html>
<html>
<head>
    <title>SafeGame - List</title>
    <meta charset="UTF-8">
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Mulish:wght@300;400;700&display=swap"
        rel="stylesheet">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/842cff8459.js" crossorigin="anonymous"></script>
    <!-- my-css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- my-js -->
    <script src="js/scripts.js"></script>
    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="manifest" href="images/site.webmanifest">


</head>

<body>
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

        <main>

            <div id="main-list">
                <span><a href="index.php" class="breadcrumbs"> Home page </a>>> Fans </span>
                <h1>Fans</h1>
                <span id="sub-h">Currently 16,029 fans in the stadium</span>
                
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" id="myInput" onkeyup="search()" placeholder="Search...">
                <span id="sort">Sort by:</span>
                <select>
                    <option selected> Recent warning</option>
                    <option>First Name</option>
                    <option>GPS situation</option>
                    <option>Gate</option>
                </select>
                <?php
                            if(!empty($_GET['ss'])){
                                echo "<span id='message'>".$_GET['name']." warning saved</span>";
                            }
                        ?>

                <ul id="myUL">
                    
                    <?php
                        while($row = mysqli_fetch_row($result)) {
            
                            if($row[9] != 0){
                                $query_time = "SELECT * FROM tbl_warning_201 where fan_id = " .$row[0]. " GROUP BY w_date DESC, w_time DESC LIMIT 1";
                                $result_time = mysqli_query($connection,$query_time);
                                if(!$result_time){
                                    die("DB query faild.");
                                }
                                else if($result_time){
                                    $row_time = mysqli_fetch_array($result_time);
                                    $date = $row_time["w_date"];
                                }
                            }
                            else{
                                $date = "wasn't warned";
                            }
                            
                            echo "<li>";
                            echo "<a href='object.php?id=" . $row[0] . "'><img src=" . $row[10] . "></a>";
                            echo "<div>";
                            if($row[9] < 3)
                                echo "<i class='dot-green'></i>";
                            elseif($row[9] >= 3 && $row[9] <= 5)
                                echo "<i class='dot-yellow'></i>";
                            elseif($row[9] >= 6)   
                                echo "<i class='dot-red'></i>";
                            echo "<a href='object.php?id=" . $row[0] . "'><label>" . $row[1] . " " . $row[2] . "</label></a>";
                            echo "<span class='desktop'>Last warned : ".$date."</span>"; 
                            echo "<br>";
                            echo "<section>GPS activated<i class='dot-green'></i></section>";
                            echo "<section>Fan of " . $row[3] . "</section>";
                            echo "</div>";
                            echo "<div class='invisible'>";
                            echo "<article>";
                            echo "<span><i class='fa-solid fa-location-crosshairs fa-xl'></i></span>";
                            echo "<section>Find Location</section>";
                            echo "</article>";
                            echo "<article>";
                            echo "<span><i class='fa-solid fa-video fa-xl'></i></span>";
                            echo "<section>Find On Camera</section>";
                            echo "</article>";
                            echo "<article onclick=" .$q. "addWarning('" . $row[1] . "','". $row[2] . "','" . $row[0] . "','" . $row[3] . "','" . $row[10] . "')" .$q. ">";
                            echo "<span><i class='fa-solid fa-file-circle-plus fa-xl'></i></span>";
                            echo "<section>Add Warning</section>";
                            echo "</article>";
                            echo "<article>";
                            echo "<span><i class='fa-solid fa-plane-circle-check fa-xl'></i></span>";
                            echo "<section>Find On Drone</section>";
                            echo "</article>";
                            echo "</div>";
                            echo "<section class='dropdown'>";
                            echo "<span class='fa-solid fa-ellipsis-vertical' onclick='dropMenu(`drop".$row[0]."`)'  ></span>";
                            echo "<div id='drop".$row[0]."' class='dropdown-content' >";
                            echo "<span><i class='fa-solid fa-location-crosshairs fa-xl'></i> Find Location</span>";
                            echo "<span><i class='fa-solid fa-video fa-xl'></i> Find On Camera</span>";
                            echo "<span onclick='location.href=`form.php?f_id=".$row[0]."`'><i class='fa-solid fa-file-circle-plus fa-xl'></i>Add Warning</span>";
                            echo "<span><i class='fa-solid fa-plane-circle-check fa-xl'></i>Find On Drone</span>";
                            echo "</div>";
                            echo "</section>";
                            echo "</li>";    
                         }       
                    ?>
                </ul> 
                <article class="desktop">
                    <div id="form">
                        <h3>New Warning</h3>
                        <h4>Fan's information</h4>
                        <img id="warningFanPhoto" src="">
                        <form id="form_data"  action="saveWarning.php" method="POST" >
                            <article>
                                <section>First Name</section><input type="text" value="" id="fanFirstName" name="firstName"  readonly>
                                <section>Last Name</section><input type="text" value="" id="fanLastName" name="lastName" readonly >
                                <section>ID</section><input type="number" value="" id="fanId" name="fanId"  readonly>
                                <section>Fan Of</section><input type="text" value="" id="fanOf" name="fanOf"  readonly>
                            </article>
                                <h4>Warning's Details</h4>
                                <article>
                                    <section>Created By</section><input type="text" value=<?php echo $_SESSION['name'];?> name="user" readonly>
                                     <section>Time</section><input name="time" id="toDayTime" type="time"  value="" readonly >
                                    <section>Date</section><input name="date" id="toDayDate" type="date" value="" readonly >
                                    <section>Topic</section>
                                    <select name="topic" required>
                                        <option value=""selected hidden >Select topic</option>
                                        <option value="Verbal assault towards fan" >Verbal assault towards fan</option>
                                        <option value="Verbal assault towards security guard">Verbal assault towards security guard</option>
                                        <option value="Physical violence towards fan" >Physical violence towards fan</option>
                                        <option value="Physical violence towards security guard" >Physical violence towards security guard</option>
                                        <option value="Physical violence towards player" >Physical violence towards player</option>
                                        <option value="Breakout to the pitch" >Breakout to the pitch</option>
                                        <option value="Throwing trash on the pitch" >Throwing trash on the pitch</option>
                                        <option value="Throwing a smoke greande" >Throwing a smoke greande</option>
                                        <option value="Vandalism" >Vandalism</option>
                                    </select>
                                    <section>Add Details</section>
                                    <textarea name="details" rows="8" cols="25" placeholder="Text here" ></textarea>
                                </article>
                                <section>
                                    <label><input type="checkbox" name="send-info"
                                            value="Send a summary to security manager">
                                        Send a
                                        summary to security manager</label>
                                    <label><input type="checkbox" name="send-info-sg"
                                            value="Send a summary and location to near by security guard" > Send a summary
                                        and
                                        location to near by security guard</label>
                                    <button id="button" type="submit" value="Submit" >Submit</button>
                                </section>
                        </form>
                    </div>
                </article>
            </div>
        </main>
        <footer>
            <span>&copy; All rights reserved to SafeGame</span>
        </footer>
    </div>
</body>
</html>

<?php
    mysqli_close($connection);
?>