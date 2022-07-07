<?php
    include "config.php";
    define("URL" , "http://localhost:8080/ex5%20to%20php/");

    session_start();
    if(empty($_SESSION['user_id']))
    {
        header('Location:' . URL . 'login.php');
        exit;
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>SafeGame</title>
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
        <script src="https://kit.fontawesome.com/842cff8459.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="all.css">
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
                        <li id="selected"><a href="index.php">Home</a></li>
                        <li ><a href="#">Map</a></li>
                        <li><a href="#">Messages</a></li>
                        <li><a href="#">Cameras</a></li>
                        <li><a href="#">Drones</a></li>
                        <li><a href="#">Alerts</a></li>
                        <li><a href="list.php">Fans</a></li>
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
                            <li ><a href="index.php">Home</a></li>
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

        <main class="main-home-page">
            <article id="homepage-atr-1">
                <div class="mobile">
                    <button type="button" src="#"><i class="fa-solid fa-qrcode"></i>Scan ticket</button>
                    <button type="button" src="#"><i class="fa-solid fa-comments"></i>Messages</button>
                    <button type="button" src="#"><i class="fa-solid fa-file-circle-plus"></i>Add warning</button>
                    <button type="button" src="#"><i class="fa-solid fa-bell"></i> Alerts</button>
                </div>
                <h3>Currently Playing:</h3>
                <div>
                    <img src="images/hap.png" title="team1" alt="team1">
                    <img src="images/btr.png" title="team2" alt="team2">
                </div>
                <section>Hapoel Tel Aviv &emsp;&emsp; Beitar Jerusalem</section>
                <section>Security level: Medium</section>

                <h3>Statistics</h3>

                <h4 class="desktop">Hapoel Tel Aviv fan's</h4>
                <p class="desktop">Last game were 9842 fans, 1321 fans warned (13.42% of the fans).</p>
                <h4 class="desktop">Beitar Jerusalem fan's</h4>
                <p class="desktop">Last game were 8245 fans, 1458 fans warned (17.68% of the fans).<br>
                In 8 of the 10 previous games smoke grenades were thrown to the pitch.</p>
                <div>
                    <h4>Fan Risk</h4>
                    <section><i class=dot-green></i>Green Low level 10%</section>
                    <section><i class="dot-yellow"></i>Yellow Medium level 35%</section>
                    <section><i class="dot-red"></i>Red High level 55%</section>
                </div>
                <a href="nextGames.php" class="desktop"><button>Next Games <i class="fa-solid fa-angles-right"></i></button></a>
                <div class="mobile">
                    <h3>Tasks</h3>
                    <label><input type="checkbox"> Vandalism occures in gate A2.</label>
                    <label><input type="checkbox"> Throwing a smoke grenade in gate A2.</label>
                    <label><input type="checkbox"> You are required to warn Yosi Levi and prevent his violence.</label>
                    <label><input type="checkbox"> Change position to gate A3. </label>
                    <label><input type="checkbox"> Support Yaniv Faingold at gate A1.</label>
                </div>

            </article>

            <article class="desktop">

                <div id="homepage-mid-1">
                    <span>Messages</span>
                    <section>
                        <img src="images/work1.jpg" alt="user" title="user">
                        <span>Olivia <span> 10:31 PM</span></span>
                        <p>Leaving my spot to the restroom, is that ok?</p>
                    </section>
                    <section>
                        <img src="images/work2.jpg" alt="user" title="user">
                        <span>Guy <span> 10:22PM</span></span>
                        <p>Check my gate - I think it needs more force due to the amount of warnings I've given. </p>
                    </section>
                    <section>
                        <img src="images/work3.jpg" alt="user" title="user">
                        <span>Nahum <span> 10:19PM</span></span>
                        <p>Hi Yael, can you please change my position?</p>
                    </section>
                    <section>
                        <img src="images/work4.jpg" alt="user" title="user">
                        <span>Gadi <span> 10:12PM</span></span>
                        <p>Yael, pay attention that I can't warn them all in the same time, do help..</p>
                    </section>
                    <section>
                        <img src="images/work4.jpg" alt="user" title="user">
                        <span>Gadi <span> 10:11PM</span></span>
                        <p>My phone stopped scanning their bracelets, what should I do?</p>
                    </section>
                    <section>
                        <img src="images/work4.jpg" alt="user" title="user">
                        <span>Gadi <span> 10:01PM</span></span>
                        <p> Two minutes to the restroom,ok?</p>
                    </section>
                    <section>
                        <img src="images/work4.jpg" alt="user" title="user">
                        <span>Gadi <span> 09:55PM</span></span>
                        <p>When is my shift over? I have to go to the restroom.</p>
                    </section>
                </div>
                <div id="homepage-mid-2">

                    <h3> Security guard</h3>
                    <section>Total guards: 50</section>
                    <section>Active guards: 35</section>
                    <section>Available guards: 27</section>
                    <section>In assignment: 8</section>

                </div>
       
            </article>


            <article class="desktop" id="homepage-art-2">
                <span>Alerts</span>
                <section>
                    <span><i class="fa-solid fa-triangle-exclamation"></i>Warning message <span>10:59</span></span>
                    <p> A big group of high risk fans gathered next to bench!</p>
                </section>
                <section>
                    <span><i class="fa-solid fa-triangle-exclamation"></i>Warning message <span>10:43</span></span>
                    <p> A fan from gate A1 tried to break into the pitch, event prevented, watch closely.</p>
                </section>
                <section>
                    <span><i class="fa-solid fa-circle-info"></i></i>Info message <span>10:31</span></span>
                    <p> Pay attention, gate A5 recived 96 warnings in the last 10 minutes.</p>
                </section>
                <section>
                    <span><i class="fa-solid fa-circle-info"></i></i>Info message <span>10:28</span></span>
                    <p> Two vandalism events occured in two different gates.</p>
                </section>
                <section>
                    <span><i class="fa-solid fa-triangle-exclamation"></i>Warning message <span>10:11</span></span>
                    <p> Fans in gate D3 are throwing trash on the field, hitting the goalkeeper.</p>
                </section>
                <section>
                    <span><i class="fa-solid fa-triangle-exclamation"></i>Warning message <span>10:08</span></span>
                    <p> Violence event has started in gate C2.</p>
                </section>
                <section>
                    <span><i class="fa-solid fa-circle-info"></i>Info message <span>10:05</span></span>
                    <p>Gate B4's hidden security guard may need quick backup, look up. </p>
                </section>
                <section>
                    <span><i class="fa-solid fa-triangle-exclamation"></i>Warning message <span>09:59PM</span></span>
                    <p>Two 'Beitar Jerusalem' fans tried to snitch smoke grenades through the gate.</p>
                </section>
            </article>

        </main>
        <footer>
            <span>&copy; All rights reserved to SafeGame</span>
        </footer>
    </div>
    <script>


    </script>
</body>

</html>


