<?php
  include "config.php";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_errno()) {

    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");

}


?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aviv Moyal CV</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;family=Roboto:wght@300;400;500;700&amp;display=swap"/>
    </noscript>
    <link href="css/font-awesome/css/all.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/mdb.min.css?ver=1.2.1" rel="stylesheet">
    <link href="css/aos.css?ver=1.2.1" rel="stylesheet">
    <link href="css/main.css?ver=1.2.1" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
<link rel="manifest" href="images/site.webmanifest">
  </head>
  <body class="bg-light" id="top">
    <header class="d-print-none">
      <div class="container text-center text-lg-left">
        <div class="pt-4 clearfix">
          <h1 class="site-title mb-0">Aviv Moyal</h1>
          <div class="site-nav"> 
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="#about" title="About"><span class="menu-title">About</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#skills" title="Skills"><span class="menu-title">Skills</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#experience" title="Experience"><span class="menu-title">Experience & Volunteer</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#education" title="Education"><span class="menu-title">Education</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#portfolio" title="Portfolio"><span class="menu-title">Portfolio</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#contact" title="Contact"><span class="menu-title">Contact</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div class="container">
<div class="resume-container">
  <div class="shadow-1-strong bg-white my-5" id="intro">
    <div class="bg-info text-white">
      <div class="cover bg-image"><img src="images/header-background.jpg"/>
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);backdrop-filter: blur(2px);">
          <div class="text-center p-5">
            <div class="avatar p-1"><img class="img-thumbnail shadow-2-strong" src="images/avatar.jpg" width="160" height="160"/></div>
            <div class="header-bio mt-3">
              <div data-aos="zoom-in" data-aos-delay="0">
                <h2 class="h1">Aviv Moyal</h2>
                <p>Software Engineering Student</p>
              </div>
              <div class="header-social mb-3 d-print-none" data-aos="zoom-in" data-aos-delay="200">
                <nav role="navigation">
                  <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/aviv-moyal-15582b222/" title="LinkedIn"><i class="fab fa-linkedin-in"></i><span class="menu-title sr-only">Twitter</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/aviv.moyal/" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/avivmoyal/" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="https://github.com/avivmoyal1/Portfolio.git" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="d-print-none"><a class="btn btn-outline-light btn-lg shadow-sm mt-1 me-3" href="files/Aviv.Moyal.CV.ENGN.pdf" data-aos="fade-right" data-aos-delay="700" Download>Download CV</a><a class="btn btn-info btn-lg shadow-sm mt-1" href="#contact" data-aos="fade-left" data-aos-delay="700">Hire Me</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="about">
    <div class="about-section">
      <div class="row">
        <div class="col-md-6">
          <h2 class="h2 fw-light mb-4">About Me</h2>
          <p>Studying software engineering in Shenkar.
            Self-starting and motivated individual. Highly adaptable and a fast
            learner. With 3 years in the hospitality industry,
            I developed a wide-ranging skill set at sales, and cultivating strong customer relationships.
          </p>
        </div>
        <div class="col-md-5 offset-lg-1">
          <div class="row mt-2">
            <h2 class="h2 fw-light mb-4">Bio</h2>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-calendar-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Age</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">28</div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Email</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">avivmoyal1@gmail.com</div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Phone</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">+972 54-7266430</div>
            </div>
            <div class="col-sm-5">
              <div class="pb-2 fw-bolder"><i class="fas fa-map-marker-alt pe-2 text-muted" style="width:24px;opacity:0.85;"></i> Address</div>
            </div>
            <div class="col-sm-7">
              <div class="pb-2">Katznelson, Givatayim, Israel</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="skills">
    <div class="skills-section">
      <h2 class="h2 fw-light mb-4">Professional Skills</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3"><span class="fw-bolder">HTML</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width: 95%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Master</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">CSS</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="200" data-aos-anchor=".skills-section" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Expert</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">JavaScript</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-info" role="progressbar" data-aos="zoom-in-right" data-aos-delay="300" data-aos-anchor=".skills-section" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">Advance</div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3"><span class="fw-bolder">C</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">Expert</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">C++</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="400" data-aos-anchor=".skills-section" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">Expert</div>
            </div>
          </div>
          <div class="mb-3"><span class="fw-bolder">Python</span>
            <div class="progress my-2 rounded" style="height: 20px">
              <div class="progress-bar bg-secondary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="500" data-aos-anchor=".skills-section" style="width: 70%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">Advance</div>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="experience">
    <div class="work-experience-section">
      <h2 class="h2 fw-light mb-4">Work Experience</h2>
      <div class="timeline">
      <?php
          $query = "SELECT * FROM portfolio_AvivMoyal ORDER BY id DESC";
          $result = mysqli_query($connection,$query);
      
          if(!$result){
              die("DB query faild.");
          }

          $d = 0;
          while($row = mysqli_fetch_row($result)) {

            if($row[1] == "Volunteered"){
              echo "<br>";
              echo "<h2 class='h2 fw-light mb-4'>" . $row[1] . "</h2>";
            }

              if($row[1] == "work" || $row[1] == "Volunteered"){
                echo "<div class='timeline-card timeline-card-info' data-aos='fade-in' data-aos-delay='".$d . "'>";
                echo "<div class='timeline-head px-4 pt-3'>";
                echo "<div class='h5'>" .$row[2]. "<span class='text-muted h6'> at " . $row[3] . "</span></div>";
                echo "</div>";
                echo " <div class='timeline-body px-4 pb-4'>";
                echo "<div class='text-muted text-small mb-3'>" . $row[7] . "</div>";
                echo "<div>" .$row[4]. "</div>";
                echo "</div>";
                echo "</div>";

                $d = $d+200;
              }
          }
      ?>
      </div>
    </div>
  </div>
  <div class="shadow-1-strong bg-white my-5 p-5" id="education">
    <div class="education-section">
      <h2 class="h2 fw-light mb-4">Education</h2>
      <div class="timeline">
        <?php
        
          $result = mysqli_query($connection,$query);
          if(!$result){
            die("DB query faild.");
          }
          $d = 0;
          while($row = mysqli_fetch_row($result)) {
            if($row[1] == "education"){
              echo "<div class='timeline-card timeline-card-success' data-aos='fade-in' data-aos-delay='".$d . "'>";
              echo "<div class='timeline-head px-4 pt-3'>";
              echo "<div class='h5'>" .$row[2]. "<span class='text-muted h6'> at " . $row[3] . "</span></div>";
              echo "</div>";
              echo " <div class='timeline-body px-4 pb-4'>";
              echo "<div class='text-muted text-small mb-3'>" . $row[7] . "</div>";
              echo "<div>" .$row[4]. "</div>";
              echo "</div>";
              echo "</div>";

              $d = $d+200;
            }
          }

        ?>
      </div>
    </div>
  </div>


  
  <div class="shadow-1-strong bg-white my-5 p-5 d-print-none" id="portfolio">
    <div class="portfolio-section">
      <h2 class="h2 fw-light mb-4">Portfolio</h2>

      <?php
      
      $query = "SELECT * FROM portfolio_AvivMoyal";
          $result = mysqli_query($connection,$query);
      
          if(!$result){
              die("DB query faild.");
          }

          $d = 0;
          while($row = mysqli_fetch_row($result)) {
            if($row[1] == "Portfolio" && $d%2 != 0 )
            {
              echo "<div class='row g-0'>";
              echo "<div class='col-md-6'><a href=" . $row[5] . " target='_blank'><img class='img-fluid' src=" . $row[6] . " width='800' height='500'/></a></div>";
              echo "<div class='col-md-6 d-flex align-items-center' data-aos='fade-left' data-aos-delay='100'>";
              echo "<div class='m-4 mt-md-2'>";
              echo "<p class='text-teal text-small'>" . $row[3] . "</p>";
              echo "<h3" . $row[2] . "</h3>";
              echo "<p class='text-muted'>" . $row[4] . "</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
            }
            if($row[1] == "Portfolio" && $d%2 == 0 )
            {
              echo "<div class='row g-0 portfolio-reverse'>";
              echo "<div class='col-md-6 d-flex align-items-center' data-aos='fade-right' data-aos-delay='100'>";
              echo "<div class='m-4 mt-md-2 text-end'>";
              echo "<p class='text-teal text-small'>" . $row[3] . "</p>";
              echo "<h3" . $row[2] . "</h3>";
              echo "<p class='text-muted'>" . $row[4] . "</p>";
              echo "</div>";
              echo "</div>";
              echo "<div class='col-md-6'><a href=".$row[5]." target='_blank'><img class='img-fluid' src=" . $row[6] . " width='800' height='500'/></a></div>";
              echo "</div>";
            }
            $d++;
            



          }
      
      ?>
     
      
      
    </div>
  </div>

  <div class="shadow-1-strong bg-white my-5 p-5" id="contact">
    <div class="contant-section">
      <h2 class="h2 fw-light text mb-4">Contact</h2>
      <div class="row mb-4">
        <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
          <div class="mt-1">
            <div class="h6"><i class="fas fa-phone pe-2 text-muted" style="width:24px;opacity:0.85;"></i> +972 54-7266430</div>
            <div class="h6"><i class="far fa-envelope pe-2 text-muted" style="width:24px;opacity:0.85;"></i> avivmoyal1@gmail.com</div>
          </div>
          <div class="mt-5 d-print-none"><form action="https://formspree.io/f/xqknopyd"
          method="POST">
        <div class="form-outline mb-4">
          <input type="text" id="name" class="form-control" name="name" required/>
          <label class="form-label" for="name">Name</label>
        </div>
        <div class="form-outline mb-4">
          <input type="email" id="email" class="form-control" required/>
          <label class="form-label" for="email">Email address</label>
        </div>
        <div class="form-outline mb-4">
          <textarea class="form-control" style="resize: none;" id="message" rows="4" name="message" required></textarea>
          <label class="form-label" for="message">Message</label>
        </div>
        <button class="btn btn-info btn-block mb-4" type="submit">Send</button>
      </form>
          </div>
        </div>
        <div class="col-md-7 d-print-none" data-aos="zoom-in" data-aos-delay="100"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.759624102722!2d34.80800081546835!3d32.07574962671583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151d4bb1265508c5%3A0xf118cec5e32f04ab!2sKatsanelson%2C%20Giv&#39;atayim!5e0!3m2!1sen!2sil!4v1655847002829!5m2!1sen!2sil" width="500" height="400" style="border:0;width:100%;" allowfullscreen="" loading="lazy"></iframe></div>
      </div>

    </div>
  </div>
</div></div>
    </div>
    <footer class="pt-4 pb-4 text-muted text-center d-print-none">
      <div class="container">
        <div class="my-3">
          <div class="h4">Aviv Moyal</div>
          <div class="footer-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/aviv-moyal-15582b222/" title="LinkedIn"><i class="fab fa-linkedin-in"></i><span class="menu-title sr-only">Twitter</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/aviv.moyal/" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/avivmoyal/" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" href="https://github.com/avivmoyal1/Portfolio.git" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="text-small">
        <div><a href="https://www.shenkar.ac.il/he/departments/engineering-software-department">תואר ראשון בהנדסת תוכנה בשנקר</a>
        </div>
        <div class="mb-1">&copy; Material Resume. All rights reserved. Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a></div>
        </div>
      </div>
    </footer>
    <script src="scripts/mdb.min.js?ver=1.2.1"></script>
    <script src="scripts/aos.js?ver=1.2.1"></script>
    <script src="scripts/main.js?ver=1.2.1"></script>
  </body>
</html>

<?php

mysqli_close($connection);

?>