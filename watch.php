<?php
require_once 'includes/init.php';

if(!isset($_SESSION['email'])){
    session_unset();
session_destroy();

header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="css/style watch.css">
</head>

<body>

  <!---------------------------------------- start nav bar---------------------------------------------------------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <!-- motion with page scrol-->
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <span> F</span><span>asel</span> <span>.com</span></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ms-auto">


          <li class="nav-item margins">
            <a href="index.php" class="nav-link">Home<i class="bi bi-house"></i></a>
          </li>

          <li class="nav-item margins">
            <a href="" class="nav-link">About us </a>
          </li>

          <li class="nav-item margins">
            <a href="" class="nav-link">Services </a>
          </li>

<!-- 
          <li class="nav-item margins">
            <a href="team.html" class="nav-link">Team</a>
          </li> -->


          <!-- <li class="nav-item dropdown margins">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Profile <i class="bi bi-file-person-fill"></i> </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="login/liginForm.php">Login<i class="bi bi-door-open"></i></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="sginupall/sginup.html">sginup</a></li>
            </ul>
          </li> -->
          <li class="nav-item dropdown margins">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-center" href="carPage.php"> CAR </a></li>
              <li>
                <hr class="dropdown-divider ">
              </li>
              <li><a class="dropdown-item text-center" href="phonePage.php"> PHONE</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-center" href="electronicPage.php"> ELECTRON</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-center" href="menFashion.php"> MAN FASHION </a></li>
              <li>
                <hr class="dropdown-divider ">
              </li>
              <li><a class="dropdown-item text-center" href="women's clothing.php"> WOMAN FASHION </a></li>
              <li>
                <hr class="dropdown-divider ">
              </li> <li><a class="dropdown-item text-center" href="jeweleryPage.php">  JEWELERY  </a></li>
              <li>
                <hr class="dropdown-divider ">
              </li>
              <li>
                <hr class="dropdown-divider ">
              </li> <li><a class="dropdown-item text-center" href="watch.php">  WATCHS  </a></li>
              <li>
                <hr class="dropdown-divider ">
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown margins">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Brands
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-center" href="Casio.php"> Casio </a></li>
              <li>
                <hr class="dropdown-divider ">
              </li>
              <li><a class="dropdown-item text-center" href="Rolex.php"> Rolex</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-center" href="Hugo.php"> Hugo Boss</a></li>
              <hr class="dropdown-divider ">
              <li><a class="dropdown-item text-center" href="Rado.php"> Rado</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
            </ul>
          </li>

          <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $_SESSION['email'] ?> <i class="fas fa-user fa-fw">
                        
                    </i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </ul>
      </div>
    </div>
  </nav>

  <!------------------------------------------------ end nav bar----------------------------------------------->




  <div id="carouselExampleIndicators" class="carousel slide text-center background" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <!--CASIO-->
    <div class="carousel-inner xyz">
      <div class="carousel-item active img-1">
        <img src="img/SamCasio.jpeg" class="img-fluid w-50 "
          alt="Casio Watch banner">
      </div>
    <!--HugoBoss-->
      <div class="carousel-item img-2">
        <img src="img/SamRado2.jpeg" class="img-fluid w-50 " alt="...">
      </div>
    <!--Rolex-->
      <div class="carousel-item img-3">
        <img src="img/rolex-watch-banner.jpg" class="img-fluid w-50 " alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  <!--------------------------------------- #start sale bar ----------------------------------------------------
  <section class="card -oh _fw -rad4">
    <header class="row _no-g -fw-nw -j-bet -i-ctr -phm -mh-48px" style="color:#FFFFFF;background:#08526d;">
      <div class="cola -df -i-ctr -oh col5">

        <h2 class="-m -fs20 -elli text-center ">Flash Sales - عروض قوية كل يوم</h2>
      </div>
      <div class="col-lg-12 text-center">
        الوقت المتبقي:
        <time class="text-center" datetime="2021-11-19T23:59:59+02:00" data-cd="">07ساعه : 50دقيقه : 06ثانية</time> --
        
      </div>
      <p id="demo"></p>

    </header>
  </section>
  -------------------------------------- #start sale bar ----------------------------------------------------->

  <!---------------------------------------#Brands Select----------------------------------------------------------->
  <br>
  <h1 class="title"> OUR BRANDS </h1>
  <BR></BR> <br>
  <div class="container-fluid">
    <div class="row"></div></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 phone">
        <a href="Casio.php"> <img src="img/Casio logo.png" alt="Casio Logo"></a>
        <br>
        <h3> Casio </h3>
      </div>


      <div class="col-lg-1"></div>
      <div class="col-lg-5 car">
       <a href="Hugo.php"> <img src="img/hugobosslogo.jpg" alt="Hugo Boss Logo"></a>
        <br>
        <h3> Hugo Boss </h3>
      </div>
      <div class="col-lg-1"></div>

    </div>
  </div>
  <br>
  <br>
  <BR></BR> <br>
  <div class="container-fluid">
    <div class="row"></div></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 phone">
        <a href="Rolex.php"> <img src="img/rolex.png" alt="rolex"></a>
        <br>
        <h3> Rolex </h3>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5 car">
        <a href="Rado.php"> <img src="img/RadoLogo2.jpg" alt="rado"></a>
        <br>
        <h3> Rado </h3>
      </div>
      <div class="col-lg-1"></div>

    </div>

    </div>
  </div>
  <br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="js/time.js"></script>
</body>

</html>