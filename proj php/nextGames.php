<?php
    include "config.php";
    define("URL" , "http://localhost:8080/proj%20php/");

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
    <title>SafeGame Home-Page</title>
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
    <!-- my-css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- my-js -->
    

</head>

<body>
    <div class="container">
        <header>
            <a href="index.php" id="logo"></a>
            <span id="hello"><?php echo $_SESSION["name"] ?> </span>
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
                        <li><a href="list.php">Fans</a></li>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Map</a></li>
                            <li><a href="#">Messages</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Drones</a></li>
                            <li><a href="#">Alerts</a></li>
                            <li><a href="list.php">Fans</a></li>
                            <li><a href="#">Guards</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Logout</a></li>
                        </ul>
                    </div>

                </section>
            </div>
        </header>

        <main>
            <div id="future-games">
                <span><a href="index.php" class="breadcrumbs"> Home page </a> >> Next games </span>
                <h1>Future Games</h1>
                <article>
                    <img id="test" src="">
                    <img src="images/hapbs.png">
                    <section>
                        <span>19/12/21 - 19:00</span>
                        <div>
                            <section>Maccabi Tel Aviv</section>
                            <section>Hapoel Beer Sheva</section>
                        </div>
                        <span>Stadium status:</span>
                        <section>Security level is<span class="red"> High</span></section>
                    </section>
                </article>
                <article>
                    <img src="images/macnet.png">
                    <img src="images/hap.png">
                    <section>
                        <span>19/12/21 -  22:00</span>
                        <div>
                            <section>Maccabi Netanya</section>
                            <section>Hapoel Tel Aviv</section>
                        </div>
                        <span>Stadium status:</span>
                        <section>Security level is<span class="green"> Low</span></section>
                    </section>
                </article>
                <article>
                    <img src="images/haphif.png">
                    <img src="images/mchif.png">
                    <section>
                        <span>20/12/21-  21:30</span>
                        <div>
                            <section>Hapoel Haifa </section>
                            <section>Maccabi Haifa</section>
                        </div>
                        <span>Stadium status:</span>
                        <section>Security level is<span class="orange"> Medium</span></section>
                    </section>
                </article>
                <article>
                    <img src="images/hap.png">
                    <img src="images/btr.png">
                    <section>
                        <span>26/12/21 - 21:30</span>
                        <div class="desktop">
                            <section>Hapoel Tel Aviv</section>
                            <section>Beitar Jerusalem</section>
                        </div>
                        <span>Stadium status:</span>
                        <section>Security level is<span class="gray"> undefined</span></section>
                    </section>
                </article>
                <article>
                    <img src="images/hapbs.png">
                    <img src="images/macpt.png">
                    <section>
                        <span>27/12/21 - 20:05</span>
                        <div>
                            <section>Hapoel Beer Sheva </section>
                            <section>Maccabi Petah Tikva</section>
                        </div>
                        <span>Stadium status:</span>
                        <section>Security level is<span class="gray"> undefined</span></section>
                    </section>
                </article>
                <article>
                    <img src="images/hapbni.png">
                    <img src="images/mctlv.png">
                    <section>
                        <span>01/01/22 - 19:45</span>
                        <div>
                            <section>Hapoel Bnei Sakhnin</section>
                            <section>Maccabi Tel Aviv</section>
                        </div>
                        <span>Stadium status:</span>
                        <section>Security level is<span class="gray"> undefined</span></section>
                    </section>
                </article>
                <article>
                    <img src="images/btr.png">
                    <img src="images/hap.png">
                    <section>
                        <span>02/01/21 - 19:00</span>
                        <div>
                            <section>Maccabi Tel Aviv</section>
                            <section>Hapoel Beer Sheva</section>
                        </div>
                        <span>Stadium status:</span>
                        <section>Security level is<span class="gray"> undefined</span></section>
                    </section>
                </article>
            </div>

        </main>
        <footer>
            <span>&copy; All rights reserved to SafeGame</span>
        </footer>
    </div>
    

        <script src="js/scripts.js"></script>
 
</body>

</html>