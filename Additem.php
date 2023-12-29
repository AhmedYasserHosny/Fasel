<?php
require_once 'includes/init.php';

if(!isset($_SESSION['email'])){
    session_unset();
session_destroy();

header("Location: login.php");
}

?>

<header>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<script src="js/time.js"></script>
</header>

 <!---------------------------------- start upper bar--------------------------------------------------------->

 <div class="upper-bar fixed-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <i class="bi bi-telephone">&nbsp;call center 1910 </i> &nbsp; &nbsp;<i class="bi bi-envelope-dash">
            &nbsp;fasel@gmail.com</i>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-2">
          <span> <i class="bi bi-emoji-smile">&nbsp; Be happy</i>&nbsp;</span>
          <span class="welcome"> <i class="bi bi-cart2">&nbsp;Welcome</i></span>
        </div>
        <div class="col-lg-1"></div>

      </div>
    </div>
  </div>
  <!-----------------------------------------end pper bar----------------------------------------------------------->

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
            <a href="index1.php" class="nav-link">Home<i class="bi bi-house"></i></a>
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
              options
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-center" href="allitems.php"> All items </a></li>
              <li>
                <hr class="dropdown-divider ">
              </li>
              <li><a class="dropdown-item text-center" href="deleteitem.php"> Delete item</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-center" href="Updateitem.php"> Update item</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item text-center" href="Additem.php"> Add items </a></li>
             
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
<?php
    require './conf.php';
    require './function.php';
    if(count($_POST) > 0){
        $name = $_POST['name'];
         $id = $_POST['id'];
         $price = $_POST['price'];
         $number = $_POST['number'];
         $cat = $_POST['cat'];
         if(!empty($_FILES["image"]["name"])) {
          $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); }
    }
    
            //add($name, $number, $id ,$price,$cat,$imgContent);
        if(add($name, $number, $id ,$price,$cat,$imgContent))
            echo 'Item Added Successfully';
        else 
            echo 'Item Not Added';
    }
      
   
?>

<h1>Add Item</h1>
<form action="additem.php" method="post" enctype="multipart/form-data" >
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">name</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">ID</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Price</span> <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="price">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Number</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="number">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="cat">
</div>
    <!-- <label>ID       </label><input type="text" name="id"><br>
    <label>Price    </label><input type="text" name="price"><br>
    <label>Number   </label><input type="text" name="number"><br>
    <label>Category </label><input type="text" name="cat"><br> -->
    <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="image">
  <label class="input-group-text" for="inputGroupFile02">Image</label>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="submit">Add Item</button>
  </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
                