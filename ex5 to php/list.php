
<?php

    include "config.php";
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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />     -->
    <!-- my-css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- my-js -->
    <script src="js/scripts.js"></script>



</head>

<body>
    <div class="container">
        <header>
            <a href="index.html" id="logo"></a>
            <span>Good evening Yael</span>
            <img src="images/yael.png" alt="Profile-photo" title="Profile-photo">
            <nav class="navbar">
                <div class="navbar-container">
                    <ul class="menu-items">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Map</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Cameras</a></li>
                        <li><a href="#">Drones</a></li>
                        <li><a href="#">Alerts</a></li>
                        <li><a href="list.html">Fans</a></li>
                        <li><a href="#">Guards</a></li>
                        <div>
                            <li><a href="#">Settings<i class="fa-solid fa-sliders"></i> </a></li>
                            <li><a href="#">Logout<i class="fa-solid fa-right-from-bracket"></i></a></li>
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
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>

                </section>
            </div>
        </header>

        <main>

            <div id="main-list">
                <span><a href="index.html" class="breadcrumbs"> Home page </a>>> Fans </span>
                <h1>Fans</h1>
                <span id="sub-h">Currently 16,029 fans in the stadium</span>
                
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" id="myInput" onkeyup="myFunction()" placeholder="Search...">
                <span id="sort">Sort by:</span>
                <select>
                    <option selected> Recent warning</option>
                    <option>First Name</option>
                    <option>GPS situation</option>
                    <option>Gate</option>
                </select>

                <ul id="myUL">
                    
                    <?php
                        while($row = mysqli_fetch_row($result)) {
                            
                            echo "<li>";
                            if($row[1] == "Yosi")
                                echo "<a href='object.html'><img src=" . $row[10] . "></a>";
                            else
                                echo "<a href='#'><img src=" . $row[10] . "></a>";
                            echo "<div>";
                            if($row[9] < 3)
                                echo "<i class='dot-green'></i>";
                            elseif($row[9] >= 3 && $row[9] <= 5)
                                echo "<i class='dot-yellow'></i>";
                            elseif($row[9] >= 6)   
                                echo "<i class='dot-red'></i>";
                            if($row[1] == "Yosi")
                                echo "<a href='object.html'>" . $row[1] . " " . $row[2] . "</a>";
                            else
                                echo "<a href='#'>" . $row[1] . " " . $row[2] . "</a>";
                            //need inner join here to set time
                            echo "<span class='desktop'>warned - 5 min ago</span>"; 
                            echo "<br>";
                            //need to add status to DB
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
                            echo "<span class='fa-solid fa-ellipsis-vertical' onclick='dropMenu('drop1')'  ></span>";
                            echo "<div id='drop1' class='dropdown-content' >";
                            echo "<span><i class='fa-solid fa-location-crosshairs fa-xl'></i> Find Location</span>";
                            echo "<span><i class='fa-solid fa-video fa-xl'></i> Find On Camera</span>";
                            echo "<span onclick='addWarningMobile()'><i class='fa-solid fa-file-circle-plus fa-xl'></i>Add Warning</span>";
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
                        <form action="saveWarning.php" method="GET">
                            <article>
                                <section>Last Name</section><input type="text" value="" id="fanLastName" name="lastName"  >
                                <section>First Name</section><input type="text" value="" id="fanFirstName" name="firstName" >
                                <section>ID</section><input type="number" value="" id="fanId" name="fanId"  >
                                <section>Fan Of</section><input type="text" value="" id="fanOf" name="fanOf"  >

                            </article>
                                <h4>Warning's Details</h4>
                                <article>
                                    <section>Created By</section><input type="text" value="Yael" name="user" readonly>
                                     <section>Time</section><input name="time" id="toDayTime" type="time"  value="" readonly>
                                    <section>Date</section><input name="date" id="toDayDate" type="date" value="" readonly>
                                    <section>Topic</section>
                                    <select name="topic" required>
                                        <option value=""selected hidden>Select topic</option>
                                        <option value="Verbal assault towards fan">Verbal assault towards fan</option>
                                        <option value="Verbal assault towards security guard">Verbal assault towards security guard</option>
                                        <option value="Physical violence towards fan">Physical violence towards fan</option>
                                        <option value="Physical violence towards security guard">Physical violence towards security guard</option>
                                        <option value="Physical violence towards player">Physical violence towards player</option>
                                        <option value="Breakout to the pitch">Breakout to the pitch</option>
                                        <option value="Throwing trash on the pitch">Throwing trash on the pitch</option>
                                        <option value="Throwing a smoke greande">Throwing a smoke greande</option>
                                        <option value="Vandalism">Vandalism</option>
                                    </select>
                                    <section>Add Details</section>
                                    <textarea name="details" rows="8" cols="25" placeholder="Text here"></textarea>
                                </article>
                                <section>
                         
                                    <label><input type="checkbox" name="send-info"
                                            value="Send a summary to security manager">
                                        Send a
                                        summary to security manager</label>
                                    <label><input type="checkbox" name="send-info"
                                            value="Send a summary and location to near by security guard"> Send a summary
                                        and
                                        location to near by security guard</label>
                                    <button id="button" type="submit" value="Submit">Submit</button>
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
    <script>


    </script>
</body>

</html>

<?php

//close DB connection

mysqli_close($connection);

?>