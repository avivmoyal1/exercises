<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/scripts.js"></script>
    </head>

    <body>
        <div class="container">

            <section>
            
                <?php
                    $username = $_GET["fullname"];
                    $password = $_GET["pass"];
                    $age = $_GET["age"];
                    if ($username == "Aviv" && $password == "123456") {
                        echo "<h2> Welcome back ". $username ."</h2><br><h2>Your age has been updated to: " . $age . "</h2>";
                    } else {
                        echo "<h2>Hello ".$username.", You'r not in the data base</h2>
                        <div class='btn-box'>
                        <a href='login.html'><button type='button' >Log-in</button></a>
                        <a href='index.html'><button type='button'>Sign-up</button></a>
                    </div>";
                    }

                ?>

            </section>
        </div>
    </body>

</html>