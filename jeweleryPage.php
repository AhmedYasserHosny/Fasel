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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/styleCart.css">

    <title>Jewelery</title>
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



    <br>
    <br>
    <br>
  <br>
  <h1 class="title animate__animated animate__bounce animate__delay-0.5s animate__infinite	infinite danger"> Coming soon !!! </h1>
  <BR></BR> <br>
  <div class="container-fluid">
    <div class="row"></div></div> 
        <br>
    
    <div class="shop-item">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
    <script src="js/jewelery.js"></script>
    
</body>
</html>