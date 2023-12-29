<?php
require_once 'includes/init.php';

if(!isset($_SESSION['email'])){
    session_unset();
session_destroy();

header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Car page</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/styleCart.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="css/style.css"></head>
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

<br><br><br><br>
      
        <section class="container content-section">
          
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">IPhone13</span>
                    <img class="shop-item-image" src="img/x6.png">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary addtocart" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">IPhone12</span>
                    <img class="shop-item-image" src="img/128.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span><br><br>
                        <button class="btn btn-primary addtocart"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">nokia 3310 </span>
                    <img class="shop-item-image" src="img/c180.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary addtocart" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">telephone</span>
                    <img class="shop-item-image" src="img/lanoss.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$19.99</span>
                        <button class="btn btn-primary addtocart" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                  <span class="shop-item-title">nokia 3310</span>
                  <img class="shop-item-image" src="img/tsl.jpg">
                  <div class="shop-item-details">
                      <span class="shop-item-price">$9.99</span>
                      <button class="btn btn-primary addtocart" type="button">ADD TO CART</button>
                  </div>
              </div>
              <div class="shop-item">
                <span class="shop-item-title">nokia 3320</span>
                <img class="shop-item-image" src="img/127.jpg">
                <div class="shop-item-details">
                    <span class="shop-item-price">$9.99</span>
                    <button class="btn btn-primary addtocart" type="button">ADD TO CART</button>
                </div>
            </div>
            </div>
        </section>


        
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>

            <div class="cart-items">
            </div>
            <div class="cart-total justify-content-center">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price ">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase text-center" type="button">PURCHASE</button>
        </section>
        <br><br>
        
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
        <script src="js/cart.js"></script>
    </body>
</html>