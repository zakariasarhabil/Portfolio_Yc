
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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar elegant-color-dark">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="index.php">

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
                        <a class="nav-link" href="index.php">Accueil
              <span class="sr-only">(current)</span>
            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#propos">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
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
    <!-- Navbar -->
<!--/ Intro Single End /-->

<!--/ Property Single Star /-->
<?php
    
    $s = $_GET['projet'];


    require "dashbord/database.php";


$db = Database::connect();
$sql = "SELECT *  FROM projets WHERE id = $s";
$stmt = $db->query($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
Database::disconnect();
    // $c = "nomprojet";
    // $m = 'description';

    ?>

    <?php foreach ($rows as $row) : ?>


<!-- Card -->
<div class="card card-cascade wider reverse">

  <!-- Card image -->
  <div class="view view-cascade overlay">
    <img class="card-img-top" src="dashbord/img/<?= $row['imgprojet'] ?>"
    alt="'<?= $row['nomprojet'] ?>'">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong> <?= $row['nomprojet'] ?></strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2"> <?= $row['techno'] ?></h6>
    <!-- Text -->
    <p class="card-text"> <?= $row['description'] ?>
    </p>

    <!-- Linkedin -->
    <a href=" <?= $row['git'] ?>" class="px-2 fa-lg li-ic"><i class="fab fa-github"></i></a>
    <!-- Twitter -->
    
    <!-- Dribbble -->
    

  </div>

</div>
<!-- Card -->












<?php endforeach; ?>

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

</body>
   
      
<!--/ Property Single End /-->
