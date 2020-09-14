
 <?php
require "dashbord/database.php";


$db = Database::connect();
$sql = "SELECT * FROM `projets` ORDER BY id  DESC LIMIT 4";
$stmt = $db->query($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
Database::disconnect();

?> 










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- css style -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="#">

                <img id="logo" src="images/logo.png">
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil
              <span class="sr-only">(current)</span>
            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#propos">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">

                    <li class="nav-item">
                        <a href="https://www.linkedin.com/in/khalil-bouras-3976791a8/" class="nav-link" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/barron-KH" class="nav-link border border-light rounded" target="_blank">
                            <i class="fab fa-github mr-2"></i>GitHub
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->

    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('images/bg.jpg">

        <!-- Mask & flexbox options-->
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
                <h1 class="mb-4">
                    <strong>Learn Bootstrap 4 with MDB</strong>
                </h1>

                <p>
                    <strong>Best & free guide of responsive web design</strong>
                </p>

                <p class="mb-4 d-none d-md-block">
                    <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video and written
            versions available.
            Create your own, stunning website.</strong>
                </p>

                <a target="_blank" href="pdf/cv.pdf" class="btn btn-outline-white btn-lg">Telecharger Mon CV
          <i class="fas fa-graduation-cap ml-2"></i>
        </a>
            </div>
            <!-- Content -->

        </div>
        <!-- Mask & flexbox options-->

    </div>
    <!-- Full Page Intro -->

    <!--Main layout-->
    <main>
        <div class="container">
            <!--Section: Main info-->
            <section class="mt-5 wow fadeIn" id="propos">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4 mt-1">

                        <img src="images/profiles.png" id="profile" class="img-fluid z-depth-1-half" alt="">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4 mt-5">

                        <!-- Main heading -->
                        <h3 class="h2 mb-3">À propos</h3>
                        <p><strong>Développeur</strong> FreeLance FrontEnd



                            <hr>

                            <p>
                                Profitez de l'éditeur de conception Web ultime. Divi est comme Photoshop ou Sketch pour le Web. Il apporte une interface de conception avancée à WordPress dont les débutants et les experts tomberont amoureux. C'est incroyablement intelligent, super flexible,
                                incroyablement puissant et visuel par nature. C'est ainsi que la conception pour le Web est censée être faite.

                            </p>



                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>





            <section id="service">

                <h2 class="my-5 h2 text-center">Services</h2>

                <!--First row-->
                <div class="row features-small mt-5 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-xl-4 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <img src="images/front.png" id="icon-front">
                            </div>
                            <div class="col-10 mb-2 pl-3">
                                <h5 class="feature-title text-center font-weight-bold mb-1">Front-End</h5>
                                <p class="grey-text mt-2 text-center">Chrome, Firefox, IE, Safari, Opera, Microsoft Edge - MDB loves all browsers; all browsers love MDB.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-4 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <img src="images/back.png" id="icon-back">
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title text-center font-weight-bold mb-1">Back-end</h5>
                                <p class="grey-text mt-2 text-center">MDB becomes better every month. We love the project and enhance as much as possible.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-4 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <img src="images/design.png" id="icon-design">
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-weight-bold text-center mb-1">Design</h5>
                                <p class="grey-text mt-2 text-center">Our society grows day by day. Visit our forum and check how it is to be a part of our family.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->



                </div>
                <!--/First row-->


                <!--/Second row-->

            </section>



            <section class="mt-5">
                <p class="text-center h5 mb-2">HTML</p>

                <div class="progress md-progress" style="height:20px">
                    <div class="progress-bar elegant-color-dark" role="progressbar" style="width: 50%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
                <p class="text-center h5 mb-2">CSS</p>

                <div class="progress md-progress" style="height: 20px">
                    <div class="progress-bar elegant-color-dark" role="progressbar" style="width: 25%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <p class="text-center h5 mb-2">JAVASCRIPT</p>

                <div class="progress md-progress" style="height: 20px">
                    <div class="progress-bar elegant-color-dark" role="progressbar" style="width: 25%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <p class="text-center h5 mb-2">PHP</p>

                <div class="progress md-progress" style="height: 20px">
                    <div class="progress-bar elegant-color-dark" role="progressbar" style="width: 25%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
                <p class="text-center h5 mb-2">SQL</p>

                <div class="progress md-progress" style="height: 20px">
                    <div class="progress-bar elegant-color-dark" role="progressbar" style="width: 25%; height: 20px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                </div>
            </section>
        </div>
        <section class="mt-5 portfolio pb-5" id="portfolio">
            <p class="text-center h2 pt-5 mb-3">Portfolio</p>
            <div class="container">
                <div class="row">
                <?php foreach ($rows as $row) : ?>
                    <div class="col-xl-3 col-lg-6 mt-3">
                        <!-- Card Narrower -->
                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <form action="show.php" method="GET">
                            <div class="view view-cascade overlay">
                                <img class="card-img-top" src="dashbord/img/<?= $row['imgprojet'] ?>" alt="'<?= $row['nomprojet'] ?>'">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <h5 class="text-primary pb-2 pt-1"><i class="fas fa-utensils"></i> <?= $row['techno'] ?></h5>
                                <!-- Title -->
                                <h4  class="font-weight-bold card-title"> <?= $row['nomprojet'] ?></h4>

                                <input type="hidden" name="projet" value="<?= $row['id'] ?>">
                                <!-- Text -->
                                <p  class="card-text"> <?php $spt = $row['description'];
                                                            echo (substr($spt, 0,100));
                                                             echo " " ,"...";?></p>
                                <!-- Button -->

                                
                                    <button type="submit" class="btn btn-outline-primary waves-effect"><i class="fab fa-github pr-2" aria-hidden="true"></i>Show More</button>

                                

                            </div>
                            </form>



                        </div>
                    </div>
                    <?php endforeach; ?>
                  
                </div>
            </div>
        </section>
        <div class="container">

            <!--Section: Contact v.2-->
            <section class="mb-4 mt-5" id="contact">

                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>

                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="sendmail.php" method="POST">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="name" name="object" class="form-control">
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input  type="text" id="email" name="useremail" class="form-control">
                                        <label for="inputEmail" class="">Your email</label>
                                    </div>
                                </div>
                                <!--Grid column-->
                               

                            </div>
                            <!--Grid row-->

                            <!--Grid row-->
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="subject" name="object" class="form-control">
                                        <label for="object" class="">Subject</label>
                                    </div>
                                </div>
                            </div> -->
                            <!--Grid row-->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12">

                                    <div class="md-form">
                                        <textarea type="text" id="message" name="Message" rows="2" class="form-control md-textarea"></textarea>
                                        <label for="Message">Your message</label>
                                    </div>

                                </div>
                            </div>
                            <!--Grid row-->

                            <div class="text-center text-md-left">
                                <button class="btn btn-primary" type="submit" name="submit">

                                    Send
                                </button>
                            </div>
                        </form>

                        <div class="status"></div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                <p>San Francisco, CA 94126, USA</p>
                            </li>

                            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                <p>+ 01 234 567 89</p>
                            </li>

                            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                <p>contact@mdbootstrap.com</p>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                </div>

            </section>
            <!--Section: Contact v.2-->
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">

        <!--Call to action-->
        <div class="pt-4">

            <a class="btn btn-outline-white" href="pdf/cv.pdf" target="_blank" role="button">Telecharger mon CV
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">


            <a href="https://www.linkedin.com/in/khalil-bouras-3976791a8/" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>

            <a href="https://github.com/barron-KH" target="_blank">
                <i class="fab fa-github mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2020 Copyright: Khalil
            
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->







    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>