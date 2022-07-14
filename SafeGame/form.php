<?php
    include "config.php";
    define("URL" , "http://se.shenkar.ac.il/students/2021-2022/web1/dev_201/");
    session_start();
    if(empty($_SESSION["user_id"]))
    {
        header('Location:' . URL . 'login.php');
    }
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(mysqli_connect_errno()) {
        die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
        );
    }

    $Fan_id = $_GET["f_id"];
    if(isset($_GET['type']))
    {
        $num = $_GET['num'];
        $query_up = "SELECT * FROM tbl_warning_201 where num=" .$num;
        $result_up = mysqli_query($connection,$query_up);
        if(!$result_up){
            die("DB query faild.");
        }
        else{
            $row_up = mysqli_fetch_array($result_up);
        }
    }
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
    <title>SafeGame form</title>
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
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    <!--Font Awesome-->
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
            <?php
                if(isset($_GET['type'])){
                    echo "<form action='ed_del.php' method='GET'>";
                }
                else{
                    echo "<form action='saveWarning.php' method='POST'>";
                }
                ?>
            <div id="form-info">
                <span class="desktop"><a href="index.php" class="breadcrumbs"> Home page </a> >> <a href="list.php"
                        class="breadcrumbs"> Fans </a>>> <a href="object.php?id=<?php echo $Fan_id;?>" class="breadcrumbs">Profile</a>>> Warning Form </span>
                
                <?php
                    if(isset($_GET['type']))
                    { 
                        echo "<h1>Edit Warning</h1>";
                    }
                    else{

                        echo "<h1>New Warning</h1>";
                    }
                ?>
                
                <h3>Fan's information <?php $_SESSION["prev_page"];?></h3>
                <img <?php echo "src='".$row["img"]."' alt='" . $row["f_name"] . " " . $row["l_name"] . "' title='" . $row["f_name"] . " " . $row["l_name"] . "'";?>>
                <article class="form-fan-info">
                    <section>First Name</section><input type="text" value="<?php echo $row["f_name"]; ?>" id="fanFirstName" name="firstName"  readonly>
                    <section>Last Name</section><input type="text" value="<?php echo $row["l_name"]; ?>" id="fanLastName" name="lastName" readonly >
                    <section>Age</section><input type="text" value="<?php echo $row["age"]; ?>" readonly>
                    <section>ID</section><input type="number" value="<?php echo $row["id"]; ?>" id="fanId" name="fanId"  readonly> 
                    <section>Phone</section><input type="text" value="<?php echo $row["phone"]; ?>" readonly>
                    <section>Fan Of</section><input type="text" value="<?php echo $row["fan_of"]; ?>" id="fanOf" name="fanOf"  readonly>
                </article>
            
                
                <h3>Warning's Details</h3>
                <article class="form-details">
                    <section>Created By</section><input type="text" value="<?php echo $_SESSION['name'];?>" name="user" readonly>
                    <section>Time</section><input name="time" id="toDayTimeMobile" type="time"  value="<?php echo date("H:i",strtotime('1 hour')); ?>" readonly>
                    <section>Date</section><input name="date" id="toDayDateMobile" type="date" value="<?php echo date("Y-m-d");?>" readonly>
                    <section>Topic</section>
                    <select name="topic" required>
                        <?php
                            if(isset($_GET['type']))
                            { 
                                echo "<option value='".$row_up['topic']."' selected hidden >".$row_up['topic']."</option>";
                            }
                            else{

                                echo "<option value='' selected hidden >Select topic</option>";
                            }
                        ?>
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
                        <?php

                            if(isset($_GET['type']))
                            { 
                               
                                echo "<input name='type' value='edit' style='display:none'>";
                                echo "<input name='w_num' value=".$num." style='display:none'>";
                                echo "<textarea name='details' rows='8' cols='25' placeholder='' >".$row_up['details']."</textarea>";
                            }
                            else{
                                
                                echo "<textarea name='details' rows='8' cols='25' placeholder='Text here' ></textarea>";
                            }
                            "<input name='next' value='".$_SESSION['prev_page']."' style='display:none'>";
                        ?>                        
                </article>
                <section class="form-checkboxes">
                    <label><input type="checkbox" name="send-info" value="Send a summary to security manager">Send a summary to security manager</label>
                    <label><input type="checkbox" name="send-info-sg" value="Send a summary and location to near by security guard" > Send a summary and location to near by security guard</label>
                    <button id="button" type="submit" value="Submit">Submit</button>
                                
                </section>
                </form>
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